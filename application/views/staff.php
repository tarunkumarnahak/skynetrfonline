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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Staff</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Add User</a></li>
                                        
                                    </ol>
                                </div>
                                <h4 class="page-title">Add Staff</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Add Staff Details</h4>
                                   
                                    <div class="general-label">
                                    
                                        <form role="form" id="addUser" enctype="multipart/form-data"action="<?php echo base_url() ?>staff/insert" method="post" role="form">
                                        <div class="form-group row">
                                                <label for="horizontalInput1" class="col-sm-2 col-form-label">Full Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="horizontalInput1" placeholder="Name"value="<?php echo set_value('fname'); ?>" id="fname" name="name" maxlength="128" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="horizontalInput1" class="col-sm-2 col-form-label">Mobile Number</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="horizontalInput1" placeholder="Mobile" id="mobile" value="<?php echo set_value('mobile'); ?>" name="mobile" maxlength="10"required>
                                                </div>
                                            </div>
                                            
                                          
                                            <div class="form-group row">
                                                <label for="horizontalInput1" class="col-sm-2 col-form-label">Area</label>
                                                <div class="col-sm-10">
                                                <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;"id="role" name="area">
                                                <option value="0">Select Area</option>
                                                <?php foreach ($area as $row) { ?>													 
                                    <option value="<?php echo $row->name; ?>"><?php echo $row->name; ?></option>  
                                <?php } ?>
                                            </select>
                                                </div>
                                            </div>
                                            

                                              
                                            <div class="row">
                                                <div class="col-sm-10 ml-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="reset" class="btn btn-danger">Reset</button>
                                                </div>
                                            </div> 
                                        </form>           
                                    </div>
                                </div><!--end card-body-->
                                



                </div><!-- container -->
                
               
            </div>
            <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Staff Members</h4>
                                    
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Staff Id</th>
                                            <th>Name</th>
                                            <th>Area</th>
                                            <th>Contact No</th>
                                            <th >Users </th>
                                            <th >Active Users</th>
                                            <th >Pending/Deactive Users</th>
                                            <th >Action </th>
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                        <?php $i = 0; foreach ($staff as $row) { $i++; ?>
                            <tr class="eventpointer">
                                <td class=" "><?php echo $i; ?></td>
                                    
                                <td class=" "><?php echo $row->name; ?></td>
                                <td class=" "><?php echo $row->area; ?></td>
                                <td class=" "><?php echo $row->mobile; ?></td>                                
                                <td class=" "><?php echo countRow('users', 'staff', $row->id); ?></td>
                                <td class=" "><?php echo countRow2('users', 'staff', $row->id, 'status', 'Active'); ?></td>
                                <td class=" "><?php echo countRow('users', 'staff', $row->id) - countRow2('users', 'staff', $row->id, 'status', 'Active'); ?></td>
                                <td class="action-link">
                                    <a href="<?php echo base_url(); ?>staff/edit/<?php echo $row->id; ?>"><i class="fas fa-edit text-info font-16"></i></a>
                                    <a href="<?php echo base_url(); ?>staff/delete/<?php echo $row->id; ?>"><i class="fas fa-trash-alt text-danger font-16"></i></a>
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