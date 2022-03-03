<?php
  session_start();
  if (isset($_SESSION['id'])) {
      header("Location:customer-profile.php");
  }
?>
<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login</h3>
			</div>
			<div class="card-body">
				<form id="loginForm"> 
           <!-- alert success and danger message--->
        <div class="alert alert-danger alert-dismissible show-message" role="alert" style="display: none;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <span class="ajax-message"></span>
        </div>
          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
					  <input type="email" id="email" class="form-control" name="email" placeholder="Email" required="">
					</div>
          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
            <input type="password" id="password" class="form-control" name="password" placeholder="Password" required="">
					</div>
				
					<div class="form-group">
          <!-- <input type="submit" class="btn btn-info btn btn-block" name="btnSubmit" value="Login"> -->
          <input type="submit" class="btn float-right login_btn" value="Login"> 
					</div>
				</form>
        <div class="links">
        <p>Are you new user? <a href="index.php">Sign Up</a></p>
				</div>
			</div>
			
		</div>
	</div>
</div>



</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
      $("#loginForm").on("submit", function(e){
        e.preventDefault();

        var email = $("#email").val();
        var password = $("#password").val();

        $.ajax({
            url : "includes/login.php",
            type:"POST",
            cache:false,
            data:{email:email,password:password},
            success:function(response){
              if(response == '1') {
                window.location.replace("customer-profile.php");
              }else if(response=='0'){
                $(".show-message").show();
                $(".ajax-message").text('Email or Password is Invalid');
              }
            }
        });
      });
  });
</script>
