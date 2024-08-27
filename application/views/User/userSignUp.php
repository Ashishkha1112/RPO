<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>Sign Up</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/logo/favicon.png">

    <!-- plugins css -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- core css -->
    <link href="<?php echo base_url();?>/assets/css/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="authentication">
            <div class="sign-in-2">
                <div class="container-fluid no-pdd-horizon">
                    <div class="row">
                        <div class="col-md-10 mr-auto ml-auto">
                            <div class="row">
                                <div class="mr-auto ml-auto full-height height-100 d-flex align-items-center">
                                    <div class="vertical-align full-height">
                                        <div class="table-cell">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="pdd-horizon-30 pdd-vertical-30">
                                                        <div class="text-center mb-3">
                                                            <a href="<?php echo site_url('UserLogin/signup') ?>"><img class="img-responsive inline-block" src="<?php echo base_url();?>/assets/images/logo/logo-dark.png" alt="" ></a>
                                                        </div>
                                                            <?php echo $this->session->flashdata('message');  ?>
                                                            <?php echo $this->session->flashdata('error');  ?>
                                                        <p class="mrg-btm-15 font-size-13" style="text-align:center;">Please Enter your Details to Sign up</p>
                                                         <form method="post" action ="<?php  echo site_url('UserLogin/insert');?>"  enctype="multipart/form-data">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Name<span style="color: red;">*</span></label>
                                                                <input type="text" class="form-control" placeholder="Name" name="name">
                                                                 <p class="error"><?php echo form_error('name');?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Email<span style="color: red;">*</span></label>
                                                                <input type="text" class="form-control" placeholder="Email" name="email1">
                                                                 <p class="error"><?php echo form_error('email1');?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Phone Number<span style="color: red;">*</span></label>
                                                                <input type="text" class="form-control" placeholder="Phone Number" name="phone">
                                                                 <p class="error"><?php echo form_error('Phone');?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>DOB<span style="color: red;">*</span></label>
                                                                <input type="date" class="form-control" placeholder="Date of Birth" name="dob">
                                                                 <p class="error"><?php echo form_error('dob');?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Address<span style="color: red;">*</span></label>
                                                                <input type="text" class="form-control" placeholder="Address" name="address">
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
                </div>
            </div>
        </div>
    </div>

    <!-- build:js assets/js/vendor.js -->
    <!-- plugins js -->
    <script src="<?php echo base_url();?>/assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/PACE/pace.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>    
    <script src="<?php echo base_url();?>/assets/js/fontawesome.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/solid.min.js"></script>
    <!-- endbuild -->

    <!-- build:js assets/js/app.min.js -->
    <!-- core js -->
    <script src="<?php echo base_url();?>/assets/js/app.js"></script>
    <!-- endbuild -->

    <!-- page js -->

</body>

</html>