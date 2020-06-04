<div class="page-content">

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Accounts</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Account/Expanses</a></li>
                        <li class="breadcrumb-item active">Edit Balance</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit Balance</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->


</div><!-- container -->
<div class="row">
                        <div class="col-lg-3">
                            <div class="card card-eco">
                                <div class="card-body">
                                    <h4 class="title-text mt-0">Total Balances ( <?php echo settings()[0]->currency; ?> )</h4>
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
                                    <h4 class="title-text mt-0"> This Month ( <?php echo settings()[0]->currency; ?> )</h4>
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
                                    <h4 class="title-text mt-0"> This Year ( <?php echo settings()[0]->currency; ?> )</h4>
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
                                    <h4 class="title-text mt-0"> Total Amount ( <?php echo settings()[0]->currency; ?> )</h4>
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
                                    <h4 class="title-text mt-0"> This Month ( <?php echo settings()[0]->currency; ?> )</h4>
                                    <div class="d-flex justify-content-between">
                                        <h3 class="font-weight-bold"><?php
                        $this->db->select_sum('amount');
                        $this->db->from('payments');
                        $this->db->where('month(saletime)', date('m'));
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
                                    <h4 class="title-text mt-0"> This Year ( <?php echo settings()[0]->currency; ?> )</h4>
                                    <div class="d-flex justify-content-between">
                                        <h3 class="font-weight-bold"><?php
                        $this->db->select_sum('amount');
                        $this->db->from('payments');
                        $this->db->where('year(saletime)', date('Y'));
                        $subOfPay = $this->db->get();
                        $subOfPay = $subOfPay->result()[0];
                        echo number_format($subOfPay->amount, 2);
                        ?></h3>
                                        <i class="fas fa-clipboard-check card-eco-icon text-success  align-self-center"></i>
                                    </div>                                     
                                    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        
</div>
<div class="card">
<div class="card-body">
    <div class="col-lg-12">
        <div class="x_title">
            <h2> Edit Balance</h2>                
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="col-md-12">
                <?php foreach($balances as $row) : ?>
                <form class="form-horizontal form-label-left" role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>balance/update" accept-charset="utf-8">
                    <input type="hidden" name="id" value="<?php echo $row->id;?>">
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Title <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" name="title" value="<?php echo $row->title; ?>" required>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="date" class="form-control" name="date" value="<?php echo $row->date; ?>" required>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Type <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" id="month" name="type">        
                                <option selected value="<?php echo $row->type; ?>"><?php echo $row->type; ?></option>
                                <option value="Income">Income</option>                                
                                <option value="Expense">Expense</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Amount <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="number" step="0.01" class="form-control" name="amount" value="<?php echo $row->amount; ?>" required>
                        </div>
                    </div>
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">                                                
                            <button id="send" type="submit" class="btn btn-success"> Add Now</button>
                        </div>
                    </div>
                </form>
                
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

</div><!-- Container -->
