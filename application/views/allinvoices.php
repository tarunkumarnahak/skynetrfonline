<link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

<div class="page-content">

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Accounts</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">All Receipts</a></li>
                        
                    </ol>
                </div>
                <h4 class="page-title">All Receipts</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->


</div><!-- container -->

<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">All receipt</h4>
                                    
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                        <th >No </th>
                                        <th ># Invoice </th>
                                        <th >Name </th>
                                        <th >Package </th>
                                        <th >Status </th>
                                        <th >Action </th>
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                        <?php $i = 0; foreach ($invoices as $row) { $i++; ?>
                            <tr class="eventpointer">
                                <td class=" "><?php echo $i; ?></td>
                                <td class=" "><?php echo $row->invoiceID; ?></td>
                                <td class=" "><?php echo (getUser($row->userid)) ? getUser($row->userid)->name : "N/A"; ?></td>
                                <?php if(getUser($row->userid)){
                                    if(package(getUser($row->userid)->package)){ ?>
                                      <td class=" "><span class="label label-primary"><?php echo package(getUser($row->userid)->package)->packname . " (" . package(getUser($row->userid)->package)->packvolume . ") (" . package(getUser($row->userid)->package)->packprice . ") (" . package(getUser($row->userid)->package)->total . ")" ; ?></span></td>
                                    <?php }else{?>
                                      <td class=" ">N/A</td>
                                    <?php }
                                }else{ ?>
                                  <td class=" ">N/A</td>
                                <?php } ?>

                                <?php if($row->status == "Unpaid" || $row->status == " "){ ?>
                                    <td class=" "><span class="label label-warning"><?php echo $row->status; ?></td>
                                <?php }else{ ?>
                                    <td class=" "><span class="label label-success"><?php echo $row->status; ?></td>
                                <?php }?>

                                <td class="action-link">

                                    <?php if(getUser($row->userid)){ ?>

                                      <?php if(package(getUser($row->userid)->package)){ ?>
                                        <a href="<?php echo base_url(); ?>invoice/view/<?php echo $row->invoiceID; ?>"><span class="label label-primary">View</span></a>
                                      <?php }else{ ?>
                                        <a href="#"><span class="label label-danger">Package Not Found</span></a>
                                      <?php } ?>
                                    <?php }else{ ?>
                                        <a href="#"><span class="label label-danger">Package Not Found</span></a>
                                    <?php } ?>

                                    <a href="<?php echo base_url(); ?>invoice/delete/<?php echo $row->invoiceID; ?>"><span class="label label-danger delete">Delete</span></a>
                                </td>
                            </tr>
                        <?php } ?>
                                        </tbody>
                                    </table>        
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->


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
        

</div>