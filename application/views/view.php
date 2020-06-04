<link rel="shortcut icon" href="../assets/images/favicon.ico">

<link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\dropify\css\dropify.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\filter\magnific-popup.css" rel="stylesheet" type="text/css" />
<?php foreach ($user as $user): ?>

<!-- App css -->
<link href="<?php echo base_url(); ?>assets\dashboard\assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets\dashboard\assets\css\icons.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets\dashboard\assets\css\metisMenu.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets\dashboard\assets\css\style.css" rel="stylesheet" type="text/css" />

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
                                        <li class="nav-item">
                                            <a class="nav-link active" id="general_detail_tab" data-toggle="pill" href="#general_detail">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="education_detail_tab" data-toggle="pill" href="#education_detail">Education</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="portfolio_detail_tab" data-toggle="pill" href="#portfolio_detail">Portfolio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="settings_detail_tab" data-toggle="pill" href="#settings_detail">Settings</a>
                                        </li>
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
                                                                <a class="btn btn-warning" href="<?php echo base_url(); ?>user/edit/<?php echo $user->id; ?>"><i class="fa fa-edit fa-fw m-right-xs"></i> Edit Profile</a>
                                                                <a class="btn btn-danger" href="<?php echo base_url(); ?>user/edit/<?php echo $user->id; ?>"><i class="fa fa-edit fa-fw m-right-xs"></i> Edit Profile</a>
                                            
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
                   
                    
                                                                </div> 
                                                                
                                                                
                                                           </div>
                                                       </div>
                                                       
                                                   </div>         
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->
                                    </div><!--end row-->                                             
                                </div><!--end general detail-->

                                <div class="tab-pane fade" id="education_detail">                                                
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">                                       
                                                <div class="card-body"> 
                                                    <h4 class="header-title mt-0 mb-3">Education</h4>
                                                    <div class="slimscroll education-activity">
                                                        <div class="activity">
                                                            <i class="mdi mdi-school icon-success"></i>
                                                            <div class="time-item">
                                                                <div class="item-info">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <h6 class="m-0">University</h6>
                                                                        <span class="text-muted">Oct-2009 to Oct-2011</span>
                                                                    </div>
                                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                                        <a href="#" class="text-info">[more info]</a>
                                                                    </p>
                                                                    <div>
                                                                        <span class="badge badge-soft-secondary">Design</span>
                                                                        <span class="badge badge-soft-secondary">HTML</span>                                                    
                                                                        <span class="badge badge-soft-secondary">Css</span>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <i class="mdi mdi-medal icon-pink"></i>                                                                                                           
                                                            <div class="time-item">
                                                                <div class="item-info">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <h6 class="m-0">Bachelor of Arts</h6>
                                                                        <span class="text-muted">Oct-2006 to Oct-209</span>
                                                                    </div>
                                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                                        <a href="#" class="text-info">[more info]</a>
                                                                    </p>
                                                                    <div>
                                                                        <span class="badge badge-soft-secondary">Python</span>
                                                                        <span class="badge badge-soft-secondary">Django</span>
                                                                    </div>
                                                                </div>                                            
                                                            </div>
                                                            <i class="mdi mdi-book-open-page-variant icon-purple"></i> 
                                                            <div class="time-item">
                                                                <div class="item-info">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <h6 class="m-0">Secondary</h6>
                                                                        <span class="text-muted">Oct-2003 to Oct-2006</span>
                                                                    </div>
                                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                                        <a href="#" class="text-info">[more info]</a>
                                                                    </p>
                                                                </div>
                                                            </div>                                         
                                                            <i class="mdi mdi-lead-pencil icon-warning"></i>
                                                            <div class="time-item">
                                                                <div class="item-info">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <h6 class="m-0">Primary</h6>
                                                                        <span class="text-muted">Oct-1996 to Oct-2003</span>
                                                                    </div>
                                                                    <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                                        <a href="#" class="text-info">[more info]</a>
                                                                    </p>                                                
                                                                </div>
                                                            </div>                                                                                                                                                                                                        
                                                        </div><!--end activity-->
                                                    </div><!--end education-activity-->
                                                </div>  <!--end card-body-->                                     
                                            </div><!--end card-->
                                        </div><!--end col-->

                                        <div class="col-lg-6">
                                            <div class="card">                                       
                                                <div class="card-body"> 
                                                    <h4 class="header-title mt-0 mb-3">My Skills</h4>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img src="../assets/images/widgets/education.svg" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="col-8 align-self-center">
                                                            <p class="skill-detail">Contrary to popular belief, Lorem Ipsum is not simply random text. 
                                                                It has roots in a piece of classical Latin literature from 45 BC, 
                                                                making it over 2000 years old. Richard McClintock, a Latin professor 
                                                                at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="skills mt-4">
                                                        <div class="skill-box"> 
                                                            <h4 class="skill-title">HTML5 &amp; CSS3 </h4> 
                                                            <div class="progress-line"> 
                                                                <span data-percent="78" style="width: 78%;">
                                                                    <span class="percent-tooltip">78%</span>
                                                                </span> 
                                                            </div>
                                                        </div>
                                                        <div class="skill-box"> 
                                                            <h4 class="skill-title">Web Design</h4> 
                                                            <div class="progress-line"> 
                                                                <span data-percent="90" style="width: 90%;">
                                                                    <span class="percent-tooltip">90%</span>
                                                                </span> 
                                                            </div>
                                                        </div>
                                                        <div class="skill-box"> 
                                                            <h4 class="skill-title">UI/UX Design</h4> 
                                                            <div class="progress-line"> 
                                                                <span data-percent="80" style="width: 80%;">
                                                                    <span class="percent-tooltip">80%</span>
                                                                </span> 
                                                            </div>
                                                        </div>
                                                        <div class="skill-box"> 
                                                            <h4 class="skill-title">Photoshop &amp; Ilistletor </h4> 
                                                            <div class="progress-line"> 
                                                                <span data-percent="95" style="width: 95%;">
                                                                    <span class="percent-tooltip">95%</span>
                                                                </span> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  <!--end card-body-->                                     
                                            </div><!--end card-->
                                        </div><!--end col-->
                        
                                    </div><!--end row-->  
                                </div><!--end education detail-->

                                <div class="tab-pane fade" id="portfolio_detail">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <ul class="col container-filter categories-filter mb-0" id="filter">
                                                            <li><a class="categories active" data-filter="*">All</a></li>
                                                            <li><a class="categories" data-filter=".branding">Branding</a></li>
                                                            <li><a class="categories" data-filter=".design">Design</a></li>
                                                            <li><a class="categories" data-filter=".photo">Photo</a></li>
                                                            <li><a class="categories" data-filter=".coffee">coffee</a></li>
                                                        </ul>
                                                    </div><!-- End portfolio  -->
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                            
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row container-grid nf-col-3  projects-wrapper">
                                                        <div class="col-lg-4 col-md-6 p-0 nf-item branding design coffee spacing">
                                                            <div class="item-box">
                                                                <a class="cbox-gallary1 mfp-image" href="../assets/images/small/img-1.jpg" title="Consequat massa quis">
                                                                    <img class="item-container " src="../assets/images/small/img-1.jpg" alt="7" />
                                                                    <div class="item-mask">
                                                                        <div class="item-caption">
                                                                            <h5 class="text-white">Consequat massa quis</h5>
                                                                            <p class="text-white">Branding, Design, Coffee</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div><!--end item-box-->
                                                        </div><!--end col-->
                                        
                                                        <div class="col-lg-4 col-md-6 p-0 nf-item photo spacing">
                                                            <div class="item-box">
                                                                <a class="cbox-gallary1 mfp-image" href="../assets/images/small/img-2.jpg" title="Vivamus elementum semper">
                                                                    <img class="item-container mfp-fade" src="../assets/images/small/img-2.jpg" alt="2" />
                                                                    <div class="item-mask">
                                                                        <div class="item-caption">
                                                                            <h5 class="text-white">Vivamus elementum semper</h5>
                                                                            <p class="text-white">Photo</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div><!--end item-box-->
                                                        </div><!--end col-->
                                        
                                                        <div class="col-lg-4 col-md-6 p-0 nf-item branding coffee spacing">
                                                            <div class="item-box">
                                                                <a class="cbox-gallary1 mfp-image" href="../assets/images/small/img-3.jpg" title="Quisque rutrum">
                                                                    <img class="item-container" src="../assets/images/small/img-3.jpg" alt="4" />
                                                                    <div class="item-mask">
                                                                        <div class="item-caption">
                                                                            <h5 class="text-white">Quisque rutrum</h5>
                                                                            <p class="text-white">Branding, Design, Coffee</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div><!--end item-box-->
                                                        </div><!--end col-->
                                        
                                                        <div class="col-lg-4 col-md-6 p-0 nf-item branding design spacing">
                                                            <div class="item-box">
                                                                <a class="cbox-gallary1 mfp-image" href="../assets/images/small/img-4.jpg" title="Tellus eget condimentum">
                                                                    <img class="item-container" src="../assets/images/small/img-4.jpg" alt="5" />
                                                                    <div class="item-mask">
                                                                        <div class="item-caption">
                                                                            <h5 class="text-white">Tellus eget condimentum</h5>
                                                                            <p class="text-white">Design</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div><!--end item-box-->
                                                        </div><!--end col-->
                                        
                                                        <div class="col-lg-4 col-md-6 p-0 nf-item branding design spacing">
                                                            <div class="item-box">
                                                                <a class="cbox-gallary1 mfp-image" href="../assets/images/small/img-5.jpg" title="Nullam quis ant">
                                                                    <img class="item-container" src="../assets/images/small/img-5.jpg" alt="6" />
                                                                    <div class="item-mask">
                                                                        <div class="item-caption">
                                                                            <h5 class="text-white">Nullam quis ant</h5>
                                                                            <p class="text-white">Branding, Design</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div><!--end item-box-->
                                                        </div><!--end col-->
                                        
                                                        <div class="col-lg-4 col-md-6 p-0 nf-item photo spacing">
                                                            <div class="item-box">
                                                                <a class="cbox-gallary1 mfp-image" href="../assets/images/small/img-6.jpg" title="Sed fringilla mauris">
                                                                    <img class="item-container" src="../assets/images/small/img-6.jpg" alt="1" />
                                                                    <div class="item-mask">
                                                                        <div class="item-caption">
                                                                            <h5 class="text-white">Sed fringilla mauris</h5>
                                                                            <p class="text-white">Photo</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div><!--end item-box-->
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->
                                        <div class="col-lg-4">
                                            <div class="card ">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h4><i class="fas fa-quote-left text-primary"></i></h4>
                                                    </div>                                            
                                                    <div id="carouselExampleFade2" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item">
                                                                <div class="text-center">
                                                                    <p class="text-muted px-4">
                                                                        It is a long established fact that a reader will be distracted by 
                                                                        the readable content of a page when looking at its layout. 
                                                                        The point of using Lorem Ipsum is that it has a more-or-less 
                                                                        normal distribution of letters, as opposed to using.
                                                                    </p>
                                                                    <div class="">
                                                                        <img src="../assets/images/users/user-10.jpg" alt="" class="rounded-circle thumb-lg mb-2">
                                                                        <p class="mb-0 text-primary"><b>- Mary K. Myers</b></p>
                                                                        <small class="text-muted">CEO Facebook</small>
                                                                    </div>                                                            
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item active">
                                                                <div class="text-center">
                                                                    <p class="text-muted px-4">                                                                
                                                                        Where does it come from?
                                                                        Contrary to popular belief, Lorem Ipsum is not simply random text. 
                                                                        It has roots in a piece of classical Latin literature from 45 BC, 
                                                                        making it over 2000 years  popular belief,old.
                                                                    </p>
                                                                    <div class="">
                                                                        <img src="../assets/images/users/user-4.jpg" alt="" class="rounded-circle  thumb-lg mb-2">
                                                                        <p class="mb-0 text-primary"><b>- Michael C. Rios</b></p>
                                                                        <small class="text-muted">CEO Facebook</small>
                                                                    </div>                                                            
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <div class="text-center">
                                                                    <p class="text-muted px-4">
                                                                        There are many variations of passages of Lorem Ipsum available, 
                                                                        but the majority have suffered alteration in some form, by injected humour, 
                                                                        or randomised words which don't look even slightly believable. 
                                                                        If you are going to use a passage of Lorem Ipsum. 
                                                                    </p>
                                                                    <div class="">
                                                                        <img src="../assets/images/users/user-5.jpg" alt="" class="rounded-circle  thumb-lg mb-2">
                                                                        <p class="mb-0 text-primary"><b>- Lisa D. Pullen</b></p>
                                                                        <small class="text-muted">CEO Facebook</small>
                                                                    </div>                                                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end row-->
                                </div><!--end portfolio detail-->
                                
                                <div class="tab-pane fade" id="settings_detail">
                                    <div class="row">
                                        <div class="col-lg-9 mx-auto">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form method="post" class="card-box">
                                                        <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="../assets/images/users/user-4.jpg"/>
                                                        <span class="input-icon icon-right">
                                                            <textarea rows="4" class="form-control" placeholder="Post a new message"></textarea>
                                                        </span>
                                                        <div class="float-right my-3">
                                                            <a class="btn btn-sm btn-primary text-white px-4 mb-0">Send</a>
                                                        </div>
                                                        <ul class="nav nav-pills profile-pills mt-1">                                                                
                                                            <li>
                                                                <a href="#"><i class=" fas fa-video font-18 mr-2 mt-2 text-primary"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fas fa-camera  font-18 mx-2 mt-2 text-primary"></i></a>
                                                            </li>
                                                        </ul>
                                                    </form>
        
                                                    <div class="">
                                                        <form class="form-horizontal form-material mb-0">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Full Name" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <input type="email" placeholder="Email" class="form-control" name="example-email" id="example-email">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="password" placeholder="password" class="form-control">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="password" placeholder="Re-password" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <input type="text" placeholder="Phone No" class="form-control">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <select class="form-control">
                                                                        <option>London</option>
                                                                        <option>India</option>
                                                                        <option>Usa</option>
                                                                        <option>Canada</option>
                                                                        <option>Thailand</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea rows="5" placeholder="Message" class="form-control"></textarea>
                                                                <button class="btn btn-primary btn-sm px-4 mt-3 float-right mb-0">Update Profile</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div> <!--end col-->                                          
                                    </div><!--end row-->
                                </div><!--end settings detail-->
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
