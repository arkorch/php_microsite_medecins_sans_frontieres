
<footer class="widget-section">
           <div class="widget-wrap padding">
               <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 sm-padding">
                            <div class="widget-content">
                                <a href="#"><img src="img/logo-light.png" alt="brand"></a>
                                <p> Medicine Sans Frontier is an international humanitarian medical
                non-governmental organisation of French origin best known for
                its projects in conflict zones and in countries affected by
                endemic diseases.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 sm-padding">
                            <div class="widget-content footer">
                                <h4>Other MSF Campaigns</h4>
                                <ul class="widget-links">
                                <li>
                  <a href="https://www.msf.org/yemen"
                    >Refugee Crisis in Yemen</a
                  >
                </li>
                <li>
                  <a href="https://www.msf.org/ukraine">War in Ukraine</a>
                </li>
                <li>
                  <a href="https://www.msf.org/madagascar"
                    >Madagascar: Cyclone Relief</a
                  >
                </li>
                                </ul>
                            </div> 
                        </div>
                        <div class="col-lg-4 col-sm-6 sm-padding">
                            <div class="widget-content footer">
                                <h4>Headquaters</h4>
                                <p>   551 Adelaide Street West, Toronto, Ontario, Canada M5V 0N8,</p>
                                <span>Info@abresmsf.org</span>
                                <span>tel: +1 (800) 982-7903</span>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <div class="footer-section align-center">
                <div class="container">
                    <p>&copy; 2022 Arko | Kanak | Madhur</p>
                </div>
		    </div><!-- /.footer-section -->
        </footer><!--/.widget-section-->

		<a data-scroll href="#header" id="scroll-to-top"><i class="ti-arrow-up"></i></a>
        
		<!--ARKO Linking the jQuery Lib -->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/vendor/tether.min.js"></script>
		<script src="js/vendor/jquery.slicknav.min.js"></script>
		<script src="js/vendor/owl.carousel.min.js"></script>
		<script src="js/vendor/smooth-scroll.min.js"></script>
		<script src="js/vendor/jquery.isotope.v3.0.2.js"></script>
		<script src="js/vendor/imagesloaded.pkgd.min.js"></script>
        <script src="js/vendor/venobox.min.js"></script>
		<script src="js/vendor/jquery.ajaxchimp.min.js"></script>
		<script src="js/vendor/slick.min.js"></script>
		<script src="js/vendor/wow.min.js"></script>
		<script src="js/main.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.min.js'></script>
        <script src='https://unpkg.com/vue-pure-lightbox@3.1.0/dist/VuePureLightbox.umd.min.js'></script>
        <script  src="app.js"></script>
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
  jQuery(function($) {

   var path = window.location.href; 
   $(".nav li a").removeClass("active");
     $('.nav li a').each(function() {
         var href = $(this).attr('href');
console.log(path);
      if (href === path) {
       $(this).addClass('active');
      }
     });
    });
            
          </script>

    </body>

</html>