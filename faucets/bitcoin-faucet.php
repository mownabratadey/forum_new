<?php  
session_start();
if(isset($_REQUEST['ref'])){
    $_SESSION['bitcoin_ref'] = $_REQUEST['ref'];
}
$title = "Free Bitcoin Claim | Freeperfectmoney";
$captcha = rand(10000, 90000);
$content = "width=1024";
define("site_key", "6LdsY_YcAAAAAPFHFrm1OSAWPCpJt8mlCrs1UIYh");
include_once "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>FreePerfectMoney - Bitcoin Faucet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="57x57" href="favicon.ico">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
  <meta name="theme-color" content="#ffffff">
  <meta name="yandex-verification" content="aa5b45e28d63ebc2" />
  <meta name="msvalidate.01" content="3D9A22077EDF64291D59E1BE993FAA68" />
  <meta property="og:title" content="Freeperfectmoney"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://www.freeperfectmoney.com"/>
  <meta property="og:description" content="Game Perfect Money, Bitcoin,ETH,LTC,DOGE, supported. Win 200% Instant Automatic Payout Free Crypto Faucet" />
  <meta name="description" content="Game Perfect Money, Bitcoin,ETH, LTC, DOGE, supported. Win 200% Instant Automatic Payout Free Crypto Faucet">
  <meta name="keywords" content="earn bitcoin, perfect money game, head tail game, ethereum free, dogecoin free, crypto earn, free money, pm game, crypto faucet, betting, free faucet, bitcoin faucet, dogecoin faucet, ethereum faucet, tron faucet, free pm, free perfect money, ptc, paid to click, ad click earn, survey, earning forum, perfect money in pakistan, perfect money in india, perfect money madagascar, perfectmoney.com, faucetpay">
  <meta name="language" content="english">
  <meta name="robots" content="index, follow">
  <meta name="googlebot" content="index, follow">
  <meta name="msnbot" content="index, follow">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script data-ad-client="ca-pub-8364850769430422" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   <script src='confetti.min.js'></script>

   <style>
  .alert-box{
    background-color: #FFFFAD;
    color: #38c9fd;;
    font-size: 14px;
    font-weight: 600;
    /*text-align: center;*/
    padding: 5px;
    margin: 10px;
    border-radius: 0px;
    letter-spacing: .01562em;
    line-height: 150%;
  }
  h4{
    color: blue;
    font-size: 15px;
    font-weight: bold;
    margin: 20px; 
  }
  .free_play_first_digit{
    border: 1px solid #000;
    padding: 10px;
    border-radius: 5px;
    /*margin: 1px;*/
    font-size: 1.35em;
    background-color: #000;
    color: #ff0;
    font-weight: bold;
  }
  th,td{
    font-weight: bold;
  }
  span{
    color: blue;
  }
  .right_attr{
    color: red;
    font-size: 10px;
  }
      
  
  ?>
</style>
</head>
<body>

<div class="container">

  <div class="row content" style="background-color:#b3eafe;">
    <div align="center" class="col-sm-3" style="background-color:#b3eafe;">
        <div id="vanish">
            <a href="/">
                <h4 style="font-weight: 600;">
                <span style="color: #4285F4">Free</span><span style="color: #DB4437">Perfect</span><span style="color: #F4B400">Money</span><span style="color: #0F9D58">.com</span>
                </h4>
            </a>
            
            
        
        </div>
    </div>
    <div align="center" class="col-sm-3" style="background-color:#b3eafe; padding-top:10px">
        <div id="vanish">
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="kqYspU2a"></script>
            <div class="fb-like" data-href="https://freeperfectmoney.com" data-width="320" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
            
            
            
        
        </div>
    </div>
    <div align="center" class="col-sm-3" style="background-color:#b3eafe;">
        <div id="google_translate_element"></div>

        <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>
    
    <div align="center" class="col-sm-3" style="background-color:#b3eafe;">
        <center>
            <h6 class="blinking" style="text-align:center; color:green"><img style="width:20px" src="https://icons.iconarchive.com/icons/aha-soft/3d-social/256/Online-writing-icon.png"> Online - <?php echo rand(47,68) ?></h6> 
        </center>
       
    </div>
    
    
    
  </div>
  <h4 style="color:red; text-align: center;">ONLY FAUCET WITHOUT AD</h4>
  <h4 style="color:red; text-align: center;">Just launched on 23th August, 2022</h4>
  <div class="row">

    <div class="col-sm-12" style="background-color: #fff; border-radius: 5px;">
      <center><img class="img-responsive" src="fp.png"></center>
      
      <h1 style="text-align: center; color: #943737;"><b>
        Claim Free BITCOIN (₿)
        
      </b></h1>
      <center>
          <div class="fb-like" data-href="https://freeperfectmoney.com//?ref=<?php  echo $_SESSION['user']; ?>" data-width="" data-layout="standard" data-action="like" data-size="large" data-share="true"></div>
      </center>
      <div class="alert-box">
       No Registration needed. You only need FaucetPay Wallet Address
     </div>
      <div class="alert-box">
       Our Bitcoin Faucet requires a FaucetPay Account to claim. <a href="https://faucetpay.io/?r=2292973">#Click Here to Register</a> 
     </div>
      <div class="alert-box">
       Claim up to 0.01 Bitcoin <span>Every 60 Mins</span> <a href="javascript:void(0);" class="right_attr"> #BE ACTIVE</a>
      </div>
      <div class="alert-box">
       Refer your friends to earn<span> 50% of THEIR FREE MONEY EARNING</span> <a href="javascript:void(0);" class="right_attr"> #REFER</a>
      </div>

      <?php
      if(isset($_SESSION['bitcoin_address_id'])){
      $address_id=$_SESSION['bitcoin_address_id'];

      $sql= "select * from faucet_transactions where faucet_id=$address_id order by id desc limit 1";
      $res = mysqli_query($conn, $sql);
      if(mysqli_num_rows($res) != 0){


        $row = mysqli_fetch_array($res);

        $timestamp = $row['date_time'];
        $time = date('Y-m-d g:i', strtotime($timestamp));
        $todaytime = date('Y-m-d g:i');

        $left = strtotime($todaytime) - strtotime($time);
        if($left > 3600 || $left < 0){
          $msg = "You can Roll for Free Coin!";
        }else{
          $msg = "Next Roll Waiting Time - ".((3600- (int)$left)/60)." Minutes";
        }
      // $msg = $left;
        
      }
      mysqli_free_result($res);

      ?>
      <h5 style="text-align: center; font-weight: bold;">
          <input id="captcha" type="text" value="<?php echo $captcha; ?>" style="width:100px" disabled>
        </h5>
      <h5 style="text-align: center; font-weight: bold;"><input id="user_input" type="text" placeholder="Enter Captcha" style="width:200px"></h5>
      <div style="text-align: center; font-weight: bold;"><span id="timer"><?php echo $msg; ?></span></div>
      <h1 style="text-align: center;">
        <center><div class="g-recaptcha" data-sitekey="<? echo site_key; ?>"></div></center>
      <button id="roll" class="btn btn-primary" style="margin-top: 0px; width: 70px">ROLL</button>
      </h1>
      <?php
      }else{

      ?>

      <h5 style="text-align: center; font-weight: bold;">
          <input class="form-control" id="address" type="text" placeholder="Enter Faucetpay Bitcoin Address" autocomplete="off">
        </h5>
        <center><div class="g-recaptcha" data-sitekey="<? echo site_key; ?>"></div>
      <button id="login_button" class="btn btn-primary" style="width: 70px">LOGIN</button>
      </center>
      <?php
      }
      ?>
      <h4 style="text-align: center; font-weight: bold;">BEST OF LUCK</h4>

      <h3 style="text-align: center; color: #943737; font-size:15px;"><b>
          STEPS to Register at FAUCETPAY
        </b></h3>
        <div class="alert-box">
         First Go to <a href="https://faucetpay.io/?r=2292973"> This Link </a>and Register
       </div>
       <div class="alert-box">
         Login using yout username and Password
       </div>
       <div class="alert-box">
         Then go to Crypto Deposit Address <a href="https://faucetpay.io/page/user-admin/deposit">Click Here</a> 
       </div>
       <div class="alert-box">
         Copy the Bitcoin Address and Login Here using the address to receive fund.
       </div>
       <div class="alert-box">
         That's All. So Simple
       </div>
       <input class="form-control" style="background-color: #51b734; color:#fff;" type="text" id="url" class="span12" value="https://freeperfectmoney.com/faucets/bitcoin-faucet.php?ref=<?php  echo $_SESSION['bitcoin_address_id']; ?>" readonly />
        
        <button style="width: 300px; text-align: center; font-weight: bold" class="btn- btn-primary" onclick="Copy();">COPY REFERRAL LINK</button>
        <label style="color:red;">[Share this Link on social media and Earn 50% of every referral free earning]</label><br>
    </div>
    <!-- <div class="col-sm-6" style="background-color: #fff; border-radius: 5px;">
      <h3><span class="glyphicon glyphicon-plus"></span>Last 20 Transactions</h3>
      <div class="table-responsive content">  
      <?php
      $q3="select * from faucet_transactions join faucets ON faucet_transactions.faucet_id=faucets.id order by faucet_transactions.id desc limit 20";
      $r3=mysqli_query($conn,$q3);
      ?>
      <table class='table table-bordered' style='font-size:12px'><tr class='danger'><th>Coin</th><th>Amount</th><th>Faucetpay ID</th><th>Dated</th></tr>
      <?php
      if(mysqli_num_rows($r3)>0)
      { 
      while($row3=mysqli_fetch_array($r3))
      {
                          
        ?>
        
        <tr><td><?php echo strtoupper($row3['type']);?></td><td><?php echo $row3['amount'];?> Satoshi </td><td><?php echo $row3['tranaction_id'];?></td><td><?php echo $row3['date_time']; ?></td></tr>
        <?php
      }
        
      }
      ?>
        </table>
        <?php 
      mysqli_free_result($r3);
      ?>
    </div> -->
  </div>
  <hr>
  <div class="row" style="color:red; text-align: center;">

    <div class="col-sm-12">
      <a style="color: green; font-weight: bold;" href="https://freeperfectmoney.com/"><h3>GO TO FREEPERFECTONEY MAIN EARNING FORUM</h3></a>
      <h4>Earn $0.02 Per Discussion and $0.01 Per Reply ($1 payout)</h4>
    </div>
  </div>
</div>
</div>


  <script>
    toastr.options.fadeOut = 10000;
    $(function(){

      //   toastr["error"]("Most of users are not posting feedback! Please give feedback after payout!")
      $("#roll").on('click', function(){
        if (grecaptcha === undefined) {
          alert('Recaptcha not defined'); 
          return; 
        }

        var response = grecaptcha.getResponse();

        if (!response) {
          alert('Coud not get recaptcha response'); 
          return; 
        }
        var captcha = $('#captcha').val();
        var user_input = $('#user_input').val();
        var request = $.ajax({
          url: "send_faucet.php?captcha="+captcha+"&user_input="+user_input+"&coin=bitcoin&response="+response,
          type: "GET",
          data: {},
          dataType: "json"
        });

        request.done(function(res) {
          // console.log(res.n1)
          if(res.success == 1){
            toastr["success"](res.msg)
            $("#roll").text(res.msg)
            $("#roll").css({'background-color':'green'})
            confetti.start();
            setTimeout(function(){confetti.stop();},500);
            setTimeout(location.reload.bind(location), 5000);
          }else{
              toastr["error"](res.msg)
          }
          
        });

        request.fail(function(jqXHR, textStatus) {
          alert( "Request failed: " + textStatus );
        });
      })



      $("#login_button").on('click', function(){
        if (grecaptcha === undefined) {
          alert('Recaptcha not defined'); 
          return; 
        }

        var response = grecaptcha.getResponse();

        if (!response) {
          alert('Coud not get recaptcha response'); 
          return; 
        }
        var address = $('#address').val();
        var request = $.ajax({
          url: "crypto_login.php?address="+address+"&coin=bitcoin&response="+response,
          type: "GET",
          data: {},
          dataType: "json"
        });

        request.done(function(res) {
          console.log(res)
          if(res.success == 1){
            toastr["success"]("Login Successful!")
            confetti.start();
            setTimeout(function(){confetti.stop();},500);
            setTimeout(location.reload.bind(location), 2000);
          }else{
              toastr["error"]("Wrong Bitcoin Address! DO NOT ENTER ANY OTHER ADDRESS!")
          }
          
        });

        request.fail(function(jqXHR, textStatus) {
          toastr["error"](textStatus+jqXHR)
        });
      })


    })


    

  </script>
  
  <script>
    function Copy() {
    var Url = document.getElementById("url");
    Url.innerHTML = window.location.href;
    console.log(Url.innerHTML)
    Url.select();
    document.execCommand("copy");
    alert("Referral Link Copied!")
  }
  </script>

</body>
</html>