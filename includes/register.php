<?php
	// include database connectivity file

	include_once('../middleware/db.php');	


	if (isset($_POST['email'])) {

		
		if (empty($_POST['name']) ||
			empty($_POST['email']) ||
			empty($_POST['contact']) ||
			empty($_POST['signup']) ||
			empty($_POST['password']) ||
			empty($_POST['message'])) {
				echo json_encode(array('error'=>'0', 'message'=>'Please fill all required fields!'));
die();
}
	    $contact = $con->real_escape_string($_POST['contact']);
	    $customer_name = $con->real_escape_string($_POST['name']);
	    $email 	  = $con->real_escape_string($_POST['email']);
		$comments 	  = $con->real_escape_string($_POST['message']);
	    $password = $con->real_escape_string(md5($_POST['password']));
		$signup = $con->real_escape_string($_POST['signup']);



	    $query  = "INSERT INTO my_users (contact,customer_name,customer_email,customer_password,comments,signupfor) 
	    	      VALUES('$contact','$customer_name','$email','$password','$comments','$signup')";
	$result = $con->query($query);

            if ($result) {
	         echo json_encode(array('error'=>'0', 'message'=>'Registration successfully Login'));
	    }else{
	        echo json_encode(array('error'=>'1', 'message'=>"$con->error"));
	    }
	}
	else{
		echo json_encode(array('error'=>'0', 'message'=>'Please Enter email'));
	}

?>