<?php

    session_start();

    // include database connectivity file

	include_once('../middleware/db.php');	

    if (isset($_POST['email'])) {

	$email 	  = $con->real_escape_string($_POST['email']);
	$password = $con->real_escape_string(md5($_POST['password']));

	$query = "SELECT * FROM my_users WHERE customer_email ='$email' && customer_password ='$password'";
    
	$result = $con->query($query) or die($con->error);
        $row = $result->fetch_assoc();

        if($result->num_rows > 0) {
             $_SESSION['id'] = $row['id'];
	     $_SESSION['customer_name'] = $row['customer_name'];
             echo 1;
        }else{
            echo 0;
        }
    }

?>