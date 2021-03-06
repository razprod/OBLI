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
<!-- <link rel="stylesheet" href="http://localhost/obli_admin/website_assets/css/business_style.css" type="text/css" media="all"> -->

 <style type="text/css">
/*** responsive_doc start ***/

@media only screen and (max-width:3000px) and (min-width: 1200px){
.screen02_box-res1{
    width: 240px !important;
    margin-left: 105px !important;
}
.screen02_box-res2{
    width: 240px !important;
    margin-right: 105px !important;
}
}

@media only screen and (max-width:1199px) and (min-width: 768px){
.screen02_box-res1{
    width: 220px !important;
    margin-left: 105px !important;
}
.screen02_box-res2{
    width: 220px !important;
    margin-right: 105px !important;
}

}
@media only screen and (max-width:3000px) and (min-width: 768px){
.form_height{
    margin-top: 0px !important;
}
}

/*** responsive_doc end ***/

/*** responsive_doc start =header ***/
.header_hr-line{
    width: 100%;
    background: linear-gradient(to right,#2ab2f4,#7b6be7);
    height: 1.03px;
}
@media only screen and (max-width:3000px) and (min-width: 1311px){
.navbar-brand {
    padding: 20px 175px;
}
.logo img {
    width: 63px;
    height: 35px;
}
.navbar-default .navbar-nav>li>a{
    color: #3A3078 !important;
    font-weight: normal;
    font-size: 20.6154px;
    padding: 20px;
    margin-top: -15px;
    padding-left: 40px;
}

.navbar-header{
    min-height: 90px !important;
    box-shadow: 0px 5.15385px 4.12308px rgba(55, 68, 255, 0.05);
}
}
@media only screen and (max-width:1310px) and (min-width: 992px){
.navbar-brand {
    padding: 17px 150px;
}
.logo img {
    width: 63px;
    height: 35px;
}
.navbar-default .navbar-nav>li>a{
    color: #3A3078 !important;
    font-weight: normal;
    font-size: 20.6154px;
    padding: 14px;
    margin-top: -15px;
}
.navbar-header{
    min-height: 75px !important;
    box-shadow: 0px 5.15385px 4.12308px rgba(55, 68, 255, 0.05);
}
}
@media only screen and (max-width:991px) and (min-width: 769px){
.navbar-brand {
    padding: 15px 0px;
}
.logo img {
    width: 63px;
    height: 35px;
}
.navbar-default .navbar-nav>li>a{
    color: #3A3078 !important;
    font-weight: normal;
    font-size: 20.6154px;
    padding: 14px;
    margin-top: -15px;
}
.navbar-center{
    width: 65%;
    left: 46%;
}
.navbar-header{
    min-height: 75px !important;
    box-shadow: 0px 5.15385px 4.12308px rgba(55, 68, 255, 0.05);
}
}
@media only screen and (width:768px) {
.navbar-brand {
    padding: 10px 25px;
}
.logo img {
    width: 63px;
    height: 35px;
}
.navbar-default .navbar-nav>li>a{
    color: #3A3078 !important;
    font-weight: normal;
    font-size: 20.6154px;
    padding: 14px;
    margin-top: 10px;
}
.navbar-center{
    width: 65%;
    left: 46%;
}
.navbar-header{
    min-height: 75px !important;
    box-shadow: 0px 5.15385px 4.12308px rgba(55, 68, 255, 0.05);
}
.header_hr-line{
    margin-top: -250px;
}
}
@media only screen and (max-width:767px) and (min-width: 320px){
.navbar-default .navbar-nav>li>a{
    color: #3A3078 !important;
    font-weight: normal;
    font-size: 20.6154px;
}
}

.spantext{ 
  font-size: 38px;
 }
/*** responsive_doc end =header ***/

</style>


        
</style> 

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
            

            <form method="post" enctype="multipart/form-data" id="myform" name="validate_form" action="<?php echo site_url('businessSec8'); ?>" >
            <!-- screen 10 -->
            <div id="business_10_scr" class="gform_body form_height" style="margin-top: 30px;">
                    
                   <div class="" style="float: right; margin-left:15px; margin-top:-25px;">
                            <img src="<?php echo base_url() ?>website_assets/img/progress08.png" class="img-responsive">
                           
                           </div>
                    
                    <p class="rtl" style="text-align:right;font-weight: bold;font-size: 38px;">?????? ?????? <span id="spantext" class="spantext"> </span>, ?????????? ??????????!</p>
                  
                    <div class="row">
                     <!--   <div class="col-md-3 col-sm-3"></div> -->
                       <div class="col-md-12 col-sm-12">
                        <ul class="gform_fields top_label ">

                        <li class="gfield gfield_html gfield_no_follows_desc " style="margin-top: 30px;">
                           
                            <p class="contact-text_application rtl" style="text-align:center;">???????????? ????????????, ?????? ???????? ???????????? ?????????? ???????????? ?????????? ?????????? ????????????</p>

                            <p class="contact-text_application rtl" style="text-align:center; font-weight: 600;">??????????: <span style="color: #4eb5d7; font-size: 22px;">072-2214966</span></p>
                            <p class="contact-text_application rtl" style="text-align:center; font-weight: 600; margin-top:-20px;">??????????  2</p>

                         </li>

                       </ul>

                            <div style="padding: 40px 70px 0; height: 220px;">
                              <img src="<?php echo base_url() ?>website_assets/img/phone 1.svg" class="img-responsive" style="margin: 0 auto;">
                           
                           </div> 

                            <p class="contact-text_application rtl" style="text-align:center; font-weight: 600;">?????? ????????????, ???? ???????? ???????????? ?????????? ???????? ???????????? ?????????? ?????????????????? ??????.
                            </p>
                            <p class="contact-text_application rtl" style="text-align:center; font-weight: 600; margin-top:-20px;">
                            ?????????? ?????????? ??????!</p>

                             <p class="contact-text_application rtl" style="text-align:center; ">????????????, ?????????? ???? ??????????????, ???????? ?????????? ??????.</p>
                         
                       </div>
                       <!-- <div class="col-md-3 col-sm-3"></div> -->
                   </div>
                        
                   
                   <div class="row" style="margin-top:30px;">
                        <div class="col-md-3 col-sm-3"></div>
                        <div class="col-md-6 col-sm-6">
                          
                            <!--<a class="button gform_button"> <p class="first_main_button">???????? ?????? ????????  </p></a>-->
                            <input type="hidden" name="business_third8" value="1"/>
                            <!-- <button type="submit" class="button gform_button first_main_button" id="businessSec_8_form" style="height: 60px; width: 328px;">???????? ?????? ????????  </button> -->
                             <button type="submit" class="button gform_button first_main_button" id="businessSec_8_form" style="height: 60px; width: 328px;"> ???????? </button>
                        </div>
                        <div class="col-md-3 col-sm-3"></div>
                    </div>

                </div>

                  
              </div>

            </div>
    
    </form>

    </div>
                      
         
        </div>
    </div>
</div>


<script>

$( document ).ready(function() {

    <?php if(!empty($this->session->userdata['business3'])){ 


      $clientdetails = $this->session->userdata['business3'];

  ?>

        var client_first_name = '<?php echo $clientdetails["first_name"];?>';

        $("#spantext").html(client_first_name);

    <?php } ?>

});

</script>