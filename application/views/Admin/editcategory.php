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
                            <h4>Edit Category</h4>
                        </div>
                                <!-- aedit -->
                          <div class="card mb-4">
                    <h5 class="card-header">Category</h5>
                    <hr class="my-0" />


                    <div class="card-body">
                      <form  action="<?php echo site_url('admin/categoryshow/savecategory/' . $categories[0]->category_id); ?>" method="post"  enctype="multipart/form-data" >
                        <?php foreach ($categories as $cat):  ?>
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label  class="form-label">Category Name</label>
                            <input class="form-control" type="text" name="newcategoryname" value="<?php echo $cat->category_name ?>" autofocus />
                            <p class="error"><?php echo form_error('newcategoryname');?></p>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label  class="form-label">Category Description</label>
                            <input class="form-control" type="text" name="newcategorydescription" value="<?php echo $cat->category_description?>" />
                            <p class="error"><?php echo form_error('newcategorydescription');?></p>
                          </div>
                
                          <div class="mb-3 col-md-6">
                                <div class="form-group">
                                    <label>Category Image</label>
                                    <input type="file" placeholder="Insert images of the Category" class="form-control" name="newcategoryimage">
                                </div>
                        </div>
            
                      
                         <div class="mb-3 col-md-6">
                          <div class="form-group">
                              <label>Previous Category Image</label><br>
                              <?php if($cat->category_image):?>
                                  <img class="thumb-img" src="<?php echo base_url();?>assets/uploads/<?php echo $cat->category_image ?>" width="60" height="40"/>
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