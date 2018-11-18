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
		<div class="redeem">
			<form method="POST">
			Phone No.: <input	type="text" name="num" placeholder="Number"value="">
			<br>
			<button name="ok" value="pn">Submit</button>
		</form>
		 <?php
			function conn(){
				$conn = new mysqli("localhost", "root","", "tt");
				return $conn;
			}
			if ($_POST['ok'] == 'pn') {
						$num = $_POST['num'];
						$conn = conn();
						$sql = "SELECT * FROM phonenumber
						WHERE num = $num";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc()) {
						?><form method="POST">
							<p>
								Name : <?=$row['name']?>
								<br> 
								No. : <?=$row['num']?>
								<br>
								Point : <input type="text" name="star" value="<?=$row['star']?>">
								<input type="hidden" name="id" value="<?=$row['id']?>">
							</p>
							<br>
							<button name="ok" value="send_update">Update</button></form>
						<?php 
					}
			}
			if ($_POST['ok'] == 'send_update') {
					$conn = conn();
					$id = $_POST['id'];
					$star = $_POST['star'];
					$sql = "UPDATE phonenumber 
					SET  star =  $star
					WHERE  id = $id";
					$conn->query($sql);
					echo "success";
				}
		?>
	</div>
</body>
</html>