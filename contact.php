<!DOCTYPE HTML>

<html>
	<head>
		<title>Visualize by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/menu.css" />

	</head>
	<body>

		<?php 
		include_once('assets/inc/contact_hand.php');
		
		
		//SÅDAN JO!!!
		if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['text'])) {
			$name = $_POST['name'];
			$mail = $_POST['mail'];
			$text = $_POST['text'];

			if (!empty($name) && !empty($mail) && !empty($text)) {
				
				connDB();
				
				$query    = "INSERT INTO Contact_Tabel (name, mail, tekst) 
             					VALUES('$name', '$mail', '$text')";
				

				if ($query_run = mysql_query($query)) {
					$message = "Blev smidt ind";
					echo "<script type='text/javascript'>alert('$message');</script>";
					mysql_close();
					
				}else{
					$message = "Den gik sku ikke";
					echo "<script type='text/javascript'>alert('$message');</script>";
					mysql_close();
					
				}


			}else{
				$message = "Så put dog noget i!";
				echo "<script type='text/javascript'>alert('$message');</script>";

			}
		}


	 ?>


		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						
						  <?php include_once('assets/inc/menu.php');?>
						  
						
					</header>

				<!-- Main -->
					<h1 class="over">Du vil gerne i kontakt med os!</h1><br>

					<!--<script type="text/javascript">
					alert("NEJ!");
					</script>-->
					<?php echo("SÅ KOM DA: ") ?>

					<form method="POST" action="contact.php">
						
						Navn:<br><input type="text" name="name"><br><br>
						Email:<br><input type="email" name="mail"><br><br>
						Besked:<br><textarea name="text" rows="6" cols="30"></textarea><br><br>
						<input type="submit" value="send">

					</form>



				<!-- Footer -->
					<footer id="footer">
						<p>&copy; Stephan Jensen TabDig A/S</p>
					</footer>

			</div>
			
	</body>
</html>