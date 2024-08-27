

            <!-- Side nav Starts -->
            <?php $this->load->view('Admin/includes/sidenav');?>
            <!-- Side nav ends -->

            <!-- Page Container START -->
            <div class="page-container">

                <!-- Header start by including -->
                <!-- <?php $this->load->view('Admin/includes/header'); ?>   -->
               <!-- Header Ends -->

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col col-sm-6 col-md-6 col-lg-3">
                                <div class="dashboard card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="icon-big text-center">
                                                    <i class="text-primary fas fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="detail text-left">
                                                    <p>Total Orders</p>
                                                    <span class="text-dark number"><?php echo $order_count; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-sm-6 col-md-6 col-lg-3">
                                <div class="dashboard card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="icon-big text-center">
                                                    <i class="text-success fas fa-money-bill-alt"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="detail text-left">
                                                    <p>Total Revenue</p>
                                                    <span class="text-dark number">NRs. <?php echo $total_revenue; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-sm-6 col-md-6 col-lg-3">
                                <div class="dashboard card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="icon-big text-center">
                                                    <i class="text-info fas fa-eye"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="detail text-left">
                                                    <p>Total Products</p>
                                                    <span class="text-dark number"><?php echo $product_count; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-sm-6 col-md-6 col-lg-3">
                                <div class="dashboard card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="icon-big text-center">
                                                    <i class="text-warning fas fa-envelope"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="detail text-left">
                                                    <p>Sold Products</p>
                                                    <span class="text-dark number"><?php echo $sell_count; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer Start -->
                    <?php $this->load->view('Admin/includes/footer');?> 
                <!-- Footer Ends -->

           