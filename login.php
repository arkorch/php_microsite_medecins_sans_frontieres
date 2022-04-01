<?php
  session_start();
  if (isset($_SESSION['id'])) {
      header("Location:customer-profile.php");
  }
?>
<?php include("includes/header.php"); ?>
		
        <div class="header-height"></div>
        
        <section class="page-header">
            <div class="page-header-bottom"></div>
            <div class="container">
                <div class="page-content text-center">
                    <h2>If you have submitted the php form, Login</h2>
                   
                </div>
            </div>
        </section><!--/.page-header-->
        
        <section class="about-section padding">
            <div class="container">
                <div class="about-wrap row">
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
                    <div class="col-md-6 xs-padding">
                        <div class="about-img">
                            <img src="http://localhost/website_msf/website_msf/images/home/aboutimg.jpeg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.about-section-->
        

		
        <?php include("includes/footer.php"); ?>