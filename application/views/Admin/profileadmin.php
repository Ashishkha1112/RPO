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
                            <h4>Account Setting</h4>
                        </div>
                        <div class="row">
                              <?php if (!empty($useradmin)) { $i=1; foreach ($useradmin as $user) { ?>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="widget-profile-1 card">
                                            <div class="profile border bottom">
                                                <img class="mrg-top-30" src="<?php echo base_url();?>assets/uploads/<?php echo $user['Profile'] ?>" alt="" style="max-width: 100px">
                                                <h4 class="mrg-top-20 no-mrg-btm text-semibold"><?php echo $user['Name']; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-heading border bottom">
                                                <h4 class="card-title">General Info</h4>
                                            </div>
                                            <div class="card-block">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p class="mrg-top-10 text-dark"> <b>Name</b></p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="mrg-top-10"><?php echo $user['Name']; ?></p>
                                                    </div>  
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p class="mrg-top-10 text-dark"> <b>Email</b></p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="mrg-top-10"><?php echo $user['Email']; ?></p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p class="mrg-top-10 text-dark"> <b>Contact</b></p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="mrg-top-10 "><?php echo $user['Phone']; ?></p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p class="mrg-top-10 text-dark"> <b>Address</b></p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="mrg-top-10"><?php echo $user['Address']; ?></p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p class="mrg-top-10 text-dark"> <b>Status</b></p>
                                                    </div>
                                                    <div class="col-md-6">
                                                       <p class="mrg-top-10">
                                                            <span class="status online mrg-top-10"></span>
                                                            <?php $a = $user['status']; ?>
                                                            <?php if ($a == 0): ?>
                                                                <span class="mrg-left-10">Available</span>
                                                            <?php else: ?>
                                                                <span class="mrg-left-10">UnAvailable</span>
                                                            <?php endif; ?>
                                                            <!-- <span class="mrg-left-10">Available</span> -->
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; } }?>
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php $this->load->view('Admin/includes/footer');?>

            </div>
            <!-- Page Container END -->