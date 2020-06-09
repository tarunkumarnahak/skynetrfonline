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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Area</a></li>
                                        <li class="breadcrumb-item active">Add Area</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add Area</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->


                </div><!-- container -->
                <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Add Area</h4>
                                    <form class="form-horizontal form-label-left" role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>area/insert" accept-charset="utf-8">
                                    <div class="form-material">
                                        <br> 
                                        <label class="mb-3">Enter Area *</label>
                                        <input type="text" class="form-control" placeholder="Enter Area Name"name="name" id="mdate"name="createdate" required>
                                        
                                        <br>
                                        <button id="send"class="btn btn-primary" type="submit">+ Add Area Now</button>
                                    </div>       
                                </div><!--end card-body-->
                            </div><!--end card-->                                
                        </div> <!-- end col -->
                        </form>
                        
</div>

                
<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">All Areas</h4>
                                    
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                        <th >No </th>
                            <th >Name </th>
                            <th >Users </th>
                            <th >Active Users</th>
                            <th >Pending/Deactive Users</th>
                            <th >Line Mans </th>
                            <th >Action </th>
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                        <?php $i = 0; foreach ($area as $row) { $i++; ?>
                            <tr class="eventpointer">
                                <td class=" "><?php echo $i; ?></td>
                                <td class=" "><?php echo $row->name; ?></td>
                                <td class=" "><?php echo countRow('users', 'area', $row->name); ?></td>
                                <td class=" "><?php echo countRow2('users', 'area', $row->name, 'status', 'Active'); ?></td>
                                <td class=" "><?php echo countRow('users', 'area', $row->name) - countRow2('users', 'area', $row->name, 'status', 'Active'); ?></td>
                                <td class=" "><?php echo countRow('staff', 'area', $row->name); ?></td>
                                
                                <td class="action-link">
                                    <a href="<?php echo base_url(); ?>area/edit/<?php echo $row->id; ?>"><i class="fas fa-edit text-info font-16"></i></a>
                                    <a href="<?php echo base_url(); ?>area/delete/<?php echo $row->id; ?>"><i class="fas fa-trash-alt text-danger font-16"id="sa-warning"></i></a>
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
            <!-- end page content -->
       