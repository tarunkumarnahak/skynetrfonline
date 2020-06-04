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
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Browse Invoice</a></li>
                        <li class="breadcrumb-item active">Search Invoice</li>
                    </ol>
                </div>
                <h4 class="page-title">Browse Invoice</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->


</div><!-- container -->
<div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Browse Invoice</h4>
                                    
                                    <form role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>bill/browse" accept-charset="utf-8">
                                    <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-right">Select Month</label>
                                                <div class="col-sm-10">
                                                    <select class="custom-select"id="month" name="month">
                                                        <option selected value="<?php echo date('F'); ?>"><?php echo date('F'); ?></option>
                                                        <option value="Janaury">January</option>
                                                        <option value="February">February</option>
                                                        <option value="March">March</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="September">September</option>
                                                        <option value="October">October</option>
                                                        <option value="November">November</option>
                                                        <option value="December">December</option> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label text-right">Select year</label>
                                                <div class="col-sm-10">
                                                    <select class="custom-select"id="year" name="year">
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
                                       
                                        <button id="send" type="Save Now!" type="submit" class="btn btn-primary">Search Now</button>
                                        <button type="button" class="btn btn-danger">Cancel</button>
                                    </form>                                           
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->



                        <?php if ($bills_paid) { ?>
        <div class="col-md-11 col-sm-11 col-xs-11 rightSideWrapper">     
            <div class="x_panel">
                <div class="x_title"> 
                    <h2>Paid Users |
                        <?php if ($bills_paid) { ?>
                            <?php
                            $i = 0;
                            foreach ($bills_paid as $row) {
                                ?>
                                <?php echo $row->month; ?>, <?php echo $row->year; ?>
                                <?php
                                $i++;
                                if ($i == 1)
                                    break;
                            }
                            ?>
                        <?php } else { ?>
                            <span style="color:#FFEB3B">No Bills Found On This Date</span>
                        <?php } ?>
                    </h2>                
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr >                                             
                                <th >No </th>
                                
                                <th >Name </th>
                                <th >Mobile </th>
                                <th >Package </th>
                                <th >Status </th>
                                <th >Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($bills_paid as $row) {
                                $i++;
                                ?>
                                <tr class="even pointer">
                                    <td class=" "><?php echo $i; ?></td>
                                        
                                    <td class=" "><?php echo $row->name; ?></td>
                                    <td class=" "><?php echo $row->mobile; ?></td>
                                    <?php if(package($row->package)){ ?>
                                        <td class=" "><span class="label label-primary"><?php echo package($row->package)->packname . " (" . package($row->package)->packvolume . ") (" . package($row->package)->packprice . ") (" . package($row->package)->total . ")" ; ?></span></td>
                                    <?php }else{ ?>
                                        <td class=" ">N/A</td>
                                    <?php } ?>
                                    <td class=""><span class="label label-<?php
                                        if ($row->billstatus == "Paid") {
                                            echo "success";
                                        } elseif ($row->billstatus == "Unpaid") {
                                            echo "warning";
                                        } else {
                                            echo "warning";
                                        }
                                        ?>"><?php echo $row->billstatus; ?></span></td>
                                    <td class="action-link">
                                        <?php if(invoiceByUser($row->userid)){ ?>
                                           <a href="<?php echo base_url(); ?>invoice/view/<?php echo invoiceByUser($row->userid)->invoiceID; ?>" target="_blank"><span class="label label-primary">Invoice</span></a>
                                         <?php } ?>
                                        <a href="<?php echo base_url(); ?>bill/makeunpaid/<?php echo $row->billid; ?>"><span class="label label-warning">Make Unpaid</span></a>
                                        <a href="<?php echo base_url(); ?>bill/delete/<?php echo $row->billid; ?>"><span class="label label-danger delete">Delete</span></a>
                                    </td>	
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>        
        </div>

    <?php } ?>
        
    <?php if ($bills_unpaid) { ?>
        <div class="col-md-11 col-sm-11 col-xs-11 rightSideWrapper"> 
            <div class="x_panel">
                <div class="x_title">
                    <h2>Unpaid Users |
                        <?php if ($bills_unpaid) { ?>
                            <?php
                            $i = 0;
                            foreach ($bills_unpaid as $row) {
                                ?>
                                <?php echo $row->month; ?>, <?php echo $row->year; ?>
                                <?php
                                $i++;
                                if ($i == 1)
                                    break;
                            }
                            ?>
                        <?php } else { ?>
                            <span style="color:#FFEB3B">Opps! Nothing Found</span>
                        <?php } ?>
                    </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr >                                             
                                <th >No </th>
                               
                                <th >Name </th>
                                <th >Mobile </th>
                                <th >Package </th>
                                <th >Status </th>
                                <th >Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($bills_unpaid as $row) {
                                $i++;
                                ?>

                                <tr class="even pointer">
                                    <td class=" "><?php echo $i; //echo $row->id;           ?></td>
                                        
                                    <td class=" "><?php echo $row->name; ?></td>
                                    <td class=" "><?php echo $row->mobile; ?></td>
                                    <?php if(package($row->package)){ ?>
                                        <td class=" "><span class="label label-primary"><?php echo package($row->package)->packname . " (" . package($row->package)->packvolume . ") (" . package($row->package)->packprice . ") (" . package($row->package)->total . ")" ; ?></span></td>
                                    <?php }else{ ?>
                                        <td class=" ">N/A</td>
                                    <?php } ?>
                                    <td class=""><span class="label label-<?php
                                        if ($row->billstatus == "Paid") {
                                            echo "success";
                                        } elseif ($row->billstatus == "Unpaid") {
                                            echo "warning";
                                        } else {
                                            echo "warning";
                                        }
                                        ?>"><?php echo $row->billstatus; ?></span></td>
                                    <td class="action-link">
                                        <?php if(invoiceByUser($row->userid)){ ?>                                           
                                            <a href="<?php echo base_url(); ?>invoice/view/<?php echo invoiceByUser($row->userid)->invoiceID; ?>" target="_blank"><span class="label label-primary">Invoice</span></a>
                                        <?php } ?>
                                        <a href="<?php echo base_url(); ?>bill/makepaid/<?php echo $row->billid; ?>"><span class="label label-warning">Make Paid</span></a>
                                        <a href="<?php echo base_url(); ?>bill/delete/<?php echo $row->billid; ?>"><span class="label label-danger delete">Delete</span></a>
                                    </td>			
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php } ?>
    </div><!-- Container -->
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
        