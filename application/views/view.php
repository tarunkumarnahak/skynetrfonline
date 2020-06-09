<link rel="shortcut icon" href="../assets/images/favicon.ico">

<link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\dropify\css\dropify.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\filter\magnific-popup.css" rel="stylesheet" type="text/css" />
<?php foreach ($user as $user): ?>

<!-- App css -->
<link href="<?php echo base_url(); ?>assets\dashboard\assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets\dashboard\assets\css\icons.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets\dashboard\assets\css\metisMenu.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets\dashboard\assets\css\style.css" rel="stylesheet" type="text/css" />

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url(); ?>user/view">SkyNet RF Online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>user/view">Profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>user/invoices">Inovice</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>user/payments">Payments</a>
      </li>
      <li class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo base_url(); ?>login/logout"></i> Logout</a>
      </li>
    </ul>
    
  </div>
</nav>
<div class="page-content">

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">View</a></li>
                        <li class="breadcrumb-item active">Details</li>
                    </ol>
                </div>
                <h4 class="page-title">Profile</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->


</div><!-- container -->
<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body  met-pro-bg">
                                    <div class="met-profile">
                                        <div class="row">
                                            <div class="col-lg-4 mb-3 mb-lg-0 align-self-center">
                                                <div class="met-profile-main">
                                                    <div class="met-profile-main-pic">
                                                        <img src="../assets/images/users/user-4.jpg" alt="" class="rounded-circle">
                                                        
                                                    </div>
                                                    <div class="met-profile_user-detail">
                                                        <h5 class="met-user-name"><?php echo $user->name; ?></h5>                                                        
                                                        
                                                    </div>
                                                </div>                                                
                                            </div><!--end col-->
                                            <div class="col-lg-4 ml-auto">
                                                <ul class="list-unstyled personal-detail">
                                                    <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> phone </b> :  <?php echo $user->mobile; ?></li>
                                                    <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> Email </b> :<?php echo $user->email; ?></li>
                                                    <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>Location</b> :  <?php echo $user->area; ?>, <?php echo $user->location; ?></li>
                                                   
                                                </ul>
                                                
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end f_profile-->                                                                                
                                </div><!--end card-body-->
                                <div class="card-body">
                                    <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
                                        <!-- <li class="nav-item">
                                            <a class="nav-link active" id="general_detail_tab" data-toggle="pill" href="#general_detail">Profile</a>
                                        </li> -->
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" id="education_detail_tab" data-toggle="pill" href="#education_detail">Invoice</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="portfolio_detail_tab" data-toggle="pill" href="#portfolio_detail">Payments</a>
                                        </li> -->
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" id="settings_detail_tab" data-toggle="pill" href="<?php echo base_url(); ?>login/logout">Log Out</a>
                                        </li> -->
                                    </ul>        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content detail-list" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="general_detail">
                                    <div class="row">
                                        <div class="col-12">                                            
                                            <div class="card">
                                                <div class="card-body">
                                                   <div class="row">
                                                       
                                                       <div class="col-md-6">
                                                           <div class="met-basic-detail">
                                                                <h3><?php echo $user->name; ?></h3>
                                                                <ul class="list-unstyled personal-detail">
                                                                    <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> phone </b> :  <?php echo $user->mobile; ?></li>
                                                                    <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> Email </b> :<?php echo $user->email; ?></li>
                                                                    <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>Location</b> :  <?php echo $user->area; ?>, <?php echo $user->location; ?></li>
                                                                    <?php if(package($user->package)){ ?>
                                                    <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> Package </b> :<?php echo package($user->package)->packname . " (" . package($user->package)->packvolume . ") (" . package($user->package)->packprice . ") (" . package($user->package)->total . ")" ; ?></li>
                                                    <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>Monthly Fee</b> :  <?php echo settings()[0]->currency . " " . number_format((int)package($user->package)->packprice + package($user->package)->total, 2); ?> </li>
                                                    <?php }else{ ?>
                                                        <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> Package </b> : N/A</li>
                                                    <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>Monthly Fee</b> :  N/A </li>
                                                    <?php } ?> 
                                                    <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>Service Start</b> :   <?php echo $user->join_date; ?> </li>
                                                                </ul>           
                                                                
                                                                <div class="my-3">
                                                                
                                                                <?php if(notAdmin()){ ?>
                                                                    <a class="btn btn-warning" href="<?php echo base_url(); ?>user/edit/<?php echo $user->id; ?>"><i class="fa fa-edit fa-fw m-right-xs"></i> Edit Profile</a>
                                                                <a class="btn btn-danger" href="<?php echo base_url(); ?>login/logout"><i class="fa fa-edit fa-fw m-right-xs"></i> Logout</a>
                        <a class="btn btn-warning" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit fa-fw m-right-xs"></i> Change Email</a>
                        <br>
                        <a <?php echo (!empty($user->pppoe_name)) ? "" : "disabled"; ?> class="btn btn-success" href="<?php echo base_url(); ?>pppoe/enable/<?php echo $user->pppoe_name; ?>"><i class="fa fa-check fa-fw m-right-xs"></i> Enable PPPoE</a>
                        <br />
                        <a <?php echo (!empty($user->pppoe_name)) ? "" : "disabled"; ?> class="btn btn-danger" href="<?php echo base_url(); ?>pppoe/disable/<?php echo $user->pppoe_name; ?>"><i class="fa fa-close fa-fw m-right-xs"></i> Disable PPPoE</a>
                        <br>
                        <a <?php echo (!empty($user->hotspot_name)) ? "" : "disabled"; ?> class="btn btn-success" href="<?php echo base_url();?>hotspot/enable/<?php echo $user->hotspot_name;?>"><i class="fa fa-check fa-fw m-right-xs"></i> Enable Hotspot</a>
                        <br />
                        <a <?php echo (!empty($user->hotspot_name)) ? "" : "disabled"; ?> class="btn btn-danger" href="<?php echo base_url();?>hotspot/disable/<?php echo $user->hotspot_name;?>"><i class="fa fa-close fa-fw m-right-xs"></i> Disable Hotspot</a>
                        <br>
                        <?php } ?>

                    
                                                                </div> 
                                                                
                                                                
                                                           </div>
                                                       </div>
                                                       
                                                   </div>         
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->
                                    </div><!--end row-->                                             
                                </div><!--end general detail-->

                            </div><!--end tab-content--> 
                            
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->

               
            </div>
            <?php endforeach; ?>


            <script src="<?php echo base_url(); ?>assets\dashboard\assets\js\jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\js\bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\js\metisMenu.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\js\waves.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\js\jquery.slimscroll.min.js"></script>

         <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\dropify\js\dropify.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\pages\jquery.profile.init.js"></script>

        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\filter\isotope.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\filter\masonry.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\filter\jquery.magnific-popup.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\pages\jquery.gallery.inity.js"></script>


        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\js\app.js"></script>

</div>
