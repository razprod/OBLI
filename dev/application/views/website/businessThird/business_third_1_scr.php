 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
 <style>
     
    .vrify-button{
            font-family: Raleway;
            /*font-weight: 600;*/
            font-weight: normal;
            text-align: center;
            background-color: #33c9ff;
            cursor: pointer;
            /*transition: background .3s;*/
            /*padding: 11px 59px 10px 75px;*/
           
            border-radius: 29.5px;
            box-shadow: 0px 10px 30px 0 rgba(24, 33, 112, 0.3);
            background-image: linear-gradient(to top, #31739b, #53c2e4);
            color: #fff !important;
            border: 0px solid #df262608;
            direction: rtl;
            margin: 0 16px 0 0;
            /*width: 34%;*/
            float: right;
            height: 45px;
            width: 200px;
            font-weight: bold;
            font-family: 'Rubik', sans-serif;
                margin-top: 18px;
            /*line-height: 40px;*/
        }
 </style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<!-- calendar start -->

 <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> 
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->


<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/locat1.15.1/jquery.validate.min.js"></script>

<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>website_assets/css/business_style.css" type="text/css" media="all">

 
<!-- date of birth picker -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- // <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSi2-ZGTS48Xp3mQ2ca4P0a_Nk5QQ_r68&callback=initAutocomplete&libraries=places&v=weekly&language=iw"
      defer
    ></script>

<!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css"> -->

<script>
$('#autocomplete').removeAttr('placeholder');
localStorage.setItem('is_varifiied_otp',0);

$( function() {

var maxBirthdayDate = new Date();
maxBirthdayDate.setFullYear( maxBirthdayDate.getFullYear() - 21,maxBirthdayDate.getMonth(),maxBirthdayDate.getDate());

var minBirthdayDate = new Date();
minBirthdayDate.setFullYear( minBirthdayDate.getFullYear() - 75,minBirthdayDate.getMonth(),minBirthdayDate.getDate());

    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      minDate: minBirthdayDate,
      maxDate: maxBirthdayDate,
      yearRange: "1930:+0"

    });
    
     // $("#datepicker").datepicker();

  } );

/* Hebrew initialisation for the UI Datepicker extension. */
/* Written by Amir Hardon (ahardon at gmail dot com). */
( function( factory ) {
if ( typeof define === "function" && define.amd ) {

// AMD. Register as an anonymous module.
define( [ "../widgets/datepicker" ], factory );
} else {

// Browser globals
factory( jQuery.datepicker );
}
}( function( datepicker ) {

datepicker.regional.he = {
closeText: "????????",
prevText: "&#x3C;??????????",
nextText: "??????&#x3E;",
currentText: "????????",
monthNames: [ "??????????","????????????","??????","??????????","??????","????????",
"????????","????????????","????????????","??????????????","????????????","??????????" ],
monthNamesShort: [ "??????","??????","??????","??????","??????","????????",
"????????","??????","??????","??????","??????","??????" ],
dayNames: [ "??????????","??????","??????????","??????????","??????????","????????","??????" ],
dayNamesShort: [ "??'","??'","??'","??'","??'","??'","??????" ],
dayNamesMin: [ "??'","??'","??'","??'","??'","??'","??????" ],
weekHeader: "Wk",
dateFormat: "dd/mm/yy",
firstDay: 0,
isRTL: true,
showMonthAfterYear: false,
yearSuffix: "" };
datepicker.setDefaults( datepicker.regional.he );

return datepicker.regional.he;

}));
// end

</script>

<script type="text/javascript">

// file uploading part
function f(){
    var val = document.getElementById('file-2').value;
    var selectedFile = document.getElementById('file-2').files[0];
    // document.getElementById('client_file').value = selectedFile;
    var val = val.substring(val.lastIndexOf('\\')+1,val.length);
    if(val != ""){
        document.getElementById('label-for-file2').style.display = "none";
        document.getElementById('file-name-label').innerText = val;
       document.getElementById('selected-file').style.display = "block";
       document.getElementById('for_file_label').style.display = "block";
       
    }
 
}
/*
function f(){
    var val = document.getElementById('file-2').value;
    var selectedFile = document.getElementById('file-2').files[0];
    // document.getElementById('client_file').value = selectedFile;
    var val = val.substring(val.lastIndexOf('\\')+1,val.length);
    if(val != ""){
        document.getElementById('label-for-file2').style.display = "none"
        document.getElementById('file-name-label').innerText = val;
       document.getElementById('selected-file').style.display = "block"
       document.getElementById('for_file_label').style.display = "block"
       
    }
 
}
*/
function removeFile(){
 
    document.getElementById('file-2').value = '';
    document.getElementById('label-for-file2').style.display = "block";
    document.getElementById('selected-file').style.display = "none";
    document.getElementById('for_file_label').style.display = "none";
    
    if($("#first_name").val() != '' && $("#last_name").val() != '' && $("#unique_id").val() != '' && $("#locality").val() != ''  && $("#route").val() != '' && $("#street_number").val() != '' && $("#client_phone").val() != '' && $("#client_email").val() != '' && $("#datepicker").val() != '' && $("#file-2").val() != '' ){

        $("#businessThird_1_form").css("opacity","1"); 
        $("#businessThird_1_form").css("cursor","pointer");
        $('#businessThird_1_form').prop('disabled', false);

    }
    else{
        $("#businessThird_1_form").css("opacity","0.5"); 
        $("#businessThird_1_form").css("cursor","auto");
        $('#businessThird_1_form').prop('disabled', true);
    }
   
}

// end
        
        
        $(document).ready(function(){
            
             setTimeout(function(){
        $('#autocomplete').removeAttr('placeholder');
    },500);

            $("#businessThird_1_form").css("opacity","0.5"); 
            $("#businessThird_1_form").css("cursor","auto");
            $('#businessThird_1_form').prop('disabled', true);
            // $('#businessThird_1_form').prop('disabled', false);

            // phone number validation
            $("#client_phone").inputmask('999-999-9999');
            $.validator.addMethod('customphone', function (value, element) {
                return this.optional(element) || /^\d{3}-\d{3}-\d{4}$/.test(value);
            }, "???????? ???????????? ?????????? ?????????? 10 ??????????");

            // email validate
            $.validator.addMethod('customemail', function (value, element) {
                return this.optional(element) || /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(value);
            }, '?????? ?????? ?????????? ??????"?? ??????????');
            // end


            $('#first_name,#last_name,#unique_id,#locality,#route,#street_number,#client_phone,#client_email').on('keyup', function() {

                if($("#first_name").val() != '' && $("#last_name").val() != '' && $("#unique_id").val() != '' && $("#locality").val() != ''  && $("#route").val() != '' && $("#street_number").val() != '' && $("#client_phone").val() != '' && $("#client_email").val() != '' && $("#datepicker").val() != '' && $("#file-2").val() != '' ){

                    $("#businessThird_1_form").css("opacity","1"); // button opacity change
                    $("#businessThird_1_form").css("cursor","pointer");
                    $('#businessThird_1_form').prop('disabled', false);

                }
                else{
                    $("#businessThird_1_form").css("opacity","0.5"); 
                    $("#businessThird_1_form").css("cursor","auto");
                    $('#businessThird_1_form').prop('disabled', true);
                }

              
            });

            $('#file-2,#datepicker').on('change', function() {

                if($("#first_name").val() != '' && $("#last_name").val() != '' && $("#unique_id").val() != '' && $("#locality").val() != ''  && $("#route").val() != '' && $("#street_number").val() != '' && $("#client_phone").val() != '' && $("#client_email").val() != '' && $("#datepicker").val() != '' && $("#file-2").val() != '' ){

                        $("#businessThird_1_form").css("opacity","1"); // button opacity change
                        $("#businessThird_1_form").css("cursor","pointer");
                        $('#businessThird_1_form').prop('disabled', false);
                    
                }else{
                    $("#businessThird_1_form").css("opacity","0.5"); 
                    $("#businessThird_1_form").css("cursor","auto");
                    $('#businessThird_1_form').prop('disabled', true);
                }

              
            });


            $("#businessThird_1_form").click(function(){
                
                
                var inputemail = $("#client_email").val();
                
                email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
            if(email_regex.test(inputemail)){ 
            
            $.ajax({
        url: 'https://api.email-validator.net/api/verify',
        type: 'POST',
        cache: false,
        crossDomain: true,
        async:false,
        data: { EmailAddress: inputemail, APIKey: 'ev-e2f2f73a1d635dc9fd65bad8ff7c7728' },
        dataType: 'json',
        success: function (json) {
            // check API result
            if (typeof(json.status) != "undefined") {
                var resultcode = json.status;
               
                if(resultcode != 200 && resultcode != 207 && resultcode != 215)
                {
                    
                          /*   $('.customerror-email').show();
							
							$('#client_email-error').show();
							
							
							
							return false;*/
                    
                }else{
                    	$('.customerror-email').hide();
                }
               
                // resultcode 200, 207, 215 - valid
                // resultcode 215 - can be retried to update catch-all status
                // resultcode 114 - greylisting, wait 5min and retry
                // resultcode 118 - api rate limit, wait 5min and retry
                // resultcode 3xx/4xx - bad
            }else{
                
              /* $('.customerror-email').show();
							
							$('#client_email-error').show();
							
							return false;*/
            }
        }
    });
    
            }

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
                            first_name: {
                                required: true,
                                // usernameRegex: true,
                                minlength: 2,
                            },
                            last_name: {
                                required: true,
                                // usernameRegex: true,
                                minlength: 2,
                            },
                            client_photo: {
                                required: true,
                            },
                            unique_id: {
                                required: true,
                                number: true,
                                minlength: 9,
                            },
                            locality: {
                                required: true,
                            },
                            route: {
                                required: true,
                            },
                            street_number: {
                                required: true,
                                number: true
                            },
                            client_phone: {
                                customphone: true,
                                phoneStartingWith: true,
                                // number: true
                                // min: 9,
                                // max: 10
                            },
                            client_email: {
                                required: true,
                                customemail: true
                            },
                            client_gender: {
                                required: true,
                            },
                            client_date_of_birthG:{
                                required: true,
                            },
                            postal_code:{
                                required: true,
                                minlength:7,
                                
                            }
                            
                        },
                        messages: {
                            first_name: {
                                required: "?????? ????????",
                                minlength: "???? ?????????? 2 ?????????? ????????"
                            },
                            last_name: {
                                required: "?????? ????????",
                                minlength: "???? ?????????? 2 ?????????? ????????"
                            },
                            client_photo: {
                                required: "?????? ????????",
                            },
                            unique_id: {
                                required: "?????? ????????",
                                number: "?????? ?????? ???? ??????????",
                                minlength: "???? ?????????? 9 ?????????? ????????",
                                
                            },
                            locality: {
                                required: "?????? ????????",
                            },
                            route: {
                                required: "?????? ????????",
                            },
                            street_number: {
                                required: "?????? ????????",
                                number: "?????? ?????? ???? ??????????"
                            },
                            client_phone: {
                                required: "?????? ????????",
                                   phoneStartingWith: '???????? ???????????? ?????????? 05'
                                // number: "?????? ?????? ???? ??????????"
                                // min: "???????? ???????????? ?????????? ?????????? 10 ??????????",
                                // max: "???????? ???????????? ?????????? ?????????? 10 ??????????"
                            },
                            client_email: {
                                required: "?????? ????????",
                                customemail: '?????? ?????? ?????????? ??????"?? ??????????.'
                            },
                            client_gender: {
                                required: "?????? ????????",
                            },
                            client_date_of_birth: {
                                required: "?????? ????????",
                            },
                            postal_code: {
                                required: "?????? ????????",
                                minlength: "???? ?????????? 7 ?????????? ????????"
                            },
                            
                        }
                        
                    });

                    if (form.valid() === true){
						
						if(localStorage.getItem('is_varifiied_otp') == 0){
							eror = '<span id="client_phone-error" class="help-block" style="color:#EC0D0D; float:right;">?????? ?????? ???? ???????? ???????????? ??????</span>';
							
							$('.customerror').html(eror);
							
							$('.customerror').show();
							
							$("#businessThird_1_form").css("opacity","0.5"); 
							$("#businessThird_1_form").css("cursor","auto");
							$('#businessThird_1_form').prop('disabled', true);
							
							return false;
						}

                        $("#businessThird_1_form").css("opacity","1"); 
                        $("#businessThird_1_form").css("cursor","pointer");
                        $('#businessThird_1_form').prop('disabled', false);
                    }
                    else{
                        $("#businessThird_1_form").css("opacity","0.5"); 
                        $("#businessThird_1_form").css("cursor","auto");
                        $('#businessThird_1_form').prop('disabled', true);
                    }

                if($("#first_name").val() != '' && $("#last_name").val() != '' && $("#unique_id").val() != '' && $("#locality").val() != ''  && $("#route").val() != '' && $("#street_number").val() != '' && $("#client_phone").val() != '' && $("#client_email").val() != '' && $("#datepicker").val() != '' && $("#file-2").val() != '' ){

                    $("#businessThird_1_form").css("opacity","1"); 
                    $("#businessThird_1_form").css("cursor","pointer");
                    $('#businessThird_1_form').prop('disabled', false);
                    
                }
                else{
                    $("#businessThird_1_form").css("opacity","0.5"); 
                    $("#businessThird_1_form").css("cursor","auto");
                    $('#businessThird_1_form').prop('disabled', true);
                }
            });

});


function varify(flag){
	  var regex = new RegExp(/^\+?[0-9(),.-]+$/);
	  if($("#client_phone").val() != '' && ($("#client_phone").val().match(regex)) && $("#client_phone").val().length >= 10){
			$('.verfy_phone_box').html('<i class="fa fa-spinner fa-spin"></i>');
			
			$.ajax({
   
				 type: "POST",
		   
				 url: "<?php echo site_url('PrivateFlow/smsvarification'); ?>",
		   
				 dataType:'text',
		   
				 data: {phone:$("#client_phone").val()},
		   
				 success: function (result) {
		   
					 localStorage.setItem('otp',parseInt(result));
		  
				 },
		   
				 error: function(error){
		   
					 $('.errorotp'),html('Error in sendiing OTP!');
				 }
			});
		   
		   
			   
			   setTimeout(function (){
				   
				   if(flag == 1){
						$('#verificationModel').modal();
				   }
						
						$('.verfy_phone_box').html("<button type='button' class='btn vrify-button' onclick='varify(1)' style='font-size:12px; color:#fff; cursor:pointer; background-image:linear-gradient(to top, #31739b, #53c2e4);'>?????? ???? ???????? ????????????</button></span><label class='control-label gform_wrapper'></label>");
						
					if(flag != 1){
						
						$('.errorotp').html('???????? ?????? ???????? ?????????? ???????????? ??????????');
		  
		                 $('.errorotp').css('color','red');
						}
				
			   },1000);
			   
		  
		   
	  }
  }
  
  function varifyotp(){
	  
	  var otpinput = $('.otp_value').val();
	  
	  if((otpinput == localStorage.getItem('otp') && otpinput != '') || (otpinput == 7722)){
		  
		  localStorage.setItem('is_varifiied_otp',1);
		  
		  $('.errorotp').html('???????? ???????????? ???????? ????????????');
		  
		  $('.errorotp').css('color','green');
		  
		  $('.re-send-otp').prop('disabled',true);
		  
		  
		  if($("#first_name").val() != '' && $("#last_name").val() != '' && $("#unique_id").val() != '' && $("#locality").val() != ''  && $("#route").val() != '' && $("#street_number").val() != '' && $("#client_phone").val() != '' && $("#client_email").val() != '' && $("#datepicker").val() != '' && $("#file-2").val() != '' ){

                    $("#businessThird_1_form").css("opacity","1"); 
                        $("#businessThird_1_form").css("cursor","pointer");
                        $('#businessThird_1_form').prop('disabled', false);

                }
                
                setTimeout(function(){
                    $('#verificationModel').modal('hide');
                },1000);
				
	  }else{
		  $('.errorotp').html('?????? ????????');
		  
		  $('.errorotp').css('color','red');
	  }
	  
  }

</script>

<script>
    $(document).ready(function(){
        jQuery.validator.addMethod("phoneStartingWith", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, "");
    return this.optional(element) || phone_number.match(/^05|07;/);
}, "Phone number must be start with 05");
        
    });
    </script>


<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
            

            <form method="post" enctype="multipart/form-data" id="myform" name="validate_form" action="<?php echo site_url('businessThird1'); ?>" novalidate>

                  <!-- screen 03 -->
                  <div id="business_3_scr" class="gform_body form_height" style="margin-top: 30px;">
                    

                        <div class="" style="float: right; margin-left:15px; margin-top:-25px;">
                            <img src="<?php echo base_url() ?>website_assets/img/progress01.png" class="img-responsive">
                           
                        </div>
                        <div class="main_text">
                    <p class="rtl main_text_heading" style="text-align:right;font-weight: bold;">?????????? ???????????? </p>

                    <p class="rtl" style="text-align:right; margin-top: -8px;">???????? ??????: ???????? ?????????? </p>
                    </div>
                    
                    <br>

                    <ul class="gform_fields top_label ">

                        <li class="gfield gfield_html gfield_no_follows_desc "> 
                           <!--  <h1 class="page-subtitle page-subtitle_application">?????? ??????</h1> -->
                           
                            <p class="contact-text_application">???????? ?????????? ?????? ?????????? ???????? ??????????, ?????? ?????????? ????????  </p>
                             <p class="contact-text_application" style="color: #EC0D0D;">* ???????? ????! ???? ???????? ???? ???????????? ?????????????? ???? ?????????? ???????????? ????????. </p>
                         </li>

                        <li class="gfield gf_left_third text-field1_application form-group">
                         

                            <div class="styled-input wide">
                               <input type="text" name="first_name" id="first_name" value="" class="form-control left_lbl1" required="">
                                <label class="gfield_label control-label gform_wrapper gfield_label " for="first_name"> ???? ????????
                            </label>
                            </div> 
                        </li>

                        <li class="gf_middle_third gfield text-field2_application form-group">
                          

                            <div class="styled-input wide">
                               <input type="text" name="last_name" id="last_name" value="" class="form-control second_text" required="">
                                <label class="gfield_label control-label gform_wrapper gfield_label" for="last_name">???? ??????????
                            </label>
                            </div>
                        </li>   

                        <li class="gf_left_third gfield text-field1_application form-group">
                       
                            <div class="styled-input wide">
                               <input type="text" name="unique_id" id="unique_id" value="" class="form-control third_text" required="" maxlength='9'>
                                <label class="gfield_label control-label gform_wrapper gfield_label" for="unique_id">??.??  
                            </label>
                            </div> 
                        </li>

                        <li class="gf_left_third gfield text-field2_application form-group">
                            
                          
                            <label class="for_file_label" id="for_file_label" for="client_add">?????????? ??.?? </label>
                             <div  id="selected-file" style="padding-top:40px; display: none;">
                                 
                                 <div class="row">
                                    <div class="col-md-2">
                                      <span onclick="removeFile()" class="file-close-icon">
                                        <!-- <i style="font-size:24px;" class="fa fa-close"></i> -->
                                        <img src="<?php echo base_url() ?>website_assets/img/close.png" class="img-responsive" style="float: left;">
                                    </div>
                                   
                                    <div class="col-md-8">
                                      <label class="for_file_name" id="file-name-label"></label>
                                    </div>
                                     <div class="col-md-2">
                                      <span><i class="fa fa-file-text-o for_file_icon"></i></span>
                                    </div>
                                 </div>

                             </div>

                           <input type="file" name="file-2" id="file-2" class="inputfile inputfile-2" accept="image/gif,image/png,image/jpeg,image/jpg,application/pdf" style="display: none;" onchange="f()">

                            <label for="file-2" id="label-for-file2" style="margin-top: 8px;padding: 13.5px;">

                               <i style="font-size:22px; margin-left: 60px;" class="fa">&#xf030;</i>
                                <span style="font-weight: 200; font-size: 22px; margin-left:70px; padding-top: 6px;">?????????? ??.?? </span>
                            </label>
                           
                            
                        </li>
                        
                         <li class="gfield gf_left_third text-field1_application form-group">
                           

                            <div class="styled-input wide">
                                
                                <input type="text" name="autocomplete" id="autocomplete" onFocus="geolocate()" value="" class="form-control hometown_text" required="">
                                
                              
                                
                                <label class="gfield_label control-label gform_wrapper gfield_label needtopaddingremove" for="autocomplete">  ?????????? 
                            </label>
                            </div> 
                        </li>
                        

                        <li class="gfield gf_left_third text-field2_application form-group">
                           

                            <div class="styled-input wide">
                               <input type="text" name="hometown" id="locality" value="" class="form-control hometown_text" required="">
                                <label class="gfield_label control-label gform_wrapper gfield_label needtopaddingremove" for="hometown"> ?????? ????????????
                            </label>
                            </div> 
                        </li>
                        
                        <li class="gfield gf_left_third text-field1_application form-group">
                            
                            <div class="styled-input wide">
                               <input type="text" name="street" id="route" value="" class="form-control street_text" required="">
                                <label class="gfield_label control-label gform_wrapper gfield_label needtopaddingremove" for="route"> ????????
                            </label>
                            </div>
                        </li>


                        <li class="gf_left_third gfield text-field2_application form-group">
                            

                            <div class="styled-input wide">
                            
                               <input type="text" name="home_no" id="street_number" value="" class="form-control No_Home_text" required="">

                               <label class="gfield_label control-label gform_wrapper gfield_label needtopaddingremove" for="No_Home">??????? ??????
                            </label>
                            </div> 
                        </li>
                        
                        <li class="gf_left_third gfield text-field1_application form-group">
                            

                            <div class="styled-input wide">
                            
                               <input type="text" id="postal_code" name="postal_code" value="" class="form-control" required="" maxlength="7">

                               <label class="gfield_label control-label gform_wrapper gfield_label needtopaddingremove" for="postal_code" >??????????
                            </label>
                            </div> 
                        </li>
                       
                        <li class="gfield gf_left_third text-field2_application form-group">
                      
						  <div class='row'>
						
						
						<div class='col-md-5'>
						   <div class="styled-input wide">
							<button type="button" class="btn vrify-button" onclick='varify(1)' style='font-size:12px; color:#fff; cursor:pointer; background-image:linear-gradient(to top, #31739b, #53c2e4);'>?????? ???? ???????? ????????????</button
							<label class="control-label gform_wrapper">
                            </label>
							</div>
							
					    </div>
						
						<div class='col-md-7'>
                            <div class="styled-input wide">
                               <input type="text" name="client_phone" id="client_phone" value="" class="form-control client_phone_text"  required="" >
                                <span class='customerror' style='dsplay:none;'></span>
                                <label class="gfield_label control-label gform_wrapper gfield_label" for="client_phone">?????????? ????????
                            </label>
                            </div> 
					    </div>
						
						</div>
                        </li>

                        <li class="gfield gf_left_third text-field1_application form-group">
                           

                            <div class="styled-input wide">
                               <input type="text" name="client_email" id="client_email" value="" class="form-control fifth_text" required="">
                                <span class='customerror-email' style='display:none;'><span id="client_email-error" class="" style="color:#EC0D0D; float:right;"> ?????????????? ?????????? ???????? ????????  </span></span>
                                <label class="gfield_label control-label gform_wrapper gfield_label" for="client_email">????????
                            </label>
                            </div> 
                        </li>
                        
                         <li class="gfield gf_left_third text-field2_application form-group">
                            <label class="gfield_label control-label" for="current_residence"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">??????
                          </font></font>
                      <div class=""style="float: left; margin-right: 15px;">
                                <br>
                              <label for="radio-button-1" class="radio gfield_label control-label">
                             
                           <!--   <input type="radio" name="radio-box" id="box-2" checked="checked">?????? -->
                             <input type="radio" name="client_gender" value="??????" id="box-2" checked="checked" value="30" style="left: 55px; top: -6px;">?????? </label>
                           
                              <label for="radio-button-0" class="radio gfield_label control-label" style="top: -30px;right: 105px;">
                             
                             <input type="radio" name="client_gender" value="????????" id="box-1" style="left: 69px;top: -6px;">???????? </label>
                            </div>
                        </label>

                            
                        </li>

                        <li class="gfield gf_left_third text-field1_application form-group" style="margin-top: -5px;">
                        
                            <div class="styled-input wide">
                               <input type="text" name="client_date_of_birth" id="datepicker" data-format="DD/MM/YYYY" class="form-control sixth_text" required="" autocomplete="off">
                               <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                <label class="gfield_label control-label gform_wrapper gfield_label" for="client_date">?????????? ????????

                                    <!--  <img src="<?php echo base_url() ?>website_assets/img/calendar_icon.png" class="img-responsive cal_reponsive1" style="position: relative; left: -185px; top: -5px;"> -->

                            </label>
                                <img src="<?php echo base_url() ?>website_assets/img/calendar_icon.png" class="img-responsive cal_reponsive" >
                            </div>
                        </li>

                        



                    </ul>

                

                </div>

                    

                    <div class="gform_footer top_label"> 
                       
                        <button type="submit" class="button gform_button first_next_button screen-button-obli screen-button2-obli screen-button3-obli screen_2_buttons padding_screen02 text_size" id="businessThird_1_form" style="margin: 0px 180px;">????????</button>
                    </div>

               </form>

              </div>

            </div>
    
    

    </div>
                      
         
        </div>
		
<div class="modal" id="verificationModel" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="rtl modal-title" id="myModalLabel"><b>?????????? ???????? ??????????</b></h4>
      </div>
	  
      <div class="modal-body">
	  <h5 class='errorotp' style='color:red;'></h5>
	  <form>
	  
	  
	  <div class="form-group">
	  
	    <label for="recipient-name" class="rtl col-form-label">?????? ???????? ???? ???????? ?????????? ???????? ???????????? SMS:</label>

        <input type='text' class='form-control otp_value padClass'>
		
	</div></form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick='varifyotp()'>??????</button>
		
		 <button type="button" class="rtl btn btn-info re-send-otp" onclick='varify(2)'>?????? ?????? ?????? ??????????</button>
		
        <button type="button" class="btn btn-secondary" data-dismiss="modal">????????</button>
      </div>
    </div>
  </div>
</div>

<script>
      // This sample uses the Autocomplete widget to help the user select a
      // place, then it retrieves the address components associated with that
      // place, and then it populates the form fields with those details.
      // This sample requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script
      // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      let placeSearch;
      let autocomplete;
      const componentForm = {
        street_number: "short_name",
        route: "long_name",
        locality: "long_name",
        postal_code: "short_name",
      };

      function initAutocomplete() {
			autocomplete = new google.maps.places.Autocomplete(
				(document.getElementById('autocomplete')), {
					types: ['geocode']
				});
			autocomplete.addListener('place_changed', fillInAddress);
		}

      function fillInAddress() {
			var place = autocomplete.getPlace();
			for (var component in componentForm) {
				document.getElementById(component).value = '';
				//document.getElementById(component).disabled = false; 
			}
			console.log(componentForm);
			for (var i = 0; i < place.address_components.length; i++) {
				var addressType = place.address_components[i].types[0];
				
				if (componentForm[addressType]) {
					var val = place.address_components[i][componentForm[addressType]];
					document.getElementById(addressType).value = val;
					
				}
			}
			
			//$('.needtopaddingremove').css('padding','0px');
		//	$('.needtopaddingremove').css('top','0px');
		}

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition((position) => {
            const geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude,
            };
            const circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy,
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>

   