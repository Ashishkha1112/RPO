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
                            <h4>Products</h4>
                        </div>                  
                               <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="table-overflow">
                                                    <table id="dt-opt" class="table table-lg table-hover">
                                                         <thead>
                                                          <tr class="text-nowrap">
                                                            <th>S.N.</th>
                                                            <th>Product ID</th>
                                                            <th>Product Name</th>
                                                            <th>Product Price</th>
                                                            <th>Product Image</th>
                                                            <th>Verify Status</th>
                                                            <th>Action</th>

                                                          
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <?php if (!empty($product)) { $i=1; foreach ($product as $prod) { ?>
                                                          <tr>
                                                            <th scope="row"><?php echo $i;?></th>
                                                            <td><?php echo $prod['product_id'] ?></td>
                                                            <td><?php echo $prod['product_name'] ?><br>
                                                                <p style=" font-size: 10px;"> Added By: <?php echo $prod['Email'] ?></p>
                                                            </td>
                                                            <td><?php echo $prod['product_price'] ?></td>
                                                             <td>                                      
                                                             <?php if($prod['product_image_front']):?>
                                                                <img class="thumb-img" src="<?php echo base_url();?>assets/uploads/productimg/<?php echo $prod['product_image_front'] ?>" width="80" height="60"/>
                                                                <?php endif; ?>
                                                            
                                                             <td><?php echo $prod['verify_status'] ?></td>
                                                             <td>
                                                                <a href='productshow/deleteproduct/<?php echo $prod['product_id']?>' onclick="return confirm('Are you sure want to delete this product?')">
                                                                    <button class="btn ">
                                                                        <i class="fas fa-trash"></i>
                                                                    </button>
                                                                </a>

                                                                <a href='productshow/editproduct/<?php echo $prod['product_id']?>'>
                                                                    <button class="btn btn-primary">
                                                                        <i class="fas fa-pen"></i>
                                                                    </button>
                                                                </a>

                                                                <a href='productshow/verify/<?php echo $prod['product_id']?>' onclick="return confirm('Are you sure want to verify this product?')">
                                                                    <button class="btn btn-primary">
                                                                        <i class=" ti-check-box"></i>
                                                                    </button>
                                                                </a>
                                                            </td>

                                                            
                                                            <!-- <td><a href='productshow/deleteproduct/<?php echo $prod['product_id']?>' onclick="return confirm('Are you sure want to delete this product?')"><input class="btn fa-regular fa-trash-can" type="button" value="<i class="fa-thin fa-trash"></i>" name="btnDelete" ></a> <a href='productshow/editproduct/<?php echo $prod['product_id']?>'><input class="btn btn-primary" type="button" value="  Edit ", name="btnEdit" ></a> <a href='productshow/verify/<?php echo $prod['product_id']?>' onclick="return confirm('Are you sure want to verify this product?')"><input class="btn btn-primary" type="button" value="Verify" name="btnDelete" ></a></td> -->
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

            </div>
            <!-- Page Container END -->