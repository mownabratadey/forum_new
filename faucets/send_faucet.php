<?php
session_start();
if($_SERVER['HTTP_REFERER'] == "https://freeperfectmoney.com/faucets/bitcoin-faucet.php" || $_SERVER['HTTP_REFERER'] == "https://freeperfectmoney.com/faucets/ethereum-faucet.php" || $_SERVER['HTTP_REFERER'] == "https://freeperfectmoney.com/faucets/dogecoin-faucet.php" || $_SERVER['HTTP_REFERER'] == "https://freeperfectmoney.com/faucets/tron-faucet.php"){
    
}else{
    echo json_encode([
        "success" => 0,
        "msg" => "Failed to validate Recaptcha!"
    ]);
    die();
}
include_once "lib/recaptchalib.php";
$response = $_REQUEST['response'];
$post = http_build_query(
    array (
        'response' => $response,
        'secret' => secret_key,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    )
);
$opts = array('http' => 
    array (
        'method' => 'POST',
        'header' => 'application/x-www-form-urlencoded',
        'content' => $post
    )
);
$context = stream_context_create($opts);
$serverResponse = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
// if (!$serverResponse) {
//     echo json_encode([
//         "success" => 0,
//         "msg" => "Failed to validate Recaptcha!"
//     ]);
//     die();
// }
// $result = json_decode($serverResponse);
// if (!$result -> success) {
//     echo json_encode([
//         "success" => 0,
//         "msg" => "Failed to validate Recaptcha!"
//     ]);
//     die();
// }

if(!isset($_REQUEST['captcha']) && !isset($_REQUEST['user_input'])){
  echo json_encode([
    "success" => 0,
    "msg" => "Please Enter Captcha!"
  ]);
  die();
}

if($_REQUEST['captcha'] != $_REQUEST['user_input']){
  echo json_encode([
    "success" => 0,
    "msg" => "Wrong Captcha!"
  ]);
  die();
}
include"connection.php";
$coin = trim($_REQUEST['coin']);
$waiting_time = 24*3600;
if($coin == "dogecoin"){
    $satoshi = rand(30000, 69999);
    // $satoshi = rand(5000, 6000);
    $amount = (float)($satoshi);
    $ref_satoshi = rand(100, 1000);
    $ref_amount = (float)($ref_satoshi);
    $api_currency = "DOGE";
    $waiting_time = 900;
    $waiting_min_text = "15 Minutes";
}

if($coin == "bitcoin"){
    $satoshi = 1;
    $amount = (float)($satoshi);
    $ref_satoshi = 0;
    $ref_amount = (float)($ref_satoshi);
    $api_currency = "BTC";
    $waiting_time = 3600;
    $waiting_min_text = "60 Minutes";
    // echo json_encode([
    //     "success" => 0,
    //     "msg" => "Error!"
    // ]);
    // die();
    
}
if($coin == "ethereum"){
    $satoshi = rand(1, 2);
    // $satoshi = rand(10, 15);
    $amount = (float)($satoshi);
    $ref_satoshi = rand(1, 2);
    $ref_amount = (float)($ref_satoshi);
    $api_currency = "ETH";
    $waiting_time = 900;
    $waiting_min_text = "15 Minutes";
}
if($coin == "tron"){
    $satoshi = rand(50000, 119999);
    // $satoshi = rand(1000, 5000);
    $amount = (float)($satoshi);
    $ref_satoshi = rand(100, 1000);
    $ref_amount = (float)($ref_satoshi);
    $api_currency = "TRX";
    $waiting_time = 900;
    $waiting_min_text = "15 Minutes";
}


if(isset($_SESSION[$coin.'_address_id'])){
  $faucet_id=$_SESSION[$coin.'_address_id'];


  /* new */

  $sql= "select * from faucets where id=$faucet_id and type='$coin' order by id desc limit 1";
  $res = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($res);
  $address = $row['address'];
  $ref_address = $row['ref_address'];
  mysqli_free_result($res);

  $url = "api_key=fafc27a279e36d074fc0f04dfcc6a9360e255712&address=".$address;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,"https://faucetpay.io/api/v1/checkaddress");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $server_output = curl_exec($ch);
  curl_close ($ch);
  $server_output  = json_decode($server_output,true);
  if(isset($server_output['payout_user_hash'])){
    
    /* previous condition */
    $payout_user_hash = trim($server_output['payout_user_hash']);


    /* check limit per day */
    $today = date("Y-m-d");
    $sql= "select * from faucet_transactions where tranaction_id = '$payout_user_hash' and date(date_time) = '$today'";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) > 10){
      mysqli_free_result($res);
      echo json_encode([
        "success" => 0,
        "msg" => "You reached the limit for today! Try our 10 Min Faucet/PTC/Survey/Shorten Link to earn more!"
        
      ]);
      mysqli_close($conn);
      die();
    }
    $sql= "select * from faucet_transactions where tranaction_id = '$payout_user_hash' and coin = '$coin' and date(date_time) = '$today'";
    $res = mysqli_query($conn, $sql);
    if($coin == "bitcoin" && mysqli_num_rows($res) >= 3){
        echo json_encode([
          "success" => 0,
          "msg" => "You have Reached Bitcoin faucet limit for today! Try other crypto faucets!"
          
        ]);
        mysqli_close($conn);
        die();
    }
    if($coin == "ethereum" && mysqli_num_rows($res) >= 1){
        echo json_encode([
          "success" => 0,
          "msg" => "You have Reached Ethereum faucet limit for today! Try other crypto faucets!"
          
        ]);
        mysqli_close($conn);
        die();
    }
        
    mysqli_free_result($res);
    $sql= "select * from faucet_transactions where tranaction_id = '$payout_user_hash' and coin = '$coin' order by id desc limit 1";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) != 0){
        
      $row = mysqli_fetch_array($res);
      $timestamp = $row['date_time'];
      $time = date('Y-m-d g:i', strtotime($timestamp));
      $todaytime = date('Y-m-d g:i');
      mysqli_free_result($res);
      $left = abs(strtotime($todaytime) - strtotime($time));
      if($left < $waiting_time){
        echo json_encode([
          "success" => 0,
          "msg" => "You almost did it! Wait for ".$waiting_min_text." or Register to earn more!"
          
        ]);
        mysqli_close($conn);
        die();
      }else{

        $sql= "select * from faucets where id=$faucet_id and type='$coin' order by id desc limit 1";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($res);
        $address = $row['address'];
        $ref_address = $row['ref_address'];
        mysqli_free_result($res);
       
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://faucetpay.io/api/v1/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "api_key=fafc27a279e36d074fc0f04dfcc6a9360e255712&to=".$address."&amount=".$amount."&currency=".$api_currency);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        curl_close ($ch);

        $server_output  = json_decode($server_output,true);
        if($server_output['status'] == 200){
          $hash = $server_output['payout_user_hash'];
          $todaytime = date('Y-m-d g:i'); 
          $query2="insert into faucet_transactions values(null,$faucet_id,'$amount','$hash',0,'$todaytime','$coin')";
          $res=mysqli_query($conn,$query2);


          /* ref commission */
          if($ref_address != "" && $ref_address != null && $coin != "bitcoin"){
            
            // $ch = curl_init();
            // curl_setopt($ch, CURLOPT_URL,"https://faucetpay.io/api/v1/send");
            // curl_setopt($ch, CURLOPT_POST, 1);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, "api_key=fafc27a279e36d074fc0f04dfcc6a9360e255712&to=".$ref_address."&amount=".$ref_amount."&currency=".$api_currency."&referral=true");
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // $server_output = curl_exec($ch);
            // curl_close ($ch);
          }
          

          mysqli_close($conn); 
          echo json_encode([
            "success" => 1,
            "msg" => $amount." Satoshi was sent to your address! Try Our 10 Min Faucet/PTC/Survey/Shorten Link to earn more!",
          ]);
        }else{
          mysqli_close($conn); 
          echo json_encode([
            "success" => 0,
            "msg" => "There is a problem with your Address! Register to earn more",
          ]);
        }
        
      }

    }else{
      
      $sql= "select * from faucets where id=$faucet_id and type='$coin' order by id desc limit 1";
      $res = mysqli_query($conn, $sql);
      if(mysqli_num_rows($res) == 0){
          session_destroy();
          mysqli_free_result($res);
          mysqli_close($conn); 
          echo json_encode([
              "success" => 0,
              "msg" => "Please Login again!"
          ]);
          die();
      }
      $row = mysqli_fetch_array($res);
      $address = $row['address'];
      $ref_address = $row['ref_address'];
      mysqli_free_result($res);
      
      // return $amount;
     
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,"https://faucetpay.io/api/v1/send");
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, "api_key=fafc27a279e36d074fc0f04dfcc6a9360e255712&to=".$address."&amount=".$amount."&currency=".$api_currency);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $server_output = curl_exec($ch);
      curl_close ($ch);

      // echo json_encode($server_output);

      $server_output  = json_decode($server_output,true);
      if($server_output['status'] == 200){
        $hash = $server_output['payout_user_hash'];
        $todaytime = date('Y-m-d g:i'); 
        $query2="insert into faucet_transactions values(null,$faucet_id,'$amount','$hash',0,'$todaytime','$coin')";
        $res=mysqli_query($conn,$query2);



        /* ref commission */
        if($ref_address != "" && $ref_address != null && $coin != "bitcoin"){
        //   $ch = curl_init();
        //   curl_setopt($ch, CURLOPT_URL,"https://faucetpay.io/api/v1/send");
        //   curl_setopt($ch, CURLOPT_POST, 1);
        //   curl_setopt($ch, CURLOPT_POSTFIELDS, "api_key=fafc27a279e36d074fc0f04dfcc6a9360e255712&to=".$ref_address."&amount=".$ref_amount."&currency=".$api_currency."&referral=true");
        //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //   $server_output = curl_exec($ch);
        //   curl_close ($ch);
        }

        mysqli_close($conn); 
        echo json_encode([
          "success" => 1,
          "msg" => $amount." Satoshi was sent to your address! Try Our 10 Min Faucet/PTC/Survey/Shorten Link to earn more",
        ]);
        die();
      }else{
        mysqli_close($conn); 
        echo json_encode([
          "success" => 0,
          "msg" => "There is a problem with your Address! Register to earn more",
        ]);
        die();
      }
      
      mysqli_close($conn);
      die();


    }

    /* previous end */


  }else{
    mysqli_close($conn); 
    echo json_encode([
      "success" => 0,
      "msg" => "There is a problem with your Address! Register to earn more",
    ]);
    die();
  }




  

  
  

}else{
  echo json_encode([
    "success" => 0,
    "msg" => "You must login to earn!"
  ]);
  die();
}


?>