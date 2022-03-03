<?php
  session_start();
  if (!isset($_SESSION['id'])) {
      header("Location:login.php");
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
  <div class="container" style="margin-top:50px">
    <h1 style="color:white;text-align:center;">Customer Profile Page</h1><br>
    <div class="row" style="color:white;text-align:center;">
       <h5>Hello, <?php echo ucwords($_SESSION['customer_name']); ?> <small><a href="logout.php">Logout</a></small></h5>   
    </div>
  </div>
</body>
</html>