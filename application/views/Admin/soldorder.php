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
                            <h4>Placed Orders</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="table-overflow">
                                            <table id="dt-opt" class="table table-lg table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Buyer Name</th>
                                                        <th>Billing Address/Contact</th>
                                                        <th>Order Date</th>
                                                        <th>Product Name</th>
                                                        <th>Product Price </th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php if (!empty($orders)) {  foreach ($orders as $ordr) { ?>
                                                    
                                                            
                                                    <tr>
                                                        <td>
                                                            <div class="list-info mrg-top-10">
                                                                <img class="thumb-img" src="assets/images/avatars/avatar-5.png" alt="">
                                                                <div class="info">
                                                                    <span class="title"><?php echo $ordr['ordered_by'] ?></span>
                                                                    <span class="sub-title">Order Id:<?php echo $ordr['order_id'] ?></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>                                                           
                                                                <div class="relative mrg-top-5">
                                                                    <span class="title"><?php echo $ordr['address'] ?></span><br>
                                                                    <span class="sub-title"><?php echo $ordr['phone'] ?></span>
                                                                </div>
                                                        </td>
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <span><?php echo $ordr['order_date'] ?></span>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="list-info mrg-top-10">
                                                                <img class="thumb-img" src="<?php echo base_url()?>assets/uploads/productimg/<?php echo $ordr['product_image_front']?>" alt="">
                                                                <div class="info">
                                                                    <span class="title"><?php echo $ordr['product_name'] ?></span>
                                                                    <span class="sub-title">Product Id: <?php echo $ordr['product_id'] ?></span>
                                                                </div>
                                                            </div>
                                                        </td>


                                                       <!--  <td>
                                                            <div class="mrg-top-15">
                                                                <span class="text-info"><b>#33666</b></span>
                                                            </div>
                                                        </td> -->
                                                        <td>
                                                            <div class="mrg-top-15">
                                                                <b class="text-dark font-size-16">NRs. <?php echo $ordr['product_price'] ?>
                                                                    <br>
                                                                  <p style="font-size:10px;">  Sold by: <?php echo $user ?></p>
                                                                </b>
                                                            </div>
                                                        </td>
                                                  

                                                    </tr>
                                                    <?php } }?>
                                               
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