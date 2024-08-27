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

        <!-- SHOP SIDEBAR-->
        <?php $this->load->view('user/includes/sidenav'); ?>
        <!-- sidebar ends -->

        <!-- SHOP LISTING-->
        <?php $this->load->view('user/includes/shoplistsforproducts.php'); ?>
        <!-- shop listing ends -->
      </div>
                <!-- PAGINATION-->
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center justify-content-lg-end">
                    <li class="page-item mx-1"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item mx-1 active"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item ms-1"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
      </div>
    
      <!-- JavaScript files-->
 <?php $this->load->view('user/includes/footer'); ?>