<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">

    <title>Recondition Product Outlet</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/logo/favicon.png">
     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- plugins css -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page plugins css -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/nvd3/build/nv.d3.min.css" />

    <!-- core css -->
    
    <link href="<?php echo base_url();?>/assets/css/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/datatables/media/css/jquery.dataTables.css"/> 
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/summernote/dist/summernote.css" />
   
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <div class="side-nav-logo">
                        <a href="<?php echo site_url('admin/dashboard'); ?>">
                            <div class="logo logo-dark" style="background-image: url('<?php echo base_url();?>assets/images/logo/logo.png');" ></div>
                        </a>
                    </div>
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item active">
                            <a class="" href="<?php echo site_url('admin/dashboard') ?>">
                                <span class="icon-holder"><i class="ti-home"></i></span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder"><i class="ti-user"></i></span>
                                <span class="title">User Management</span>
                                <span class="arrow"><i class="ti-angle-right"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url('Admin/Signup') ?>">Create New User</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Admin/Viewuser') ?>">Adminstrative Users</a>
                                </li>
                                  <li>
                                    <a href="<?php echo site_url('Admin/Viewuser/users') ?>">View User</a>
                                </li>
                              
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder"><i class="fa fa-th-large"></i></span>
                                <span class="title">Category Management </span>
                                <span class="arrow"><i class="ti-angle-right"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url('Admin/Category')?>">Create New Category</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Admin/Categoryshow')?>">View Category</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder"><i class="fa fa-shopping-bag"></i></span>
                                <span class="title">Product Management</span>
                                <span class="arrow"><i class="ti-angle-right"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url('admin/product'); ?>">Add Product</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Admin/Productshow')?>">View Product</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder"><i class="fa fa-shopping-cart"></i></span>
                                <span class="title">Orders</span>
                                <span class="arrow"><i class="ti-angle-right"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url('Admin/order'); ?>">Ordered List</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Admin/Order/soldorder'); ?>">Sold Order</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->