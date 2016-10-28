<?php  include("../includes/header.php"); ?>

<link rel="stylesheet" type="text/css" href="../styles/signupstyle.css" />
<div class="form">

	<h3 class="sign">Sign Up</h3>
	
	  
	<div class="tab-content">
		<div id="signup">   
			<h1>Sign Up for Free</h1>
		<form action="#" method="post">
				<div class="field-wrap">
					<input type="text" required autocomplete="off" placeholder="Pick a username..." name="username"/>
				</div>

			<div class="field-wrap">
				<input type="email"required autocomplete="off" placeholder="Email Address*" name="email" />
			</div>
		  
			<div class="field-wrap">
				<input type="password"required autocomplete="off" placeholder="set a password" name="pass" />
			</div>
		  
			<button type="submit" class="button button-block" name="submit"/>Get Started</button>
	  
		</form>

	</div>
	
	
			
		</div><!-- tab-content -->
		  
	</div> 
<?php include("../Includes/footer.php"); ?>
