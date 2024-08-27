    <!-- SHOP SIDEBAR-->
        <section class="py-5">
          <div class="container p-0">
            <div class="row">
              <div class="col-lg-3 order-2 order-lg-1">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                       <?php if (!empty($categories)) {  $i=1; foreach ($categories as $cat) { ?>
                        <a href="<?php echo site_url('category/show/'.$cat['category_id'])?>" class="nav-item nav-link"><?php echo $cat['category_name'] ?></a>
                        <?php $i++; } }?>
                    </div>
                  </nav>
              </div> 