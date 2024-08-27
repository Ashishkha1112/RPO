<!--  Modal for popup -->
      <?php if (!empty($product)) { $i=1; foreach ($product as $prod) { ?>
      <div class="modal fade" id="productView_<?php echo $i?>" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0">
                  <?php if($prod['product_image_front']):?>
                  <a class="glightbox product-view d-block h-100 bg-cover bg-center" style="background: url(<?php echo base_url();?>assets/uploads/productimg/<?php echo $prod['product_image_front'] ?>)" href="<?php echo base_url();?>assets/uploads/productimg/<?php echo $prod['product_image_back'] ?>" data-gallery="gallery<?php echo $i?>" data-glightbox="<?php echo $prod['product_name'] ?>"></a><a class="glightbox d-none" href="<?php echo base_url();?>assets/uploads/productimg/<?php echo $prod['product_image_top'] ?>" data-gallery="gallery<?php echo $i?>" data-glightbox="<?php echo $prod['product_name'] ?>"></a><a class="glightbox d-none" href="<?php echo base_url();?>assets/uploads/productimg/<?php echo $prod['product_image_bottom'] ?>" data-gallery="gallery<?php echo $i?>" data-glightbox="<?php echo $prod['product_name'] ?>"></a>
                  <?php endif; ?>
                </div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    <h2 class="h4"><?php echo $prod['product_name'] ?></h2>
                    <p class="text-muted">NRs. <?php echo $prod['product_price'] ?></p>
                    <p class="text-sm mb-4"><?php echo $prod['product_description'] ?></p>
                    <div class="row align-items-stretch mb-4 gx-0">
                      <div class="col-sm-7">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                          <div class="quantity">
                            <button class=" p-0"><i class="fas fa-caret-left"></i></button>
                            <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                            <button class=" p-0"><i class="fas fa-caret-right"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"  href="<?php echo site_url('category/placeorder/'.$prod['product_id'])?>">Place Order</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $i++; } }?>
      <!-- modal for popup ends -->