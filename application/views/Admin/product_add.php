
            <!-- Side Nav START -->
            <?php $this->load->view('admin/includes/sidenav'); ?>    
            
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Header START -->
                <!-- <?php $this->load->view('admin/includes/header'); ?> -->
                <!-- Header END -->

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-title">
                           
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-heading border bottom">
                                        <h4 class="card-title">Add New Product</h4>
                                         <h5><?php echo $this->session->flashdata('message');  ?></h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="mrg-top-40">
                                            <div class="row">
                                                <div class="col-md-8 ml-auto mr-auto">
                                                    <form action="<?php echo site_url('Admin/product/add_product') ?>" method="post"  enctype="multipart/form-data">
                                                        <div class="row">
                                                             <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label >Product Category<span style="color: red;">*</span></label>
                                                                    <br>
                                                                    <select name="product_category" class="form-control" style=" height:42px;">
                                                                        <p class="error"><?php echo form_error('product_category');?></p>
                                                                      <option value="">Select a Category</option>
                                                                       <?php foreach($categories as $category): ?>
                                                                            <option value="<?php echo $category['category_id']; ?>">
                                                                                <?php echo $category['category_name']; ?>
                                                                            </option>
                                                                        <?php endforeach; ?> 
                                                                  </select> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                     
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Name<span style="color: red;">*</span></label>
                                                                    <input type="text" placeholder="Product Name" class="form-control" name="product_name" value="<?php echo set_value('product_name');?>" >
                                                                    <p class="error"><?php echo form_error('product_name');?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Price<span style="color: red;">*</span></label>
                                                                    <input type="text" placeholder="Product Price" class="form-control" name="product_price" value="<?php echo set_value('product_price');?>">
                                                                    <p class="error"><?php echo form_error('product_price');?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Image Front side<span style="color: red;">*</span></label>
                                                                    <input type="file" class="form-control" name="product_image_front" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Image Back side<span style="color: red;">*</span></label>
                                                                    <input type="file" class="form-control" name="product_image_back">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Image Top view<span style="color: red;">*</span></label>
                                                                    <input type="file" class="form-control" name="product_image_top">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Product Image Bottom view<span style="color: red;">*</span></label>
                                                                    <input type="file" class="form-control" name="product_image_bottom">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                        <label for="form-1-5" class="col-md-12 control-label">Product Description<span style="color: red;">*</span></label> <br>
                                                        <div class="col-md-12">
                                                            <textarea class="form-control" rows="3" id="form-1-5" name="product_description" value="<?php echo set_value('product_description');?>"></textarea>
                                                            <p class="error"><?php echo form_error('product_description');?></p>
                                                            <div class="text-right mrg-top-15">
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <!-- <div class="row">
                                                            <div class="col-md-6 col-xs-6">
                                                                <div class="checkbox">
                                                                    <input id="check1" type="checkbox">
                                                                    <label for="check1">I agree to the <a class="text-link" href="">Term & Conditions</a>.</label>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
               
        <?php $this->load->view('admin/includes/footer'); ?>
            </div>
            <!-- Page Container END -->

  