<div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                                        
                                    </ol>
                                </div>
                                <h4 class="page-title">Settings</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->


                </div><!-- container -->
                <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">All Settings</h4>
                                    <form class="form-horizontal form-label-left" role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>settings/insert" accept-charset="utf-8">
                                    <?php foreach ($settings as $set) : ?>
                                    <div class="form-material">
                                        <label class="mb-3">Logo</label>
                                        <input type="file" class="form-control" placeholder="Enter Logo File"name="logo"   >
                                        <label class="mb-3">Favicon </label>
                                        <input  class="form-control" placeholder="Enter Favicon File"name="favicon" type="file">
                                        <label class="mb-3">Company Name </label>
                                        <input type="text" class="form-control" id="name" name="name" type="text" placeholder="Enter Name Here" value="<?php echo $set->name; ?>" required>
                                        <label class="mb-3">Mobile </label>
                                        <input type="text" class="form-control" pid="mobile" name="mobile" type="text" placeholder="Enter Mobile Number" value="<?php echo $set->mobile; ?>" required>
                                        <label class="mb-3">Email </label>
                                        <input  class="form-control" id="email" name="email" type="email" placeholder="Enter Email" value="<?php echo $set->email; ?>" required>
                                        <label class="mb-3">Enter Currency</label>
                                        
                              <select class="form-control " id="currency" name="currency" required>
                                <option>Select Currency</option>
                                <option selected value="<?php echo $set->currency; ?>" ><?php echo $set->currency; ?></option>
                                <option value="DZD" >Algeria Dinars </option>
                                <option value="ARP" >Argentina Pesos </option>
                                <option value="AUD" >Australia Dollars </option>
                                <option value="ATS" >Austria Schillings </option>
                                <option value="BSD" >Bahamas Dollars </option>
                                <option value="BBD" >Barbados Dollars </option>
                                <option value="BDT" >Bangladesh Taka </option>
                                <option value="BEF" >Belgium Francs </option>
                                <option value="BMD" >Bermuda Dollars </option>
                                <option value="BRR" >Brazil Real </option>
                                <option value="BGL" >Bulgaria Lev </option>
                                <option value="CAD" >Canada Dollars </option>
                                <option value="CLP" >Chile Pesos </option>
                                <option value="CNY" >China Yuan Renmimbi </option>
                                <option value="CYP" >Cyprus Pounds </option>
                                <option value="CSK" >Czech Republic Koruna </option>
                                <option value="DKK" >Denmark Kroner </option>
                                <option value="NLG" >Dutch Guilders </option>
                                <option value="XCD" >Eastern Caribbean Dollars </option>
                                <option value="EGP" >Egypt Pounds </option>
                                <option value="EUR" >Euro </option>
                                <option value="FJD" >Fiji Dollars </option>
                                <option value="FIM" >Finland Markka </option>
                                <option value="FRF" >France Francs </option>
                                <option value="DEM" >Germany Deutsche Marks </option>
                                <option value="GRD" >Greece Drachmas </option>
                                <option value="HKD" >Hong Kong Dollars </option>
                                <option value="HUF" >Hungary Forint </option>
                                <option value="ISK" >Iceland Krona </option>
                                <option value="INR" >India Rupees </option>
                                <option value="IDR" >Indonesia Rupiah </option>
                                <option value="IEP" >Ireland Punt </option>
                                <option value="ILS" >Israel New Shekels </option>
                                <option value="ITL" >Italy Lira </option>
                                <option value="JMD" >Jamaica Dollars </option>
                                <option value="JPY" >Japan Yen </option>
                                <option value="JOD" >Jordan Dinar </option>
                                <option value="KRW" >Korea (South) Won </option>
                                <option value="LBP" >Lebanon Pounds </option>
                                <option value="LUF" >Luxembourg Francs </option>
                                <option value="MYR" >Malaysia Ringgit </option>
                                <option value="MXP" >Mexico Pesos </option>
                                <option value="NLG" >Netherlands Guilders </option>
                                <option value="NZD" >New Zealand Dollars </option>
                                <option value="NOK" >Norway Kroner </option>
                                <option value="PKR" >Pakistan Rupees </option>
                                <option value="PHP" >Philippines Pesos </option>
                                <option value="PLZ" >Poland Zloty </option>
                                <option value="PTE" >Portugal Escudo </option>
                                <option value="ROL" >Romania Leu </option>
                                <option value="RUR" >Russia Rubles </option>
                                <option value="SAR" >Saudi Arabia Riyal </option>
                                <option value="SGD" >Singapore Dollars </option>
                                <option value="SKK" >Slovakia Koruna </option>
                                <option value="ZAR" >South Africa Rand </option>
                                <option value="KRW" >South Korea Won </option>
                                <option value="ESP" >Spain Pesetas </option>
                                <option value="SDD" >Sudan Dinar </option>
                                <option value="SEK" >Sweden Krona </option>
                                <option value="CHF" >Switzerland Francs </option>
                                <option value="TWD" >Taiwan Dollars </option>
                                <option value="THB" >Thailand Baht </option>
                                <option value="TTD" >Trinidad and Tobago Dollars </option>
                                <option value="TRL" >Turkey Lira </option>
                                <option value="GBP" >United Kingdom Pounds </option>
                                <option value="USD" >United States Dollars </option>
                                <option value="VEB" >Venezuela Bolivar </option>
                                <option value="ZMK" >Zambia Kwacha </option>
                            </select>
                                        <label class="mb-3">Default Payment Mehtod </label>
                                        <input type="text" class="form-control" name="paymentmethod" type="text" placeholder="Enter Default Payment Ex: Paypal/Stripe" value="<?php echo $set->paymentmethod; ?>" required>
                                        <label class="mb-3">Default Payment Recipient </label>
                                        <input type="text" class="form-control" name="paymentacc" type="text" placeholder="Enter Default Payment ID Ex: Paypal/Stripe ID" value="<?php echo $set->paymentacc; ?>" required>
                                        <label class="mb-3">Default VAT </label>
                                        <input type="text" class="form-control" name="vat" type="number" placeholder="Enter Default VAT amount" value="<?php echo $set->vat; ?>" required>
                                        <label class="mb-3">Default Email API </label>
                                        <select class="form-control " name="emailapi">
                                            <option value="">Select Email API</option>
                                            <option selected value="<?php echo $set->emailapi; ?>"><?php echo $set->emailapi; ?> (Current)</option>
                                            <option value="Mailgun">Mailgun</option>
                            </select>
                            <label class="mb-3">Default SMS API  </label>
                            <select class="form-control " name="smsapi">
                                <option value="">Select SMS API</option>
                                <option selected value="<?php echo $set->smsapi; ?>"><?php echo $set->smsapi; ?> (Current)</option>
                                <option value="Nexmo">Nexmo</option>
                                <option value="Twilio">Twilio</option>
                            </select>
                            
                            <label class="mb-3">Send SMS On New Bills & Invoice</label>
                            <select class="form-control " name="smsonbills">
                                <option value="">Select SMS On/Off</option>
                                <option selected value="<?php echo $set->smsonbills; ?>"><?php echo ($set->smsonbills == 1) ? 'On' : "Off" ; ?> (Current)</option>
                                <option value="1">On</option>
                                <option value="0">Off</option>
                            </select>
                            <label class="mb-3">Send Email On New Bills & Invoice </label>
                           
                            <select class="form-control" name="emailonbills">
                                <option value="">Select Email On/Off</option>
                                <option selected value="<?php echo $set->emailonbills; ?>"><?php echo ($set->emailonbills == 1) ? 'On' : "Off" ; ?> (Current)</option>
                                <option value="1">On</option>
                                <option value="0">Off</option>
                            </select>
                            <label class="mb-3">Mikrotik IP Address </label>
                                        <input type="text" class="form-control"  name="mkipadd" type="text" placeholder="Enter Your Mikrotik Router IP" value="<?php echo $set->mkipadd; ?>" required>
                                        <label class="mb-3">Mikrotik User </label>
                                        <input type="text" class="form-control" name="mkuser" type="text" placeholder="Enter Mikrotik User" value="<?php echo $set->mkuser; ?>" required>
                                        <label class="mb-3">Mikrotik Password </label>
                                        <input  class="form-control" name="mkpassword" type="password" placeholder="Enter Mikrotik Password" value="<?php echo $set->mkpassword; ?>" required>
                                        <label class="mb-3">Address </label>
                                        <input type="text" class="form-control" name="address" type="text" placeholder="Enter Address" value="<?php echo $set->address; ?>" required>
                                        <label class="mb-3">City </label>
                                        <input type="text" class="form-control"name="city" type="text" placeholder="Enter City" value="<?php echo $set->city; ?>" required>
                                        <label class="mb-3">Country</label>
                                        <input type="text" class="form-control"name="country" type="text" placeholder="Enter Country" value="<?php echo $set->country; ?>" required>
                                        <label class="mb-3">Zip Code </label>
                                        <input type="text" class="form-control"name="zip" type="text" placeholder="Enter Zip Code" value="<?php echo $set->zip; ?>" required>
                                        <label class="mb-3">Copyright Text</label>
                                        <input type="text" class="form-control"id="location" name="copyright" type="text" placeholder="Enter Copyright Text" value="<?php echo $set->copyright; ?>">
                                        <br>
                                        <button id="send"class="btn btn-primary" type="submit">Save Now</button>
                                    </div>       
                                </div><!--end card-body-->
                            </div><!--end card-->                                
                        </div> <!-- end col -->
                        </form>
                        <?php endforeach; ?>                  
</div>