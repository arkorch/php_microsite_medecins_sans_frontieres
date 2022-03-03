<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sign up to Become Customer</title>
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
				<h3>Sign In</h3>
			</div>
			<div class="card-body">
				<form id="signupForm"> 
           
        <!-- alert success and danger message--->
        <span class="message-message"></span>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="customer_name" placeholder="Full Name" required="">
						
					</div>
          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-phone"></i></span>
						</div>
            <input type="number" class="form-control" name="contact" placeholder="Contact" required="">
						
					</div>
          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
					  <input type="email" class="form-control" name="email" placeholder="Email" required="">
						
					</div>
          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
            <input type="password" class="form-control" name="password" placeholder="Password" required="">
					</div>
          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-comment"></i></span>
						</div>
					  <input type="text-area" class="form-control" name="comments" placeholder="Comments" required="">
						
					</div>
				
				
					<div class="form-group">
          <input type="submit" class="btn float-right login_btn" value="Sign Up">  
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
      $("#signupForm").on("submit",function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url : "includes/register.php",
            type: "POST",
            cache:false,
            data: formData,
            success:function(response){
              data = JSON.parse(response);
              if (data.error == "0") {
                $("#signupForm").trigger("reset");
                $('.message-message').replaceWith('<div class="alert alert-success alert-dismissible" role="alert">'
                 + data.message + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
              }else if(data.error == "1") {
               $('.message-message').replaceWith('<div class="alert alert-danger alert-dismissible" role="alert">'
                 + data.message + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
              }
            }
        });
      });
  });
</script>