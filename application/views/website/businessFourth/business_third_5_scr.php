<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<!-- calendar start -->

 <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> 
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->


<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>

<link rel="stylesheet" href="<?php echo base_url() ?>website_assets/css/business_style.css" type="text/css" media="all">

<!-- date of birth picker -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- // <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<style type="text/css">

.daterangepicker td.active, .daterangepicker td.active:hover{
    background-image: linear-gradient(to top, #31739b, #53c2e4);
}    
.applyBtn{
     background-image: linear-gradient(to top, #31739b, #53c2e4);
     border:none;
}
.daterangepicker .calendar-time{
    display: none;
}

/*new text button size */
.text_size{
    font-weight: bold;
    font-size: 22px;
    /*line-height: 29px;*/
}
.checkbox label::after{
    padding-left: 5px;
}  
</style>
<!-- calendar end -->

<script type="text/javascript">
    
//
//    $(function() {
//
//      $('input[name="gur_period_date_range"]').daterangepicker({
//          // autoUpdateInput: false,
//          // locale: {
//          //     cancelLabel: 'Clear'
//          // }
//          linkedCalendars : false,
//             "locale": {
//                "format": "MM/DD/YYYY",
//                "separator": " - ",
//                "applyLabel": "?????????? ?????????????? ",
//                "cancelLabel": "???????? ",
//                "fromLabel": "?? ",
//                "toLabel": "?? ",
//                "customRangeLabel": "Custom",
//                "daysOfWeek": [
//                "??????????",
//                "??????",
//                "??????????",
//                "??????????",
//                "??????????",
//                "????????",
//                "??????"
//                ],
//                "monthNames": [
//                "??????",
//                "??????",
//                "??????",
//                "??????",
//                "??????",
//                "????????",
//        "????????",
//        "??????",
//        "??????",
//        "??????",
//        "??????",
//        "??????"
//        ],
//                "firstDay": 1
//            }
//      });
//
//      $('input[name="gur_period_date_range"]').on('apply.daterangepicker', function(ev, picker) {
//          $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
//
//          var startDate = picker.startDate.format('YYYY-MM-DD');
//          var endDate = picker.endDate.format('YYYY-MM-DD');
//          // alert(startDate); alert(endDate);
//
//          $('#cmpstartDate').val(startDate);
//          $('#cmpendDate').val(endDate);
//
//          if($("#company_name").val() != '' && $("#company_address").val() != '' && $("#gur_period_date_range").val() != '' && $("#company_telephone").val() != ''  && $("#company_email").val() != '' && $("#file-2").val() != '' ){
//
//              $("#businessThird_5_form").css("opacity","1"); 
//              $("#businessThird_5_form").css("cursor","pointer");
//              $('#businessThird_5_form').prop('disabled', false);
//              
//          }
//          else{
//              $("#businessThird_5_form").css("opacity","0.5"); 
//              $("#businessThird_5_form").css("cursor","auto");
//              $('#businessThird_5_form').prop('disabled', true);
//          }
//      });
//
//      $('input[name="gur_period_date_range"]').on('cancel.daterangepicker', function(ev, picker) {
//          $(this).val('');
//      });
//
//    });
</script>

<script type="text/javascript">

        $(document).ready(function(){
//            alert("<?php echo $this->session->userdata('businesThird_payment_api_link'); ?>");

            $("#businessThird_5_form").css("opacity","0.5"); 
            $("#businessThird_5_form").css("cursor","auto");
            $('#businessThird_5_form').prop('disabled', true);
            // $('#business_3_form').prop('disabled', false);
             
            // phone number validation
            $("#company_telephone").inputmask('9999-999-999');
            $.validator.addMethod('customphone', function (value, element) {
                return this.optional(element) || /^\d{4}-\d{3}-\d{3}$/.test(value);
            }, "???????? ???????????? ?????????? ?????????? 10 ??????????");
            // end
            
            // Property phone number validation
            $("#property_owner_phone").inputmask('9999-999-999');
            $.validator.addMethod('customPropertyphone', function (value, element) {
                return this.optional(element) || /^\d{4}-\d{3}-\d{3}$/.test(value);
            }, "???????? ???????????? ?????????? ?????????? 10 ??????????");
            // end
            
            // email validate
            $.validator.addMethod('customemail', function (value, element) {
                return this.optional(element) || /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(value);
            }, '?????? ?????? ?????????? ??????"?? ??????????');
            // end
            
//            alert($(this).val());
//            localStorage.removeItem("cmpType");
           $('#company_name').change(function(){
        //        alert($(this).val());

                var str = $(this).val(); 
                var items = str.split('_'); 
//                alert(items[1]);

                // get cmp id
                if(items[2]){
                    $("#main_company_contact_id").val('');
                    $("#main_company_contact_id").val(items[2]);
                }
                else{
                    $("#main_company_contact_id").val('');
                }
                // end

                localStorage.removeItem("cmpType");
                localStorage.setItem("cmpType", items[1]);
                var cmpType =  localStorage.getItem("cmpType");
//                alert(cmpType);
                    
                if(items[1] == 1){
                    $('.company_hide').hide();
                    $('#' + '??????????').show();
//                    alert(cmpType);
                    
                    // clear values fields
                    $("#company_telephone").val("");
                    $("#company_id").val("");
                    $("#company_email").val("");
                    $("#company_address").val("");
                    $("#other_company_name").val("");
                    
                    if($("#company_name").val() != '' && $("#agent_id").val() != '' && $("#file-2").val() != '' && $("#property_address").val() != '' && $("#property_owner_name").val() != '' && $("#owner_of_property").val() != '' && $("#property_owner_phone").val() != '' && $("#property_owner_of_email").val() != '' ){
                        $("#businessThird_5_form").css("opacity","1");
                        $("#businessThird_5_form").css("cursor","pointer");
                        $('#businessThird_5_form').prop('disabled', false);

                    }
                    else{
                        $("#businessThird_5_form").css("opacity","0.5"); 
                        $("#businessThird_5_form").css("cursor","auto");
                        $('#businessThird_5_form').prop('disabled', true);
                    }
                }
                else if(items[1] == 2){
                    $('.company_hide').hide();
//                    alert(cmpType);
                    
                    if($("#company_name").val() != '' && $("#file-2").val() != '' && $("#property_address").val() != '' && $("#property_owner_name").val() != '' && $("#owner_of_property").val() != '' && $("#property_owner_phone").val() != '' && $("#property_owner_of_email").val() != '' ){
//                        alert(1);
                        $("#businessThird_5_form").css("opacity","1");
                        $("#businessThird_5_form").css("cursor","pointer");
                        $('#businessThird_5_form').prop('disabled', false);

                    }
                    else{
//                        alert(2);
                        $("#businessThird_5_form").css("opacity","0.5"); 
                        $("#businessThird_5_form").css("cursor","auto");
                        $('#businessThird_5_form').prop('disabled', true);
                    }
                    
                    // clear values fields
                    $("#company_telephone").val("");
                    $("#company_id").val("");
                    $("#company_email").val("");
                    $("#company_address").val("");
                    $("#other_company_name").val("");
                    $("#agent_id").val("");
                }
                else{
                    $('.company_hide').hide();
                    $('#' + '??????').show();
//                    alert(cmpType);
                    
                    // clear values fields
                    $("#agent_id").val("");
                    
                    if($("#company_name").val() != '' && $("#company_id").val() != '' && $("#file-2").val() != '' && $("#company_address").val() != '' && $("#other_company_name").val() != '' && $("#company_telephone").val() != '' && $("#company_email").val() != '' && $("#property_address").val() != '' && $("#property_owner_name").val() != '' && $("#owner_of_property").val() != '' && $("#property_owner_phone").val() != '' && $("#property_owner_of_email").val() != '' ){

                        $("#businessThird_5_form").css("opacity","1");
                        $("#businessThird_5_form").css("cursor","pointer");
                        $('#businessThird_5_form').prop('disabled', false);

                    }
                    else{
                        $("#businessThird_5_form").css("opacity","0.5"); 
                        $("#businessThird_5_form").css("cursor","auto");
                        $('#businessThird_5_form').prop('disabled', true);
                    }
                }

        //        console.log(items[1]);


        //      $('#' + $(this).val()).show();
            });

            $('#company_address,#other_company_name,#company_telephone,#company_email,#agent_id,#company_id,#property_address,#property_owner_name,#owner_of_property,#property_owner_phone,#property_owner_of_email').on('keyup', function(){
//                alert($("#company_name").val());
//                alert($("#agent_id").val());
//
//                    alert(localStorage.getItem("cmpType"));
                    
                    if(localStorage.getItem("cmpType") == 1){
                        
                        if($("#company_name").val() != '' && $("#agent_id").val() != '' && $("#file-2").val() != '' && $("#property_address").val() != '' && $("#property_owner_name").val() != '' && $("#owner_of_property").val() != '' && $("#property_owner_phone").val() != '' && $("#property_owner_of_email").val() != '' ){ 
//                            alert(1);

                            $("#businessThird_5_form").css("opacity","1");
                            $("#businessThird_5_form").css("cursor","pointer");
                            $('#businessThird_5_form').prop('disabled', false);

                        }
                        else{
//                            alert(2);
                            $("#businessThird_5_form").css("opacity","0.5"); 
                            $("#businessThird_5_form").css("cursor","auto");
                            $('#businessThird_5_form').prop('disabled', true);
                        }

                    }
                    else if(localStorage.getItem("cmpType") == 2){
//                        alert(123);
                        if($("#company_name").val() != '' && $("#file-2").val() != '' && $("#property_address").val() != '' && $("#property_owner_name").val() != '' && $("#owner_of_property").val() != '' && $("#property_owner_phone").val() != '' && $("#property_owner_of_email").val() != '' ){

                            $("#businessThird_5_form").css("opacity","1");
                            $("#businessThird_5_form").css("cursor","pointer");
                            $('#businessThird_5_form').prop('disabled', false);

                        }
                        else{
                            $("#businessThird_5_form").css("opacity","0.5"); 
                            $("#businessThird_5_form").css("cursor","auto");
                            $('#businessThird_5_form').prop('disabled', true);
                        }
                    }
                    else{
                           
                        if($("#company_name").val() != '' && $("#company_id").val() != '' && $("#file-2").val() != '' && $("#company_address").val() != '' && $("#other_company_name").val() != '' && $("#company_telephone").val() != '' && $("#company_email").val() != '' && $("#property_address").val() != '' && $("#property_owner_name").val() != '' && $("#owner_of_property").val() != '' && $("#property_owner_phone").val() != '' && $("#property_owner_of_email").val() != '' ){

                            $("#businessThird_5_form").css("opacity","1");
                            $("#businessThird_5_form").css("cursor","pointer");
                            $('#businessThird_5_form').prop('disabled', false);

                        }
                        else{
                            $("#businessThird_5_form").css("opacity","0.5"); 
                            $("#businessThird_5_form").css("cursor","auto");
                            $('#businessThird_5_form').prop('disabled', true);
                        }

                    }
                        
                
//                if($("#company_name").val() != '' && $("#company_address").val() != '' && $("#gur_period_date_range").val() != '' && $("#company_telephone").val() != ''  && $("#company_email").val() != '' && $("#file-2").val() != '' ){
//
//                    $("#businessThird_5_form").css("opacity","1"); // button opacity change
//                    $("#businessThird_5_form").css("cursor","pointer");
//                    $('#businessThird_5_form').prop('disabled', false);
//
//                }
//                else{
//                    $("#businessThird_5_form").css("opacity","0.5"); 
//                    $("#businessThird_5_form").css("cursor","auto");
//                    $('#businessThird_5_form').prop('disabled', true);
//                }
              
            });

            $('#file-2').on('change', function() {
//                alert($("#company_name").val());
//                alert($("#agent_id").val());

//                    alert(localStorage.getItem("cmpType"));
                    if(localStorage.getItem("cmpType") == 1){
                        
                        if($("#company_name").val() != '' && $("#agent_id").val() != '' && $("#file-2").val() != '' && $("#property_address").val() != '' && $("#property_owner_name").val() != '' && $("#owner_of_property").val() != '' && $("#property_owner_phone").val() != '' && $("#property_owner_of_email").val() != '' ){
//                            alert(111);

                            $("#businessThird_5_form").css("opacity","1");
                            $("#businessThird_5_form").css("cursor","pointer");
                            $('#businessThird_5_form').prop('disabled', false);

                        }
                        else{
                            $("#businessThird_5_form").css("opacity","0.5"); 
                            $("#businessThird_5_form").css("cursor","auto");
                            $('#businessThird_5_form').prop('disabled', true);
                        }

                    }
                    else if(localStorage.getItem("cmpType") == 2){
//                        alert(112);
                        if($("#company_name").val() != '' && $("#file-2").val() != '' && $("#property_address").val() != '' && $("#property_owner_name").val() != '' && $("#owner_of_property").val() != '' && $("#property_owner_phone").val() != '' && $("#property_owner_of_email").val() != '' ){
//                            alert(1);
                            $("#businessThird_5_form").css("opacity","1");
                            $("#businessThird_5_form").css("cursor","pointer");
                            $('#businessThird_5_form').prop('disabled', false);

                        }
                        else{
//                            alert(2);
                            $("#businessThird_5_form").css("opacity","0.5"); 
                            $("#businessThird_5_form").css("cursor","auto");
                            $('#businessThird_5_form').prop('disabled', true);
                        }
                    }
                    else{
//                        alert(113);
                        
                        if($("#company_name").val() != '' && $("#company_id").val() != '' && $("#file-2").val() != '' && $("#company_address").val() != '' && $("#other_company_name").val() != '' && $("#company_telephone").val() != '' && $("#company_email").val() != '' && $("#property_address").val() != '' && $("#property_owner_name").val() != '' && $("#owner_of_property").val() != '' && $("#property_owner_phone").val() != '' && $("#property_owner_of_email").val() != '' ){

                            $("#businessThird_5_form").css("opacity","1");
                            $("#businessThird_5_form").css("cursor","pointer");
                            $('#businessThird_5_form').prop('disabled', false);

                        }
                        else{
                            $("#businessThird_5_form").css("opacity","0.5"); 
                            $("#businessThird_5_form").css("cursor","auto");
                            $('#businessThird_5_form').prop('disabled', true);
                        }

                    }
              
            });

//            $('#company_name').on('click', function() {

//                if($("#company_name").val() != '' && $("#company_address").val() != '' && $("#gur_period_date_range").val() != '' && $("#company_telephone").val() != ''  && $("#company_email").val() != '' && $("#file-2").val() != '' ){
//
//                        $("#businessThird_5_form").css("opacity","1");
//                        $("#businessThird_5_form").css("cursor","pointer");
//                        $('#businessThird_5_form').prop('disabled', false);
//                    
//                }else{
//                    $("#businessThird_5_form").css("opacity","0.5"); 
//                    $("#businessThird_5_form").css("cursor","auto");
//                    $('#businessThird_5_form').prop('disabled', true);
//                }

              
//            });


            $("#businessThird_5_form").click(function(){

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
                            property_address: {
                                required: true,
                                minlength: 3,
                            },
                            property_owner_name: {
                                required: true,
                            },
                            owner_of_property: {
                                required: true,
                            },
                            property_owner_phone: {
                                customPropertyphone: true,
                            },
                            company_name: {
                                required: true,
                            },
                            company_address: {
                                required: true,
                                minlength: 3,
                            },
                            company_telephone: {
                                customphone: true,
                            },
                            property_owner_of_email: {
                                required: true,
                                customemail: true
                            },
                            company_email: {
                                required: true,
                                customemail: true
                            },
                            company_id: {
                                required: true,
                                number: true
                            },
                            agent_id: {
                                required: true,
                                number: true
                            },
                            other_company_name: {
                                required: true,
                            }

                        },
                        messages: {
                            property_address: {
                                required: "?????? ????????",
                            },
                            property_owner_name: {
                                required: "?????? ????????",
                            },
                            owner_of_property: {
                                required: "?????? ????????",
                            },
                            property_owner_phone: {
                                required: "?????? ????????"
                            },
                            company_name: {
                                required: "?????? ????????",
                            },
                            company_address: {
                                required: "?????? ????????",
                            },
                            company_telephone: {
                                required: "?????? ????????"
                            },
                            property_owner_of_email: {
                                required: "?????? ????????",
                                customemail: '?????? ?????? ?????????? ??????"?? ??????????.'
                            },
                            company_email: {
                                required: "?????? ????????",
                                customemail: '?????? ?????? ?????????? ??????"?? ??????????.'
                            },
                            company_id: {
                                required: "?????? ????????",
                                number: "?????? ?????? ???? ??????????"
                            },
                            agent_id: {
                                required: "?????? ????????",
                                number: "?????? ?????? ???? ??????????"
                            },
                            other_company_name: {
                                required: "?????? ????????"
                            }
                        }
                        
                    });

                    if (form.valid() === true){

                        $("#businessThird_5_form").css("opacity","1"); 
                        $("#businessThird_5_form").css("cursor","pointer");
                        $('#businessThird_5_form').prop('disabled', false);
                    }
                    else{
                        $("#businessThird_5_form").css("opacity","0.5"); 
                        $("#businessThird_5_form").css("cursor","auto");
                        $('#businessThird_5_form').prop('disabled', true);
                    }

//                if($("#company_name").val() != '' && $("#company_address").val() != '' && $("#gur_period_date_range").val() != '' && $("#company_telephone").val() != ''  && $("#company_email").val() != '' && $("#file-2").val() != '' ){
//
//                    $("#businessThird_5_form").css("opacity","1"); 
//                    $("#businessThird_5_form").css("cursor","pointer");
//                    $('#businessThird_5_form').prop('disabled', false);
//                    
//                }
//                else{
//                    $("#businessThird_5_form").css("opacity","0.5"); 
//                    $("#businessThird_5_form").css("cursor","auto");
//                    $('#businessThird_5_form').prop('disabled', true);
//                }
            });
            


});

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

function removeFile(){
 
    document.getElementById('file-2').value = '';
    document.getElementById('label-for-file2').style.display = "block";
    document.getElementById('selected-file').style.display = "none";
    document.getElementById('for_file_label').style.display = "none";

    if(localStorage.getItem("cmpType") == 1){
                        
        if($("#company_name").val() != '' && $("#agent_id").val() != '' && $("#file-2").val() != '' && $("#property_address").val() != '' && $("#property_owner_name").val() != '' && $("#owner_of_property").val() != '' && $("#property_owner_phone").val() != '' && $("#property_owner_of_email").val() != '' ){ 
//                            alert(1);

            $("#businessThird_5_form").css("opacity","1");
            $("#businessThird_5_form").css("cursor","pointer");
            $('#businessThird_5_form').prop('disabled', false);

        }
        else{
//                            alert(2);
            $("#businessThird_5_form").css("opacity","0.5"); 
            $("#businessThird_5_form").css("cursor","auto");
            $('#businessThird_5_form').prop('disabled', true);
        }

    }
    else if(localStorage.getItem("cmpType") == 2){
//                        alert(123);
        if($("#company_name").val() != '' && $("#file-2").val() != '' && $("#property_address").val() != '' && $("#property_owner_name").val() != '' && $("#owner_of_property").val() != '' && $("#property_owner_phone").val() != '' && $("#property_owner_of_email").val() != '' ){

            $("#businessThird_5_form").css("opacity","1");
            $("#businessThird_5_form").css("cursor","pointer");
            $('#businessThird_5_form').prop('disabled', false);

        }
        else{
            $("#businessThird_5_form").css("opacity","0.5"); 
            $("#businessThird_5_form").css("cursor","auto");
            $('#businessThird_5_form').prop('disabled', true);
        }
    }
    else{

        if($("#company_name").val() != '' && $("#company_id").val() != '' && $("#file-2").val() != '' && $("#company_address").val() != '' && $("#other_company_name").val() != '' && $("#company_telephone").val() != '' && $("#company_email").val() != '' && $("#property_address").val() != '' && $("#property_owner_name").val() != '' && $("#owner_of_property").val() != '' && $("#property_owner_phone").val() != '' && $("#property_owner_of_email").val() != '' ){

            $("#businessThird_5_form").css("opacity","1");
            $("#businessThird_5_form").css("cursor","pointer");
            $('#businessThird_5_form').prop('disabled', false);

        }
        else{
            $("#businessThird_5_form").css("opacity","0.5"); 
            $("#businessThird_5_form").css("cursor","auto");
            $('#businessThird_5_form').prop('disabled', true);
        }

    }
}

// end

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
                <div class="alert alert-danger" style="margin-bottom: 60px;">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true"  style="font-size:30px; margin-left: 30px;">&times;</span>
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
                        <span aria-hidden="true"  style="font-size:30px; margin-left: 30px;">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong><?php echo $this->session->flashdata('success'); ?></strong>
                </div>
            </div>
        </div>
        <?php } ?>
            
         <div class="gf_browser_chrome gform_wrapper gform_wrapper_application" id="gform_wrapper_5" >
            <?php // echo $this->session->userdata('businesThird_payment_api_link'); ?>

            <form method="post" enctype="multipart/form-data" id="myform" name="validate_form" action="<?php echo site_url('businessThird5'); ?>" novalidate >
            <!-- screen 4/5 -->
            <div id="business_6_scr" class="gform_body form_height" style="margin-top: 30px;">
                    

                        <div class="" style="float: right; margin-left:15px; margin-top:-25px;">
                            <img src="<?php echo base_url() ?>website_assets/img/progress04.png" class="img-responsive">
                           
                        </div>
                    <!-- <p class="rtl" style="text-align:right;font-weight: bold;font-size: 22px;">?????????? ???? ??????????  </p>???????? ???????? -->
                    <div class="main_text">
                    <p class="rtl main_text_heading" style="text-align:right;font-weight: bold;">???????? ???????? </p>

                    <p class="rtl" style="text-align:right; margin-top: -8px;">???????? ??????: ???????? ??????????  </p>
                    </div>
                    
                    <br>

                    <ul class="gform_fields top_label ">

                        <li class="gfield gfield_html gfield_no_follows_desc "> 
                                
                            <p class="contact-text_application rtl">?????? ??????, ?????? ??????  ?????????? ????????????????, ?????????????? ?????????? ???????? ???? ???????? ?????? ???????? </p>
                        </li>
                        <!-- screen business_ third_6/1 start-->

                        <li class="gfield gf_left_third text-field1_application form-group">
                           <div class="styled-input wide">
                               <textarea class="textarea large form-control company_address_left" name="property_address" rows="5" cols="50" id="property_address" required="" style="max-height: 56px;" ><?php if(!empty($bus7_param['property_address'])){ echo $bus7_param['property_address']; } ?></textarea>
                                <label class="gfield_label control-label gform_wrapper gfield_label" for="property_address">?????????? ????????
                            </label>
                            </div>
                        </li>

                        <li class="gf_left_third gfield text-field2_application form-group">
                           <div class="styled-input wide">
                               <input type="text" name="property_owner_name" id="property_owner_name" value="<?php if(!empty($bus7_param['property_owner_name'])){ echo $bus7_param['property_owner_name']; } ?>" class="form-control left_lbl1" required="">
                                <label class="gfield_label control-label gform_wrapper gfield_label " for="property_owner_name"> ???? ?????? ????????
                            </label>
                            </div>
                        </li>
                        
                        <li class="gfield gf_left_third text-field1_application form-group">
                             <div class="styled-input wide">
                               <input type="text" name="owner_of_property" id="owner_of_property" value="<?php if(!empty($bus7_param['owner_of_property'])){ echo $bus7_param['owner_of_property']; } ?>" class="form-control" required="">
                                <label class="gfield_label control-label gform_wrapper gfield_label third_text" for="owner_of_property">??.?? ?????? ????????
                            </label>
                            </div> 
                        </li>

                        <li class="gfield gf_left_third text-field2_application form-group">
                            <div class="styled-input wide">
                               <input type="text" name="property_owner_phone" id="property_owner_phone" value="<?php if(!empty($bus7_param['property_owner_phone'])){ echo $bus7_param['property_owner_phone']; } ?>" class="form-control client_phone_text" required="">
                                <label class="gfield_label control-label gform_wrapper gfield_label" for="property_owner_phone">?????????? ?????? ????????
                            
                            </label>
                            </div>
                        </li>
                        
                        <li class="gf_left_third gfield text-field1_application form-group">
                            <div class="styled-input wide">
                              <input type="text" name="property_owner_of_email" id="property_owner_of_email" value="<?php if(!empty($bus7_param['property_owner_of_email'])){ echo $bus7_param['property_owner_of_email']; } ?>" class="form-control No_Home_text_4" required="">
                                <label class="gfield_label control-label gform_wrapper gfield_label" for="property_owner_of_email">???????? ?????? ????????
                            </label>
                            </div> 
                        </li>
                        
                        <li class="gf_left_third gfield text-field2_application form-group" style="margin-top: 5px;">
                            
                          
                            <label class="for_file_label" id="for_file_label" for="client_add">?????????? ???????? ???????????? </label>
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
                            <label for="file-2" id="label-for-file2" style="margin-top: 17px; padding: 13.5px;">

                               <i style="font-size:22px; margin-left: 40px;" class="fa">&#xf030;</i>
                                <span style="font-weight: 200; font-size: 22px; margin-left:20px; padding-top: 6px;" >?????????? ???????? ????????????  </span>
                            </label>
 
                            
                        </li>

                         <li class="gfield gf_left_third text-field1_application form-group">
                         

                            <div class="styled-input wide">
                               <!-- <input type="text" name="first_name" id="first_name" value="" class="form-control left_lbl1_4" required=""> -->
                                <!-- <div class="selectdiv"> -->
                                    <div class="">
                               <select name="company_name" id="company_name" value="" class="form-control left_lbl1_4 selector_obli" required="">
                                    <option value="" id="selectHide" selected="" disabled="" hidden="">???? ?????????? </option>
                                        
                            <?php $company_data = get_active_company(); if(!empty($company_data)){ foreach ($company_data as $cmp){ ?>
                                        
                                    <option value="<?php echo $cmp->name.'_'.$cmp->type.'_'.$cmp->id; ?>" <?php if(isset($_POST['company_name'])){ if($cmp->name.'_'.$cmp->type.'_'.$cmp->id == $_POST['company_name']){ echo "selected='selected'";  } } ?> ><?php echo $cmp->name; ?></option>
                                        
                            <?php } } ?>
                                        <!--<option value="??????????">??????????</option>-->
                                        <option value="??????">??????</option>
                                        
                                </select>
                                        
                            <!--contact id for company--> 
                            <input type="hidden" name="main_company_contact_id" value="<?php if(!empty($bus7_param['main_company_contact_id'])){ echo $bus7_param['main_company_contact_id']; } ?>" id="main_company_contact_id" >
                            <!--end-->
                                        
                                <label class="gfield_label control-label gform_wrapper gfield_label" for="company_name">
                                    <img src="<?php //echo base_url() ?>website_assets/img/dropdown_icon.png" class="img-responsive cal_reponsive1 dropdown1" style="position: relative; left: -255px; top: 6px;">

                                </label>
                               

                                     </div>
                            </div> 
                        </li>


                        
                        <!-- screen business_5 start-->
                        <div class="company_hide ??????" id="??????" style="display:none;">

                            <li class="gfield gf_left_third text-field2_application form-group">
                              <div class="styled-input wide">
                               <input type="text" name="other_company_name" id="other_company_name" value="" class="form-control hp_left" required="">
                                <label class="gfield_label control-label gform_wrapper gfield_label" for="other_company_name">???? ??????????
                            </label>
                            </div>

                            
                        </li>
                            
                        <li class="gfield gf_left_third text-field1_application form-group">
                              <div class="styled-input wide">
                               <input type="text" name="company_id" id="company_id" value="" class="form-control hp_left" required="">
                                <label class="gfield_label control-label gform_wrapper gfield_label" for="landlord">??.??
                            </label>
                            </div>

                        </li>
                        
                        <li class="gfield gf_left_third text-field2_application form-group" style="margin-top: 33px;">
                             <div class="styled-input wide">
                             
                               <textarea class="textarea large form-control company_address_left" name="company_address" rows="5" cols="50" id="company_address" required="" style="max-height: 56px;" ></textarea>
                                <label class="gfield_label control-label gform_wrapper gfield_label" for="company_address">?????????? ??????????
                            </label>
                            </div>
                           
                        </li>
                        
                        <li class="gf_middle_third gfield text-field1_application form-group" >
                          

                            <div class="styled-input wide">
                              <input type="text" name="company_email" id="company_email" value="" class="form-control No_Home_text_4" required="">
                                <label class="gfield_label control-label gform_wrapper gfield_label" for="company_email">???????? ??????????
                            </label>
                            </div> 
                        </li>


                        <li class="gf_left_third gfield text-field2_application form-group">
                          

                            <div class="styled-input wide">
                               <input type="text" name="company_telephone" id="company_telephone" value="" class="form-control street_text_4" required="">
                                <label class="gfield_label control-label gform_wrapper gfield_label" for="company_telephone"> ?????????? ??????????
                            </label>
                            </div> 
                        </li>

                        

                        </div>

                         <!-- screen business_5 end-->

                         <!-- screen business_6 start-->

                        <div class="company_hide ??????????" id="??????????" <?php if(isset($_POST['company_name'])){  echo 'style="display:block"';  }else{ echo 'style="display:none"'; } ?>>

                        <li class="gfield gf_left_third text-field1_application form-group" style="margin-top: 4px;">

                            <div class="styled-input wide">
                                <input type="text" name="agent_id" id="agent_id" class="form-control third_text" required="" value="<?php if(!empty($bus7_param['agent_id'])){ echo $bus7_param['agent_id']; } ?>">
                                <label class="gfield_label control-label gform_wrapper gfield_label" for="agent_id">??.?? ??????????
                            </label>
                            </div> 
                            
                        </li>

                        </div>

                         <!-- screen business_6 end-->

                      
                    </ul>

                

                </div>

                    

                  <div class="gform_footer top_label"> 
                        <button type="submit" class="first_next_button screen-button-obli screen-button2-obli screen-button3-obli screen_2_buttons padding_screen02 text_size" id="businessThird_5_form" style="margin: 35.5px 180px;">????????</button>

                    </div>

            
              </div>

            </div>
    
    </form>

    </div>
                      
         
        </div>
    </div>
</div>

<!-- only for date renge picker -->
<link rel="stylesheet" href="<?php echo base_url() ?>website_assets/date/daterangepicker-bs3.css">
<script src="<?php echo base_url() ?>website_assets/date/moment.min.js"></script>
<script src="<?php echo base_url() ?>website_assets/date/daterangepicker.js"></script>
<!-- // end -->

<script type="text/javascript">


</script>