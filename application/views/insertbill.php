
       
         <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\daterangepicker\daterangepicker.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\select2\select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\bootstrap-colorpicker\css\bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\timepicker\bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\bootstrap-touchspin\css\jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        

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
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Accounts</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Add Invoice</a></li>
                        
                    </ol>
                </div>
                <h4 class="page-title">Add Invoice</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->


</div><!-- container -->
<div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Generate Auto Invoices & Bills</h4>
                                    <form class="form-horizontal form-label-left" role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>bill/autogenerate" accept-charset="utf-8">
                                    <div class="form-material">
                                        <br> 
                                        <label class="mb-3">Create Date</label>
                                        <input type="date" class="form-control" placeholder="yyyy-mm-dd" id="mdate"name="createdate" required>
                                        <br>
                                        <label class="mb-3">Due Date</label>
                                        <input type="date" class="form-control" placeholder="yyyy-mm-dd" id="mdate"name="duedate" required>
                                        <br>
                                        <button id="send"class="btn btn-primary" type="submit">+ Generate Now</button>
                                    </div>       
                                </div><!--end card-body-->
                            </div><!--end card-->                                
                        </div> <!-- end col -->
                        </form>
                        
</div>
        <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Generate Manually Invoices & Bills</h4>
                                    <form class="form-horizontal form-label-left" role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>bill/insert" accept-charset="utf-8">
                                    <div class="form-material">
                                    <label class="col-sm-2 col-form-label text-left">Name *</label>
                                                <div class="col-sm-13">
                                                    <select class="form-control">
                                                    <?php foreach ($users as $row) { ?>
                                <?php if(package($row->package) !=false){ ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?> | <?php echo package($row->package)->packname . " (" . package($row->package)->packvolume . ") (" . package($row->package)->packprice . ") (" . package($row->package)->total . ")" ; ?></option>
                                <?php }else{ ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                <?php } } ?>
                                                    </select>
                                                </div>            
                                                <label class="col-sm-2 col-form-label text-left">Paid *</label>
                                                <div class="col-sm-13">
                                                    <select class="form-control" id="status" name="status">
                                                        <option value="Paid">Paid</option>
                                                        <option value="Unpaid">Unpaid</option>
                                                    </select>
                                                </div>
                                                <br>
                                                <label class="mb-3">Create Date</label>
                                        <input type="date" class="form-control" placeholder="yyyy-mm-dd" id="mdate"name="createdate" required>
                                        <br>
                                            </div>
                                       <br>
                                        <button id="send"class="btn btn-primary" type="submit">+Add Invoice Now</button>
                                    </div>       
                                </div><!--end card-body-->
                            </div><!--end card-->                                
                        </div> <!-- end col -->
                        </form>
<!-- end page content -->

        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\moment\moment.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\daterangepicker\daterangepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\select2\select2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\bootstrap-colorpicker\js\bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\timepicker\bootstrap-material-datetimepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\bootstrap-maxlength\bootstrap-maxlength.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\bootstrap-touchspin\js\jquery.bootstrap-touchspin.min.js"></script>

        <script src="<?php echo base_url(); ?>assets\dashboard\assets\pages\jquery.forms-advanced.js"></script>
