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
			num: <input	type="text" name="num" placeholder="Number" require value=" ">
			<button name="ok" value="pn">Login</button>
		</form>
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
						<br>
						Point : <?=$row['star']?>
						<form method="POST">
							<input	type="hidden" name="star" value="<?=$row['star']?>">
							<input type="hidden" name="id" value="<?=$row['id']?>">
							<button name="ok" value="rd">Remdeem
							</button>
						</form>
					</p>
					<?php
				}
			}
			if ($_POST['ok'] == 'rd') {
					$star=$_POST['star'];
					$id=$_POST['id'];
					echo $star; 
					if ($star >= 10) {
						//Show Drinks
						echo "<br>Select your Drinks with the fade button and javascript animation";
						//$drinks=namedrinks;
						?>
						<form method="POST">
							<button name="ok" value="cf">Confirmm!!!
							</button>
							<input	type="hidden" name="star" value="<?= $star?>">
							<input	type="hidden" name="id" value="
							<?= $id?>">
						</form>
						<?php 
							}
						}
			if ($_POST['ok'] == 'cf') 
			{
				// $star = $star-7;
				$star=$_POST['star'];
				$id=$_POST['id'];
				echo "Star = ";
				echo $star-10; ?>
				<form method="POST">
					<button name="ok" value="updatestar">ok</button>
				</form>
				<?php
					$conn = conn();
					$id = $_POST['id'];
					$star = $_POST['star'];
					$sql = "UPDATE phonenumber 
					SET  star =  $star-10
					WHERE  id = $id";
					$conn->query($sql);
					echo "Code: A5sfdD9;";
			}
		?>
	</div>
</body>
</html>