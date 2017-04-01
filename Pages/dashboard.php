<?php require_once("connection.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<link rel="stylesheet" type="text/css" href="dashboard.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

		<nav class="dashboard-nav">
			<ul>
				<li><a href="#"><i class="fa fa-envelope"> </i> Send FeedBack</a></li>
			</ul>
		</nav>
		<nav class="side-bar">
			<ul>

				<li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
				<li><a href="#"><i class="fa fa-user"> </i> My Profile</a></li>
				<li><a href="#"><i class="fa fa-sort-amount-desc"> </i> My Refferals</a></li>
				<li><a href="#"><i class="fa fa-sitemap"> </i> Packages</a></li>
				<li><a href="#"><i class="fa fa-money"></i> My Wallet</a></li>
				<li><a href="#"><i class="fa fa-sign-out"></i>  Log Out</a></li>

			</ul>
		</nav>

		<div class="main-container">
			<div class="something">
				
			</div>

<div class="profile-picture">

			<img src="user_male.png" id="profile-photo-top">
			<p> Username: </p>
			<p> Contact:  </p>
			<p id="info"><a href="#" id="profile-anchor"> Edit Info</a></p>

		</div>


		<div class="my-profile-dashboard">

			<h4 id="h4-text-one">My Profile Dashboard</h4>

			<h4 id="h4-text-two">My Package: </h4>
			<img src="user_male.png" id="profile-photo">

			<p> <strong> Name:<input type="hidden" name="username" value="<?php echo "row[username]" ?>"></strong> </p>



			<p> <strong> Bank:<?php echo "$row[username]" ?>"></strong> </p>
			<p> <strong> Account Name:<?php echo "$row[accountname]" ?>"></strong> </p>
			<p> <strong> Account Number: <input type="hidden" name="username" value="<?php echo "$row[accountnumber]" ?>"></strong> </p>
			<p> <strong> Email: <input type="hidden" name="username" value="<?php echo "$row[email]" ?>"></strong> </p>
			<p> <strong> Phone Number: <input type="hidden" name="username" value="<?php echo "$row[phone]" ?>"></strong> </p>
			<p> <strong> Phone Number: <input type="hidden" name="username" value="<?php echo "$row[phone]" ?>"></strong> </p>


		</div>
		<div class="referral-container">
			<div class="referral-one">
					<p>My Referrals</p>
			</div>

			<div class="referral-two">
					<p>My Referrals</p>
			</div>
		</div>
			<aside class="right-side-bar">
				<table class="table-one">

					<tr>
						<td> <h3> Matrix Position </h3> </td>
					</tr>

					<tr>
						<td> </td>
					</tr>
				</table>

				<table class="table-two">

					<tr>
						<td> <h3> Referral Points </h3> </td>
					</tr>

					<tr>
						<td> </td>
					</tr>
				</table>

				<table class="table-three">

					<tr>
						<td> <h3> Activation Details </h3> </td>
					</tr>

					<tr>
						<td> </td>
					</tr>
				</table>
			</aside>

			<div class="other">
				
			</div>
		</div>
</body>
</html>