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
                                  <h4 class="page-title">Add user</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>

    <div class="col-md-11 col-sm-11 col-xs-11 rightSideWrapper">
        <a class="btn btn-primary right" data-toggle="modal" data-target="#addUser"><i class="fa fa-plus fa-fw m-right-xs"></i> Add User</a>
        <div class="x_panel">
            <div class="x_title">
               
                <div class="clearfix"></div>

            </div>
            
        </div>


        <!-- Modal -->
        <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <!-- <h4 class="modal-title" id="myModalLabel">Add New User</h4> -->
              </div>
              <div class="modal-body">
                  <form class="form-horizontal form-label-left" role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>user/insert" accept-charset="utf-8">
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">Adadhar/driving/passport</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" name="photo" type="file">
                          </div>
                      </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">Name <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="name" name="name" type="text" placeholder="Enter Name Here" required>
                          </div>
                      </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">Mobile <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="mobile" name="mobile" type="text" placeholder="Enter Mobile Number" required>
                          </div>
                      </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">Package <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control" id="package" name="package" required>
                                  <option>Select Package</option>
                                  <?php foreach ($packages as $row) {?>
                                      <option value="<?php echo $row->packid;?>"><?php echo $row->packname;?> (<?php echo $row->packvolume;?>) (<?php echo $row->packprice;?>) <?php if($row->total){ echo "(" . $row->total . ")"; } ?></option>
                                  <?php }?>
                              </select>
                          </div>
                      </div>

                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">Area <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control" id="package" name="area" required>
                                  <option>Select Area</option>
                                  <?php foreach ($area as $row) {?>
                                      <option value="<?php echo $row->name;?>"><?php echo $row->name;?></option>
                                  <?php }?>
                              </select>
                          </div>
                      </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">Line Man/Staff <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control" id="package" name="staff" required>
                                  <option>Select Line Man/Staff</option>
                                  <?php foreach ($staff as $row) {?>
                                      <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                                  <?php }?>
                              </select>
                          </div>
                      </div>
  <!--                    <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Fee Amount<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="amount" name="amount" type="text" placeholder="Enter Monthly Fee Amount" required>
                          </div>
                      </div>-->
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">Connection ID <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="user_id" name="user_id" type="text" placeholder="Enter ID" required>
                          </div>
                      </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">Connection Pass <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="password" name="password" type="text" placeholder="Enter Password" required>
                          </div>
                      </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">Join Date <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="join_date" name="join_date" type="date" placeholder="Enter Join Date" required>
                          </div>
                      </div>
  <!--                    <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Service Charge <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="advance" name="advance" type="text" placeholder="Enter Advance Payment/Service Charge" required>
                          </div>
                      </div>-->
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">Role <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control" id="status" name="role" required>
                                  <option value="">Select Role</option>
                                  <option value="Admin">Admin</option>
                                  <option value="User">User</option>
                              </select>
                          </div>
                      </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">Account Email <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" name="email" type="email" placeholder="Enter Email For Login" required>
                          </div>
                      </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">Account Password <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" name="accpass" type="password" placeholder="Enter Password For Login" required>
                          </div>
                      </div>
                      <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-1">Address <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input class="form-control col-md-7 col-xs-12" id="location" name="location" type="text" placeholder="Enter Location" required="required">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-success">Add Now</button>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


    </div>
    </div><!-- Container -->
