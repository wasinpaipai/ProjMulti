<!DOCTYPE html>
<html>
<head>
	<title>ONE TWO TWO - Promotion</title>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="http://jabont.com/jayss/jayss.css"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
</head>
<body style="font-family: 'Kanit', sans-serif;">
	<div id="menu">
        <div class="logo" style="width: 100%; background-color: white">
            <img src="icon_122.jpg" align="middle" style="margin-left: 43%">
        </div>
        <menu class="center"">
            <a href="index.php"><li><h3>Home</h3></li></a>
            <a href="history.php"><li><h3>History</h3></li></a>
            <a href="menu.php"><li><h3>Menu</h3></li></a>
            <a href="promotion.php"><li class="moment"><h3>Promotion</h3></li></a>
            <a href="contact.php"><li><h3>Contact</h3></li></a>
        </menu>
</div>
		<form method="POST">
			num: <input	type="text" name="num" placeholder="Number" require value=" ">
			<button name="ok" value="pn">OK</button>
		</form>
		<div class="content">
		 <?php
			function conn(){
				$conn = new mysqli("localhost", "root","", "tt");
				return $conn;
			}
			if ($_POST['ok'] == 'pn') {
				//Prepare data
				$num = $_POST['num'];
				//Insert Order
				$conn = conn();
				$sql = "SELECT * FROM phonenumber
				WHERE num = $num";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
				?>
					<p>
						Name : <?=$row['name']?>
						<br> 
						No. : <?=$row['num']?>
					</p>
					<?php 
				}
			}
		?>
	</div>
</body>
</html>