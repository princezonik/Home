	<?php 
	function confirm_query ($result){
		global $connection;
		if(!$result){
		die("Database query failed: " . mysqli_error($connection));
		 }	
		}
	function redirect_to ($location = NULL) {
		if ($location != NULL) {
			header("Location: {$location}");
			exit;
			}
		}
	# to con
	function get_all_year1(){
		global $connection;
		$query = "SELECT * FROM 
				 year1 ORDER BY 
		 		credit_load DE  SC";
	 $course_set = mysqli_query($connection, $query);
	 confirm_query($course_set);
	 return $course_set;
	}

	function get_all_year_2(){
		global $connection;
		$query = "SELECT * FROM 
				 year_2 ORDER BY 
		 		credit_load ASC";
	 $course_set = mysqli_query($connection, $query);
	 confirm_query($course_set);
	 return $course_set;
	}

	function get_all_year_3(){
		global $connection;
		$query = "SELECT * FROM 
				 year_3 ORDER BY 
		 		credit_load ASC";
	 $course_set = mysqli_query($connection, $query);
	 confirm_query($course_set);
	 return $course_set;
	}

	function get_all_year_4(){
		global $connection;
		$query = "SELECT * FROM 
				 year_4 ORDER BY 
		 		credit_load ASC";
	 $course_set = mysqli_query($connection, $query);
	 confirm_query($course_set);
	 return $course_set;
	}
	function mysql_prep($value){
		global $connection;
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists("mysql_real_escape_string"); #this is for php v4.3.0
		if($new_enough_php){# php v4.3.0 or higher
		#the above will undo any magic quotes effect so mysql_real)ecape_string can do the work
		if($magic_quotes_active){
			$value = stripslashes ($value);
		}
		$value = mysqli_real_escape_string($connection,$value);
		}else{ #before php v 4.3.0
		#if mgic quotes arent alrady on then add slashes manually
		if(!magic_quotes_actie){
			$value = addslashes($value);
		}
		#in the abpve if magic quots re aactive then the slashes are alreay exist
		}
		return $value;
	}
		
	function get_course_by_id($course_id) {
		global $connection;
		$query = "SELECT * ";
		$query .= "FROM year1 ";
		$query .= " WHERE id =" . $course_id . " ";
		$query .= " LIMIT 1 ";
	    $result_set = mysqli_query($connection, $query);
		confirm_query($result_set);	
			if ($course = mysqli_fetch_array($result_set)){
			return $course;
		}
		else {
		return NULL;
		}
			
			
		}

	function get_course_2_by_id($course_id) {
		global $connection;
		$query = "SELECT * ";
		$query .= "FROM year_2 ";
		$query .= " WHERE id =" . $course_id . " ";
		$query .= " LIMIT 1 ";
	    $result_set = mysqli_query($connection, $query);
		confirm_query($result_set);	
			if ($course = mysqli_fetch_array($result_set)){
			return $course;
		}
		else {
		return NULL;
		}
			
			
		}
	function get_course_3_by_id($course_id) {
		global $connection;
		$query = "SELECT * ";
		$query .= "FROM year_3 ";
		$query .= " WHERE id =" . $course_id . " ";
		$query .= " LIMIT 1 ";
	    $result_set = mysqli_query($connection, $query);
		confirm_query($result_set);	
			if ($course = mysqli_fetch_array($result_set)){
			return $course;
		}
		else {
		return NULL;
		}
			
			
		}
		function get_course_4_by_id($course_id) {
		global $connection;
		$query = "SELECT * ";
		$query .= "FROM year_4 ";
		$query .= " WHERE id =" . $course_id . " ";
		$query .= " LIMIT 1 ";
	    $result_set = mysqli_query($connection, $query);
		confirm_query($result_set);	
			if ($course = mysqli_fetch_array($result_set)){
			return $course;
		}
		else {
		return NULL;
		}
			
			
		}
	function find_selected_course(){
		global $sel_course;
			if(isset($_GET['subj'])){
			$sel_course = get_course_by_id($_GET['subj']);
			
		}else{
			$sel_course = "";
			
		}	
	}
	function find_selected_course_2(){
		global $sel_course;
			if(isset($_GET['subj'])){
			$sel_course = get_course_2_by_id($_GET['subj']);
			
		}else{
			$sel_course = "";
			
		}	
	}
	function find_selected_course_3(){
		global $sel_course;
			if(isset($_GET['subj'])){
			$sel_course = get_course_3_by_id($_GET['subj']);
			
		}else{
			$sel_course = "";
			
		}	
	}
	function find_selected_course_4(){
		global $sel_course;
			if(isset($_GET['subj'])){
			$sel_course = get_course_4_by_id($_GET['subj']);
			
		}else{
			$sel_course = "";
			
		}	
	}
	function navigation($sel_course){
		echo "<ul class =\"displayeds\">";
	    $result = get_all_year1(); 
			while($course = mysqli_fetch_array($result)){
			echo "<li><a href=\"edit1.php?subj=" . urlencode($course['id']) 
			. "\">{$course['course_title']}  </a></li>";
			echo "<br/>";
		}
		
		}
	function navigation_2($sel_course){
		echo "<ul class =\"displayeds\">";
	    $result = get_all_year_2(); 
			while($course = mysqli_fetch_array($result)){
			echo "<li><a href=\"edit2
			.php?subj=" . urlencode($course['id']) 
			. "\">{$course['course_title']}  </a></li>";
			echo "<br/>";
		}
		
		}
	function navigation_3($sel_course){
		echo "<ul class =\"displayeds\">";
	    $result = get_all_year_3(); 
			while($course = mysqli_fetch_array($result)){
			echo "<li><a href=\"edit3.php?subj=" . urlencode($course['id']) 
			. "\">{$course['course_title']}  </a></li>";
			echo "<br/>";
		}
		
		}
	function navigation_4($sel_course){
		echo "<ul class =\"displayeds\">";
	    $result = get_all_year_4(); 
			while($course = mysqli_fetch_array($result)){
			echo "<li><a href=\"edit4.php?subj=" . urlencode($course['id']) 
			. "\">{$course['course_title']}  </a></li>";
			echo "<br/>";
		}
		
		}

	?>