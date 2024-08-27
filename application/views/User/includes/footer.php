  <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="<?php echo site_url('welcome') ?>" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">RPO</span></h1>
                </a>
                <p>The Recondition Product Outlet is a response to this growing trend, aiming to provide high-quality, refurbished products at affordable prices, while also promoting sustainability by reducing waste and conserving resources.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Dhangadhi, Kailali, Nepal</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@rpo.com.np</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+97798123456789</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="<?php echo site_url('welcome'); ?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="<?php echo site_url('UserLogin/contact') ?>"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                            <a class="text-dark mb-2" href="<?php echo site_url('UserLogin/about') ?>"><i class="fa fa-angle-right mr-2"></i>About US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="footer">
                        <div class="copyright">
                            <span>Copyright © <b> <?php echo date('Y'); ?> <a href="" class="text-dark">. Group 3</a></b>. All rights reserved.</span>
                        </div>
                    </div>
        </div>
    </div>
    <!-- Footer End -->
</div>
 <!-- JavaScript files-->
      <script src="<?php echo base_url();?>/assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url();?>/assets/user/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="<?php echo base_url();?>/assets/user/vendor/nouislider/nouislider.min.js"></script>
      <script src="<?php echo base_url();?>/assets/user/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="<?php echo base_url();?>/assets/user/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
      <script src="<?php echo base_url();?>/assets/user/js/front.js"></script>
          <!-- Bootstrap JS and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //

        function injectSvgSprite(path) {
        
            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
        
      </script>
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      
    </div>
  </body>
</html>