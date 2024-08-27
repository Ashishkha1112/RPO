<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>Recondition Product Outlet</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/logo/favicon.png">

    <!-- plugins css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- core css -->
    <link href="<?php echo base_url();?>assets/css/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/app.css" rel="stylesheet">
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
                                                            <?php echo validation_errors(); ?>
                                                            <img class="img-responsive inline-block" src="<?php echo base_url();?>assets/images/logo/logo-dark.png" alt="">
                                                        </div>
                                                             <p class="mrg-btm-15 font-size-13">Please enter your new password</p>
                                                        <?php $this->session->flashdata('message_pl')?>

                                                <form action="<?php echo site_url('admin/changepass/changePass') ?>" method="post">

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Enter new password" name="password">
                                                        <p class="error"><?php echo form_error('password');?></p>
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Confirm password" name="confirm_password">
                                                        <p class="error"><?php echo form_error('confirm_password');?></p>
                                                    </div>

                                                    <div class="mt-3 text-center">
                                                        <button class="btn btn-block btn-info" name = "btnchange">Change Password</button>
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

    <script src="<?php echo base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/PACE/pace.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/fontawesome.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/solid.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/app.js"></script>

</body>

</html>