<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recondition Product Outlet</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- gLightbox gallery-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/user/vendor/glightbox/css/glightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/user/vendor/nouislider/nouislider.min.css">
    <!-- Choices CSS-->

    <link rel="stylesheet" href="<?php echo base_url();?>/assets/user/vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/user/vendor/swiper/swiper-bundle.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/user/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/user/css/custom.css">
    <!-- Favicon-->
    <link  rel="shortcut icon" href="<?php echo base_url();?>/assets/images/logo/favicon.png">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/<?php echo base_url();?>/assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css" />

  </head>
  <body>

    <div class="page-container">
      <!-- Top Navbar -->
    <!-- Topbar Start -->
        <div class="container-fluid navbar-light bg-light">
            <div class="row align-items-center py-4 px-xl-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <a href="<?php echo site_url('welcome'); ?>" class="text-decoration-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-success font-weight-bold border-none px-5 mr-1"><img src="<?php echo base_url();?>/assets/images/logo/logo-sfm.png" style="height: 70px; width: 100px;"> </span></h1>
                    </a>
                </div>
                <div class="col-lg-6 col-6 text-md-left ">
                    <form action="<?php echo site_url('category/search')?>" method ="post">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search for products">
                                <button type="submit" class="btn btn-link bg-transparent text-primary btn btn-outline-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 col-6 text-right">
                    <a href="<?php echo site_url('Category/sell'); ?>" class="btn border text-primary ">
                        <i class="fas fa-shopping-cart text-primary"></i> Sell
                        <span class="badge">0</span>
                    </a>
                    
                    <div class="btn-group ">
                        <a href="<?php echo site_url('UserLogin'); ?>" class="nav-link btn border dropdown-toggle text-primary " id="pagesDropdown" data-bs-toggle="dropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user text-primary"></i> 
                        </a>

                        <div class="dropdown-menu mt-3  shadow-sm " aria-labelledby="pagesDropdown">
                             <a class="dropdown-item border-0 transition-link text-primary " href="<?php echo site_url('UserLogin'); ?>">Login</a>
                            <a class="dropdown-item border-0 transition-link text-primary " href="<?php echo site_url('UserLogin/profile'); ?>">Profile</a>
                            <a class="dropdown-item border-0 transition-link text-primary " href="<?php echo site_url('UserLogin/logout')?>">Logout</a>
                        </div>
                    </div>
                </div>

            </div> 
        </div>
        <!-- Topbar End -->