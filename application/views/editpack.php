<?php foreach ($package as $row) : ?>

<div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Plans</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Edit Plans</a></li>
                                        
                                    </ol>
                                </div>
                                <h4 class="page-title">Edit Plans</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->


                </div><!-- container -->

                <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Add Plan</h4>
                                     
                                    <form role="form"enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>package/update" accept-charset="utf-8">
                                    <input type="hidden" name="packid" value="<?php echo $row->packid; ?>">
                                    <div class='form-row'>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Package Name *</label>
                                            <input  class="form-control" name="name" type="text" placeholder="Package Name" value="<?php echo $row->packname; ?>"required>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Package Code *</label>
                                            <input  class="form-control" name="code" type="text" placeholder="Package Code" value="<?php echo $row->code; ?>"required>
                                        </div>
                                        </div>

                                        <br>
                                        <div class='form-row'>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Regular Price *</label>
                                            <input  class="form-control" name="price" type="number" placeholder="Package Price" value="<?php echo $row->packprice; ?>"required>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Package Volume *</label>
                                            <input  class="form-control" name="volume" type="text" placeholder="Package Volume" value="<?php echo $row->packvolume; ?>"required>
                                        </div>
                                        </div>
                                        <br>
                                        <h4 class="mt-0 header-title">Monthly Costs & Prices</h4>
                                    <p class="text-muted mb-3">All Costs Will Be Calculated When Billing & Invoicing</p>
                                    
                                    <br>
                                        <div class='form-row'>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Extra Cost 01</label>
                                            <input  class="form-control" name="cost1" type="text" value="<?php echo $row->cost1; ?>"placeholder="Package Extra Service/Cost Name">
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Value 01</label>
                                            <input  class="form-control" name="value1" type="number" value="<?php echo $row->value1; ?>"placeholder="Package Extra Service/Cost Value">
                                        </div>
                                        </div>
                                       <br>
                                      
                                        <div class='form-row'>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Extra Cost 02</label>
                                            <input  class="form-control" name="cost2" type="text" value="<?php echo $row->cost2; ?>"placeholder="Package Extra Service/Cost Name">
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Value 02</label>
                                            <input  class="form-control" name="value2" type="number" value="<?php echo $row->value2; ?>"placeholder="Package Extra Service/Cost Value">
                                        </div>
                                        </div>
                                       <br>
                                       
                                        <div class='form-row'>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Extra Cost 03</label>
                                            <input  class="form-control" name="cost3" type="text" value="<?php echo $row->cost3; ?>"placeholder="Package Extra Service/Cost Name">
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Value 03</label>
                                            <input  class="form-control" name="value3" type="number" value="<?php echo $row->value3; ?>"placeholder="Package Extra Service/Cost Value">
                                        </div>
                                        </div>
                                       <br>
                                       
                                        <div class='form-row'>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Extra Cost 04</label>
                                            <input  class="form-control" name="cost4" type="text" value="<?php echo $row->cost4; ?>"placeholder="Package Extra Service/Cost Name">
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Value 04</label>
                                            <input  class="form-control" name="value4" type="number" value="<?php echo $row->value4; ?>"placeholder="Package Extra Service/Cost Value">
                                        </div>
                                        </div>
                                       <br>
                                       
                                        <div class='form-row'>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Extra Cost 05</label>
                                            <input  class="form-control" name="cost5" type="text" value="<?php echo $row->cost5; ?>"placeholder="Package Extra Service/Cost Name">
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1">Value 05</label>
                                            <input  class="form-control" name="value5" type="number" value="<?php echo $row->value5; ?>"placeholder="Package Extra Service/Cost Value">
                                        </div>
                                        </div>
                                       <br>
                                        <button type="submit" class="btn btn-primary">+ Add Plan</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>                                           
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
            </div>
            <?php endforeach; ?>