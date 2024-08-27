            <!-- Side nav Starts -->
            <?php $this->load->view('Admin/includes/sidenav');?>
            <!-- Side nav ends -->
<!-- Page Container START -->
            <div class="page-container">
                <!-- Header start by including -->
               <!-- <?php $this->load->view('Admin/includes/header');?>  -->
               <!-- Header Ends -->

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-title">
                            <h4>Edit Product</h4>
                            <h5><?php echo $this->session->flashdata('message');  ?></h5>
                            <!-- <?php echo validation_errors(); ?> -->
                        </div>
                                <!-- aedit -->
                          <div class="card mb-4">
                    <h5 class="card-header">Edit Product</h5>
                    <hr class="my-0" />


                    <div class="card-body">
                      <form  method="POST" action="<?php echo site_url('admin/productshow/saveproduct/'.$product[0]->product_id); ?>" method="post"  enctype="multipart/form-data" >
                        <?php foreach ($product as $prod):  ?>
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label  class="form-label">Product Name</label>
                            <input class="form-control" type="text" name="ProductName" value="<?php echo $prod->product_name ?>" autofocus />
                          <p class="error"><?php echo form_error('ProductName');?></p>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label  class="form-label">Product Price</label>
                            <input class="form-control" type="text" name="ProductPrice" value="<?php echo $prod->product_price ?>">
                            <p class="error"><?php echo form_error('ProductPrice');?></p>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label  class="form-label">Product Description</label>
                            <input class="form-control" type="text" name="ProductDescription" value="<?php echo $prod->product_description?>" />
                              <p class="error"><?php echo form_error('ProductDescription');?></p>
                          </div>
                          <div class="mb-3 col-md-6">
                                <div class="form-group">
                                    <label>Image Front side</label>
                                    <input type="file" placeholder="Insert images of the product" class="form-control" name="new_product_image_front" value="<?php echo $prod->product_image_front?> ">
                                </div>
                          </div>
                          <div class="mb-3 col-md-6">
                                <div class="form-group">
                                    <label>Product Image Back side</label>
                                    <input type="file" placeholder="Insert images of the product" class="form-control" name="new_product_image_back">
                                </div>
                        </div>
                         <div class="mb-3 col-md-6">
                                <div class="form-group">
                                    <label>Product Image Top view</label>
                                    <input type="file" placeholder="Insert images of the product" class="form-control" name="new_product_image_top">
                                </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <div class="form-group">
                                <label>Product Image Bottom view</label>
                                <input type="file" placeholder="Inserimages of the product" class="form-control" name="new_product_image_bottom">
                            </div>
                          </div>

                         <div class="mb-3 col-md-6">
                          <div class="form-group">
                              <label>Product Image</label><br>
                              <?php if($prod->product_image_front):?>
                                  <img class="thumb-img" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $prod->product_image_front ?>" width="60" height="40"/>
                              <?php endif; ?>
                              <?php if($prod->product_image_back):?>
                                  <img class="thumb-img" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $prod->product_image_back ?>" width="60" height="40"/>
                              <?php endif; ?>
                              <?php if($prod->product_image_top):?>
                                  <img class="thumb-img" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $prod->product_image_top ?>" width="60" height="40"/>
                              <?php endif; ?>
                              <?php if($prod->product_image_bottom):?>
                                  <img class="thumb-img" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $prod->product_image_bottom ?>" width="60" height="40"/>
                              <?php endif; ?>
                          </div>
                      </div>  

                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      <?php endforeach; ?>
                      </form>
                    </div>
                    <!-- /edit -->
                  </div>
                        
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php $this->load->view('Admin/includes/footer');?>

            </div>
            <!-- Page Container END -->