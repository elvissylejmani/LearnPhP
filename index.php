<?php
require 'Header.php';
require 'Core/Boot.php';
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

    <div class="ftco-blocks-cover-1">
  <?php 
  $result_set = mysqli_query($conn, "CALL SelectHeader_php()");
  $row=mysqli_fetch_array($result_set, MYSQLI_ASSOC);
  extract($row);
  ?>
    <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1><?= $Title ?></h1>
              <p><?= $Description ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container site-section">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
          <span class="text-primary">What We do</span>
          <h2 class="mb-4">The technology for the future generation</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis provident eius ratione velit, voluptas laborum nemo quas ad necessitatibus placeat?</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="feature-1">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            <div class="feature-1-contents">
              <h2>Title Name Here</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, officiis quo dicta molestias debitis.</p>
              <p><a href="#" class="more">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="feature-1">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            <div class="feature-1-contents">
              <h2>Title Name Here</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, officiis quo dicta molestias debitis.</p>
              <p><a href="#" class="more">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="feature-1">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            <div class="feature-1-contents">
              <h2>Title Name Here</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, officiis quo dicta molestias debitis.</p>
              <p><a href="#" class="more">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section section-2">
      <div class="container">
        <div class="row justify-content-center text-center mb-5 section-2-title">
          <div class="col-md-6">
            <span class="text-primary">Our Features</span>
            <h2 class="mb-4">The technology for the future generation</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis provident eius ratione velit, voluptas laborum nemo quas ad necessitatibus placeat?</p>
          </div>
        </div>
      </div>
      <div class="container site-section">
        <div class="row align-items-stretch feature-2">
          <div class="col-lg-9 feature-2-img">
            <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-3 feature-2-contents pl-lg-5">
            <div class="fixed-content">
              <span class="caption">01.</span>
              <h3 class="mb-5">Featured title name here</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus eaque laborum animi fugiat, suscipit in.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est vitae magni impedit cum laudantium, voluptas.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container site-section">
        <div class="row align-items-stretch feature-2">
          <div class="col-lg-9 feature-2-img order-lg-2">
            <img src="images/hero_2.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-3 feature-2-contents pr-lg-5">
            <div class="fixed-content">
              <span class="caption">02.</span>
              <h3 class="mb-5">Featured title name here</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus eaque laborum animi fugiat, suscipit in.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est vitae magni impedit cum laudantium, voluptas.</p>
            </div>
          </div>
        </div>
      </div>

    </div>


    <div class="container site-section">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
          <span class="text-primary">Design for the future</span>
          <h2 class="mb-4">The technology for the future generation</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis provident eius ratione velit, voluptas laborum nemo quas ad necessitatibus placeat?</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-6 mr-auto pr-lg-5">
              <div class="feature-3">
                <h3>Creative Technology</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores assumenda sequi magnam totam alias minima.</p>
              </div>
            </div>
            <div class="col-lg-6 ml-auto pl-lg-5">
              <div class="feature-3">
                <h3>World-class Quality</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores assumenda sequi magnam totam alias minima.</p>
              </div>
            </div>


            <div class="col-lg-6 mr-auto pr-lg-5">
              <div class="feature-3">
                <h3>Deep Resources</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores assumenda sequi magnam totam alias minima.</p>
              </div>
            </div>
            <div class="col-lg-6 ml-auto pl-lg-5">
              <div class="feature-3">
                <h3>World-class Quality</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores assumenda sequi magnam totam alias minima.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section section-4">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <blockquote class="testimonial-1">
              <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus totam sit delectus earum facere ex ea sunt, eos?</p>
              <cite><span class="text-black">Mike Dorney</span> &mdash; <span class="text-muted">CEO and Co-Founder</span></cite>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
        

    <div class="site-section bg-light">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="post-entry-1 h-100">
              <a href="#">
                <img src="images/post_1.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                <span class="meta">July 17, 2019</span>
                <a href="#"><h2>4 latest technology for future generation</h2></a>
                <a href="#" class="more">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="post-entry-1 h-100">
              <a href="#">
                <img src="images/post_2.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                <span class="meta">July 17, 2019</span>
                <a href="#"><h2>4 latest technology for future generation</h2></a>
                <a href="#" class="more">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="post-entry-1 h-100">
              <a href="#">
                <img src="images/post_3.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                <span class="meta">July 17, 2019</span>
                <a href="#"><h2>4 latest technology for future generation</h2></a>
                <a href="#" class="more">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="post-entry-1 h-100">
              <a href="#">
                <img src="images/post_4.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                <span class="meta">July 17, 2019</span>
                <a href="#"><h2>4 latest technology for future generation</h2></a>
                <a href="#" class="more">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php require 'footer.php'; ?>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>
