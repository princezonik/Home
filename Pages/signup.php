<?php require_once("signupverification.php"); ?>
<?php require_once("../includes/header.php"); ?>
	
	<script type="text/javascript" src="../js/javascript.js" > </script>
	<link rel="stylesheet" type="text/css" href="../styles/signup.css">
	
	<img src="../images/Landscape.jpg" width="100% height: 20px;">

	<div>
		<form action="#" method="post" name="form-container">
		<div class="form-div"> 
			<p> Title:</p> <input type="text" name="title">

			<p> Full Name:</p><input type="text" name="fullname" placeholder="Enter fullname..." required>
			<p> Username:</p><input type="text" name="username" placeholder="Enter username here..." required>
			<p> Gender:</p><input type="text" name="gender" required>
			<p> State:</p><input type="text" name="state" required>
			<p> City: </p><input type="text" name="city" required>
			<p> emailil:</p><input type="email" name="email" required>
			<p> Phone Number: </p><input type="text" name="phone" required>
			
		</div>

		<div class="form-div-right">
		
		<p> Bank </p><input type="text" name="bankname" required>
		<p> Account Name:</p><input type="text" name="accountname" required>
		<p> Account Number:</p><input type="text" name="accountnumber" required>
		<p> Password:</p><input type="password" id="password" name="password" onchange="check_pass()"  required>


		<p> Confirm Password: <span id='message' style="color: red;"></span> </p>
		<input type="password" id="confirm_password" name="confirmpassword" onchange="check_pass()"  required>

		<input type="submit" id="sub" name="submit" value="SIGN UP" disabled>
		</div>
		</form>
	</div>

<?php require_once("../includes/footer.php"); ?>