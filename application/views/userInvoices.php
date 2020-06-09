

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
                        <li class="breadcrumb-item active">All Invoices</li>
                    </ol>
                </div>
                <h4 class="page-title">Profile</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->


</div>

<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">              <h2> All Invoices</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr class="headings">                                             
                            <th class="column-title" style="display: table-cell;">No </th>
                            <th class="column-title" style="display: table-cell;"># Invoice </th>
                            <th class="column-title" style="display: table-cell;">Name </th>
                            <th class="column-title" style="display: table-cell;">Package </th>
                            <th class="column-title" style="display: table-cell;">Status </th>
                            <th class="column-title" style="display: table-cell;">Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; foreach ($invoices as $row) { $i++; ?>
                            <tr class="eventpointer">
                                <td class=" "><?php echo $i; ?></td>
                                <td class=" "><?php echo $row->invoiceID; ?></td>
                                <td class=" "><?php echo getUser($row->userid)->name; ?></td>
                                <?php if(package(getUser($row->userid)->package)){ ?>
                                <td class=" "><span class="badge badge-primary"><?php echo package(getUser($row->userid)->package)->packname . " (" . package(getUser($row->userid)->package)->packvolume . ") (" . package(getUser($row->userid)->package)->packprice . ") (" . package(getUser($row->userid)->package)->total . ")" ; ?></span></td>
                                <?php }else{ ?>
                                    <td class=" ">N/A</td>
                                <?php } ?>
                                <?php if($row->status == "Unpaid" || $row->status == " "){ ?>
                                    <td class=" "><span class="badge badge-warning"><?php echo $row->status; ?></td>
                                <?php }else{ ?>
                                    <td class=" "><span class="badge badge-success"><?php echo $row->status; ?></td>
                                <?php }?>
                                
                                <td class="action-link">
                                    <?php if(package(getUser($row->userid)->package)){ ?>
                                    <a href="<?php echo base_url(); ?>user/invoiceview/<?php echo $row->invoiceID; ?>"><span class="label label-primary">View</span></a>
                                    <?php }else{ ?>
                                    <a href="#"><span class="badge badge-danger">Package Not Found</span></a>
                                    <?php } ?>
                                </td>	
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>        
    </div>
    </div><!-- Container -->
    
    <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\morris\morris.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\raphael\raphael.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\pages\jquery.morris.init.js"></script>
        
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\jszip.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\pdfmake.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\vfs_fonts.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\buttons.print.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\responsive.bootstrap4.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\assets\pages\jquery.datatable.init.js"></script>
        