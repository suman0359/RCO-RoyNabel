<?php $this->load->view('member/layout/header'); ?>

	<!-- Menu -->
    <?php $this->load->view('member/layout/menu'); ?>
    <div class="custom-container-fuild">
        <div class="container">
            <h1 class="page-header">Mobile Office Support</h1>

            <div class="custom-container">
                <div class="col-md-3 col-sm-4 sidebar">
                    <ul class="nav nav-stacked nav-pills">
                        <li class="active">
                            <a href="<?= site_url('member/home/mobilesupport'); ?>">
                                <img src="<?= base_url(); ?>public/images/mobile_office.png" width="30" height="30" >
                                Welcome
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('member/home/mobilemanual'); ?>">
                                <img src="<?= base_url(); ?>public/images/manual.png" width="30" height="30" >
                                Manuals
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('member/home/mobilephone'); ?>">
                                <img src="<?= base_url(); ?>public/images/phone.png" width="30" height="30" >
                                Contact Support
                            </a>
                        </li>
                        <li>
                            <a href="http://www.rco.com/support/index.php">
                                <img src="<?= base_url(); ?>public/images/helpicon.png" width="30" height="30" >
                                Help Ticket
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('home/mobilevideo'); ?>">
                                <img src="<?= base_url(); ?>public/images/youtube.png" width="40" height="30" >
                                Videos
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('member/home/mobiledownload'); ?>">
                                <img src="<?= base_url(); ?>public/images/download.png" alt="" width="30" height="30"> Downloads
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-md-3.col-sm-4.sidebar -->
                <div id="support">
                    <div class="col-md-12">
                        <h3 class="page-header">Welcome</h3>
                        <p>
                            <a href="<?= site_url('member/home/mobilevideo'); ?>">Watch videos</a>, <a href="<?= site_url('home/mobilemanual'); ?>">read the manual</a> and <a href="<?= site_url('home/mobilephone'); ?>">contact support</a>
                        </p>
                        <img src="<?= base_url(); ?>public/images/mobile_office.png" >
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
        <!-- /.container -->
    </div>

<!-- Footer -->
<?php $this->load->view('member/layout/footer'); ?>