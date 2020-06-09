<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Skynet Rfonline Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets\dashboard\assets\images\favicon.ico">
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\footable\css\footable.bootstrap.css" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\css\icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\css\style.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\sweet-alert2\sweetalert2.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\animate\animate.css" rel="stylesheet" type="text/css">



    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="<?php echo base_url(); ?>home" class="logo">
                    <span>
                        <img src="<?php echo base_url(); ?>assets\dashboard\assets\images\logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                   
                </a>
            </div>
            <!--end logo-->
            <!-- Navbar -->
          
            <nav class="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-right mb-0"> 
                    
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                Notifications (18)
                            </h6>
                            <div class="slimscroll notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                    <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                             
                            <span class="ml-1 nav-user-name hidden-sm"><?php echo currentUsername(); ?>  <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                      
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                      
                            <a class="dropdown-item" href="<?php echo base_url(); ?>login/logout"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                </ul><!--end topbar-nav-->
                
              
                <ul class="list-unstyled topbar-nav mb-0">                        
                    <li>
                        <button class="button-menu-mobile nav-link waves-effect waves-light">
                            <i class="dripicons-menu nav-icon"></i>
                        </button>
                    </li>
                    <!-- <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fas fa-search"></i></a>
                        </form>
                    </li> -->
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
       
        <div class="page-wrapper">
            <!-- Left Sidenav -->
            <div class="left-sidenav">
                <div class="main-icon-menu">
                    <nav class="nav">
                        <a href="#MetricaAnalytic" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Home">
                            <svg class="nav-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <path d="M184,448h48c4.4,0,8-3.6,8-8V72c0-4.4-3.6-8-8-8h-48c-4.4,0-8,3.6-8,8v368C176,444.4,179.6,448,184,448z"/>
                                    <path class="svg-primary" d="M88,448H136c4.4,0,8-3.6,8-8V296c0-4.4-3.6-8-8-8H88c-4.4,0-8,3.6-8,8V440C80,444.4,83.6,448,88,448z"/>
                                    <path class="svg-primary" d="M280.1,448h47.8c4.5,0,8.1-3.6,8.1-8.1V232.1c0-4.5-3.6-8.1-8.1-8.1h-47.8c-4.5,0-8.1,3.6-8.1,8.1v207.8
                                        C272,444.4,275.6,448,280.1,448z"/>
                                    <path d="M368,136.1v303.8c0,4.5,3.6,8.1,8.1,8.1h47.8c4.5,0,8.1-3.6,8.1-8.1V136.1c0-4.5-3.6-8.1-8.1-8.1h-47.8
                                        C371.6,128,368,131.6,368,136.1z"/>
                                </g>
                            </svg>
                        </a><!--end MetricaAnalytic-->

                        <a href="#MetricaCrypto" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Staff/Users">
                            <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path class="svg-primary" d="M410.5 279.2c-5-11.5-12.7-21.6-28.1-30.1-8.2-4.5-16.1-7.8-25.4-10 5.4-2.5 10-5.4 16.3-11 7.5-6.6 13.1-15.7 15.6-23.3 2.6-7.5 4.1-18 3.5-28.2-1.1-16.8-4.4-33.1-13.2-44.8-8.8-11.7-21.2-20.7-37.6-27-12.6-4.8-25.5-7.8-45.5-8.9V32h-40v64h-32V32h-41v64H96v48h27.9c8.7 0 14.6.8 17.6 2.3 3.1 1.5 5.3 3.5 6.5 6 1.3 2.5 1.9 8.4 1.9 17.5V343c0 9-.6 14.8-1.9 17.4-1.3 2.6-2 4.9-5.1 6.3-3.1 1.4-3.2 1.3-11.8 1.3h-26.4L96 416h87v64h41v-64h32v64h40v-64.4c26-1.3 44.5-4.7 59.4-10.3 19.3-7.2 34.1-17.7 44.7-31.5 10.6-13.8 14.9-34.9 15.8-51.2.7-14.5-.9-33.2-5.4-43.4zM224 150h32v74h-32v-74zm0 212v-90h32v90h-32zm72-208.1c6 2.5 9.9 7.5 13.8 12.7 4.3 5.7 6.5 13.3 6.5 21.4 0 7.8-2.9 14.5-7.5 20.5-3.8 4.9-6.8 8.3-12.8 11.1v-65.7zm28.8 186.7c-7.8 6.9-12.3 10.1-22.1 13.8-2 .8-4.7 1.4-6.7 1.9v-82.8c5 .8 7.6 1.8 11.3 3.4 7.8 3.3 15.2 6.9 19.8 13.2 4.6 6.3 8 15.6 8 24.7 0 10.9-2.8 19.2-10.3 25.8z"/>
                            </svg>
                        </a><!--end MetricaCrypto-->

                        <a href="#MetricaProject" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Plan">
                            <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path class="svg-primary" d="M256 32C132.288 32 32 132.288 32 256s100.288 224 224 224 224-100.288 224-224S379.712 32 256 32zm135.765 359.765C355.5 428.028 307.285 448 256 448s-99.5-19.972-135.765-56.235C83.972 355.5 64 307.285 64 256s19.972-99.5 56.235-135.765C156.5 83.972 204.715 64 256 64s99.5 19.972 135.765 56.235C428.028 156.5 448 204.715 448 256s-19.972 99.5-56.235 135.765z"/>
                                <path d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"/>
                            </svg>
                        </a><!--end MetricaProject-->

                        <a href="#MetricaEcommerce" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Accounts">
                            <svg class="nav-svg" version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <ellipse class="svg-primary" transform="matrix(0.9998 -1.842767e-02 1.842767e-02 0.9998 -7.7858 3.0205)" cx="160" cy="424" rx="24" ry="24"/>
                                    <ellipse class="svg-primary" transform="matrix(2.381651e-02 -0.9997 0.9997 2.381651e-02 -48.5107 798.282)" cx="384.5" cy="424" rx="24" ry="24"/>
                                    <path d="M463.8,132.2c-0.7-2.4-2.8-4-5.2-4.2L132.9,96.5c-2.8-0.3-6.2-2.1-7.5-4.7c-3.8-7.1-6.2-11.1-12.2-18.6
                                        c-7.7-9.4-22.2-9.1-48.8-9.3c-9-0.1-16.3,5.2-16.3,14.1c0,8.7,6.9,14.1,15.6,14.1c8.7,0,21.3,0.5,26,1.9c4.7,1.4,8.5,9.1,9.9,15.8
                                        c0,0.1,0,0.2,0.1,0.3c0.2,1.2,2,10.2,2,10.3l40,211.6c2.4,14.5,7.3,26.5,14.5,35.7c8.4,10.8,19.5,16.2,32.9,16.2h236.6
                                        c7.6,0,14.1-5.8,14.4-13.4c0.4-8-6-14.6-14-14.6H189h-0.1c-2,0-4.9,0-8.3-2.8c-3.5-3-8.3-9.9-11.5-26l-4.3-23.7
                                        c0-0.3,0.1-0.5,0.4-0.6l277.7-47c2.6-0.4,4.6-2.5,4.9-5.2l16-115.8C464,134,464,133.1,463.8,132.2z"/>
                                </g>
                            </svg>
                        </a> <!--end MetricaEcommerce-->   

                        <a href="#MetricaCRM" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Ticket">
                            <svg class="nav-svg" version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M276,68.1v219c0,3.7-2.5,6.8-6,7.7L81.1,343.4c-2.3,0.6-3.6,3.1-2.7,5.4C109.1,426,184.9,480.6,273.2,480
                                            C387.8,479.3,480,386.5,480,272c0-112.1-88.6-203.5-199.8-207.8C277.9,64.1,276,65.9,276,68.1z"/>
                                    </g>
                                    <path class="svg-primary" d="M32,239.3c0,0,0.2,48.8,15.2,81.1c0.8,1.8,2.8,2.7,4.6,2.2l193.8-49.7c3.5-0.9,6.4-4.6,6.4-8.2V36c0-2.2-1.8-4-4-4
                                        C91,33.9,32,149,32,239.3z"/>
                                </g>
                            </svg>
                        </a><!--end MetricaCRM-->

                        <a href="#MetricaOthers" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Billing">
                            <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M70.7 164.5l169.2 81.7c4.4 2.1 10.3 3.2 16.1 3.2s11.7-1.1 16.1-3.2l169.2-81.7c8.9-4.3 8.9-11.3 0-15.6L272.1 67.2c-4.4-2.1-10.3-3.2-16.1-3.2s-11.7 1.1-16.1 3.2L70.7 148.9c-8.9 4.3-8.9 11.3 0 15.6z"/>
                                <path class="svg-primary" d="M441.3 248.2s-30.9-14.9-35-16.9-5.2-1.9-9.5.1S272 291.6 272 291.6c-4.5 2.1-10.3 3.2-16.1 3.2s-11.7-1.1-16.1-3.2c0 0-117.3-56.6-122.8-59.3-6-2.9-7.7-2.9-13.1-.3l-33.4 16.1c-8.9 4.3-8.9 11.3 0 15.6l169.2 81.7c4.4 2.1 10.3 3.2 16.1 3.2s11.7-1.1 16.1-3.2l169.2-81.7c9.1-4.2 9.1-11.2.2-15.5z"/>
                                <path d="M441.3 347.5s-30.9-14.9-35-16.9-5.2-1.9-9.5.1S272.1 391 272.1 391c-4.5 2.1-10.3 3.2-16.1 3.2s-11.7-1.1-16.1-3.2c0 0-117.3-56.6-122.8-59.3-6-2.9-7.7-2.9-13.1-.3l-33.4 16.1c-8.9 4.3-8.9 11.3 0 15.6l169.2 81.7c4.4 2.2 10.3 3.2 16.1 3.2s11.7-1.1 16.1-3.2l169.2-81.7c9-4.3 9-11.3.1-15.6z"/>
                            </svg>
                        </a><!--end MetricaOthers-->

                        <a href="#MetricaPages" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Utilities">
                            <svg class="nav-svg" version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <path d="M462.5,352.3c-1.9-5.5-5.6-11.5-11.4-18.3c-10.2-12-30.8-29.3-54.8-47.2c-2.6-2-6.4-0.8-7.5,2.3l-4.7,13.4
                                        c-0.7,2,0,4.3,1.7,5.5c15.9,11.6,35.9,27.9,41.8,35.9c2,2.8-0.5,6.6-3.9,5.8c-10-2.3-29-7.3-44.2-12.8c-8.6-3.1-17.7-6.7-27.2-10.6
                                        c16-20.8,24.7-46.3,24.7-72.6c0-32.8-13.2-63.6-37.1-86.4c-22.9-21.9-53.8-34.1-85.7-33.7c-25.7,0.3-50.1,8.4-70.7,23.5
                                        c-18.3,13.4-32.2,31.3-40.6,52c-8.3-6-16.1-11.9-23.2-17.6c-13.7-10.9-28.4-22-38.7-34.7c-2.2-2.8,0.9-6.7,4.4-5.9
                                        c11.3,2.6,35.4,10.9,56.4,18.9c1.5,0.6,3.2,0.3,4.5-0.8l11.1-10.1c2.4-2.1,1.7-6-1.3-7.2C121,137.4,89.2,128,73.2,128
                                        c-11.5,0-19.3,3.5-23.3,10.4c-7.6,13.3,7.1,35.2,45.1,66.8c34.1,28.5,82.6,61.8,136.5,92c87.5,49.1,171.1,81,208,81
                                        c11.2,0,18.7-3.1,22.1-9.1C464.4,364.4,464.7,358.7,462.5,352.3z"/>
                                    <path  class="svg-primary" d="M312,354c-29.1-12.8-59.3-26-92.6-44.8c-30.1-16.9-59.4-36.5-84.4-53.6c-1-0.7-2.2-1.1-3.4-1.1c-0.9,0-1.9,0.2-2.8,0.7
                                        c-2,1-3.3,3-3.3,5.2c0,1.2-0.1,2.4-0.1,3.5c0,32.1,12.6,62.3,35.5,84.9c22.9,22.7,53.4,35.2,85.8,35.2c23.6,0,46.5-6.7,66.2-19.5
                                        c1.9-1.2,2.9-3.3,2.7-5.5C315.5,356.8,314.1,354.9,312,354z"/>
                                </g>
                           </svg>                           
                        </a><!--end MetricaPages-->

                        <a href="#MetricaAuthentication" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Enquiry">
                            <svg class="nav-svg" version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <path class="svg-primary" d="M376,192h-24v-46.7c0-52.7-42-96.5-94.7-97.3c-53.4-0.7-97.3,42.8-97.3,96v48h-24c-22,0-40,18-40,40v192c0,22,18,40,40,40
                                        h240c22,0,40-18,40-40V232C416,210,398,192,376,192z M270,316.8v68.8c0,7.5-5.8,14-13.3,14.4c-8,0.4-14.7-6-14.7-14v-69.2
                                        c-11.5-5.6-19.1-17.8-17.9-31.7c1.4-15.5,14.1-27.9,29.6-29c18.7-1.3,34.3,13.5,34.3,31.9C288,300.7,280.7,311.6,270,316.8z
                                            M324,192H188v-48c0-18.1,7.1-35.1,20-48s29.9-20,48-20s35.1,7.1,48,20s20,29.9,20,48V192z"/>
                                </g>
                            </svg>
                        </a> <!--end MetricaAuthentication--> 

                    </nav><!--end nav-->
                </div><!--end main-icon-menu-->
               
                <div class="main-menu-inner">
                    <div class="menu-body slimscroll">
                    <div id="MetricaAnalytic" class="main-icon-menu-pane">
                            <div class="title-box">
                                <h6 class="menu-title">Home</h6>       
                            </div>
                            <ul class="nav">
                    
                    
                    <li class="nav-item"><a class="nav-link" href=" <?php echo base_url(); ?>Home"><i class="dripicons-meter"></i>Dashboard</a></li>
                                <li class="nav-item"><a class="nav-link" href=" <?php echo base_url(); ?>area"><i class="dripicons-meter"></i>Add Area</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>pppoe/"><i class="dripicons-view-thumb"></i>PPPOE</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>hotspot/"><i class="dripicons-view-thumb"></i>Hotspot</a></li>
                              
                                
                            </ul>
                        </div><!-- end Analytic -->
                        <!-- <div id="MetricaAnalytic" class="main-icon-menu-pane">
                            <div class="title-box">
                                <h6 class="menu-title">Staffs</h6>       
                            </div>
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link" href=" <?php echo base_url(); ?>addNew"><i class="dripicons-meter"></i>Add Staffs</a></li>
                                <li class="nav-item"><a class="nav-link" href=" <?php echo base_url(); ?>userListing"><i class="dripicons-user-group"></i>View staff</a></li>
                                
                            </ul> -->
                        <!-- </div>end Analytic -->
                        <div id="MetricaCrypto" class="main-icon-menu-pane">
                        <div class="title-box">
                                <h6 class="menu-title">Staffs</h6>       
                            </div>
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link" href=" <?php echo base_url(); ?>staff"><i class="dripicons-meter"></i>Add Staffs</a></li>
                                
                                
                                
                            </ul>
                            <div class="title-box">
                                <h6 class="menu-title">Users</h6>
                            </div>
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>addCustomer"><i class="dripicons-device-desktop"></i>Quick Add Users</a></li>
                                <li class="nav-item"><a class="nav-link" href=" crypto/crypto-exchange.html"><i class="dripicons-swap"></i>CRN List</a></li>
                                <li class="nav-item"><a class="nav-link" href=" crypto/crypto-wallet.html"><i class="dripicons-wallet"></i>CAF List</a></li>
                                <li class="nav-item"><a class="nav-link" href=" crypto/crypto-calendar.html"><i class="dripicons-calendar"></i>All Users</a></li>
                                <li class="nav-item"><a class="nav-link" href=" crypto/crypto-news.html"><i class="dripicons-blog"></i>Users expiring in 7 days</a></li>
                                <li class="nav-item"><a class="nav-link" href=" crypto/crypto-ico.html"><i class="dripicons-stack"></i>Disabled/Deleted Users</a></li>
                                
                            </ul>
                        </div><!-- end Crypto -->
                        <div id="MetricaProject" class="main-icon-menu-pane">
                            <div class="title-box">
                                <h6 class="menu-title">Plans</h6>        
                            </div>
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link" href=" <?php echo base_url(); ?>package/"><i class="dripicons-view-thumb"></i>Add new plan</a></li>
                                <li class="nav-item"><a class="nav-link" href=" <?php echo base_url(); ?>package/all"><i class="dripicons-view-thumb"></i>All Plans</a></li>
                                
                            </ul>
                        </div><!-- end  Project-->
                        <div id="MetricaEcommerce" class="main-icon-menu-pane">
                            <div class="title-box">
                                <h6 class="menu-title">Accounts</h6>           
                            </div>
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>bill/"><i class="dripicons-device-desktop"></i>Add Invoice</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>bill/browse"><i class="dripicons-view-apps"></i>Browser Invoice</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>invoice/add"><i class="dripicons-list"></i>Add Receipt</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>invoice/all"><i class="dripicons-article"></i>All receipts</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>payments/all"><i class="dripicons-cart"></i>Transection</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>balance/"><i class="dripicons-card"></i>Income/Expenses</a></li>
                            </ul>
                        </div><!-- end Ecommerce -->
                        <div id="MetricaCRM" class="main-icon-menu-pane">
                            <div class="title-box">
                                <h6 class="menu-title">Ticket</h6>          
                            </div>
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link" href=" crm/crm-index.html"><i class="dripicons-monitor"></i>Open Ticket</a></li>
                                <li class="nav-item"><a class="nav-link" href=" crm/crm-contacts.html"><i class="dripicons-user-id"></i>Close Ticket</a></li>
                                
                            </ul>
                        </div><!-- end CRM -->
                        <div id="MetricaOthers" class="main-icon-menu-pane">
                            <div class="title-box">
                                <h6 class="menu-title">Billing</h6>      
                            </div>
                            <ul class="nav metismenu" id="main_menu_side_nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="dripicons-mail"></i><span class="w-100">MRGT</span><span class="menu-arrow"></span></a>
                                                
                                </li><!--end nav-item-->
                                                            </ul><!--end nav-->
                        </div><!-- end Others -->

                        <div id="MetricaPages" class="main-icon-menu-pane">
                            <div class="title-box">
                                <h6 class="menu-title">Utilites</h6>        
                            </div>
                            <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>settings"><i class="mdi mdi-settings"></i>Settings</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>communication"><i class="dripicons-conversation"></i>Communication</a></li>    
                            <li class="nav-item"><a class="nav-link" href=" pages/pages-profile.html"><i class="dripicons-user"></i>Support User</a></li>
                                
                                
                            </ul>
                        </div><!-- end Pages -->
                        <div id="MetricaAuthentication" class="main-icon-menu-pane">
                            <div class="title-box">
                                <h6 class="menu-title">Enquiry</h6>     
                            </div>
                              
                        </div><!-- end Authentication-->
                                
                            </ul>
                        </div>
                    </div><!--end menu-body-->
                </div><!-- end main-menu-inner-->
            </div>
            <!-- end left-sidenav-->
            

            
        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\js\jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\js\bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\js\metisMenu.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\js\waves.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\js\jquery.slimscroll.min.js"></script>

        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\footable\js\footable.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\moment\moment.js"></script> 
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\pages\jquery.footable.init.js"></script> 

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\js\app.js"></script>

        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\sweet-alert2\sweetalert2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\pages\jquery.sweet-alert.init.js"></script>

        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\moment\moment.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\daterangepicker\daterangepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\select2\select2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\bootstrap-colorpicker\js\bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\timepicker\bootstrap-material-datetimepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\bootstrap-maxlength\bootstrap-maxlength.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\bootstrap-touchspin\js\jquery.bootstrap-touchspin.min.js"></script>

        <script src="<?php echo base_url(); ?>assets\dashboard\assets\pages\jquery.forms-advanced.js"></script>

    </body>
</html>