<!DOCTYPE html>
<html>
<head>
    <title>ONE TWO TWO - Home</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="http://jabont.com/jayss/jayss.css"> -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="font-family: 'Kanit', sans-serif;">
    <div id="menu">
        <div class="logo" style="width: 100%; background-color: white">
            <img src="icon_122.jpg" align="middle" style="margin-left: 43%">
        </div>
        <menu class="center"">
            <a href="index.php"><li class="moment"><h3>Home</h3></li></a>
            <a href="history.php"><li><h3>History</h3></li></a>
            <a href="menu.php"><li><h3>Menu</h3></li></a>
            <a href="promotion.php"><li><h3>Promotion</h3></li></a>
            <a href="contact.php"><li><h3>Contact</h3></li></a>
        </menu>
    </div>

    <div role="main" class="container">
        <div class="pic" style="width: 80%; margin-left: auto; margin-right: auto; overflow: hidden;">
            <img src="pic_0001.jpg" class="slide anime" style="width: 100%;">
            <img src="pic_0002.jpg" class="slide anime" style="width: 100%;">
            <img src="pic_0003.jpg" class="slide anime" style="width: 100%;">
            <img src="pic_0004.jpg" class="slide anime" style="width: 100%;">
            <img src="pic_0005.jpg" class="slide anime" style="width: 100%;">
        </div>
    </div>

    <div class="icon_area" style="width: 130px; margin-left: auto; margin-right: auto;">
        <a href="https://www.facebook.com/Onetwotwocoffeebar/" target ="_blank"><img class="icon" src="fb_icon.png"></a>
        <a href="https://www.instagram.com/onetwotwocoffeebar/" target ="_blank"><img class="icon" src="ig_icon.png"></a>
        <!-- <a href=""><img class="icon" src="mail_icon.png" style="width: 35px; margin: 2px; height: 35px; border-radius: 50%;"></a> -->
        <a href="https://www.google.co.th/maps/place/One+Two+Two+Coffee+Bar/@13.6860306,100.6464808,17z/data=!3m1!4b1!4m5!3m4!1s0x311d6076657be2c5:0xa663c4f424ec2740!8m2!3d13.6860254!4d100.6486695?hl=th&authuser=0" target ="_blank"><img class="icon" src="map_icon.png"></a>
    </div>

    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("slide");
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 3000);
        }
    </script>
</body>
</html>