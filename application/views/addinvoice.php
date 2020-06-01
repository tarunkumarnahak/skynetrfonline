<div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Accounts</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Add Receipt</a></li>
                                        
                                    </ol>
                                </div>
                                <h4 class="page-title">Add Receipts</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->


                </div><!-- container -->

                <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Add Receipt</h4>
                                     
                                    <form role="form"enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>invoice/insert" accept-charset="utf-8">
                                    <div class='form-row'>
                                        <div class="col-md-6">
                                        <select class="form-control"id="userid" name="userid">
                                                    <?php foreach ($users as $row) { ?>
                                <?php if(package($row->package) !=false){ ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?> | <?php echo package($row->package)->packname . " (" . package($row->package)->packvolume . ") (" . package($row->package)->packprice . ") (" . package($row->package)->total . ")" ; ?></option>
                                <?php }else{ ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                <?php } } ?>
                                                    </select> 
                                        </div>
                                        </div>
                                        <br>
                                        <div class='form-row'>
                                        <div class="col-md-6">
                                        <label class="mb-3">Create Date</label>
                                        <input type="date" class="form-control" placeholder="yyyy-mm-dd" id="mdate"name="createdate" required>
                                        </div>
                                        </div>

                                        <br>
                                        <div class='form-row'>
                                        <div class="col-md-6">
                                        <label class="mb-3">Due Date</label>
                                        <input type="date" class="form-control" placeholder="yyyy-mm-dd" id="mdate"name="duedate" required>
                                        </div>
                                        </div>
                                        <br>
                                        <h4 class="mt-0 header-title">Extra Costs & Prices</h4>
                                    <p class="text-muted mb-3">All Costs Will Be Calculated When Billing & Invoicing</p>
                                    
                                    <br>
                                        <div class='form-row'>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Extra Cost 01</label>
                                            <input  class="form-control" name="cost1" type="text" placeholder="Package Extra Service/Cost Name">
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Value 01</label>
                                            <input  class="form-control" name="value1" type="number" placeholder="Package Extra Service/Cost Value">
                                        </div>
                                        </div>
                                       <br>
                                      
                                        <div class='form-row'>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Extra Cost 02</label>
                                            <input  class="form-control" name="cost2" type="text" placeholder="Package Extra Service/Cost Name">
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Value 02</label>
                                            <input  class="form-control" name="value2" type="number" placeholder="Package Extra Service/Cost Value">
                                        </div>
                                        </div>
                                       <br>
                                       
                                        <div class='form-row'>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Extra Cost 03</label>
                                            <input  class="form-control" name="cost3" type="text" placeholder="Package Extra Service/Cost Name">
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Value 03</label>
                                            <input  class="form-control" name="value3" type="number" placeholder="Package Extra Service/Cost Value">
                                        </div>
                                        </div>
                                       <br>
                                       
                                        <div class='form-row'>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Extra Cost 04</label>
                                            <input  class="form-control" name="cost4" type="text" placeholder="Package Extra Service/Cost Name">
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Value 04</label>
                                            <input  class="form-control" name="value4" type="number" placeholder="Package Extra Service/Cost Value">
                                        </div>
                                        </div>
                                       <br>
                                       
                                        <div class='form-row'>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Extra Cost 05</label>
                                            <input  class="form-control" name="cost5" type="text" placeholder="Package Extra Service/Cost Name">
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Value 05</label>
                                            <input  class="form-control" name="value5" type="number" placeholder="Package Extra Service/Cost Value">
                                        </div>
                                        </div>
                                       <br>
                                        <button type="submit" class="btn btn-primary">+ Add Receipt</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>                                           
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
            </div>