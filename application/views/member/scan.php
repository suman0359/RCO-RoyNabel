<?php $this->load->view('member/layout/header'); ?>

    <!-- Menu -->
    <?php $this->load->view('member/layout/menu'); ?>

    <?php
    $amount = 250;

    if (NULL != $this->input->post('submit_coupon')) {
      $discount5 = 5;
      $discount10 = 10;

      if ($this->input->post('coupon') == 'take5discount') {
        (float) $amount = $amount - (($amount * $discount5) / 100);
      } else if ($this->input->post('coupon') == 'take10discount') {
        (float) $amount = $amount - (($amount * $discount5) / 100);
      }
    }
    ?>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Scan
                    <small>No need to annotate a page</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a>RCO</a>
                    </li>
                    <li><a>Products</a></li>
                    <li class="active">Scan</li>
                </ol>
            </div>

        </div>

        <div class="row">
        	
        	<div class="col-md-offset-3 col-md-6">
    			<?= $this->session->flashdata('event');?>
    		</div>

            <div class="col-md-4">
                <img class="img-responsive" src="<?= base_url(); ?>public/images/scan.png">
            </div>

            <div class="col-md-8">
                <h3>Description</h3>
                <p>Count on the scan software to turn that mountain of papers, bills check and documents into secure searchable pdf files you can store jsut about anywhere. The software straightens scans automatically. No need to annotate a page before you send it. No problem. Works with over 300+ scanners so you can pick the brand you like.</p>
                
                <h3>Price - $<?php echo (float)$amount; ?></h3>

                <br>

                <?php echo form_open(current_url()); ?>
                  <?php echo form_label('Coupon', 'coupon'); ?>
                  <?php echo form_input('coupon', ''); ?>
                  <?php echo form_submit('submit_coupon', 'Submit'); ?>
                <?php echo form_close(); ?>
                
                <br>

                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
                  <input type="hidden" name="cmd" value="_cart">
                  <input type="hidden" name="business" value="royn@rco.com"> <!-- E7AALCJKE2PLN -->
                  <input type="hidden" name="lc" value="US">
                  <input type="hidden" name="item_name" value="Scan">
                  <input type="hidden" name="amount" value="<?php echo (float) $amount; ?>">
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="hidden" name="button_subtype" value="products">
                  <input type="hidden" name="add" value="1">
                  <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
                  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>

        </div>
        
        <br>
        <br>
        <br>
        
        <div class="row">
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <!--<h3 class="panel-title">Title</h3>-->
                </div>
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="active"><a href="#details" role="tab" data-toggle="tab">DETAILS</a></li>
                      <li><a href="#specs" role="tab" data-toggle="tab">SPECS</a></li>
                      <li><a href="#reviews" role="tab" data-toggle="tab">REVIEWS</a></li>
                      <li><a href="#videos" role="tab" data-toggle="tab">VIDEOS</a></li>
                      <li><a href="#qa" role="tab" data-toggle="tab">Q & A</a></li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                    
                      <div class="tab-pane active fade in" id="details">
                        <ul>
                            <li>Scan to Microsoft Sharepoint 2010, cloud or any hard disk</li>
                            <li>Drag and drop</li>
                            <li>Annotate any page with a palette of tools</li>
                            <li>Adobe encryption or AES 256 bit security</li>
                            <li>Image processing functions like crop and rotate</li>
                        </ul>
                      </div>
                      <!-- /#details.tab-pane.active.fade.in -->
                      <div class="tab-pane fade" id="specs">
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <tr>
                              <td style="background-color: #5d5145; color: white; width: 35%">OCR</td>
                              <td style="background-color: #e5e5e5">Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #917e69; color: white;">Image Processing</td>
                              <td>Deskew, Border Removal, Rotation</td>
                            </tr>
                            <tr>
                              <td style="background-color: #5d5145; color: white;">Math Expressions</td>
                              <td style="background-color: #e5e5e5">Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #917e69; color: white;">UI Customization</td>
                              <td>Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #5d5145; color: white;">Cover Detection</td>
                              <td style="background-color: #e5e5e5">Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #917e69; color: white;">Local Scanning</td>
                              <td>Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #5d5145; color: white;">Cloud Scanning</td>
                              <td style="background-color: #e5e5e5">Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #917e69; color: white;">Thumbnails</td>
                              <td>Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #5d5145; color: white;">Drag and Drop</td>
                              <td style="background-color: #e5e5e5">Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #917e69; color: white;">Annotation</td>
                              <td>Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #5d5145; color: white;">Cropping</td>
                              <td style="background-color: #e5e5e5">Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #917e69; color: white;">Color Scanning</td>
                              <td>Yes</td>
                            </tr>
                            <tr>
                              <td style="background-color: #5d5145; color: white;">Encryption</td>
                              <td style="background-color: #e5e5e5">Multiple</td>
                            </tr>
                            <tr>
                              <td style="background-color: #917e69; color: white;">Stamping</td>
                              <td>Yes</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <!-- /#specs.tab-pane.fade-->
                      <div class="tab-pane fade" id="reviews">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </div>
                      <!-- /#reviews.tab-pane.fade -->
                      <div class="tab-pane fade" id="videos">
                          <a href="http://www.youtube.com/embed/6xGVKAVCwII?autoplay=1" class="fancybox fancybox.iframe">
                              <img src="<?= base_url(); ?>public/images/road_m.jpg" alt="">
                          </a>
                          <a href="http://www.youtube.com/embed/6xGVKAVCwII?autoplay=1" class="fancybox fancybox.iframe">
                              <img src="<?= base_url(); ?>public/images/road_m.jpg" alt="">
                          </a>
                      </div>
                      <!-- /#videos.tab-pane.fade -->
                      <div class="tab-pane fade" id="qa">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </div>
                      <!-- /#qa.tab-pane.fade -->
                      
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel.panel-primary -->
            
        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Products</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="<?php echo site_url('member/home/mobileoffice') ?>">
                    <img class="img-responsive img-customer" src="<?= base_url(); ?>public/images/mobile_office.png">
                    <div class="col-md-offset-1">
                        <p>Mobile office</p>
                    </div>
                </a>
            </div>
            
            <div class="col-sm-3 col-xs-6">
                <a href="<?php echo site_url('member/home/csveditor') ?>">
                    <img class="img-responsive img-customer" src="<?= base_url(); ?>public/images/csvedit.png">
                    <div class="col-md-offset-1">
                        <p>CSV Editor</p>
                    </div>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="<?php echo site_url('member/home/label') ?>">
                    <img class="img-responsive img-customer" src="<?= base_url(); ?>public/images/label_state.png">
                    <div class="col-md-offset-2">
                        <p>Label</p>
                    </div>
                </a>
            </div>
<div class="col-sm-3 col-xs-6">
                <a href="<?php echo site_url('member/home/publish') ?>">
                    <img class="img-responsive img-customer" src="<?= base_url(); ?>public/images/publish_state.png">
                    <div class="col-md-offset-2">
                        <p>Publish</p>
                    </div>
                </a>
            </div>

        </div>

    </div>
    <!-- /.container -->

<?php $this->load->view('member/layout/footer'); ?>