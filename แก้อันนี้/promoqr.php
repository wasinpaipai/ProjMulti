<!DOCTYPE html>
<html>
<head>
  <title>Developer Ravi | QR Code Generator</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="QR Code Generator Developed By Developer Ravi Khadka .It's Free Online QR Code Generator to make your own QR Codes.No sign-up required. Create unlimited non-expiring free QR codes for a website URL, YouTube video etc.">

<meta name="keywords" content="qr code,QR CODE,QR,CODE,HTML, CSS, XML, JavaScript,php,mysql,bootstrap">

<meta name="author" content="Developer Ravi Khadka ">
<link rel="stylesheet" type="text/css" href="QRstyle.css">
</head>
<body>
    <?php 
  include "meRaviQr/qrlib.php";
  include "config.php";
  if(isset($_POST['create']))
  {
          $qc =  $_POST['qrContent'];
          $qrImgName = "meravi".rand();


          $dev = " ...Develop By Ravi Khadka";
          $final = $qc.$dev;
          $qrs = QRcode::png($final,"userQr/$qrImgName.png","H","3","3");
          $qrimage = $qrImgName.".png";
          $workDir = $_SERVER['HTTP_HOST'];
          $qrlink = $workDir."/qrcode".$qrImgName.".png";
          $insQr = $meravi->insertQr('',$final,$qrimage,$qrlink);


          if($insQr==true)
          {
            echo "<script>window.location='promoqr.php?success=$qrimage';</script>";

          }
  }
  ?>
  <?php 
  if(isset($_GET['success']))
  {
  ?>
  <div id="qrSucc">
  <div class="modal-content animate container">
    <?php 
    ?>
 
    <img src="userQr/<?php echo $_GET['success']; ?>" alt="">
    <?php 
$workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode/userQr/".$_GET['success'];
    ?>
     </div></div>
  <?php
}
else
{
  ?>
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" enctype="multipart/form-data">
    <div class="container">
      <h2 align="center">You Are Welcome To Developer Ravi QR Code Generator</h2>
      <input type="hidden" name="qrContent" value="<?php     echo (rand(10000,1000000));?>">
      <input type="submit" value="Get QRcode" name="create">
    
    </div>
  </form>
    <?php 

}
   ?>
</div>

</body>
</html>
