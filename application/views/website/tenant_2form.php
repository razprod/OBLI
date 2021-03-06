<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<!-- calendar start -->

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 
<script type="text/javascript">
    $(function() {

      $('input[name="gur_period_month"]').daterangepicker({
          autoUpdateInput: false,
          locale: {
              cancelLabel: 'Clear'
          }
      });

      $('input[name="gur_period_month"]').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));

          var startDate = picker.startDate.format('DD/MM/YYYY');
          var endDate = picker.endDate.format('DD/MM/YYYY');
          // alert(startDate); alert(endDate);

          $('#startDate').val(startDate);
          $('#endDate').val(endDate);
      });

      $('input[name="gur_period_month"]').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
      });

      $('input[name="sec_date_of_birth"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'),10)
      }, function(start, end, label) {
        // var years = moment().diff(start, 'years');
        // alert("You are " + years + " years old!");
      });

    });
</script>

<style type="text/css">
.daterangepicker td.active, .daterangepicker td.active:hover{
    background-image: linear-gradient(to top, #31739b, #53c2e4);
}    
.applyBtn{
     background-image: linear-gradient(to top, #31739b, #53c2e4);
     border:none;
}
</style>
<!-- calendar end -->

<style type="text/css">
        #PropertyForm, #scr_eight_form, #sec_scr_checkbox1, #sec_scr_checkbox2, #greaterThan2500Scr, #modal2Div, #modal3Div, .sonar-wrapper, #scr_seven_form_new,#scr_seven_form {
            display:none;
        }

.screen2-box1{
    height: 289px;
}

@media screen and (min-width: 320px) and (max-width: 377px){
 .screen2-box1{
    height: 317px;
}   
}

/*modal button css*/
.first_modal_button{

    background: rgba(95, 97, 172, 0.05);
    border: 1px solid rgba(50, 52, 116, 0.5);
    border-radius: 30px;
    height: 50px;
    padding: 13px;
    text-align: center;
    width: 100%;
    height: 60px;
    cursor: auto;
    opacity: 0.5;

}

#checkbox1-error, #checkbox2-error{
    margin-right: 35px;
}

.first_button-new{
    background: rgba(95, 97, 172, 0.05);
    border: 1px solid rgba(50, 52, 116, 0.5);
    /*border: 1px solid rgba(50, 52, 116, 0.5);*/
   /* border:1px solid #4EB5D70px 28px 0px;*/
    border-radius: 30px;
    height: 50px;
    padding: 13px;
    text-align: center;
    width: 100%;
    height: 60px;
    cursor: pointer;

}


.continue_button{
    background-image: linear-gradient(to top, #31739b, #53c2e4);
    color: white;
    border: none;
}
.first_button_new-text1{
   margin-left: 0% !important;
   width: 100% !important;
}
.first_button_new-text2{
   margin-left: -70px !important;
   width: 100% !important;
}
@media screen and (min-width: 320px) and (max-width: 767px){
    .first_button_new-text2{
   margin-left: 0px !important;
   /*width: 100% !important;*/
}
}


        
</style>

<script type="text/javascript">
        
    $(document).ready(function(){

        $("#five_next_form").css("opacity","0.5"); // button opacity change
        $("#five_next_form").css("cursor","auto");
        $("#five_next_form").prop("disabled", true);

        $(".next").click(function(){ 
            
            // if($('#scr_five_form').is(":visible")){
            //     current_fs = $('#scr_five_form');
            //     next_fs = $('#scr_second_form');
            // }
            if($('#25000AfterScreen').is(":visible")){
                current_fs = $('#25000AfterScreen');
                next_fs = $('#scr_seven_form');
                
                // var formStatus = $("#myform").valid();
                // formStatus = false;
                // alert(formStatus)
                // alert($("#myform").valid());

                $("#seven_next_form").css("opacity","0.5"); // button opacity change
                $("#seven_next_form").css("cursor","auto");
            }
            // else if($('#scr_seven_form').is(":visible")){
            //     current_fs = $('#scr_seven_form');
            //     next_fs = $('#scr_third_form');

            //     $("#five_next_form").css("opacity","0.5"); // button opacity change
            //     $("#five_next_form").css("cursor","auto");
            //     $("#req_gur_amt_error").hide('fast');
            // }
            
            
            next_fs.show(); 
            current_fs.hide();
            
        }); 

        // apartment_add sec_date_of_birth landlord landlord_id property_phone sec_email file-2

        $('#apartment_add,#landlord,#landlord_id,#property_phone,#sec_email').on('keyup', function() {

            if($("#apartment_add").val() != '' && $("#landlord").val() != '' && $("#landlord_id").val() != '' && $("#property_phone").val() != '' && $("#sec_email").val() != '' && $("#sec_date_of_birth").val() != '' && $("#file-2").val() != '' ){

                $("#five_next_form").css("opacity","1"); // button opacity change
                $("#five_next_form").css("cursor","pointer");
                $("#five_next_form").prop("disabled", false);

            }
            else{
                $("#five_next_form").css("opacity","0.5"); // button opacity change
                $("#five_next_form").css("cursor","auto");
                $("#five_next_form").prop("disabled", true);
            }

          
        });

        $('#file-2,#sec_date_of_birth').on('change', function() {

            if($("#apartment_add").val() != '' && $("#landlord").val() != '' && $("#landlord_id").val() != '' && $("#property_phone").val() != '' && $("#sec_email").val() != '' && $("#sec_date_of_birth").val() != '' && $("#file-2").val() != '' ){

                    $("#five_next_form").css("opacity","1"); // button opacity change
                    $("#five_next_form").css("cursor","pointer");
                    $("#five_next_form").prop("disabled", false);
                
            }else{
                $("#five_next_form").css("opacity","0.5"); // button opacity change
                $("#five_next_form").css("cursor","auto");
                $("#five_next_form").prop("disabled", true);
            }

          
        });


        // $("#five_next_form").submit(function (e){ 
        $('#five_next_form').on('click', function() {

            if($("#apartment_add").val() != '' && $("#landlord").val() != '' && $("#landlord_id").val() != '' && $("#property_phone").val() != '' && $("#sec_email").val() != '' && $("#sec_date_of_birth").val() != '' && $("#file-2").val() != '' ){

                var form = $("#myform");
                form.validate({
                    errorElement: 'span',
                    errorClass: 'help-block',
                    highlight: function(element, errorClass, validClass) { 
                        $(element).closest('.form-group').addClass("has-error");
                    },
                    unhighlight: function(element, errorClass, validClass) { 
                        $(element).closest('.form-group').removeClass("has-error");
                    },
                    rules: {
                        apartment_add: {
                            required: true,
                            minlength: 3,
                        },
                        landlord: {
                            required: true,
                        },
                        // client_photo: {
                        //     required: true,
                        // },
                        landlord_id: {
                            required: true,
                            number: true
                        },
                        property_phone: {
                            required: true,
                            number: true
                            // min: 9,
                            // max: 10
                        },
                        sec_email: {
                            required: true,
                            email: true
                        },
                        sec_date_of_birth: {
                            required: true,
                        }
                        
                    },
                    messages: {
                        apartment_add: {
                            required: "?????? ????????",
                        },
                        landlord: {
                            required: "?????? ????????",
                        },
                        // client_photo: {
                        //     required: "?????? ????????",
                        // },
                        landlord_id: {
                            required: "?????? ????????",
                            number: "?????? ?????? ???? ??????????"
                        },
                        property_phone: {
                            required: "?????? ????????",
                            number: "?????? ?????? ???? ??????????"
                            // min: "???????? ???????????? ?????????? ?????????? 10 ??????????",
                            // max: "???????? ???????????? ?????????? ?????????? 10 ??????????"
                        },
                        sec_email: {
                            required: "?????? ????????",
                            email: '?????? ?????? ?????????? ??????"?? ??????????.'
                        },
                        sec_date_of_birth: {
                            required: "?????? ????????",
                        }
                        
                    }
                    
                });

                if (form.valid() === true){ 
                    $("#sonar_text").hide('fast');

                    var i = 0;
                    var intervalId = setInterval(function(){ 
                        $("#scr_five_form").hide('fast'); 
                         
                        $(".sonar-wrapper").show('fast');

                        if(i === 1){ 
                          // clearInterval(intervalId);
                          
                            var j = 0;
                            var secondIntervalId = setInterval(function(){ 

                                $("#sonar_text").show('fast');

                                if(j === 2){

                                    $(".sonar-wrapper").hide('fast');
                                    $("#sonar_text").hide('fast');
                                    $("#scr_eight_form").show('fast'); // next screen 
                                    clearInterval(intervalId);
                                    clearInterval(secondIntervalId);

                                   //  if(window.document.drops.isFinished()){
                                       
                                   // }
                                    
                                }

                            j++;
                            }, 1500);

                            // clearInterval(secondIntervalId);
                            clearInterval(intervalId);
                          
                        }

                    i++;
                    },3000);
                   
                }
                else{
                    // $('.submit').css('opacity', '0.5');
                }
            }
        });
        // five form valiation end


        // seven form validation start
        // ant_first_name ant_last_name ant_unique_id file-2 ant_client_add ant_client_phone ant_client_email ant_client_gender sec_date_of_birth ant_req_gur_amt ant_gur_period_month

        $('#ant_first_name,#ant_last_name,#ant_unique_id,#ant_client_add,#ant_client_phone,#ant_client_email,#ant_req_gur_amt').on('keyup', function() {

            if($("#ant_first_name").val() != '' && $("#ant_last_name").val() != '' && $("#ant_unique_id").val() != '' && $("#ant_client_add").val() != '' && $("#ant_client_phone").val() != '' && $("#ant_client_email").val() != '' && $("#sec_date_of_birth").val() != '' && $("#file-2").val() != ''  && $("#ant_req_gur_amt").val() != '' && $("#ant_gur_period_month").val() != '' ){

                $("#seven_next_form").css("opacity","1"); // button opacity change
                $("#seven_next_form").css("cursor","pointer");

            }
            else{
                $("#seven_next_form").css("opacity","0.5"); // button opacity change
                $("#seven_next_form").css("cursor","auto");
            }

          
        });

        $('#file-2,#sec_date_of_birth,#ant_gur_period_month').on('change', function() {

            if($("#ant_first_name").val() != '' && $("#ant_last_name").val() != '' && $("#ant_unique_id").val() != '' && $("#ant_client_add").val() != '' && $("#ant_client_phone").val() != '' && $("#ant_client_email").val() != '' && $("#sec_date_of_birth").val() != '' && $("#file-2").val() != ''  && $("#ant_req_gur_amt").val() != '' && $("#ant_gur_period_month").val() != '' ){

                    $("#seven_next_form").css("opacity","1"); // button opacity change
                    $("#seven_next_form").css("cursor","pointer");
                
            }else{
                $("#seven_next_form").css("opacity","0.5"); // button opacity change
                $("#seven_next_form").css("cursor","auto");
            }

          
        });
        

        $("#seven_next_form").click(function(){ alert(123);

            if($("#ant_first_name").val() != '' && $("#ant_last_name").val() != '' && $("#ant_unique_id").val() != '' && $("#ant_client_add").val() != '' && $("#ant_client_phone").val() != '' && $("#ant_client_email").val() != '' && $("#sec_date_of_birth").val() != '' && $("#file-2").val() != ''  && $("#ant_req_gur_amt").val() != '' && $("#ant_gur_period_month").val() != '' ){

                var formStatus = $("#myform").valid();
                formStatus = false;
                var form = $("#myform");
                form.validate({
                    errorElement: 'span',
                    errorClass: 'help-block',
                    highlight: function(element, errorClass, validClass) { 
                        $(element).closest('.form-group').addClass("has-error");
                    },
                    unhighlight: function(element, errorClass, validClass) { 
                        $(element).closest('.form-group').removeClass("has-error");
                    },
                    rules: {
                        ant_first_name: {
                            required: true,
                            // usernameRegex: true,
                            minlength: 3,
                        },
                        ant_last_name: {
                            required: true,
                            // usernameRegex: true,
                            minlength: 3,
                        },
                        // client_photo: {
                        //     required: true,
                        // },
                        ant_unique_id: {
                            required: true,
                            number: true
                        },
                        ant_client_add: {
                            required: true,
                        },
                        ant_client_phone: {
                            required: true,
                            number: true
                            // min: 9,
                            // max: 10
                        },
                        ant_client_email: {
                            required: true,
                            email: true
                        },
                        ant_client_gender: {
                            required: true,
                        },
                        sec_date_of_birth:{
                            required: true,
                        },
                        ant_req_gur_amt: {
                            required: true,
                            number: true
                        },
                        ant_gur_period_month: {
                            required: true,
                        }
                        
                    },
                    messages: {
                        ant_first_name: {
                            required: "?????? ????????",
                        },
                        ant_last_name: {
                            required: "?????? ????????",
                        },
                        // client_photo: {
                        //     required: "?????? ????????",
                        // },
                        ant_unique_id: {
                            required: "?????? ????????",
                            number: "?????? ?????? ???? ??????????"
                        },
                        ant_client_add: {
                            required: "?????? ????????",
                        },
                        ant_client_phone: {
                            required: "?????? ????????",
                            number: "?????? ?????? ???? ??????????"
                            // min: "???????? ???????????? ?????????? ?????????? 10 ??????????",
                            // max: "???????? ???????????? ?????????? ?????????? 10 ??????????"
                        },
                        ant_client_email: {
                            required: "?????? ????????",
                            email: '?????? ?????? ?????????? ??????"?? ??????????.'
                        },
                        ant_client_gender: {
                            required: "?????? ????????",
                        },
                        sec_date_of_birth: {
                            required: "?????? ????????",
                        },
                        ant_req_gur_amt: {
                            required: "?????? ????????",
                            number: "?????? ?????? ???? ??????????"
                        },
                        ant_gur_period_month: {
                            required: "?????? ????????",
                        }
                        
                    }
                    
                });

                if (form.valid() === true){ alert(1233);alert(form.valid());

                    $("#sonar_text").hide('fast');

                    var i = 0;
                    var intervalId = setInterval(function(){ 
                        $("#scr_seven_form").hide('fast'); 
                         
                        $(".sonar-wrapper").show('fast');

                        if(i === 1){ 
                          // clearInterval(intervalId);
                          
                            var j = 0;
                            var secondIntervalId = setInterval(function(){ 

                                $("#sonar_text").show('fast');

                                if(j === 2){

                                    $(".sonar-wrapper").hide('fast');
                                    $("#sonar_text").hide('fast');
                                    $("#scr_eight_form").show('fast'); // next screen 
                                    clearInterval(intervalId);
                                    clearInterval(secondIntervalId);

                                   //  if(window.document.drops.isFinished()){
                                       
                                   // }
                                    
                                }

                            j++;
                            }, 1500);

                            // clearInterval(secondIntervalId);
                            clearInterval(intervalId);
                          
                        }

                    i++;
                    },3000);

                   
                    
                }
                else{
                    // $('.submit').css('opacity', '0.5');
                }
            }
        });
    // end 
    

        

    });      


  
</script>

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div id="content" class="contact">
   <div class="site-width site-width_apllication obli-desktop">

      <div class="contact-content clearfix">

        <?php if($this->session->flashdata('error') || !empty($error)){ ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong><?php if($this->session->flashdata('error')){ echo $this->session->flashdata('error'); }else{ echo $error; }  ?></strong>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if($this->session->flashdata('success')){ ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong><?php echo $this->session->flashdata('success'); ?></strong>
                </div>
            </div>
        </div>
        <?php } ?>
            
         <div class="gf_browser_chrome gform_wrapper gform_wrapper_application" id="gform_wrapper_5">
            

            <form method="post" enctype="multipart/form-data" id="myform" action="<?php echo site_url('website/tenant_payment_api'); ?>">

            <?php if(!empty($form_detail)){ if($form_detail['req_gur_amt'] > 25000){ ?>

                <!-- greater than 25000 after screen(scr_six_form) -->

                 <div id="25000AfterScreen" class="gform_body" style="margin-top: 30px;">
                     <!-- <div class="progress-circle over50 p66" style="float: right; margin-left:15px; margin-top:-25px;">
                           <span>
                            <i class="fa fa-close" style="font-size:40px; margin-left:-6px;"></i>
                            </span>
                           <div class="left-half-clipper">
                              <div class="first50-bar"></div>
                              <div class="value-bar"></div>
                           </div>
                           </div> -->
                            <div class="" style="float: right; margin-left:15px; margin-top:-25px;">
                            <img src="<?php echo base_url() ?>website_assets/img/progressX.png" class="img-responsive">
                           
                           </div>
                     <p class="rtl" style="text-align:right;font-weight: bold;font-size: 22px;"> ???????? ???????????? ????????  </p>

                    <p class="rtl" style="text-align:right;"> ?????? ???????? ???????? ???????????????? </p>

                     <p class="rtl" style="text-align:center;font-weight: bold; margin-top: 50px;"> ?????? ??????, ???????? ???????????? ???????????? ???????? ??000-,25 ???. </p>

                     <img src="http://oblidev.malul.xyz/website_assets/img/obliz.png" class="img-responsive tab_image-obli">
    
                   <!--  <p class="rtl" style="text-align:center;font-weight: bold;"> ?????? ??????, ???????? ???????????? ???????????? ???????? ??000-,25 ???. </p> -->

                    <p class="rtl" style="text-align:center;">  ?????? ???????? ???? ???????????? ?????????????? ,<br>???????????????? ?????????? ???????? ???????? ????????????????:</p>

                    <br>
                    <div class="row">
                        <div class="col-md-3 col-sm-3"></div>
                        <div class="col-md-6 col-sm-6">
                            <a class="button gform_button next"> <p class="first_main_button" >?????????? ???? ?????? ???????? </p></a>
                             
                            <a class="button gform_button"> <p class="first_main_button" > ?????????? ???? ???????????? </p></a>
                        </div>
                        <div class="col-md-3 col-sm-3"></div>
                    </div>
                    <br><br><br>

                    <!-- <div class="row">
                        <div class="col-md-2 col-sm-2"></div>
                        <div class="col-md-8 col-sm-8">
                             <div class="col-md-6 col-sm-6"><div class="box-button1"><p> ???????? ???? ????????  </p></div></div>
                             <div class="col-md-6 col-sm-6"> <div class="box-button2"><p> ???????? 1 </p></div></div>
                            
                        </div>
                        <div class="col-md-2 col-sm-2"></div>
                    </div> -->

                </div>

            <?php } else{ ?>

                <!-- lower than 25000 screen(scr_five_form) -->
                <div id="scr_five_form" class="gform_body" style="margin-top: 30px;">
                  <!-- <div class="progress-circle over50 p66" style="float: right; margin-left:15px; margin-top:-25px;">
                           <span>3 / 5</span>
                           <div class="left-half-clipper">
                              <div class="first50-bar"></div>
                              <div class="value-bar"></div>
                           </div>
                           </div> -->
                            <div class="" style="float: right; margin-left:15px; margin-top:-25px;">
                            <img src="<?php echo base_url() ?>website_assets/img/progress3.png" class="img-responsive">
                           
                           </div>
                    <p class="rtl" style="text-align:right;font-weight: bold;font-size: 22px;">?????????? ???? ???????? </p>
                    <p class="rtl" style="text-align:right;">???????? ??????: ???????? ?????????? </p>

                    
                    <br>

                    <ul class="gform_fields top_label ">

                        <li class="gfield gfield_html gfield_no_follows_desc " style="margin-top: 30px;">
                           <!--  <h1 class="page-subtitle page-subtitle_application">?????? ??????</h1> -->
                            <p class="contact-text_application" style="text-align:right;">?????? ??????, ?????? ?????? ?????????? ????????????????, ?????????????? ?????????? ???????? ???? ???????? ?????? ????????  </p>
                            <!-- <p class="contact-text_application" style="text-align:right; margin-top: -20px;"> ?????? ?????????? ???????? </p> -->
                         </li>

                        <!-- <li class="gfield gf_left_third text-field1_application form-group">
                            <label class="gfield_label control-label" for="sec_first_name">???? ????????
                            </label>

                            <div class="">
                               <input type="text" name="sec_first_name" id="sec_first_name" value="" class="form-control">
                            </div>
                        </li> -->
                        <li class="gfield gf_left_third text-field1_application form-group">
                            <label class="gfield_label control-label" for="apartment_add"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">?????????? ??????????
                            </font></font></label>

                            <div class="">
                               <textarea class="textarea large form-control" name="apartment_add" rows="5" cols="50" id="apartment_add" style="max-height: 56px;"></textarea>
                            </div>
                        </li>

                        <li class="gfield gf_left_third text-field2_application form-group">
                            <label class="gfield_label control-label" for="gur_period_month">?????????? ????????????
                            </label>
                            <i class="fa fa-calendar" aria-hidden="true" style="float: left;"></i>

                            <div class="">
                               <!-- <input type="text" name="gur_period_month" id="gur_period_month" value="" class="form-control"> -->
                               <input type="text" name="sec_date_of_birth" id="sec_date_of_birth" class="form-control" value="10/23/2019"  />
                            </div>
                        </li>

                        <li class="gf_left_third gfield text-field1_application form-group">
                            <label class="gfield_label control-label" for="landlord">???? ?????? ?????????? </label>
                            
                            <div class="">
                               <input type="text" name="landlord" id="landlord" value="" class="form-control">
                            </div>
                        </li>

                        <li class="gf_middle_third gfield text-field2_application form-group">
                            <label class="gfield_label control-label" for="landlord_id">??.?? ?????? ?????????? </label>
                            
                            <div class="">
                               <input type="text" name="landlord_id" id="landlord_id" value="" class=" form-control">
                            </div>
                        </li>

                        <li class="gf_left_third gfield text-field1_application form-group">
                            <label class="gfield_label control-label" for="property_phone">?????????? ?????? ?????????? </label>

                            <div class="">
                               <input type="text" name="property_phone" id="property_phone" value="" min="1" class="form-control">
                            </div>
                        </li>

                       
                         <li class="gfield gf_left_third text-field2_application form-group">
                            <label class="gfield_label control-label" for="sec_email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">??????????? ?????? ??????????
                          </font></font></label>

                            <div class="">
                               <input type="text" name="sec_email" id="sec_email" value="" class=" form-control">
                            </div>
                        </li>

                        <li class="gf_middle_third gfield text-field1_application form-group">
                            <!-- <label class="gfield_label control-label" for="landlord_photo_id"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">?????????? ???????? ????????????  </font></font></label>

                            <div class="">
                               <input type="file" name="landlord_photo_id" id="landlord_photo_id" class="input_application form-control" value="" >
                            </div> -->

                            <input type="file" name="file-2" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple="" style="display: none;">
                              <label for="file-2" style="margin-top: 32px;">

                                <span style="font-weight: 200; font-size: 20px; margin-left:40px;">?????????? ???????? ????????????  </span>
                                <i style="font-size:24px; margin-left: 30px;" class="fa">&#xf030;</i>
                              </label>
                        </li>

                    

                    </ul>

                    <!-- <div class="gform_footer top_label"> 
                       <input type="submit" id="gform_submit_button_5" class="gform_button button next" value="?????????? " tabindex="54"> 
                    </div> -->
                
                  <!--   <div class="gform_footer top_label"> 
                       
                        <input type="submit" id="gform_submit_button_5" class="gform_button button next first_main_button" value="????????" tabindex="54"> 
                    </div> -->


                   <div class="row" style="margin-top: 140px;">
                        <div class="col-md-3 col-sm-3"></div>
                        <div class="col-md-6 col-sm-6">
                        
                             
                            <a class="button gform_button"> <p class="first_main_button" id="five_next_form">????????  </p></a>
                            <!-- <input type="submit" id="five_next_form" class="gform_button button next first_main_button five_next_form" value="????????" tabindex="54"> --> 
                        </div>
                        <div class="col-md-3 col-sm-3"></div>
                    </div>
                  



                </div>


            <?php } } ?>
                



                </div>

            </div>

            <!-- first loader obli gif -->
            <div class="sonar-wrapper">
                <div class="sonar-emitter">
                    <img src="<?php echo base_url() ?>website_assets/img/loader.png" style="margin-top: 15px; margin-right: 33px;">

                    <div id="sonar_text">
                        <p class="rtl" style="font-weight: bold;font-size: 22px;">?????? ?????? ?????????? </p>
                        <p class="rtl" >?????????? ???????????? ???? ?????????? ???????????? ???????? ??????????. </p>
                    </div>
                <div class="sonar-wave"></div>
                </div>
            </div>

            <script type="text/javascript">
                $(".sonar-wave").on("webkitAnimationIteration oanimationiteration animationiteration", function(){
                  $(this).css("background-color", colorize());
                })

                function colorize() {
                  var hue = Math.random() * 360;
                  return "HSL(" + hue + ",100%,50%)";
                }
            </script>  


            <!-- screen seven scr_seven_form -->
                 <div id="scr_seven_form" class="gform_body" style="margin-top: 30px;">
                        <!-- <div class="progress-circle p10" style="float: right; margin-left:15px; margin-top:-15px;">
                           <span>1 / 5</span>
                           <div class="" style="float: right; margin-left:15px; margin-top:-25px;">
                            <img src="website_assets/img/progress1.png" class="img-responsive">
                           
                           </div>
                           <div class="left-half-clipper">
                              <div class="first50-bar"></div>
                              <div class="value-bar"></div>
                           </div>
                        </div> -->

                        <div class="" style="float: right; margin-left:15px; margin-top:-25px;">
                            <img src="<?php echo base_url() ?>website_assets/img/progress1.png" class="img-responsive">
                           
                        </div>
                    <p class="rtl" style="text-align:right;font-weight: bold;font-size: 22px;">?????????? ???????????? </p>

                    <p class="rtl" style="text-align:right;">???????? ??????: ???????? ????????????</p>

                    
                    <br>

                    <ul class="gform_fields top_label ">

                        <li class="gfield gfield_html gfield_no_follows_desc "> 
                           <!--  <h1 class="page-subtitle page-subtitle_application">?????? ??????</h1> -->
                           
                            <p class="contact-text_application">???????? ?????????? ?????? ?????????? ???????? ??????????, ?????? ?????????? ????????  </p>
                         </li>

                        <li class="gfield gf_left_third text-field1_application form-group">
                            <label class="gfield_label control-label" for="first_name"> ???? ????????
                            </label>

                            <div class="">
                               <input type="text" name="first_name" id="first_name" value="" class="form-control">
                            </div>
                        </li>

                        <li class="gf_middle_third gfield text-field2_application form-group">
                            <label class="gfield_label control-label" for="last_name">???? ?????????? </label>
                            
                            <div class="">
                               <input type="text" name="last_name" id="last_name" value="" class=" form-control">
                            </div>
                        </li>   

                        <li class="gf_left_third gfield text-field1_application form-group">
                            <label class="gfield_label control-label" for="unique_id">??.??</label>
                            
                            <div class="">
                               <input type="text" name="unique_id" id="unique_id" value="" class="form-control">
                            </div>
                        </li>

                        <li class="gf_left_third gfield text-field2_application form-group">
                            
                            <!-- <label class="gfield_label control-label" for="client_photo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">?????????? ??.??
                            </font></font></label>

                            <div class="">
                               <input type="file" name="client_photo" id="client_photo" class="input_application form-control" value="" >
                            </div> -->

                           <input type="file" name="file-2" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple="" style="display: none;">
                              <label for="file-2" style="margin-top: 32px;">

                               <i style="font-size:24px; margin-left: 60px;" class="fa">&#xf030;</i>
                                <span style="font-weight: 200; font-size: 20px; margin-left:70px;">?????????? ??.?? </span>
                              </label>
                        </li>

                        <li class="gf_left_third gfield text-field1_application form-group">
                            <label class="gfield_label control-label" for="client_add"> ?????????? ???????????? ???????????? </label>

                            <div class="">
                               <!-- <input type="number" name="req_gur_amt" id="req_gur_amt" value="" min="1" class="form-control"> -->
                               <textarea class="input_application textarea large form-control" name="client_add" rows="5" cols="50" id="client_add" style="max-height: 56px;"></textarea>
                            </div>
                        </li>
                       
                        <li class="gfield gf_left_third text-field2_application form-group">
                            <label class="gfield_label control-label" for="client_phone"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">?????????? ????????
                          </font></font></label>

                            <div class="">
                               <input type="text" name="client_phone" id="client_phone" value="" class="form-control">
                            </div>
                        </li>

                        <li class="gfield gf_left_third text-field1_application form-group">
                            <label class="gfield_label control-label" for="client_email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">???????????
                          </font></font></label>

                            <div class="">
                               <input type="email" name="client_email" id="client_email" value="" class=" form-control">
                            </div>
                        </li>
                        
                         <li class="gfield gf_left_third text-field2_application form-group">
                            <label class="gfield_label control-label" for="current_residence"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">??????
                          </font></font>
                      <div class=""style="float: left;">
                                <br>
                              <label for="radio-button-1" class="radio gfield_label control-label">
                             
                           <!--   <input type="radio" name="radio-box" id="box-2" checked="checked">?????? -->
                             <input type="radio" name="client_gender" value="1" id="box-2" checked="checked" value="30" style="left: 55px; top: -13px;">??????
                              
                            </label>
                           
                              <label for="radio-button-0" class="radio gfield_label control-label" style="top: -30px;right: 105px;">
                             
                             <input type="radio" name="client_gender" value="2" id="box-1" style="left: 69px;top: -13px;">????????
                            </label>
                            </div>
                        </label>

                            
                        </li>

                        <li class="gfield gf_left_third text-field1_application form-group">
                            <label class="gfield_label control-label" for="client_date_of_birth"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">?????????? ????????
                          </font></font></label>
                          <i class="fa fa-calendar" aria-hidden="true"></i>

                            <div class="">
                               <!-- <input type="date" name="client_date_of_birth" id="client_date_of_birth" value="" class="form-control"> -->
                               <input class="form-control" type="text" name="client_date_of_birth" id="client_date" value="23/10/2019" data-format="DD/MM/YYYY"   />
                            </div>
                        </li>

                        



                    </ul>

                    <!-- <div class="gform_footer top_label"> 
                       <input type="submit" id="gform_submit_button_5" class="gform_button button next" value="?????????? " tabindex="54"> 
                    </div> -->
                
                    <div class="gform_footer "> 
                       <!--  <a class="button gform_button previous_scr"> <p class="first_next_button">??????????</p></a> -->
                        <a class="button gform_button" ><p class="first_next_button scr_first_submit" id="seven_next_form">????????</p> </a>
                    </div>
                   <!--  <div class="row">
                        <div class="col-md-3 col-sm-3"></div>
                        <div class="col-md-6 col-sm-6">
                            <a class="button gform_button next"> <p class="first_main2_button" >?????????? ???????? ????????</p></a>
                            <br>
                             
                            <a class="button gform_button next"> <p class="first_main2_button screen-button-obli" >?????????? ?????????? ??'?????? ???????? ????????</p></a>
                            <br>
                            <a class="button gform_button previous_scr"> <p class="first_main2_button">??????????</p></a>
                        </div>
                        <div class="col-md-3 col-sm-3"></div>
                    </div> -->

                   <!--  <li class="gfield gf_left_third text-field1_application form-group">
                        <img src="<?php echo base_url() ?>website_assets/img/L3.png">
                    </li>

                    <li class="gfield gf_left_third text-field1_application form-group">
                        <img src="<?php echo base_url() ?>website_assets/img/L4.png">
                    </li> -->

                </div>
                  
                
                   <!-- screen 4/5 -->
                    <div id="greaterThan2500Scr" class="gform_body" style="margin-top: 30px;">
                    <!--  <div class="progress-circle over50 p66" style="float: right; margin-left:15px; margin-top:-25px;">
                        
                            <span style="direction: ltr;">4 / 5</span>
                           <div class="left-half-clipper">
                              <div class="first50-bar"></div>
                              <div class="value-bar"></div>
                           </div>
                           </div> -->
                            <div class="" style="float: right; margin-left:15px; margin-top:-25px;">
                            <img src="<?php echo base_url() ?>website_assets/img/progress4.png" class="img-responsive">
                           
                           </div>
                     <p class="rtl" style="text-align:right;font-weight: bold;font-size: 22px;">???????? ??????????  </p>

                    <p class="rtl" style="text-align:right;">??????, ?????? ??????????  </p>

                     <p class="rtl" style="text-align:center; margin-top: 50px;">?????? ???????????? ???? ???????????? ?????????? ???? ???????????? ?????????? ???????????? ??????????: </p>

                     <img src="http://oblidev.malul.xyz/website_assets/img/obliz.png" class="img-responsive tab_image-obli">
    
                    <p class="rtl" style="text-align:center;font-weight: bold;">???????? ???????? ????????????! </p>

                

                    <br>
                    <div class="row">
                        <div class="col-md-3 col-sm-3"></div>
                        <div class="col-md-6 col-sm-6">
                            <a class="button gform_button " id="myBtn3"> <p class="first_button-new" >???????? ??????????  </p></a>
                             
                            <a class="button gform_button next"> <p class="first_main_button scr_third_submit" >????????  </p></a>
                        </div>
                        <div class="col-md-3 col-sm-3"></div>
                    </div>
                    <br><br><br>

                   <!--  <div class="row">
                        <div class="col-md-2 col-sm-2"></div>
                        <div class="col-md-8 col-sm-8">
                             <div class="col-md-6 col-sm-6"><div class="box-button1"><p> ???????? ???? ????????  </p></div></div>
                             <div class="col-md-6 col-sm-6"> <div class="box-button2"><p> ???????? 1 </p></div></div>
                            
                        </div>
                        <div class="col-md-2 col-sm-2"></div>
                    </div> -->

                </div>



           <!-- screen X -->
                 <div id="PropertyForm" class="gform_body" style="margin-top: 30px;">
                     <!-- <div class="progress-circle over50 p66" style="float: right; margin-left:15px; margin-top:-25px;">
                           <span>
                            <i class="fa fa-close" style="font-size:40px; margin-left:-6px;"></i>
                            </span>
                           <div class="left-half-clipper">
                              <div class="first50-bar"></div>
                              <div class="value-bar"></div>
                           </div>
                           </div> -->
                           <div class="" style="float: right; margin-left:15px; margin-top:-25px;">
                            <img src="<?php echo base_url() ?>website_assets/img/progressX.png" class="img-responsive">
                           
                           </div>
                     <p class="rtl" style="text-align:right;font-weight: bold;font-size: 22px;"> ?????????? ???? ??????????  </p>

                    <p class="rtl" style="text-align:right;"> ?????? ???????? ???????? ????????????????  </p>

                     <p class="rtl" style="text-align:center;font-weight: bold; margin-top: 50px;">?????? ??????, ???????????? ??????, ?????????? ?????? ?????????? ?????? ???????????? ???? ??????????. </p>

                     <img src="http://oblidev.malul.xyz/website_assets/img/obliz.png" class="img-responsive tab_image-obli">
    
                   <!--  <p class="rtl" style="text-align:center;font-weight: bold;"> ?????? ??????, ???????? ???????????? ???????????? ???????? ??000-,25 ???. </p> -->

                    <p class="rtl" style="text-align:center;">  ?????? ???????? ???? ???????????? ?????????????? ,<br>???????????????? ?????????? ???????? ???????? ????????????????:</p>

                    <br>
                    <div class="row">
                        <div class="col-md-3 col-sm-3"></div>
                        <div class="col-md-6 col-sm-6">
                            <a class="button gform_button next"> <p class="first_main_button" >?????????? ???? ?????? ???????? </p></a>
                             
                            <a class="button gform_button"> <p class="first_main_button" > ?????????? ???? ???????????? </p></a>
                        </div>
                        <div class="col-md-3 col-sm-3"></div>
                    </div>
                    <br><br><br>

                  <!--   <div class="row">
                        <div class="col-md-2 col-sm-2"></div>
                        <div class="col-md-8 col-sm-8">
                             <div class="col-md-6 col-sm-6"><div class="box-button1"><p> ???????? ???? ????????  </p></div></div>
                             <div class="col-md-6 col-sm-6"> <div class="box-button2"><p> ???????? 1 </p></div></div>
                            
                        </div>
                        <div class="col-md-2 col-sm-2"></div>
                    </div> -->

                </div>


                  <!-- screen 4/5-box -->
                <div id="scr_eight_form" class="gform_body" style="margin-top: 30px;">
                  <!-- <div class="progress-circle over50 p66" style="float: right; margin-left:15px; margin-top:-25px;">
                           <span>4 / 5</span>
                           <div class="left-half-clipper">
                              <div class="first50-bar"></div>
                              <div class="value-bar"></div>
                           </div>
                           </div> -->
                            <div class="" style="float: right; margin-left:15px; margin-top:-25px;">
                            <img src="<?php echo base_url() ?>website_assets/img/progress4.png" class="img-responsive">
                           
                           </div>
                    <p class="rtl" style="text-align:right;font-weight: bold;font-size: 22px;">???????? ??????????  </p>
                    <p class="rtl" style="text-align:right;">???????? ??????: ???????? ???????????? </p>

                    
                    <br>

                    <ul class="gform_fields top_label ">

                        <li class="gfield gfield_html gfield_no_follows_desc " style="margin-top: 30px;">
                           
                            <p class="contact-text_application rtl" style="text-align:right; font-weight: 600;">?????? ??????, ?????????? ???????? ???? ???? ???????? ?????????? ?????????????? ???????? ?????????? ?????? ??????????:  </p>
                            
                         </li>

                    </ul>


                    <div class="modal-dialog_box">
                        <div class="modal-content_box">
                            <div class="modal-header_box">
                               
                                <h3 class="modal-title_box" id="myModalLabel">???????????? ?????? ???????????? ???????? </h3>
                            </div>
                            <div class="modal-body_box">
                                <p class="rtl" style="text-align:center;font-weight: bold;font-size: 22px;">???????? ??????????  </p>

                                <p class="rtl" style="text-align:center;font-weight: bold;font-size: 52px;">125 ??? </p>
                                 <p class="contact-text_application rtl" style="text-align:center;"> ???????? ???????????? ???????????? ???????? %6  ???????????? ????  1500 ??? ????????. </p>
                              
                             

                            </div>
                           
                        </div>
                    </div>

                   <div class="row" style="margin-top:100px;">
                        <div class="col-md-3 col-sm-3"></div>
                        <div class="col-md-6 col-sm-6">
                        
                             
                            <a class="button gform_button"> <p class="first_main_button">?????????? </p></a>
                        </div>
                        <div class="col-md-3 col-sm-3"></div>
                    </div>

                </div>



                <!-- screen 8 -->
                <div id="scr_seven_form_new" class="gform_body">
                    <p class="" style="text-align:center;">???????? ?????????? </p><br>

                    <p class="" style="text-align:center;"> ???????? ???????????? ???? ????????????. </p>
                    <p class="" style="text-align:center;"> ?????????????? ?????????? ?????????????? ?????????????? ????????????, ????????: </p>
                    <p class="" style="text-align:center;"> <b>500 ??? </b></p>
                    <p class="" style="text-align:center;"> ??????????, ???????????? ?????????? ?????????? ??????????: </p>
                    <p class="" style="text-align:center;"> <b>100 ??? </b></p>
            
                   <div class="">
                  <!--  <h2>Panel Heading</h2> -->
                      <div class="panel panel-default" style="padding: 0px; display: block;text-align: center;">
                        <div class="panel-heading">????"?? ???????????? ????????:</div>
                        <div class="panel-body"><b>600 ??? </b></div>
                        <div class="panel-body">(?????? ???????? ???? ?????? ???????????? ????????, ?????????? ??????????, ???????????? ?????? ?????? ????????)</div>
                      </div>
                    </div>
                  
                   

                     <br>
                    <div class="gform_footer top_label"> 
                        <a class="button gform_button previous_scr"> <p class="first_next_button">??????????</p></a>
                        <!-- <a class="button gform_button next"> <p class="first_next_button"> ???????? </p></a> -->
                        <input type="" class="gform_button button" value="???????? " tabindex="54">
                    </div>
                     
                      <br>
                    <div class="row">
                        <div class="col-md-3 col-sm-3"></div>
                        <!-- <div class="col-md-6 col-sm-6">
                              <div class="col-6 col-sm-6">
                                    <li>
                                     <img src="http://oblidev.malul.xyz/website_assets/img/L3.png">
                                    </li>
                              </div>
                              <div class="col-6 col-sm-6">
                                    <li>
                                      <img src="http://oblidev.malul.xyz/website_assets/img/L4.png">
                                    </li>
                            </div>
                        </div> -->
                        <div class="col-md-3 col-sm-3"></div>
                    </div>

                </div>

              
    </form>
    </div>
                      
         
        </div>
    </div>
</div>

<link rel="stylesheet" href="<?php echo base_url() ?>website_assets/date/daterangepicker-bs3.css">
<script src="<?php echo base_url() ?>website_assets/date/moment.min.js"></script>
<script src="<?php echo base_url() ?>website_assets/date/daterangepicker.js"></script>
<script src="<?php echo base_url() ?>website_assets/date/xenon-custom.js"></script>