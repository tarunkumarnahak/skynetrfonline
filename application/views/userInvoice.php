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

<?php 

    $thisUser = getUser($invoice[0]->userid) ;
    $thisPackage = package(getUser($invoice[0]->userid)->package) ;
    $subTotal = $thisPackage->packprice + $thisPackage->value1 + $thisPackage->value2 + $thisPackage->value3 + $thisPackage->value4 + $thisPackage->value5;
    $discountTotal = (int)$invoice[0]->discount;
    $vatTotal = $subTotal * (int)settings()[0]->vat / 100;
    $netTotal = $subTotal - $discountTotal + $vatTotal;
    
?>

<div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Invoices</a></li>
                                        <li class="breadcrumb-item active">View Invoice</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Payment Invoice</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="card">
                                <div class="card-body invoice-head"> 
                                    <div class="row">
                                        <div class="col-md-4 align-self-center">                                                
                                            <img src="<?php echo base_url(); ?>assets\dashboard\assets\images\logo-sm.png" alt="logo-small" class="logo-sm mr-2" height="73">                                            
                                                                                          
                                        </div>
                                        <div class="col-md-8">
                                                
                                            <ul class="list-inline mb-0 contact-detail float-right">                                                   
                                                <li class="list-inline-item">
                                                    <div class="pl-3">
                                                        <i class="mdi mdi-web"></i>
                                                        <p class="text-muted mb-0"><?php echo settings()[0]->email;?></p>
                                                        <!-- <p class="text-muted mb-0">www.qrstuvwxyz.com</p> -->
                                                    </div>                                                
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="pl-3">
                                                        <i class="mdi mdi-phone"></i>
                                                        <p class="text-muted mb-0"><?php echo settings()[0]->mobile;?></p>
                                                        <!-- <p class="text-muted mb-0">+123 123456789</p> -->
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="pl-3">
                                                        <i class="mdi mdi-map-marker"></i>
                                                        <p class="text-muted mb-0"> <?php echo settings()[0]->address;?></p>
                                                        <p class="text-muted mb-0"><?php echo settings()[0]->city;?>, <?php echo settings()[0]->country;?>, <?php echo settings()[0]->zip;?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> 
                                </div><!--end card-body-->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="">
                                                <!-- <h6 class="mb-0"><b>Order Date :</b> 11/05/2019</h6>
                                                <h6><b>Order ID :</b> # 23654789</h6> -->
                                                 <strong>Invoice #:</strong> <?php echo $invoice[0]->invoiceID; ?><br>
                                <strong>Created:</strong> <?php echo $invoice[0]->createdate; ?><br>
                                <strong>Due:</strong> <?php echo $invoice[0]->duedate; ?><br>
                                <strong>Payment Method:</strong> <?php echo settings()[0]->paymentmethod;?><br>
                                <strong>Account:</strong> <?php echo settings()[0]->paymentacc;?><br>
                                <?php if($invoice[0]->status !== "Paid"){ ?> 
                                    <strong>Status: </strong><span class="text-danger"> <?php echo $invoice[0]->status; ?></span><br>
                                <?php }else{ ?>
                                    <strong>Status: </strong><span class="text-success"><?php echo $invoice[0]->status; ?></span><br>
                                    <strong>Paid Amount:</strong> <?php echo $invoice[0]->paidamount; ?><br>
                                    <strong>Paid Method:</strong> <?php echo $invoice[0]->paidmethod; ?><br>
                                    <strong>Paid Acc. Info:</strong> <?php echo $invoice[0]->paidacc; ?><br><br>
                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">                                            
                                            <div class="float-left">
                                                <address class="font-13">
                                                    <strong class="font-14">Billed To :</strong><br>
                                                    <strong><?php echo $thisUser->name; ?></strong><br>
                               <?php echo $thisPackage->packname . " (" . $thisPackage->packvolume . ")" ; ?><br>
                                <?php echo $thisUser->area; ?>, <?php $thisUser->location; ?><br>
                                <?php echo $thisUser->mobile; ?><br>
                                <?php echo $thisUser->email; ?><br><br>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="">
                                                <address class="font-13">
                                                    <strong class="font-14">Shipped To:</strong><br>
                                                    <strong><?php echo $thisUser->name; ?></strong><br>
                               <?php echo $thisPackage->packname . " (" . $thisPackage->packvolume . ")" ; ?><br>
                                <?php echo $thisUser->area; ?>, <?php $thisUser->location; ?><br>
                                <?php echo $thisUser->mobile; ?><br>
                                <?php echo $thisUser->email; ?><br><br>
                                                </address>
                                            </div>
                                        </div>                                           
                                        
                                        <div class="col-md-3">
                                            <div class="text-center bg-light p-3 mb-3">
                                                <h5 class="bg-info mt-0 p-2 text-white d-sm-inline-block">Payment Methods</h5>
                                                <h6 class="font-13">Paypal & Cards Payments :</h6>
                                                <p class="mb-0 text-muted">CompanyA/c.paypal@gmai.com</p>
                                                <p class="mb-0 text-muted">Visa, Master Card, Chaque</p>
                                            </div>                                              
                                        </div>                                            
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Package/Service</th>
                                                            <th>Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <td><?php echo $thisPackage->packname . " (" . $thisPackage->packvolume . ")" ; ?></td>
                            <td><?php echo settings()[0]->currency . " " . number_format($thisPackage->packprice, 2); ?></td>

                                                        </tr>
                                                        
                                                        <?php if($thisPackage->cost1){ ?>
                            <tr class="item">
                                <td><?php echo $thisPackage->cost1; ?></td>
                                <td><?php echo settings()[0]->currency . " " . number_format($thisPackage->value1, 2); ?></td>
                            </tr>
                        <?php }?>
                                                        
                        <?php if($thisPackage->cost2){ ?>
                            <tr class="item">
                                <td><?php echo $thisPackage->cost2; ?></td>
                                <td><?php echo settings()[0]->currency . " " . number_format($thisPackage->value2, 2); ?></td>
                            </tr>
                        <?php }?>
                        <?php if($thisPackage->cost3){ ?>
                            <tr class="item">
                                <td><?php echo $thisPackage->cost3; ?></td>
                                <td><?php echo settings()[0]->currency . " " . number_format($thisPackage->value3, 2); ?></td>
                            </tr>
                        <?php }?>
                        <?php if($thisPackage->cost4){ ?>
                            <tr class="item">
                                <td><?php echo $thisPackage->cost4; ?></td>
                                <td><?php echo settings()[0]->currency . " " . number_format($thisPackage->value4, 2); ?></td>
                            </tr>
                        <?php }?>
                        <?php if($thisPackage->cost5){ ?>
                            <tr class="item">
                                <td><?php echo $thisPackage->cost5; ?></td>
                                <td><?php echo settings()[0]->currency . " " . number_format($thisPackage->value5, 2); ?></td>
                            </tr>
                        <?php }?>
                            
                            
                        <tr class="item">
                            <td><strong>Subtotal</strong></td>
                            <td><strong><?php echo settings()[0]->currency . " " . number_format($subTotal, 2); ?></strong></td>
                        </tr>
                        <tr class="item">
                            <td><strong>Discount</strong></td>
                            <td><strong><?php echo settings()[0]->currency . " " . number_format($discountTotal, 2); ?></strong></td>
                        </tr>
                        <tr class="item">
                            <td><strong>Vat (<?php echo settings()[0]->vat;?>%)</strong></td>
                            <td><strong><?php echo settings()[0]->currency . " " . number_format($vatTotal, 2); ?></strong></td>
                        </tr>
                        <tr class="item">
                            <td><strong>Total</strong></td>
                            <td><strong><?php echo settings()[0]->currency . " " . number_format($netTotal, 2); ?></strong></td>
                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>                                            
                                        </div>                                        
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <h5 class="mt-4">Terms And Condition :</h5>
                                            <ul class="pl-3">
                                                <li><small>All accounts are to be paid within 7 days from receipt of invoice. </small></li>
                                                <li><small>To be paid by cheque or credit card or direct payment online.</small></li>
                                                <li><small> If account is not paid within 7 days the credits details supplied as confirmation<br> of work undertaken will be charged the agreed quoted fee noted above.</small></li>                                            
                                            </ul>
                                        </div>                                        
                                        <div class="col-lg-6 align-self-end">
                                            <div class="w-25 float-right">
                                                <small>Account Manager</small>
                                                <img src="<?php echo base_url(); ?>assets\dashboard\assets\images\signature.png" alt="" class="" height="48">
                                                <p class="border-top">Signature</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                                            <div class="text-center text-muted"><small>Thank you very much for doing business with us. Thanks !</small></div>
                                        </div>
                                        <div class="col-lg-12 col-xl-4">
                                            <div class="float-right d-print-none">
                                                <a href="javascript:window.print()" class="btn btn-info"><i class="fa fa-print"></i></a>
                                                
                                                
                    <!-- <button class="btn btn-primary right"  href="<?php echo base_url('invoice/paypal/' . $invoice[0]->invoiceID);?>" data-toggle="modal" data-target=".bs-payment-modal-lg">Payment</button> -->
                    <button class="btn btn-primary right"  href="#" data-toggle="modal" data-target=".bs-payment-modal-lg">Pay Now By Paypal/Stripe</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->

               
            </div>
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
