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
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Transections</a></li>
                        <li class="breadcrumb-item active">All Payments</li>
                    </ol>
                </div>
                <h4 class="page-title">Payment Statistics</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->


</div><!-- container -->
<div class="row">
                        <div class="col-lg-3">
                            <div class="card card-eco">
                                <div class="card-body">
                                    <h4 class="title-text mt-0">Total Payments ( <?php echo settings()[0]->currency; ?> )</h4>
                                    <div class="d-flex justify-content-between">
                                        <h3 class="font-weight-bold"><?php
                        $this->db->from('payments');
                        echo $this->db->count_all_results();
                        ?>.00</h3>
                                        <i class="dripicons-user-group card-eco-icon text-pink align-self-center"></i>
                                    </div>                                     
                             
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card card-eco">
                                <div class="card-body">
                                    <h4 class="title-text mt-0">This Month Payments ( <?php echo settings()[0]->currency; ?> )</h4>
                                    <div class="d-flex justify-content-between">
                                        <h3 class="font-weight-bold"><?php
                        $this->db->where('month(saletime)', date('m'));
                        $this->db->where('year(saletime)', date('Y'));
                        //$this->db->like('status', 'Paid');
                        $this->db->from('payments');
                        echo $this->db->count_all_results();
                        ?>.00</h3>
                                        <i class="dripicons-cart card-eco-icon text-secondary  align-self-center"></i>
                                    </div>                                     
                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card card-eco">
                                <div class="card-body">
                                    <h4 class="title-text mt-0">This Year Payments ( <?php echo settings()[0]->currency; ?> )</h4>
                                    <div class="d-flex justify-content-between">
                                        <h3 class="font-weight-bold"><?php
                        $this->db->where('year(saletime)', date('Y'));
                        //$this->db->like('status', 'Paid');
                        $this->db->from('payments');
                        echo $this->db->count_all_results();
                        ?>.00</h3>
                                        <i class="dripicons-jewel card-eco-icon text-warning  align-self-center"></i>
                                    </div>                                   
                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card card-eco">
                                <div class="card-body">
                                    <h4 class="title-text mt-0">Total Amount ( <?php echo settings()[0]->currency; ?> )</h4>
                                    <div class="d-flex justify-content-between">
                                        <h3 class="font-weight-bold"><?php
                        $this->db->select_sum('amount'); 
                        $this->db->from('payments');
                        $subOfPay = $this->db->get();
                        $subOfPay = $subOfPay->result()[0];
                        echo number_format($subOfPay->amount, 2);
                        ?></h3>
                                        <i class="dripicons-wallet card-eco-icon text-success  align-self-center"></i>
                                    </div>                                    
                          
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card card-eco">
                                <div class="card-body">
                                    <h4 class="title-text mt-0">Day's Amount ( <?php echo settings()[0]->currency; ?> )</h4>
                                    <div class="d-flex justify-content-between">
                                        <h3 class="font-weight-bold"><?php
                        $this->db->select_sum('amount'); 
                        $this->db->from('payments');
                        $this->db->where('day(saletime)', date('d'));
                        $subOfPay = $this->db->get();
                        $subOfPay = $subOfPay->result()[0];
                        echo number_format($subOfPay->amount, 2);
                        ?></h3>
                                        <i class="fab fa-google-wallet card-eco-icon text-warning align-self-center"></i>
                                    </div>                                     
                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card card-eco">
                                <div class="card-body">
                                    <h4 class="title-text mt-0">Month's Amount ( <?php echo settings()[0]->currency; ?> )</h4>
                                    <div class="d-flex justify-content-between">
                                        <h3 class="font-weight-bold"><?php
                        $this->db->select_sum('amount'); 
                        $this->db->from('payments');
                        $this->db->where('month(saletime)', date('m'));
                        $subOfPay = $this->db->get();
                        $subOfPay = $subOfPay->result()[0];
                        echo number_format($subOfPay->amount, 2);
                        ?></h3>
                                        <i class="fas fa-clipboard-check card-eco-icon text-success  align-self-center"></i>
                                    </div>                                     
                                    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card card-eco">
                                <div class="card-body">
                                    <h4 class="title-text mt-0">Year's Amount ( <?php echo settings()[0]->currency; ?> )</h4>
                                    <div class="d-flex justify-content-between">
                                        <h3 class="font-weight-bold"><?php
                        $this->db->select_sum('amount'); 
                        $this->db->from('payments');
                        $this->db->where('year(saletime)', date('Y'));
                        $subOfPay = $this->db->get();
                        $subOfPay = $subOfPay->result()[0];
                        echo number_format($subOfPay->amount, 2);
                        ?></h3>
                                        <i class="dripicons-meter card-eco-icon text-secondary  align-self-center"></i>
                                    </div>                                     
                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

</div>
<div class="row">
<div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Browse By Months</h4>
                                   
                                    <div class="general-label">
                                    
                                        <form role="form" id="addUser" enctype="multipart/form-data"action="<?php echo base_url() ?>payments/bymonth" method="post" role="form">
                                            
                                          
                                            <div class="form-group row">
                                                <label for="horizontalInput1" class="col-sm-2 col-form-label" required>Month</label>
                                                <div class="col-sm-10">
                                                <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;"id="month" name="month">
                                                <option selected value="<?php echo date('m'); ?>"><?php echo date('F'); ?></option>     
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="horizontalInput1" class="col-sm-2 col-form-label">Year</label>
                                                <div class="col-sm-10">
                                                <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;"id="year" name="year">
                                                <option selected value="<?php echo date('Y'); ?>"><?php echo date('Y'); ?></option>                                             
                                                <option value="2016">2016</option>                                             
                                                <option value="2017">2017</option>                                             
                                                <option value="2018">2018</option>                                             
                                                <option value="2019">2019</option>                                             
                                                <option value="2020">2020</option>                                             
                                                <option value="2021">2021</option>                                             
                                                <option value="2022">2022</option>                                             
                                                <option value="2023">2023</option>                                             
                                                <option value="2024">2024</option>                                             
                                                <option value="2025">2025</option>                                             
                                                <option value="2026">2026</option>    
                                            </select>
                                                </div>
                                            </div>
                                       
                                            

                                              
                                            <div class="row">
                                                <div class="col-sm-10 ml-auto">
                                                    <button id="send" type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                   
                                                    
                                                </div>
                                            </div> 
                                        </form>           
                                    </div>
                    </div>
                    </div>
                   </div> 
                    <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Browse By Year</h4>
                                   
                                    <div class="general-label">
                                    
                                        <form role="form" id="addUser" enctype="multipart/form-data"action="<?php echo base_url(); ?>payments/byyear" method="post" role="form">
                                            
                                          
                                           
                                            <div class="form-group row">
                                                <label for="horizontalInput1" class="col-sm-2 col-form-label">Year</label>
                                                <div class="col-sm-10">
                                                <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;"id="year" name="year">
                                                <option selected value="<?php echo date('Y'); ?>"><?php echo date('Y'); ?></option>                                             
                                                <option value="2016">2016</option>                                             
                                                <option value="2017">2017</option>                                             
                                                <option value="2018">2018</option>                                             
                                                <option value="2019">2019</option>                                             
                                                <option value="2020">2020</option>                                             
                                                <option value="2021">2021</option>                                             
                                                <option value="2022">2022</option>                                             
                                                <option value="2023">2023</option>                                             
                                                <option value="2024">2024</option>                                             
                                                <option value="2025">2025</option>                                             
                                                <option value="2026">2026</option>    
                                            </select>
                                                </div>
                                            </div>
                                       
                                            

                                              
                                            <div class="row">
                                                <div class="col-sm-10 ml-auto">
                                                    <button id="send" type="submit" class="btn btn-primary waves-effect waves-light">Browse Now</button>
                                                   
                                                    
                                                </div>
                                            </div> 
                                        </form>           
                                    </div>
                    </div>
                    </div>
                    </div>
                   </div>
                       
<div >        
    <div class="x_panel">
        <div class="x_title"> 
            <h2> All Payments</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="datatable-buttons"class="table table-striped table-bordered dt-responsive nowrap"style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr class="headings">                                             
                        <th class="column-title" style="display: table-cell;">No </th>
                        <th class="column-title" style="display: table-cell;"># Invoice </th>
                        <th class="column-title" style="display: table-cell;">Method </th>
                        <th class="column-title" style="display: table-cell;">Amount </th>
                        <th class="column-title" style="display: table-cell;">Payer Info </th>
                        <th class="column-title" style="display: table-cell;">Time</th>
                        <th class="column-title" style="display: table-cell;">Status </th>
                        <th class="column-title" style="display: table-cell;">Action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($payments as $row) {
                        $i++;
                        ?>
                        <tr class="eventpointer">
                            <td class=" "><?php echo $i; ?></td>
                            <td class=" "><?php echo $row->invoiceid; ?></td>
                            <td class=" "><?php echo $row->method; ?></td>
                            <td class=" "><?php echo $row->currency . " " . number_format($row->amount, 2); ?></td>
                            <td class=" "><?php echo $row->payeremail; ?></td>
                            <td class=" "><?php echo date('Y-m-d', strtotime($row->saletime)); ?></td>
                            <td class=""><span class="label label-<?php
                                if ($row->status == "Paid") {
                                    echo "success";
                                } else {
                                    echo "warning";
                                }
                                ?>"><?php echo $row->status; ?></span></td>
                            <td class="action-link">
                                <a href="<?php echo base_url(); ?>payments/delete/<?php echo $row->paymentid; ?>"><span class="label label-danger delete">Delete</span></a>
                            </td>	
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>        
</div>
                    </div>
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
        
