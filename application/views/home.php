<link rel="stylesheet" href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\morris\morris.css">
<link href="<?php echo base_url(); ?>assets\dashboard\assets\css\bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\css\icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\css\metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\css\style.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url(); ?>assets\dashboard\assets\plugins\datatables\responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
        <!-- <div class="main-menu-inner">
                    <div class="menu-body slimscroll">
                    <div id="MetricaAnalytic" class="main-icon-menu-pane">
                            <div class="title-box">
                                <h6 class="menu-title"><i class="mdi mdi-home-account"></i>Home</h6>       
                            </div>
                            <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href=" <?php echo base_url(); ?>Home"><i class="mdi mdi-shield-home-outline"></i>Dashboard</a></li>
                                <li class="nav-item"><a class="nav-link" href=" <?php echo base_url(); ?>area"><i class="mdi mdi-image-area"></i>Add Area</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>pppoe/"><i class="mdi mdi-ip-network"></i>PPPOE</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>hotspot/"><i class="mdi mdi-access-point-network"></i>Hotspot</a></li>
                                
                                
                            </ul>
                    </div>
</div>
</div> -->
<div class="page-content">


<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">All Details</li>
                    </ol>
                </div>
                <h4 class="page-title">All Information</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->


</div><!-- container -->
<h4>Users Statistics</h4>
<div class="row justify-content-left">
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-user-group report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-warning">Total Users</span>
                                    <h3 class="my-3"><?php
                        $this->db->from('users');
                        echo $this->db->count_all_results();
                        ?>.00</h3>
                                    
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-clock report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-secondary">Pending Users</span>
                                    <h3 class="my-3"><?php
                        $this->db->like('status', 'Pending');
                        $this->db->from('users');
                        echo $this->db->count_all_results();
                        ?>.00</h3>
                                    
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-meter report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-success">Active Users</span>
                                    <h3 class="my-3"><?php
                        $this->db->like('status', 'Deactive');
                        $this->db->from('users');
                        $deactive_users = $this->db->count_all_results();
                        $this->db->like('status', 'Active');
                        $this->db->from('users');
                        $active_users = $this->db->count_all_results();
                        echo $active_users - $deactive_users;
                        ?>.00</h3>
                                   
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-wallet report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-danger">Deactived Users</span>
                                    <h3 class="my-3"><?php
                        $this->db->like('status', 'Deactive');
                        $this->db->from('users');
                        echo $this->db->count_all_results();
                        ?>.00</h3>
                                   
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->     
                          
                    </div><!--end row-->
                <h4>Invoice Staticstics</h4>
                <div class="row justify-content-left">
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-user-group report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-warning">Total Invoice</span>
                                    <h3 class="my-3"><?php
                        $this->db->from('invoice');
                        echo $this->db->count_all_results();
                        ?>.00</h3>
                                    
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-meter report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-success">Paid Invoice</span>
                                    <h3 class="my-3"><?php
//                        $this->db->like('status', 'Paid');
                        $this->db->from('invoice');
                        $totalInvoice =  $this->db->count_all_results();

                        $this->db->like('status', 'Unpaid');
                        $this->db->from('invoice');
                        $totalUnpaidInvoice =  $this->db->count_all_results();

                        echo $totalInvoice - $totalUnpaidInvoice;

                        ?>.00</h3>
                                   
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-wallet report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-danger">Unpaid Invoice</span>
                                    <h3 class="my-3"><?php
                        $this->db->like('status', 'Unpaid');
                        $this->db->from('invoice');
                        echo $this->db->count_all_results();
                        ?>.00</h3>
                                   
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->     
                          
                    </div><!--end row--> 
<h4>Payment Statistics</h4>
<div class="row justify-content-left">
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-user-group report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-warning">Total Payments</span>
                                    <h3 class="my-3"><?php
                        $this->db->from('payments');
                        echo $this->db->count_all_results();
                        ?>.00</h3>
                                    
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-clock report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-secondary">This Month</span>
                                    <h3 class="my-3"><?php
                        $this->db->where('month(saletime)', date('m'));
                        $this->db->where('year(saletime)', date('Y'));
                        //$this->db->like('status', 'Paid');
                        $this->db->from('payments');
                        echo $this->db->count_all_results();
                        ?>.00</h3>
                                    
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-meter report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-success"> This Year</span>
                                    <h3 class="my-3"><?php
                        $this->db->where('year(saletime)', date('Y'));
                        //$this->db->like('status', 'Paid');
                        $this->db->from('payments');
                        echo $this->db->count_all_results();
                        ?>.00</h3>
                                   
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-wallet report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-danger"> Total Amount ( <?php echo settings()[0]->currency; ?> )</span>
                                    <h3 class="my-3"><?php
                        $this->db->select_sum('amount');
                        $this->db->from('payments');
                        $subOfPay = $this->db->get();
                        $subOfPay = $subOfPay->result()[0];
                        echo number_format($subOfPay->amount, 2);
                        ?></h3>
                                   
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->     
                          
                    </div><!--end row-->
                    <div class="row justify-content-left">
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-user-group report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-warning"> Month's Amount ( <?php echo settings()[0]->currency; ?> )</span>
                                    <h3 class="my-3"><?php
                        $this->db->select_sum('amount');
                        $this->db->from('payments');
                        $this->db->where('month(saletime)', date('m'));
                        $subOfPay = $this->db->get();
                        $subOfPay = $subOfPay->result()[0];
                        echo number_format($subOfPay->amount, 2);
                        ?></h3>
                                    
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-clock report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-secondary"> Year's Amount ( <?php echo settings()[0]->currency; ?> ) </span>
                                    <h3 class="my-3"><?php
                        $this->db->select_sum('amount');
                        $this->db->from('payments');
                        $this->db->where('year(saletime)', date('Y'));
                        $subOfPay = $this->db->get();
                        $subOfPay = $subOfPay->result()[0];
                        echo number_format($subOfPay->amount, 2);
                        ?></h3>
                                    
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->
                       
</div>
<h4>Income/Expense Statistics</h4>
<div class="row justify-content-left">
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-user-group report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-warning"> Total Income ( <?php echo settings()[0]->currency; ?> )</span>
                                    <h3 class="my-3"><?php
                        $this->db->select_sum('amount');
                        $this->db->from('balance');
                        $this->db->like('type', 'Income');
                        $sum = $this->db->get();
                        $sum = $sum->result()[0];
                        echo number_format($sum->amount, 2);
                        ?></h3>
                                    
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-clock report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-secondary">This Month ( <?php echo settings()[0]->currency; ?> )</span>
                                    <h3 class="my-3"><?php
                        $this->db->select_sum('amount');
                        $this->db->from('balance');
                        $this->db->like('type', 'Income');
                        $this->db->where('month(date)', date('m'));
                        $this->db->where('year(date)', date('Y'));
                        $sum = $this->db->get();
                        $sum = $sum->result()[0];
                        echo number_format($sum->amount, 2);
                        ?></h3>
                                    
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-meter report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-success">This Year ( <?php echo settings()[0]->currency; ?> )</span>
                                    <h3 class="my-3"><?php
                        $this->db->select_sum('amount');
                        $this->db->from('balance');
                        $this->db->like('type', 'Income');
                        $this->db->where('year(date)', date('Y'));
                        $sum = $this->db->get();
                        $sum = $sum->result()[0];
                        echo number_format($sum->amount, 2);
                        ?></h3>
                                   
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-wallet report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-danger"> Total Expense ( <?php echo settings()[0]->currency; ?> )</span>
                                    <h3 class="my-3"><?php
                        $this->db->select_sum('amount');
                        $this->db->from('balance');
                        $this->db->like('type', 'Expense');
                        $sum = $this->db->get();
                        $sum = $sum->result()[0];
                        echo number_format($sum->amount, 2);
                        ?></h3>
                                   
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->     
                          
                    </div><!--end row-->
                    <div class="row justify-content-left">
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-user-group report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-warning"> This Month ( <?php echo settings()[0]->currency; ?> )</span>
                                    <h3 class="my-3"><?php
                        $this->db->select_sum('amount');
                        $this->db->from('balance');
                        $this->db->like('type', 'Expense');
                        $this->db->where('month(date)', date('m'));
                        $this->db->where('year(date)', date('Y'));
                        $sum = $this->db->get();
                        $sum = $sum->result()[0];
                        echo number_format($sum->amount, 2);
                        ?></h3>
                                    
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="dripicons-clock report-main-icon"></i>
                                    </div> 
                                    <span class="badge badge-secondary">  This Year ( <?php echo settings()[0]->currency; ?> ) </span>
                                    <h3 class="my-3"><?php
                        $this->db->select_sum('amount');
                        $this->db->from('balance');
                        $this->db->like('type', 'Expense');
                        $this->db->where('year(date)', date('Y'));
                        $sum = $this->db->get();
                        $sum = $sum->result()[0];
                        echo number_format($sum->amount, 2);
                        ?></h3>
                                    
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->
                       
</div>
<div class="clearfix"></div>

    <div class="x_panel">
        <div class="x_title">
            <h2> Recent Users</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr class="headings">
                        <th >No </th>
                       
                        <th >Name </th>
                        <th >Phone </th>
                        <th >Package </th>
                        <th >ID </th>
                        <th class="column-title" style="display: table-cell;">Password </th>
                        <th class="column-title" style="display: table-cell;">Location </th>
                        <th class="column-title" style="display: table-cell;">Status </th>
                        <th class="column-title" style="display: table-cell;">Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($users as $row) {
                        $i++;
                        ?>
                        <tr class="even pointer">
                            <td class=" "><?php echo $i; ?></td>
                            
                            <td class=" "><?php echo $row->name; ?></td>
                            <td class=" "><?php echo $row->mobile; ?></td>

                            <?php if(package($row->package)){ ?>
                                <td class=" "><span class="badge badge-primary"><?php echo package($row->package)->packname . " (" . package($row->package)->packvolume . ") (" . package($row->package)->packprice . ") (" . package($row->package)->total . ")" ; ?></span></td>
                            <?php }else{ ?>
                                <td class=" ">N/A</td>
                            <?php } ?>

                            <td class=" "><?php echo $row->user_id; ?></td>
                            <td class=" "><?php echo $row->password; ?></td>
                            <td class=" "><span class="badge badge-primary"><?php echo $row->location; ?></span></td>
                            <td class=""><span class="badge badge-<?php
                                if ($row->status == "Active") {
                                    echo "success";
                                } elseif ($row->status == "Pending") {
                                    echo "warning";
                                } else {
                                    echo "danger";
                                }
                                ?>"><?php echo $row->status; ?></span></td>
                            <td class="action-link"><a href="<?php echo base_url(); ?>user/view/<?php echo $row->id; ?>/"><i class="mdi mdi-eye-circle"></i></a> <a href="<?php echo base_url(); ?>user/edit/<?php echo $row->id; ?>/"><i class="fas fa-edit text-info font-16"></i></a> <a href="<?php echo base_url(); ?>user/delete/<?php echo $row->id; ?>/" ><i class="fas fa-trash-alt text-danger font-16"id="sa-warning"></i></a></td>
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
        