<?php   include("../Includes/header.php"); ?>
<?php
	if (isset($_POST['submit'])){

		$user_name = $_POST['name'];
		$username = $_POST['pass'];
		$user_email = $_POST['email'];

	$check_name = "SELECT * FROM information  WHERE $user_email = '$user_name'";

	$run = mysql_query($check_name);

	if(mysql_num_rows($run) > 0){
		echo "User $user_name already exist";
	exit();
	}
	}
?>
<link rel="stylesheet" type="text/css" href="../Styles/signupstyle.css" />
<div class="form">

	<h3 class="sign">Sign Up</h3>
	
	  
	<div class="tab-content">
		<div id="signup">   
			<h1>Sign Up for Free</h1>
		<form action="/" method="post">
				<div class="field-wrap">
					<input type="text" required autocomplete="off" placeholder="Pick a username..." />
				</div>

			<div class="field-wrap">
				<input type="email"required autocomplete="off" placeholder="Email Address*" />
			</div>
		  
			<div class="field-wrap">
				<input type="password"required autocomplete="off" placeholder="set a password" />
			</div>
		  
			<button type="submit" class="button button-block"/>Get Started</button>
	  
		</form>

	</div>
	
	
			
		</div><!-- tab-content -->
		  
	</div> 
<?php include("../Includes/footer.php"); ?>
