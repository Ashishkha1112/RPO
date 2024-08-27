                <!-- Header START -->
                <div class="header navbar">
                    <div class="header-container">
                        <ul class="nav-left my-4">
                            <li>
                                <a class="side-nav-toggle" href="javascript:void(0);">
                                    <i class="ti-menu"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile dropdown">
                                 <?php if (!empty($useradminn)) { $i=1; foreach ($useradminn as $user) { ?>
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    <img class="profile-img img-fluid" src="<?php echo base_url();?>assets/uploads/<?php echo $user['Profile'] ?>" alt="">
                                    <div class="user-info">
                                        <span class="name pdd-right-5"><?php echo $user['Name'];?></span>
                                        <i class="ti-angle-down font-size-10"></i>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo site_url('Admin/admin/Profile')?>">
                                            <i class="ti-user pdd-right-10"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="<?php echo site_url('Admin/Logout')?>">
                                            <i class="ti-power-off pdd-right-10"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                                <?php $i++; } }?>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Header END -->