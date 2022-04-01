<?php
  session_start();
  if (!isset($_SESSION['id'])) {
      header("Location:login.php");
  }
?>
<?php include("includes/header.php"); ?>
		
    <div class="header-height"></div>
    
    <section class="page-header">
        <div class="page-header-bottom"></div>
        <div class="container">
            <div class="page-content text-center">
                <h2>Customer Profile Page</h2>
               
            </div>
        </div>
    </section><!--/.page-header-->
    
<body>
  <div class="container" style="margin-top:50px">
   
    <div class="row" style="color:white;text-align:center;">
       <h1>Hello, <?php echo ucwords($_SESSION['customer_name']); ?> <small><a href="logout.php">Logout</a></small></h1>   
    </div>
  </div>
  <?php include("includes/footer.php"); ?>