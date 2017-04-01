<?php 
	
	if (isset($_POST['submit'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		
		$check_user = "SELECT username,password FROM users WHERE username = '$username' and password = '$password'";

		$run = mysql_query($check_user);

		if (mysql_num_rows($run) <=0) {
			echo "<script>  </script> ";
		}else{
			echo " <script> window.open('dashboard.php','_self')</script>";

			 $query = "SELECT fullname, bank, accountname, accountnumber, phone FROM users "; 

			$result = mysql_query($query);
			$row = mysql_fetch_array($result);


		exit();


			}
	} 
?>