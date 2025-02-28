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
                        <li class="breadcrumb-item"><a href="javascript:void(0);">PPPOE</a></li>
                        <li class="breadcrumb-item active">Add PPPOE Users</li>
                    </ol>
                </div>
                <h4 class="page-title">PPPOE online Users</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->


</div><!-- container -->


    <div class="col-md-11 col-sm-11 col-xs-11 rightSideWrapper">
        <a class="btn btn-primary right" data-toggle="modal" data-target="#addPPPoEUser"><i class="fa fa-plus fa-fw m-right-xs"></i> Add PPPoE User</a>
        <div class="x_panel">
            <div class="x_title">
                <h2>PPPoE Online Users</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <?php if($online){ ?>

                    <table id="datatable-buttons"class="table table-striped table-bordered dt-responsive nowrap"style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr class="headings">
                                <th class="column-title" style="display: table-cell;">No </th>
                                <th class="column-title" style="display: table-cell;">Photo </th>
                                <th class="column-title" style="display: table-cell;">PPPoE Name </th>
                                <th class="column-title" style="display: table-cell;">Portal Name </th>
                                <!-- <th class="column-title" style="display: table-cell;">Mobile </th> -->
                                <!-- <th class="column-title" style="display: table-cell;">Package </th> -->
                                <th class="column-title" style="display: table-cell;">Uptime </th>
                                <th class="column-title" style="display: table-cell;">IP Address </th>
                                <th class="column-title" style="display: table-cell;">MAC Address </th>
                                <!-- <th class="column-title" style="display: table-cell;">Comment </th> -->
                                <!-- <th class="column-title" style="display: table-cell;">Status </th> -->
                                <th class="column-title" style="display: table-cell;">Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; foreach ($online as $row) { $i++; ?>
                                <tr class="even pointer">
                                    <td class=" "><?php echo $i; ?></td>

                                    <?php if(!empty($row('name'))){ ?>
                                        <td class=" "><?php echo $row('name'); ?></td>
                                    <?php } else{ ?>
                                        <td class=" ">N/A</td>
                                    <?php } ?>

                                    <?php if(pppoeUser($row('name')) != false){ ?>
                                        <td class=" "><?php echo pppoeUser($row('name'))->name; ?></td>
                                    <?php } else{ ?>
                                        <td class=" ">N/A</td>
                                    <?php } ?>

                                    <!-- <?php if(pppoeUser($row('name')) != false){ ?>
                                        <td class=" "><?php echo pppoeUser($row('name'))->mobile; ?></td>
                                    <?php } else{ ?>
                                        <td class=" ">N/A</td>
                                    <?php } ?> -->

                                    <!-- <?php if(pppoeUser($row('name')) != false && package(pppoeUser($row('name'))->package) != false){ ?>
                                        <td class=" "><span class="label label-primary"><?php echo package(pppoeUser($row('name'))->package)->packname . " (" . package(pppoeUser($row('name'))->package)->packvolume . ") (" . package(pppoeUser($row('name'))->package)->packprice . ") (" . package(pppoeUser($row('name'))->package)->total . ")" ; ?></span></td>
                                    <?php }else{ ?>
                                        <td class=" ">N/A</td>
                                    <?php } ?> -->

                                    <td class=" "><?php echo $row('uptime'); ?></td>
                                    <td class=" "><?php echo $row('address'); ?></td>
                                    <td class=" "><?php echo $row('caller-id'); ?></td>
                                    <!-- <td class=" "><?php echo $row('comment'); ?></td> -->

                                    <!-- <?php if(pppoeUser($row('name')) != false){ ?>
                                        <td class=""><span class="label label-<?php
                                            if (pppoeUser($row('name'))->status == "Active") {
                                                echo "success";
                                            } elseif (pppoeUser($row('name'))->status == "Pending") {
                                                echo "primary";
                                            } else {
                                                echo "warning";
                                            }
                                            ?>"><?php echo pppoeUser($row('name'))->status; ?></span></td>
                                    <?php }else{ ?>
                                        <td class=""><span class="label label-danger">N/A</span></td>
                                    <?php } ?> -->

                                    <?php if(pppoeUser($row('name')) != false){ ?>
                                        <td class="action-link">
                                            <a href="<?php echo base_url(); ?>user/view/<?php echo pppoeUser($row('name'))->id; ?>/"><span class="label label-success">View</span></a>
                                            <a href="<?php echo base_url(); ?>user/edit/<?php echo pppoeUser($row('name'))->id; ?>/" ><span class="label label-warning">Edit</span></a>
                                            <a href="<?php echo base_url(); ?>user/delete/<?php echo pppoeUser($row('name'))->id; ?>/" ><span class="label label-danger delete">Delete</span></a>
                                        </td>
                                    <?php }else{ ?>
                                        <td class="action-link">
                                            <a href="#"><span class="label label-warning">No Profile</span></a>
                                        </td>
                                    <?php } ?>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php }else{ ?>
                    <h3>Router is Not Connected or No User Found</h3>
                <?php } ?>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="addPPPoEUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                
              </div>
              <div class="modal-body">
                  <form class="form-horizontal form-label-left" role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>pppoe/insert" accept-charset="utf-8">
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">Connect User <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control" name="user" required>
                                  <option value="">Select Portal User</option>
                                  <?php foreach($users as $user){ ?>
                                      <option value="<?php echo $user->id;?>"><?php echo $user->name;?></option>
                                  <?php } ?>
                              </select>
                          </div>
                      </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">PPPoE Username <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" name="name" type="text" placeholder="Enter PPPoE Username Here" required>
                          </div>
                      </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">PPPoE User Secret <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" name="password" type="password" placeholder="Enter PPPoE User Secret Here" required>
                          </div>
                      </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">PPPoE Service <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control" name="service" required>
                                  <option value="">Select PPPoE Service</option>
                                  <option value="any">Any</option>
                                  <option value="async">Async</option>
                                  <option value="l2tp">L2tp</option>
                                  <option value="ovpn">Ovpn</option>
                                  <option value="pptp">Pptp</option>
                                  <option value="sstp">Sstp</option>
                                  <option value="pppoe">PPPoE</option>
                              </select>
                          </div>
                      </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">PPPoE Profile <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control" name="profile" required>
                                  <option value="">Select PPPoE Profile</option>
                                  <?php foreach($profiles as $profile){ ?>
                                      <option value="<?php echo $profile('name');?>"><?php echo $profile('name');?></option>
                                  <?php } ?>
                              </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-success">Add Now</button>
                          </div>
                      </div>
                  </form>
              </div>
             
            </div>
          </div>
        </div>


    </div>
    </div><!-- Container -->
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
        
