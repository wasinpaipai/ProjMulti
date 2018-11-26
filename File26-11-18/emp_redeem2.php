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
        <div class="logo">
            <img id="logo122" src="icon_122.jpg" align="middle">
        </div>
        <menu class="center">
            <a href="index.php"><li><h3>Home</h3></li></a>
            <a href="history.php"><li><h3>History</h3></li></a>
            <a href="menu.php"><li><h3>Menu</h3></li></a>
            <a href="promotion.php"><li class="moment"><h3>Promotion</h3></li></a>
            <a href="contact.php"><li><h3>Contact</h3></li></a>
        </menu>
	</div>
	<div role="main" class="container">
		<div class="card">
			<div class="redeem">
				<?php
				function conn(){
					$conn = new mysqli("localhost", "root","", "tt");
					return $conn;
				}
				if ($_POST['ok'] == 'rede') {
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
						</p>
							<form method="POST">
								<input	type="hidden" name="star" value="<?=$row['star']?>">
								<input type="hidden" name="id" value="<?=$row['id']?>">
								<input type="hidden" name="code" value="<?$_POST['code']?>">
								<input type="text" name="code">
								<button name="ok" value="rd">Remdeem
								</button>
							</form>
						<?php
					}
				}
				if ($_POST['ok'] == 'rd') {
					$conn = conn();
					$code=$_POST['code'];
					$code_sql = "SELECT * FROM redeem WHERE re_code=$code";
					$code_result = $conn->query($code_sql);
					$code_row = $code_result->fetch_assoc();
							if(!$code_row){
							      echo "This code is Incorrect!";
							 }else{
											$star=$_POST['star'];
											$id=$_POST['id'];
											echo "Star = ";
											echo $star-10; ?>
											<?php
												$conn = conn();
												$id = $_POST['id'];
												$star = $_POST['star'];
												$sql = "UPDATE phonenumber 
												SET  star =  $star-10
												WHERE  id = $id";
												$conn->query($sql);
												$conn = conn();
									$code_sql = "DELETE FROM redeem WHERE re_code=$code" ;
									$conn->query($code_sql);
												/*$code_sql ="DELETE FROM redeem WHERE re_code=$code"*/
												// $conn->query($code_sql);

								}
								?>
								<br> 
								<button onclick="location.href='index.php'">Back to Homepage</button>
								<?php
							}
			?>
			

			</div>
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