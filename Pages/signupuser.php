<?php require_once("signupverification.php"); ?>
<?php require_once("header.php"); ?>

<div>
		<form action="#" method="post" name="form-container">
		<div class="form-div"> 
			<p> Title:</p> <input type="text" name="title">

			<p> Full Name:</p><input type="text" name="fullname" placeholder="Enter fullname..." required>
			<p> Username:</p><input type="text" name="username" placeholder="Enter username here..." required>
			<p> Gender:</p><input type="text" name="gender" required>
			<p> State:</p><input type="text" name="state" required>
			<p> City: </p><input type="text" name="city" required>
			<p> Email:</p><input type="email" name="email" required>
			<p> Phone Number: </p><input type="text" name="phone" required>
			
		</div>

		<div class="form-div-right">
		
		<p> Bank </p><input type="text" name="bankname" required>
		<p> Account Name:</p><input type="text" name="accountname" required>
		<p> Account Number:</p><input type="text" name="accountnumber" required>
		<p> Password:</p><input type="password" name="password" required>

		<span id='message' style="color: red;"></span>

		<p> Confirm Password: </p><input type="password" name="confirmpassword" required>
		<input type="submit" name="submit" value="SIGN UP">
		</div>

		</form>
	</div>