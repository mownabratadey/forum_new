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
$address = trim($_REQUEST['address']);
$address_letter = strtoupper(substr($address, 0, 1));
$coin = trim($_REQUEST['coin']);
if($coin == ""){
    echo json_encode([
    "success" => 0,
    "msg" => "Please reload the page! Try again",
  ]);
  die();
}

function checkEmail($email) {
    $find1 = strpos($email, '@');
    $find2 = strpos($email, '.');
    return ($find1 !== false && $find2 !== false && $find2 > $find1);
}
if ( checkEmail($address) ) {
    echo json_encode([
    "success" => 0,
    "msg" => "Please enter Crypto Address only! Not Email ID",
  ]);
  die();
}

$ref_address = "";
$ref_id = "";
if($coin == "dogecoin"){
    $currency = "DOGE";
    if($address_letter != "D"){
        echo json_encode([
            "success" => 0,
            "msg" => "This is not a Dogecoin address"
        ]);
    die();
    }
    if(isset($_SESSION['doge_ref'])){
        $ref_id = $_SESSION['doge_ref'];
    }
  
}elseif($coin == "bitcoin"){
    if($address_letter == "D" || $address_letter == "M" || $address_letter == "B" || $address_letter == "X" || $address_letter == "0" || $address_letter == "T"){
        echo json_encode([
            "success" => 0,
            "msg" => "This is not a Bitcoin address"
        ]);
    die();
    }
    if(isset($_SESSION['bitcoin_ref'])){
        $ref_id = $_SESSION['bitcoin_ref'];
    }
    $currency = "BTC";
}elseif($coin == "ethereum"){
    if($address_letter != "0"){
        echo json_encode([
            "success" => 0,
            "msg" => "This is not a Ethereum address"
        ]);
    die();
    }
    if(isset($_SESSION['ethereum_ref'])){
        $ref_id = $_SESSION['ethereum_ref'];
    }
    $currency = "ETH";
}elseif($coin == "tron"){
    if($address_letter != "T"){
        echo json_encode([
            "success" => 0,
            "msg" => "This is not a Tron address"
        ]);
    die();
    }
    if(isset($_SESSION['tron_ref'])){
        $ref_id = $_SESSION['tron_ref'];
    }
    $currency = "TRX";
}

include"connection.php";


$url = "api_key=fafc27a279e36d074fc0f04dfcc6a9360e255712&address=".$address."&currency=".$currency;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://faucetpay.io/api/v1/checkaddress");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close ($ch);

// echo json_encode($server_output);
// die();

$server_output  = json_decode($server_output,true);
if(isset($server_output['payout_user_hash'])){
    
    /* check for ip today with other accout */
    $ip = $_SERVER['REMOTE_ADDR'];
    $user_hash = $server_output['payout_user_hash'];
    $today = date('Y-m-d');
    $q="select * from faucet_ips where user_hash != '$user_hash' and date='$today' and ip_address = '$ip'";
    $r=mysqli_query($conn,$q);
    if(mysqli_num_rows($r) > 0){
        mysqli_free_result($r);
        echo json_encode([
            "success" => 0,
            "msg" => "You try logged in with multiple accounts!"
        ]);
        die();
    }
    mysqli_free_result($r);
    $query2="insert into faucet_ips values(null,'$user_hash','$ip','$today')";
    $res=mysqli_query($conn,$query2);
  
    $q="select * from faucets where address='$address' and type='$coin'";
    $r=mysqli_query($conn,$q);
    if(mysqli_num_rows($r) > 0){
      $row=mysqli_fetch_array($r);
      $id=$row['id'];
      mysqli_free_result($r);
      $_SESSION[$coin.'_address_id'] = $id;
      echo json_encode([
        "success" => 1
      ]);
      die();
    
    }
    mysqli_free_result($r);
        
    
  if($ref_id != ""){
    $q="select * from faucets where id=$ref_id";
    $r=mysqli_query($conn,$q);
    $row=mysqli_fetch_array($r);
    $ref_address = $row['address'];
    mysqli_free_result($r);
  }

  $query2="insert into faucets values(null,'$coin','$address','$ref_address')";
  $res=mysqli_query($conn,$query2);

  $q="select * from faucets where address='$address'";
  $r=mysqli_query($conn,$q);
  $row=mysqli_fetch_array($r);
  $id=$row[0];
  mysqli_free_result($r);

  $_SESSION[$coin.'_address_id'] = $id;
  echo json_encode([
    "success" => 1
  ]);
  die();
}else{
  echo json_encode([
    "success" => 0,
    "msg" => "Address does not match any faucetpay address!"
  ]);
  die();
}

