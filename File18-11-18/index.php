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
        <div class="logo">
            <a href="emp_login.php"><li><h3>Emp</h3></li></a>
            <img id="logo122" src="icon_122.jpg" align="middle">
        </div>
        <menu class="center">
            <a href="index.php"><li class="moment"><h3>Home</h3></li></a>
            <a href="history.php"><li><h3>History</h3></li></a>
            <a href="menu.php"><li><h3>Menu</h3></li></a>
            <a href="promotion.php"><li><h3>Promotion</h3></li></a>
            <a href="contact.php"><li><h3>Contact</h3></li></a>
        </menu>
    </div>

    <div role="main" class="container">
        <div class="pic" style="width: 80%; margin-left: auto; margin-right: auto; overflow: hidden;">
            <img src="pic_001.jpg" class="slide anime" style="width: 100%;">
            <img src="pic_002.jpg" class="slide anime" style="width: 100%;">
            <img src="pic_003.jpg" class="slide anime" style="width: 100%;">
            <img src="pic_004.jpg" class="slide anime" style="width: 100%;">
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
            setTimeout(carousel, 4500);
        }

        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
                document.getElementById("menu").style.height = "3.5em";
                // document.getElementsByClassName("logo")[0].style.width = "374px";
                document.getElementById("logo122").style.width = "0em";
                document.getElementsByClassName("logo")[0].style.height = "0em";
                // document.getElementsByClassName("logo")[0].style.marginLeft = "15em";
                // document.getElementsByClassName("center").style.width = "650px";
                // document.getElementsByTagName("li").style.width = "130px";
            }
            else {
                document.getElementById("menu").style.height = "9em";
                // document.getElementsByClassName("logo")[0].style.width = "100%";
                document.getElementById("logo122").style.width = "7em";
                document.getElementsByClassName("logo")[0].style.height = "5.5em";
                // document.getElementsByClassName("logo")[0].style.marginLeft = "0em";
                // document.getElementsByClassName("center").style.width = "1024px";
                // document.getElementsByTagName("li").style.width = "204.8px";
            }
        }
    </script>
</body>
</html>