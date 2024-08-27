<!-- Header START -->
  <?php $this->load->view('user/includes/header'); ?>
  <!-- Header Ends -->
  <body>
    <div class="page-holder bg-light">
      <!-- navbar starts -->
      <?php $this->load->view("User/includes/navbar") ?>
      <!-- navbar ends -->

      <section class="py-5">
        <div class="container">
          <?php if (!empty($product)) {  ?>
          <div class="row mb-5">
            <div class="col-lg-6">
              <!-- PRODUCT SLIDER-->
      
              <div class="row m-sm-0">
                <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0 px-xl-2">
                  <div class="swiper product-slider-thumbs">
                    <div class="swiper-wrapper">
                       <?php if($product['product_image_front']):?>
                      <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $product['product_image_front'] ?>" alt="..."></div>
                       <?php endif; ?>

                       <?php if($product['product_image_back']):?>
                      <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $product['product_image_back'] ?>" alt="..."></div>
                       <?php endif; ?>

                      <?php if($product['product_image_top']):?>
                      <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $product['product_image_top'] ?>" alt="..."></div>
                       <?php endif; ?>

                      <?php if($product['product_image_bottom']):?>
                      <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $product['product_image_bottom'] ?>" alt="..."></div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-10 order-1 order-sm-2">
                  <div class="swiper product-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide h-auto"><a class="glightbox product-view" href="<?php echo base_url();?>assets/uploads/productimg/<?php echo $product['product_image_front'] ?>" data-gallery="gallery2" data-glightbox="Product item 1"><img class="img-fluid" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $product['product_image_front'] ?>" alt="..."></a></div>
product
                      <div class="swiper-slide h-auto"><a class="glightbox product-view" href="<?php echo base_url();?>assets/uploads/productimg/<?php echo $product['product_image_back'] ?>" data-gallery="gallery2" data-glightbox="Product item 2"><img class="img-fluid" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $product['product_image_back'] ?>" alt="..."></a></div>

                      <div class="swiper-slide h-auto"><a class="glightbox product-view" href="<?php echo base_url();?>assets/uploads/productimg/<?php echo $product['product_image_top'] ?>" data-gallery="gallery2" data-glightbox="Product item 3"><img class="img-fluid" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $product['product_image_top'] ?>" alt="..."></a></div>

                      <div class="swiper-slide h-auto"><a class="glightbox product-view" href="<?php echo base_url();?>assets/uploads/productimg/<?php echo $product['product_image_bottom'] ?>" data-gallery="gallery2" data-glightbox="Product item 4"><img class="img-fluid" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $product['product_image_bottom'] ?>" alt="..."></a></div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <!-- PRODUCT DETAILS-->
            <div class="col-lg-6">
              <h1><?php echo $product['product_name'] ?></h1>
              <p class="text-muted lead">NRs. <?php echo $product['product_price'] ?></p>
              <p class="text-sm mb-4"><?php echo $product['product_description'] ?></p>
              <div class="row align-items-stretch mb-4">
                <div class="col-sm-5 pr-sm-0">
                  <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                    <div class="quantity">
                      <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                      <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                      <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="<?php echo site_url('category/placeorder/'.$product['product_id'])?>">Place Order</a></div>
              </div><a class="text-dark p-0 mb-4 d-inline-block" href="#!"><i class="far fa-heart me-2"></i>Add to wish list</a><br>
              <ul class="list-unstyled small d-inline-block">
                <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase">SKU:</strong><span class="ms-2 text-muted"><?php echo $product['product_id'] ?></span></li>
                <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Category:</strong><a class="reset-anchor ms-2" href="<?php echo site_url('category/show/'.$product['category_id'])?>"><?php echo $product['category_name']?></a></li>
              </ul>
            </div>
          </div>
          <?php } ?>




          <!-- DETAILS TABS-->
          <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link text-uppercase active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a></li>
          </ul>
          <div class="tab-content mb-5" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
              <div class="p-4 p-lg-5 bg-white">
                <h6 class="text-uppercase">Product description </h6>
                <p class="text-muted text-sm mb-0"><?php echo $product['product_description'] ?></p>
              </div>
            </div>  
          </div>


          <!-- RELATED PRODUCTS-->
          <h2 class="h5 text-uppercase mb-4">Related products</h2>
          <div class="row">
            <!-- PRODUCT-->
            <?php foreach($related_product as $prod){?>
            <div class="col-lg-3 col-sm-6">
              <div class="product text-center skel-loader">
                <div class="d-block mb-3 position-relative"><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $prod['product_image_front'] ?>" alt="..."></a>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="#!">Add to cart</a></li>
                      <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class="reset-anchor" href="detail.html"><?php echo $prod['product_name'] ?></a></h6>
                <p class="small text-muted">NRs. <?php echo $prod['product_price'] ?></p>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>
     













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