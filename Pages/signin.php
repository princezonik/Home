<?php require_once("../includes/connection.php"); ?>
<?php require_once("../includes/header.php"); ?>
<?php require_once("signinverification.php");?>

	<link rel="stylesheet" type="text/css" href="../Styles/signin.css">
			<img src="../images/landscape.jpg">
	
	<div class="container">
		<div  class="form-container">
			<form action="#" method="post">
				<input type="text" name="username" placeholder="Enter username here..." required>
				<br /> <br />
				<input type="password" name="password" >
				<br /> <br />
				<input type="Submit"  id="message" name="submit" value="LOG IN">

			</form>
		</div>

		<div class="write-up">
		
		</div>

		
	</div> <!-- main container -->
<?php require_once("../includes/footer.php"); ?>
