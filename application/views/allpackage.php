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
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Plans</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">All Plans</a></li>
                        
                    </ol>
                </div>
                <h4 class="page-title">All Plans</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->


</div><!-- container -->

<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Staff Members</h4>
                                    
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                        <th >No </th>
                                        <th >Name </th>
                                        <th >Volume </th>
                                        <th >Users </th>
                                        <th >Active </th>
                                        <th >Regular Price </th>
                                        <th >Total Extra </th>
                                        <th >Net Total</th>
                                        <th >Action </th>
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                        <?php $i = 0; foreach ($packages as $row) { $i++; ?>
                            <tr class="eventpointer">
                                <td class=" "><?php echo $i; ?></td>
                                <td class=" "><?php echo $row->packname; ?></td>
                                <td class=" "><?php echo $row->packvolume; ?></td>
                                <td class=" "><?php echo countRow('users', 'package', $row->packid); ?></td>
                                <td class=" "><?php echo countRow2('users', 'package', $row->packid, 'status', 'Active'); ?></td>
                                <td class=" "><?php echo settings()[0]->currency . " " . number_format($row->packprice, 2); ?></td>
                                <td class=" "><?php echo settings()[0]->currency . " " . number_format($row->total, 2); ?></td>
                                <td class=" "><?php echo settings()[0]->currency . " " . number_format($row->total + $row->packprice, 2); ?></td>
                                <td class="action-link">
                                    <a href="<?php echo base_url(); ?>package/edit/<?php echo $row->packid; ?>"><i class="fas fa-edit text-info font-16"></i></a>
                                    <a href="<?php echo base_url(); ?>package/delete/<?php echo $row->packid; ?>"><i class="fas fa-trash-alt text-danger font-16"id="sa-warning"></i></a>
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