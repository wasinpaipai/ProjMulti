<!DOCTYPE html>
<html>
<head>
	<title>ONE TWO TWO - Menu</title>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="http://jabont.com/jayss/jayss.css"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <style type="text/css">
        .menu_name {
            text-align: left;
            padding-left: 3em;
            width: 40em;
        }
        tr {
            height: 3em;
            padding-top: 2em;
            padding-bottom: 2em;
        }
        .pic {
            width: 10em;
            height: 10em;
            border-radius: 50%;
            margin: 1.5em;
        }
        .pic:hover {

        }
    </style>
</head>
<body style="font-family: 'Kanit', sans-serif;">
	<div id="menu">
        <div class="logo">
            <img id="logo122" src="icon_122.jpg" align="middle">
        </div>
        <menu class="center">
            <a href="index.php"><li><h3>Home</h3></li></a>
            <a href="history.php"><li><h3>History</h3></li></a>
            <a href="menu.php"><li class="moment"><h3>Menu</h3></li></a>
            <a href="promotion.php"><li><h3>Promotion</h3></li></a>
            <a href="contact.php"><li><h3>Contact</h3></li></a>
        </menu>
    </div>

    <div role="main" class="container">
        <h1 style="text-align: center; padding-top: 15px;">รายการเครื่องดื่ม</h1>
        <table style="width: 100%; text-align: center;">
            <tr>
                <th></th>
                <th>HOT</th>
                <th>COLD</th>
                <th>FRAPPE</th>
            </tr>
            <tr>
                <td class="menu_name">Americano (อเมริกาโน่)</td>
                <td>45</td>
                <td>50</td>
                <td>-</td>
            </tr>
            <tr>
                <td class="menu_name">Cappucino (คาปูชิโน่)</td>
                <td>50</td>
                <td>60</td>
                <td>-</td>
            </tr>
            <tr>
                <td class="menu_name">Espresso (เอซเปรสโซ่)</td>
                <td>45</td>
                <td>60</td>
                <td>70</td>
            </tr>
            <tr>
                <td class="menu_name">Latte (ลาเต้)</td>
                <td>50</td>
                <td>60</td>
                <td>70</td>
            </tr>
            <tr>
                <td class="menu_name">Mocha (มอคค่า)</td>
                <td>55</td>
                <td>60</td>
                <td>75</td>
            </tr>
            <tr>
                <td class="menu_name">Piccolo Latte (พิคโคโล่ ลาเต้)</td>
                <td>50</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td class="menu_name">Caramel Macciato (คาราเมล มัคคิอาโต้)</td>
                <td>60</td>
                <td>70</td>
                <td>80</td>
            </tr>
        </table>
        <h2 style="text-align: center; padding-top: 15px;">Special Drink</h2>
        <table style="width: 100%; text-align: center;">
            <tr>
                <th></th>
                <th>HOT</th>
                <th>COLD</th>
                <th>FRAPPE</th>
            </tr>
            <tr>
                <td class="menu_name">Espresso Coconut Pudding (เอสเปรสโซ่พุดดิ้งมะพร้าว)</td>
                <td>-</td>
                <td>80</td>
                <td>-</td>
            </tr>
            <tr>
                <td class="menu_name">Sparkling Orange Coffee (สปาร์คกลิ้ง ออเรนจ์ คอฟฟี่)</td>
                <td>-</td>
                <td>120</td>
                <td>-</td>
            </tr>
            <tr>
                <td class="menu_name">Ice Coconut Water Americano (อเมริกาโน่มะพร้าว)</td>
                <td>-</td>
                <td>80</td>
                <td>-</td>
            </tr>
        </table>
        <div class="image" style="text-align: center; width: 100%; margin-top: 2em;">
            <img class="pic" src="dri_001-1.jpg">
            <img class="pic" src="dri_002-1.jpg">
            <img class="pic" src="dri_003-1.jpg">
            <img class="pic" src="dri_004-1.jpg">
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