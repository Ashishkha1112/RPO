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
                            <h4>New Category</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-heading border bottom">
                                        <!-- <h5><?php echo validation_errors(); ?></h5> -->
                                        <h4 class="card-title">Add the following details </h4>
                                        
                                        <!-- error or sucessful message -->
                                        <h5><?php echo $this->session->flashdata('message');  ?></h5>
                                        <h5><?php echo $this->session->flashdata('error');  ?></h5>

                                    </div>
                                    <div class="card-block">
                                        <div class="mrg-top-40">
                                            <div class="row">
                                                <div class="col-md-8 ml-auto mr-auto">
                                                    <!-- site url on action redirects to Controller category and to function add_new -->
                                                    <form method="post" action="<?php echo site_url('admin/category/add_new');?>" enctype="multipart/form-data">

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Category Name<span style="color: red;">*</span></label>
                                                                    <input type="text" placeholder="category" value="<?php echo set_value('category_name');?>" name="category_name" class="form-control">
                                                                    <p class="error"><?php echo form_error('category_name');?></p>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Category Image<span style="color: red;">*</span></label>
                                                                    <input type="file" name="userfile" class="form-control" />
                                                                    <p class="error"><?php echo form_error('userfile');?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="card">
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <h4 class="card-title">Category Description<span style="color: red;">*</span></h4>
                                                                                <textarea cols="10" class="form-control" name="category_description" value="<?php echo set_value('category_description');?>" rows="10"></textarea>
                                                                                <p class="error"><?php echo form_error('category_description');?></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">  
                                                            <div class="col-md-6 col-xs-6">
                                                                <div class="text-right mrg-top-5">
                                                                    <button type="submit" class="btn btn-primary">Save </button>
                                                                </div>
                                                            </div>
                                                        </div>
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

                <?php $this->load->view('Admin/includes/footer');?>

            </div>
            <!-- Page Container END -->