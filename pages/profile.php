<?php require_once("Connection.php"); ?>
<?php require_once("signinverification.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
	<div class="container">
		
		<div class="profile-picture">

			<img src="user_male.png" id="profile-photo-top">
			<p> Username: <?php $username = $_GET['username']; 
								echo "SELECT username FROM users WHERE username = '$username' " ;?> </p>
			<p> Contact: <?php echo "SELECT phone FROM users WHERE phone ='$phone' " ; ?> </p>
			<p id="info"><a href="#" id="profile-anchor"> Edit Info</a></p>

		</div>

		<table class="table-one">

					<tr>
						<td> <h3> Matrix Position </h3> </td>
					</tr>

					<tr>
						<td> </td>
					</tr>
				</table>


		<div class="my-profile-dashboard">

			<h4 id="h4-text-one">My Profile Dashboard</h4>

			<h4 id="h4-text-two">My Package: </h4>
			<img src="user_male.png" id="profile-photo">

			<p> <strong> Name: </strong> </p>
			<p> <strong> Bank: </strong> </p>
			<p> <strong> Account Name: </strong> </p>
			<p> <strong> Account Number: </strong> </p>
			<p> <strong> Email: </strong> </p>
			<p> <strong> Phone Number: </strong> </p>
			<p> <strong> Phone Number: </strong> </p>


		</div>
		<div class="referral-container">
			<div class="referral-one">
					<p>My Referrals</p>
			</div>

			<div class="referral-two">
					<p>My Referrals</p>
			</div>
		</div>
	</div> <!-- container div-->