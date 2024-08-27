  <!-- Header START -->
  <?php $this->load->view('user/includes/header'); ?>
  <!-- Header Ends -->
  <body>
    <div class="page-holder">
      <!-- navbar starts -->
      <?php $this->load->view("User/includes/navbar") ?>
      <!-- navbar ends -->
      <div class="container">


        <section class="py-5">
        <?php if (!empty($product)) { foreach ($product as $prod) { ?>
          <?php if (!empty($usersss)) { foreach ($usersss as $user) { ?>
          <!-- BILLING ADDRESS-->
          <h2 class="h5 text-uppercase mb-4">Billing details</h2>
          <div class="row">
            <div class="col-lg-8">
              <form action="<?php echo site_url('category/place_order/'.$prod['product_id'])?>" method="post">
                <div class="row gy-3">
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="firstName">Full name <span style="color: red;">*</span></label>
                    <input class="form-control form-control-lg" type="text" name="firstName" value="<?php echo $user['Name'] ?>" readonly >

                  </div>
  
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="email">Email address <span style="color: red;">*</span> </label>
                    <input class="form-control form-control-lg" type="email" name="email" value="<?php echo $user['Email'] ?>" readonly>
                  </div>
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="phone">Phone number <span style="color: red;">*</span></label>
                    <input class="form-control form-control-lg" type="tel" name="phone" value="<?php echo $user['Phone'] ?>" readonly>
                  </div>
                  <div class="col-lg-12">
                    <label class="form-label text-sm text-uppercase" for="address">Address <span style="color: red;">*</span></label>
                    <input class="form-control form-control-lg" type="text" name="address" value="<?php echo $user['Address'] ?>">
                  </div>
                  <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="city">Tole </label>
                    <input class="form-control form-control-lg" type="text" name="city">
                  </div>
                  <div class="col-lg-12 form-group">
                    <button class="btn btn-dark" type="submit">Place order</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- ORDER SUMMARY-->
            <div class="col-lg-4">
              
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Your order</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center justify-content-between"><strong class="small fw-bold"><?php echo $prod['product_name'] ?></strong><span class="text-muted small">NRs. <?php echo $prod['product_price'] ?></span></li>
                    <li class="border-bottom my-2"></li>
                    <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small fw-bold">Total</strong><span>NRs.<?php echo $prod['product_price'] ?></span></li>
                  </ul>
                </div>
              </div>
              
            </div>
          </div>
          <?php } }?>
          <?php } }?>
        </section>
      </div>
<!-- footer starts -->
      <?php $this->load->view("User/includes/footer") ?>
<!-- footer ends -->