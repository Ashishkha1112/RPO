 <!-- SHOP LISTING-->
              <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row mb-3 align-items-center">       
                </div>
                <div class="row">
                  <!-- PRODUCT-->
                  <?php if (!empty($product)) { $i=1; foreach ($product as $prod) { ?>
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                          <div class="badge text-white bg-"></div><a class="d-block" href="<?php echo site_url('category/productdetail/'.$prod['product_id'].'/'.$prod['category_id']); ?>"> <?php if($prod['product_image_front']):?>
                          <img class="img-fluid w-100 h-130" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $prod['product_image_front'] ?>" width="80" height="40"/>
                          <?php endif; ?> </a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="<?php echo site_url('category/placeorder/'.$prod['product_id'])?>"> Place Order</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView_<?php echo $i?>" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <?php echo $prod['product_name'] ?></h6>
                      <p class="small text-muted"><?php echo"Rs ".$prod['product_price'] ?></p>
                    </div>    
                  </div>
                 <?php $i++; } }?>