<?php $connection = mysql_connect("localhost","root","") || die("Error connecting to database");

	  $db_select = mysql_select_db("information") || die("Error selecting database");

	  if (isset($_POST['submit'])){

		$user_name = $_POST['username'];
		$user_email = $_POST['email'];
		$user_pass = $_POST['pass'];

		$check_email = "SELECT * FROM user_registration WHERE email = '$user_email'";

		$run = mysql_query($check_email);

		if(mysql_num_rows($run) > 0){

			echo "<script>alert('email $user_email already exists')</script>";
		
		}

		$query = "INSERT INTO user_registration (username, email, password) VALUES('$user_name','$user_email','$user_pass')";

		if (mysql_query($query)){

			echo "<script>alert('egistration successful')</script>";
		}
	}
?>

<html>
	<style>
		
		
	.mainheader{
		height: 7%;
		background-color: var(--white);
		padding: 0.5%;
		box-shadow:0px 2px 6px -2px rgba(0,0,0,.25);
		
	}

	.mainheader ul{
		list-style-type: none;
	}
	.sign-buttons{
		margin-right: 5%;
	}

	.sign-buttons li{
		float: right;
		margin: 0;
		margin-right: 1%;
		list-style-type: none;
		font-size: 0.75em;ht;
		text-align: center;
	}

	 .sign-buttons li a{
		text-decoration:none;
		color: #fff;
		background-color: #660000;
		border: 1px solid black;
		border-radius: 4px;
		padding: 10px;
	}

	.sign-buttons li a:hover{
		background-color: transparent;
		color:#660000;
		transition: .3s ease;
	}

	.navs {
		margin-left:30%;
	}
	.navs li{
		float:left;
		margin-right: 1%;
	}

	.navs li a{
		text-decoration: none;
		color: black;

	}

	.navs li a:hover{
		color:black;
		transition: .3s ease;
		font-weight: bold;
	}
	</style>
		
	<body>

		<header class="mainheader">
				<div id="menu-main-menu-container">
					<nav>
						<ul>
							<div class="navs">
							<li class="cls"><a href="home.php">Home</a></li>
							<li><a href="">Interactions</a></li>
							<li><a href="">About Us</a></li>
							</div>

							<div class="sign-buttons">
							<li><a href="signup.php">SIGN UP</a></li>
							<li><a href="signin.php">SIGN IN</a></li>
							</div>
						</ul>
					</nav>	
				</div>	
	</header>
		
