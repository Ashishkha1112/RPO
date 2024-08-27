<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>Recondition Product Outlet</title>

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
    <div c<?php echo base_url();?>/s="app">
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
                                                            <a href="<?php echo site_url('admin/forgotpass') ?>"> <img class="img-responsive inline-block" src="<?php echo base_url();?>/assets/images/logo/logo-dark.png" alt=""></a>
                                                            <!-- <img class="img-responsive inline-block" src="<?php echo base_url();?>/assets/images/logo/logo-dark.png" alt=""> -->
                                                        </div>
                                                        <p class="mrg-btm-15 font-size-13">Please enter OTP of 6 Digit</p>
                                                        <form action="<?php echo site_url('UserLogin/verifyotp')?>" method="post">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Enter your OTP" name="otp">
                                                            </div>

                                                            <div class="mt-3 text-center">
                                                                <button class="btn btn-block btn-info"   >Confirm OTP</button>
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