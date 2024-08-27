<!-- Header START -->
  <?php $this->load->view('user/includes/header'); ?>
  <!-- Header Ends -->

  <body>
    <div class="page-holder">
       
                  <!--  Modal for popup -->
                  <?php $this->load->view('user/includes/modalforpopup');  ?>
                  <!-- modal for popup ends -->
                  <h5><?php echo $this->session->flashdata('place_order');  ?></h5>
                    <h5><?php echo $this->session->flashdata('place');  ?></h5>
                  <div class="page-wrapper text-info">
                     <!-- HERO SECTION-->
                    <?php $this->load->view('user/includes/herosection'); ?>
                    <!-- Hero Section Ends -->

                  <!-- SHOP LISTING-->
                    <?php $this->load->view('user/includes/shoplistsforproducts.php'); ?>
                    <!-- shop listing ends -->
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    
      <!-- JavaScript files-->
 <?php $this->load->view('user/includes/footer'); ?>