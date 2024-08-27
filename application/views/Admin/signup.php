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
                            <h4>Create New User</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-heading border bottom">
                                        <!-- <?php echo validation_errors();?> -->
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
                                                   <form method="post" action ="<?php  echo site_url('Admin/Signup/insert');?>"  enctype="multipart/form-data">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Name<span style="color: red;">*</span></label>
                                                                <input type="text" class="form-control" value="<?php echo set_value('name');?>" placeholder="Name" name="name">
                                                                <p class="error"><?php echo form_error('name');?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Email<span style="color: red;">*</span></label>
                                                                <input type="text" class="form-control" value="<?php echo set_value('email1');?>" placeholder="Email" name="email1">
                                                                <p class="error"><?php echo form_error('email1');?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Phone Number<span style="color: red;">*</span></label>
                                                                <input type="text" class="form-control"  value="<?php echo set_value('phone');?>" placeholder="Phone Number" name="phone">
                                                                <p class="error"><?php echo form_error('phone');?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>DOB<span style="color: red;">*</span></label>
                                                                <input type="date" class="form-control" value="<?php echo set_value('dob');?>" placeholder="Date of Birth" name="dob">
                                                                <p class="error"><?php echo form_error('dob');?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Address<span style="color: red;">*</span></label>
                                                                <input type="text" class="form-control" value="<?php echo set_value('dob');?>" placeholder="Address" name="address">
                                                                <p class="error"><?php echo form_error('address');?></p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                        <label class="col-md-12 control-label">Gender<span style="color: red;">*</span></label>
                                                        <div class="col-md-10">
                                                            <div class="radio radio-inline">
                                                                <input type="radio" checked="" name="radio1" id="rad1" value="Male">
                                                                <label for="rad1">Male</label>
                                                            </div>
                                                            <div class="radio radio-inline">
                                                                <input type="radio" checked="" name="radio1" id="rad2" value="Female">
                                                                <label for="rad2">Female</label>
                                                            </div>
                                                            <div class="radio radio-inline">
                                                                <input type="radio" checked="" name="radio1" id="rad3" value="Other">
                                                                <label for="rad3">Other</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                       <label>Profile Picture<span style="color: red;">*</span></label>
                                                                     <input type="file" class="form-control"  name= "profile">
                                                                     <p class="error"><?php echo form_error('profile');?></p>
                                                                </div>
                                                            </div>
                                                             

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Password<span style="color: red;">*</span></label>
                                                                <input type="password" class="form-control" placeholder="Password" name="password1" id="typepass">
                                                                <p class="error"><?php echo form_error('password1');?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Confirm Password<span style="color: red;">*</span></label>
                                                                <input type="password" class="form-control" placeholder=" ConfirmPassword" name="confpassword" id="typepass1">
                                                                <p class="error"><?php echo form_error('confpassword');?></p>
                                                                 <input type="checkbox" onclick="Toggle()">
                                                                    <label>Show Password</label>
 
                                                                     <script>
                                                                        // Change the type of input to password or text
                                                                        function Toggle() {
                                                                                 temp = document.getElementById("typepass");
                                                                                temp1 = document.getElementById("typepass1");
                                                                                 if (temp.type === "password" && temp1.type === "password") {
                                                                                      temp.type = "text";
                                                                                       temp1.type = "text";
                                                                                 }
                                                                                 else {
                                                                                        temp.type = "password";
                                                                                        temp1.type = "password";

                                                                                 }
                                                                         }
                                                                     </script>
                                                                </div>
                                                            </div>

                                                            <div class="mt-3 text-center">
                                                                <button class="btn btn-block btn-primary" >Create new account</button>
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