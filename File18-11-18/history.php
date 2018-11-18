<!DOCTYPE html>
<html>
<head>
	<title>ONE TWO TWO - History</title>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="http://jabont.com/jayss/jayss.css"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
</head>
<body style="font-family: 'Kanit', sans-serif;">
	<div id="menu">
        <div class="logo">
            <img id="logo122" src="icon_122.jpg" align="middle">
        </div>
        <menu class="center">
            <a href="index.php"><li><h3>Home</h3></li></a>
            <a href="history.php"><li class="moment"><h3>History</h3></li></a>
            <a href="menu.php"><li><h3>Menu</h3></li></a>
            <a href="promotion.php"><li><h3>Promotion</h3></li></a>
            <a href="contact.php"><li><h3>Contact</h3></li></a>
        </menu>
    </div>

    <div role="main" class="container">
    	<h1 style="text-align: center; padding-top: 15px;">ประวัติของร้าน</h1>
        <div class="pic" style="text-align: center;"><img src="pic_005.jpg" class="anime" style="border-radius: 50%; width: 15em; height: 15em; margin-top: 1em;">
        </div>
        <div class="content">
        	<font size="4">ร้านกาแฟ One Two Two Coffee Bar ก่อตั้งขึ้นในปี 2014 โดยแรงบันดาลใจในการก่อตั้งร้านนี้ เกิดขึ้นจากความรักของตัวเจ้าของร้านซึ่งมีความชอบและความหลงไหลในการทำกาแฟเหมือนกัน ส่วนชื่อร้านนี้ได้มาจากวันเกิดของเจ้าของร้านที่เกิดในวันที่ 12 กุมภาพันธ์ (12/2) มารวมกันเป็นชื่อร้านว่า "ONE TWO TWO"<br><br></font>
        </div>
        <div class="pic" style="text-align: center;"><img src="pic_001.jpg" class="anime" style="border-radius: 50%; width: 15em; height: 15em; margin-top: 1em;">
        </div>
        <div class="content">
            <font size="4">บรรยากาศและการออกแบบร้านนั้นจะเน้นไปในด้านความเรียบง่ายและเน้นโทนสีขาวเพื่อให้ทั้งภายนอกและภายในร้านนั้นมีความสว่างและดูโล่งสบายตา ซึ่งทำให้เป็นจุดที่ดึงดูดความสนใจให้กับผู้คนที่สนใจ และชื่นชอบความเป็นมินิมอลได้อย่างลงตัว <br><br> </font>
        </div>
    </div>

    <script>
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