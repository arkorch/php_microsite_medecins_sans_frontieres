<?php include("includes/header.php"); ?>
		
<div id="main-slider" class="dl-slider">
            <div class="single-slide">
                <div class="bg-img" style="background-image: url(img/slider1.jpg);"></div>
                <div class="slider-content-wrap d-flex align-items-center text-left">
                    <div class="container">
                        <div class="slider-content">
                            <div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="1s">Live AB Free Challenge
                            </div></div></div>
                            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2s">Eat Healthy Food
                            </div></div>
                            </div>
                            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2.5s">Live a Healthy Life
                            </div></div></div>
                            <div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="3s">First 5000 participants get a free subscription. 
                            </div></div></div>
                            <div class="dl-btn-group">
                                <div class="inner-layer">
                                    <a href="shop.html" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">View Product <i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div><!--Slide-1-->
            <div class="single-slide">
                <div class="bg-img" style="background-image: url(img/slider2.jpg);"></div>
                <div class="slider-content-wrap d-flex align-items-center text-left">
                    <div class="container">
                        <div class="slider-content">
                            <div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="1s">Live AB Free Challenge</div></div></div>
                            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2s">Eat Healthy Food</div></div>
                            </div>
                            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2.5s">Live a Healthy Life</div></div></div>
                            <div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="3s">First 5000 participants get a free subscription.</div></div></div>
                            <div class="dl-btn-group">
                                <div class="inner-layer">
                                    <a href="shop.html" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">View Product <i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div><!--Slide-2-->
        </div><!--/.slider-section-->
        <section class="feature-section padding">
            <div class="container">
                <div class="feature-wrap row">
                    <div class="col-lg-6 sm-padding">
                        <div class="feature-info">
                           <div class="section-heading">
                               <img src="img/title-border.png" alt="img">
                                <h2>Steps</h2>
                           </div>
                            <ul class="feature-list">
                            <li>
                                    <i class="fa fa-check"></i>
                                    <div class="feature-content"><h3>1. Sign Up</h3>
                                    <p>We will provide you with all the information you need about purchase, brands and stores. </p>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    <div class="feature-content"><h3>2. Post the pics</h3>
                                    <p>We will provide you with all the information you need about purchase, brands and stores. </p>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    <div class="feature-content"><h3>3. Scan the barcodes</h3>
                                    <p>We will provide you with all the information you need about purchase, brands and stores. </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 sm-padding">
                        <div class="feature-img">
                            <img src="img/feature-1.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.feature-section-->
        <section class="contact-section padding bg-grey">
            <div class="dots"></div>
		    <div class="container">
		        <div class="contact-wrap d-flex align-items-center row">
                  
		            <div class="col-md-6 padding-15">
		                <div class="contact-form">
                            <form id="signupForm" method="post" id="ajax_form" class="form-horizontal">
                                <div class="form-group colum-row row">
                                    <div class="col-sm-6">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" id="contact" name="contact" class="form-control" placeholder="Contact  Number" required>
                                    </div>
                                    <div class="col-sm-12">
                                       

                                        <select name="signup" id="signup" placeholder="Sign Up For">
                                            <option value="" disabled selected>Select your option</option>
                                            <option value="challenge">Sign-me up for challenge
                                        </option>
                                          <option value="informationonly">Send me information only
                                        </option>
                                          <option value="msf">Sign-up to MSF
                                        </option>
                                         
                                        </select> </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="submit" class="default-btn btn float-right login_btn" value="Send Message">  
                                        <!-- <button id="submit" class="default-btn" type="submit">Send Message</button> -->
                                    </div>
                                </div>
                                <div id="form-messages"  class="message-message alert" role="alert"></div>
                                <span></span>
                            </form>
                        </div>
		            </div>
                    <div class="col-md-6 padding-15">
		                <div class="contact-info">
		                    <h2>Get in touch with us & <br>send us message today!</h2>
		                    
		                </div>
		            </div>
		        </div>
		    </div>
		</section><!--/.contact-section-->
        <div class="row padding">
          <!--Logo Design-->
          <div class="col-sm-4 text-center">
            <h1>200+</h1>
            <h4>Seminars for Doctors</h4>
          </div>
          <div class="col-sm-4 text-center">
            <h1>85</h1>
            <h4>Member Countries</h4>
          </div>
          <div class="col-sm-4 text-center">
            <h1>500+</h1>
            <h4>Operations Completed</h4>
          </div>
        </div>
        <!-- <div class="container" >
    <div class="row">
    <div class="col-sm-8 first-column align-items-center">
            <div class="vidcontainer">
              <div class="Flexible-container">
                <video width="500" height="322" controls="" class="" autoplay muted>
                  <source src="http://localhost/website_msf/website_msf/images/home/ElinCommercial.mp4">
                </video>
              </div>
            </div>
          </div>
          </div>
          </div> -->

          <div class="container myfont1 padding">
        <div class="row header">
          <div class="col-xs-12 text-left">
            <h3>What is Anti-Biotic Resistance ?</h3>
          </div>
        </div>
        <br>
        <div class="row">
          <!--Video-->
          <div class="col-sm-8 first-column">
            <div class="vidcontainer">
              <div class="Flexible-container">
                <video width="500" height="322" controls="" autoplay muted>
                  <source src="http://localhost/website_msf/website_msf/images/home/ElinCommercial.mp4">
                </video>
              </div>
            </div>
          </div>
          <div class="col-sm-4 second-column">
            <h4>Over-medication</h4>
            <p>
              Superbugs are increasingly appearing in food-MRSA in pork,
              resistant salmonella in turkey-and have caused widespread
              outbreaks of food poisoning in the U.S. Because meat and poultry
              producers are not required to report how they use the drugs-which
              ones, how much, what animals-documenting a clear connection
              between.
            </p>
            <br>
            <h4>Anti-Biotics in Food</h4>
            <p>
              More antibiotics go into the food we eat than we take ourselves.
              About 80 percent of all antibiotics sold in the United States are
              used on farm animals. Most animals are dosed regularly-sometimes
              even daily-with antibiotic-laced food and water in a practice
              known as subtherapeutic administration.
            </p>
          </div>
        </div>
        <br>
        <img src="http://localhost/website_msf/website_msf/images/home/herobanner.png" style="width: 100%; height: auto;" alt="Hero" class="responsive padding ">
        <div class="row">
          <!--Posters-->
          <div class="col-sm-8 first-column">
            <img src="http://localhost/website_msf/website_msf/images/home/antibiotic-resistance-kills.jpeg" class="responsive img-rounded">
          </div>
          <div class="col-sm-4 second-column">
            <h4>TRY THIS AT HOME</h4>
            <p>
              Nevertheless, the Centers for Disease Control and Prevention and
              other government agencies have testified before Congress that
              there is a definitive link between the two. This position is
              supported by the American Medical Association, the American
              Academy of Pediatrics, the World Health Organization and other
              leading public health and medical groups.
            </p>
          </div>
        </div>
        <br>
        <div class="row">
          <!--Soap-->
          <div class="col-sm-4 first-column">
            <img src="http://localhost/website_msf/website_msf/images/home/antibiotic-resistance-kills.jpeg" class="responsive img-rounded">
          </div>
          <div class="col-sm-4 second-column">
            <img src="http://localhost/website_msf/website_msf/images/home/antibiotic-resistance-kills.jpeg" class="responsive img-rounded">
            <div class="col-sm-6"></div>
          </div>
          <div class="col-sm-4">
            <h4>Know your meat!</h4>
            <p>
              The entire design language/colour palette was derived from the
              logo. Interestingly, the logo design exercise was a back and forth
              process to create a logo that doesn't just represent the city but
              allow its graphic elements to be used as a recipe for merchandise
              &amp; stationary design.
            </p>
          </div>
        </div>
      </div>







          
        <section class="gallery-column-images padding bg-grey">
        <div class="section-heading mb-40 text-center">
                    <img src="img/title-border.png" alt="img">
                    <h2>Our Gallery</h2>
                </div> 
        <div id="app">
  <div class="container" >
    <div class="row">
   
  
    <div class="col-xs-6 col-sm-3">
        <vue-pure-lightbox
        thumbnail="img/gallery/gallery1.png"
         :images="[
      'img/gallery/gallery1.png',
      'img/gallery/gallery2.png',
      'img/gallery/gallery3.png',
      'img/gallery/gallery4.png',
      'img/gallery/gallery5.png',
      'img/gallery/gallery6.png',
      'img/gallery/gallery7.png',
      'img/gallery/gallery8.png',
      
        ]"
      ></vue-pure-lightbox>
      </div>
   
      <div class="col-xs-6 col-sm-3">
  <vue-pure-lightbox
    thumbnail="img/gallery/gallery2.png"
    :images="[
        
      'img/gallery/gallery2.png',
      'img/gallery/gallery3.png',
      'img/gallery/gallery4.png',
      'img/gallery/gallery5.png',
      'img/gallery/gallery6.png',
      'img/gallery/gallery7.png',
      'img/gallery/gallery8.png',
      'img/gallery/gallery1.png',
     
    ]"
  ></vue-pure-lightbox>
      </div>
      <div class="col-xs-6 col-sm-3">
  <vue-pure-lightbox
    thumbnail="img/gallery/gallery3.png"
    :images="[
        
      'img/gallery/gallery3.png',
      'img/gallery/gallery4.png',
      'img/gallery/gallery5.png',
      'img/gallery/gallery6.png',
      'img/gallery/gallery7.png',
      'img/gallery/gallery8.png',
      'img/gallery/gallery1.png',
      'img/gallery/gallery2.png',
      
     
    ]"
  ></vue-pure-lightbox>
      </div>
      <div class="col-xs-6 col-sm-3">
          <vue-pure-lightbox
    thumbnail="img/gallery/gallery4.png"
    :images="[
       
      'img/gallery/gallery4.png',
      'img/gallery/gallery5.png',
      'img/gallery/gallery6.png',
      'img/gallery/gallery7.png',
      'img/gallery/gallery8.png',
      'img/gallery/gallery1.png',
      'img/gallery/gallery2.png',
      'img/gallery/gallery3.png',
      
    
    ]"
  ></vue-pure-lightbox>

  
      </div>
      <div class="col-xs-6 col-sm-3">
          <vue-pure-lightbox
    thumbnail="img/gallery/gallery5.png"
    :images="[
       
      'img/gallery/gallery5.png',
      'img/gallery/gallery6.png',
      'img/gallery/gallery7.png',
      'img/gallery/gallery8.png',
      'img/gallery/gallery1.png',
      'img/gallery/gallery2.png',
      'img/gallery/gallery3.png',
      'img/gallery/gallery4.png',
    
    ]"
  ></vue-pure-lightbox>

  
      </div>
      <div class="col-xs-6 col-sm-3">
          <vue-pure-lightbox
    thumbnail="img/gallery/gallery6.png"
    :images="[
    
      
      'img/gallery/gallery6.png',
      'img/gallery/gallery7.png',
      'img/gallery/gallery8.png',
      'img/gallery/gallery1.png',
      'img/gallery/gallery2.png',
      'img/gallery/gallery3.png',
      'img/gallery/gallery4.png',
      'img/gallery/gallery5.png',
    
    ]"
  ></vue-pure-lightbox>

  
      </div>
      <div class="col-xs-6 col-sm-3">
          <vue-pure-lightbox
    thumbnail="img/gallery/gallery7.png"
    :images="[
      
       
      'img/gallery/gallery7.png',
      'img/gallery/gallery8.png',
      'img/gallery/gallery1.png',
      'img/gallery/gallery2.png',
      'img/gallery/gallery3.png',
      'img/gallery/gallery4.png',
      'img/gallery/gallery5.png',
      'img/gallery/gallery6.png',
    
    ]"
  ></vue-pure-lightbox>

  
      </div>
      <div class="col-xs-6 col-sm-3">
          <vue-pure-lightbox
    thumbnail="img/gallery/gallery8.png"
    :images="[
      
      
      'img/gallery/gallery8.png',
      'img/gallery/gallery1.png',
      'img/gallery/gallery2.png',
      'img/gallery/gallery3.png',
      'img/gallery/gallery4.png',
      'img/gallery/gallery5.png',
      'img/gallery/gallery6.png',
      'img/gallery/gallery7.png',
    
    ]"
  ></vue-pure-lightbox>

  
      </div>
      </div>
    </div> <!-- Row -->
    
    
  </div>  <!-- Container --> 
  
  </section>
        
        <br /><br /><br /><br />
     
    </main>
    <?php include("includes/footer.php"); ?>