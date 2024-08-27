
<!-- Header START -->
<?php $this->load->view('user/includes/header'); ?>
<!-- Header Ends -->

<body>
  <div class="container mt-4">
    <div class="row">
      <?php if (!empty($useradmin)) { $i=1; foreach ($useradmin as $user) { ?>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body text-center">
            <img class="img-fluid mb-3" src="<?php echo base_url();?>assets/uploads/<?php echo $user['Profile'] ?>" alt="Profile Image" style="max-width: 100px">
            <h4 class="card-title"><?php echo $user['Name']; ?></h4>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">General Info</h4>
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-3">
                <p class="m-0 font-weight-bold">Name</p>
              </div>
              <div class="col-md-6">
                <p class="m-0"><?php echo $user['Name']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row mb-3">
              <div class="col-md-3">
                <p class="m-0 font-weight-bold">Email</p>
              </div>
              <div class="col-md-6">
                <p class="m-0"><?php echo $user['Email']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row mb-3">
              <div class="col-md-3">
                <p class="m-0 font-weight-bold">Contact</p>
              </div>
              <div class="col-md-6">
                <p class="m-0"><?php echo $user['Phone']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row mb-3">
              <div class="col-md-3">
                <p class="m-0 font-weight-bold">Address</p>
              </div>
              <div class="col-md-6">
                <p class="m-0"><?php echo $user['Address']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-3">
                <p class="m-0 font-weight-bold">Status</p>
              </div>
              <div class="col-md-6">
                <p class="m-0">
                  <span class="status online mrg-top-10"></span>
                      <?php $a = $user['status']; ?>
                      <?php if ($a == 0): ?>
                          <span class="mrg-left-10">Available</span>
                      <?php else: ?>
                          <span class="mrg-left-10">UnAvailable</span>
                      <?php endif; ?>
                      <!-- <span class="mrg-left-10">Available</span> -->
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
       <?php $i++; } }?>
  
      <div class="my-4">
            <!-- Nav tabs -->
             <ul class="nav nav-tabs" id="myTabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="productsAdded-tab" data-toggle="tab" href="#productsAdded" role="tab" aria-controls="productsAdded" aria-selected="true">Products Added</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="productsSold-tab" data-toggle="tab" href="#productsSold" role="tab" aria-controls="productsSold" aria-selected="false">Products Sold</a>
                </li>
              </ul>
      </div>
         <!-- Tab panes -->
    <div class="tab-content mt-3">
      <div class="tab-pane fade show active" id="productsAdded" role="tabpanel" aria-labelledby="productsAdded-tab">
        <p>Note: Product will published only after verification.</p>
        <div class="row">
        <?php if (!empty($productt)) { $i=1; foreach ($productt as $prod) { ?>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body text-center">
                <img class="img-fluid mb-3" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $prod['product_image_front'] ?>" style="max-width: 100px">
                <h4 class="card-title"><?php echo $prod['product_name'] ?></h4>
                 <p class="small text-muted"><?php echo"Rs ".$prod['product_price'] ?></p>
              </div>
            </div>
          </div>
            <?php $i++; } }?>
        </div>
      </div>
      <div class="tab-pane fade" id="productsSold" role="tabpanel" aria-labelledby="productsSold-tab">
        <div class="row">
                <?php if (!empty($producttt)) { $i=1; foreach ($producttt as $prod) { ?>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body text-center">
                <img class="img-fluid mb-3" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $prod['product_image_front'] ?>" style="max-width: 100px">
              <h4 class="card-title"><?php echo $prod['product_name'] ?></h4>
                 <p class="small text-muted"><?php echo"Rs ".$prod['product_price'] ?></p>
              </div>
            </div>
          </div>
            <?php $i++; } }?>
        </div>
      </div>
    </div>
  </div>

    </div>
  </div>
</body>


<!-- Footer -->
<?php $this->load->view('user/includes/footer'); ?>
