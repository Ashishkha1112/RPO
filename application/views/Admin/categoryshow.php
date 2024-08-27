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
                            <h4>Added Category</h4>
                        </div>
                          <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="table-overflow">
                                                    <table id="dt-opt" class="table table-lg table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>S.N.</th>
                                                                <th>Category Image</th>
                                                                <th>Category Name</th>
                                                                <th>Category Description</th>
                                                                <th>Created Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          <?php if (!empty($categories)) { $i=1; foreach ($categories as $cat) { ?>
                                                            <tr>
                                                                <td><?php echo $i;?></td>                             
                                                                <td>       
                                                                    <?php if($cat['category_image']):?>
                                                                        <img class="thumb-img" src="<?php echo base_url();?>assets/uploads/<?php echo $cat['category_image']; ?>" width="80" height="60"/>
                                                                    <?php endif; ?>                                                    
                                                                </td>
                                                                <td><?php echo $cat['category_name'] ?></td>
                                                                <td><?php echo $cat['category_description'] ?></td>
                                                                
                                                                 <td><a href='categoryshow/deletecategory/<?php echo $cat['category_id']?>' onclick="return confirm('Are you sure want to delete this category?')"><input type="button" value="Delete" name="btnDelete" ></a><a href='categoryshow/editcategory/<?php echo $cat['category_id']; ?>'> <input type="button" value="Edit", name="btnEdit" ></a> </td>
                                                            </tr><?php $i++; } }?>
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

            </div>
            <!-- Page Container END -->