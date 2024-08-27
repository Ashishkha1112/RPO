<?php $this->load->view('Admin/includes/sidenav');?>
            <!-- Side nav ends -->

            <!-- Page Container START -->
            <div class="page-container">

                <!-- Header start by including -->
               <!-- <?php $this->load->view('Admin/includes/header');?> -->
<!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-title">
                            <h4>Available User</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="table-overflow">
                                            <table id="dt-opt" class="table table-lg table-hover">
                                                <thead>
                                                    <tr>
                                                      <th>S.no.</th>
                                                        <th>Profile / Name</th>
                                                        <th>Contact</th>
                                                        <th>Date Of Birth</th>
                                                        <th>Address</th>
                                                        <th>Gender</th>
                                                        <th> Action</th>
                                                    </tr>
                                                </thead>
                                                 <tbody>
                              <?php if (!empty($useradmin)) { $i=1; foreach ($useradmin as $user) { ?>

                         
                             
                              <tr>
                                <th scope="row"><?php echo $i;?></th>
                                  <td><?php if($user['Profile']):?>
                                    <div class="list-info mrg-top-10">
                                        <img class="thumb-img" src="<?php echo base_url();?>assets/uploads/<?php echo $user['Profile'] ?>" alt=""> <?php endif; ?><br><br>
                                        <?php echo $user['Name'] ?>
                                    </div>
                                </td>
                                
                                <td><?php echo $user['Email'] ?><br>
                                <?php echo $user['Phone'] ?></td>
                                <td><?php echo $user['Dob'] ?></td>
                                <td><?php echo $user['Address'] ?></td>
                                <td><?php echo $user['Gender'] ?></td> 
                                <td>
                                    <a href='ViewUser/deleteuser/<?php echo $user['Email']; ?>' onclick="return confirm('Are you sure you want to delete this User?')">
                                        <input class="btn btn-primary" type="button" value="Delete" name="btnDelete">
                                    </a>
                                </td>

                               
                              </tr> <?php $i++; } }?>
                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->
                 <?php $this->load->view('Admin/includes/footer');?>