<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0052)https://direct.tranzila.com/obli1/iframe.php?lang=il -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="pragma" content="no-cache"><title>Tranzila Direct iFrame</title><meta name="description" content="Tranzila Direct iframe payment form"><style type="text/css">
 body {padding: 0px; margin: 0px; font-family: Arial; direction: rtl; background-color: #fff}
.rounded_corners { -moz-border-radius:6px 6px 6px 6px; -webkit-border-radius:6px 6px 6px 6px; border-radius: 6px 6px 6px 6px; }
#wrapper { width: 370px; margin: 0px auto;  height:455px;}
#header { width: 370px; margin: 0 auto;}
#footer { width: 370px; margin: 0 auto;}
img {border: 0;}
#headimages { width: 328px; list-style-type: none; clear: both; direction:rtl;}
#headimages li { display: block; float: right; padding:0; margin: 0;}
#content {width: 370px; text-align:right; float:right; margin: 5px 0 10px 0; padding: 0;}
#content ul{list-style-type: none; width: 100%;  padding: 0; margin: 0; }
#content li{float: right; display: block;  padding: 3px; margin: 0;}
#footergreenstripe {width: 370px; height:27px; background-color:#9ccf01;  margin: 25px 0 10px 0; }
#geo{float:right; padding:10px 13px 0 0 } 
#bluestripe {width: 350px; height:7px; background-color:#33a1fe; margin: 0 8px 20px 10px;}
#sumval{color:#fff; font-weight:bold; font-size:14px; line-height: 31px; }
#currchar{color:#fff; font-weight:bold; font-size:14px; line-height: 31px; }
#labelprice{color:#fff; font-weight:bold; font-size:14px;}
#sumli{display:none !important;}
.underlogo{font-weight:bold; color:#fff;text-align: center;}
.footertext{font-family: Arial; color:#fff; font-weight: bold; font-size:12px; padding-top:4px; text-align: center;}
.footertext a:link {font-size: 12px; font-weight: bold; text-decoration: underline; color: #fdf402; }
.footertext a:visited {font-size: 12px; font-weight: bold; text-decoration: none; color:#fdf402; }
.footertext a:active {font-size: 12px; font-weight: bold; text-decoration: none; color:#fdf402; }
.footertext a:hover {font-size: 12px; font-weight: bold; text-decoration: none; color:#649c0a;}
#returnMessage1 {background-color: #c60000; color: #ffffff; font-size: 18px; font-weight: bold; height: 30px; border: 1px solid black; width: 360px; margin: 5px; display: block; float: right; text-align: center; padding-top:14px; }
form {font:14px Arial; margin:0px auto; width:370px;}
form ul {list-style:none; margin:0; padding:0;  }
form li { padding:56px; margin-bottom:1px; width: 100%;}
form label { float:right; width:120px; text-align:right; margin-right:7px; color:#fff; line-height:23px; padding:5px;}
form input, form textarea { padding:4px; font:13px Arial;background-color: #3a549100;border-bottom: 1px solid #fff !important;border: none; width:198px; vertical-align: text-top;color: #fff;}
form select { vertical-align: text-top;margin-top: 5px;background-color: #3a549100;color: #fff;}
form input:focus, form textarea:focus {  background:#3a549100;color: #fff; border-bottom: 1px solid #fff !important;border: none;outline: none !important;}
form li#send {  background:none; margin-top:6px;  text-align: center; color:#0066cc; font-size: 14px; width: 100%; direction: rtl;}
form li#send button {background-image: linear-gradient(to right top, #54b8d8, #4ca9cc, #459abf, #3f8bb2, #397ca4); border:none; margin: 8px 0px 0px 0px;  padding:6px 18px; text-align: center; border-radius:5%; -moz-border-radius:5%;-webkit-border-radius:5%;   color:#fff;  cursor:pointer; font-size: 14px;width: 144px;height: 37px;border-radius: 25px;}
form li#send button:hover { background-color:#035eab;}
 .ast { color: red; font-size: small;} 


		</style><!--[if lte IE 7]>
		<style type="text/css">
		    #itranpayform li {    width: 100%;  }
		    form li#send {	background:none; margin-top:6px; margin:0px; text-align: center; color:#0066cc; font-size: 14px;}
		    form li#send button {	background:#33a1fe; border:none; margin:8px 0 0 10px; padding:6px 18px; text-align: center; color:#fff;  cursor:pointer; }
		</style>
		<![endif]--><!--<script type="text/javascript">window.location.replace('#');</script>		--><script async="" src="./TranzilaDirectiFrame2_files/analytics.js"></script><script type="text/javascript" src="./TranzilaDirectiFrame2_files/pay.js"></script><script type="text/javascript" src="./TranzilaDirectiFrame2_files/jquery-1.12.1.min.js"></script><script type="text/javascript">
	window.onload = function(e) {
		var el = document.getElementById("ccno");
		if(el != null) {
            if ( $( "#ccno" ).length ) {
                $("#ccno").attr('maxlength','19');
            }
			el.onkeyup = function (evt) {
				var foo = el.value;
				foo = foo.split("-").join("");
				if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				}
				el.value = foo;
			};
		}
	};

	$(document).ready(function () {
       if ($('#opensum').length !== 0) {
           $('#sumval').hide();

           var sum = $('#sum');
           if ($('#hidesum').length !== 0) {
               sum.show();
               sum.css("width", "168px");
               sum.css("margin-left", "10px");
               sum.css("margin-bottom", "10px");
               sum.attr('readonly', false);
           } else {
               sum.css("width", "168px");
               sum.css("margin-left", "10px");
               sum.css("margin-bottom", "10px");
               sum.attr('readonly', false);
           }
           sum.on('keydown',function (e) {
               // Allow: backspace, delete, tab, escape, enter and .
               if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                   // Allow: Ctrl/cmd+A
                   (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                   // Allow: Ctrl/cmd+C
                   (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
                   // Allow: Ctrl/cmd+X
                   (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
                   // Allow: home, end, left, right
                   (e.keyCode >= 35 && e.keyCode <= 39)) {
                   // let it happen, don't do anything
                   return;
               }
               // Ensure that it is a number and stop the keypress
               if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                   e.preventDefault();
               }
           });
       }

    });
</script><script type="text/javascript">
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
                
                ga('create', 'UA-148730-18', 'auto');
                ga('send', 'pageview');
            </script></head>

<body cz-shortcut-listen="true"  style="background-image: url('./TranzilaDirectiFrame2_files/background.png');background-repeat: no-repeat;background-size: cover; "><br><span class="underlogo">


  <div id="wrapper">

  			<div id="header">

				<ul id="headimages"><li>
					<img src="./TranzilaDirectiFrame2_files/right_header.png" style="display: block;margin-left: auto;margin-right: auto;width: 70%;height: inherit;" width="150" height="40" alt="???????? ??????????????"><br></li>

					<li style="float:left; padding:3px 5px 0 20px;">
					<!-- <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=direct.tranzila.com" rel="nofollow">
					<img width="94" height="54" border="0" src="./TranzilaDirectiFrame2_files/13.gif" alt="McAfee SECURE site"></a> -->
					</li>
				</ul>
				<div style="margin-left: 0px;margin-right: 0px;">???????? ??????, ??????!
?????????? ???????????? ?????? ???????????? ??????????!
?????? ???????????? ???? ???????????? ?????????? ???? 
????????????, ?????????? ???????????? ??????????:
</div>
			</div>

		<div id="content">

		<div style="clear: both"></div>



<form action="https://direct.tranzila.com/process/" class="round" method="post" id="itranpayform" autocomplete="off">
	<input type="hidden" id="sum" name="sum" value="??50"><input type="hidden" id="supplier" name="supplier" value="obli1"><input type="hidden" id="currency" name="currency"><ul><li>
    		<label>
        	    <span id="labelprice"><span id="lang_sum">????"?? ????????????</span></span>
        	</label>
        	<span dir="rtl"><input type="hidden" id="sum_open_sum"><span id="sumval">??50</span>&nbsp;<span id="currchar">???</span>&nbsp;</span>
        </li>
        <li>
        	<label for="ccno"><span id="lang_ccno">????' ??????????</span><span class="ast">*</span></label>
        	<input type="tel" name="ccno" id="ccno" autocomplete="off" maxlength="19"></li>
  <li>
        	<label for="expmonth"><span id="lang_expiration">????????</span><span class="ast">*</span></label>

        	<select name="expmonth" id="expmonth" style="width:50px;"><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select><span>  </span>
        	<select name="expyear" style="width:77px;" id="expyear"><option value="19">2019</option><option value="20">2020</option><option value="21">2021</option><option value="22">2022</option><option value="23">2023</option><option value="24">2024</option><option value="25">2025</option><option value="26">2026</option><option value="27">2027</option><option value="28">2028</option><option value="29">2029</option><option value="30">2030</option><option value="31">2031</option><option value="32">2032</option><option value="33">2033</option></select></li>
        <li>
        				<label for="myid"><span id="lang_id">??.??.</span><span class="ast"> *</span></label>
        				<input type="tel" name="myid" id="myid"></li><li>
                        <label for="mycvv"><a href="https://direct.tranzila.com/obli1/iframe.php?lang=il#" style="color: #fff" onclick="window.open(&#39;/docs/window-cvv.html&#39;, &#39;_blank&#39;, &#39;toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=350,height=230, top=&#39; + (parseInt((screen.availHeight/2) - 115)) + &#39;,left=&#39;+(parseInt((screen.availWidth/2) - 175)));">CVV</a>:<span class="ast"> *</span></label>
                        <input type="tel" name="mycvv" id="mycvv" style="" size="4" maxlength="4"></li>

        <li id="sumli">
    	    &nbsp;
        </li>

        <li id="send"><button id="submitbtn" type="button" onclick="ichecknrun(required,&#39;cc&#39;);">??????????
</button>

    </li></ul><input type="hidden" id="lang" name="lang" value="il"><input type="hidden" id="o_cred_type" name="o_cred_type" value=""><input type="hidden" id="o_tranmode" name="o_tranmode" value=""><input type="hidden" id="o_npay" name="o_npay" value=""><input type="hidden" id="benid" name="benid" value="9ebob4gintfov5galpshgsi8l2"></form>
		</div>
		<script type="text/javascript">
	        required = ["ccno","expmonth","expyear","mycvv","myid"];
	    </script><div id="geo">
            <table width="135" border="0" cellpadding="2" cellspacing="0" title="Click to Verify - This site chose GeoTrust SSL for secure e-commerce and confidential communications."><tbody><tr><td width="135" align="center" valign="top"><script type="text/javascript" src="./TranzilaDirectiFrame2_files/getgeotrustsslseal"></script><br><a href="http://www.geotrust.com/ssl/" target="_blank" style="color:#000000; text-decoration:none; font:bold 7px verdana,sans-serif; letter-spacing:.5px; text-align:center; margin:0px; padding:0px;"></a></td>
                    <!-- <td><img style="float:left;" width="146" height="51" border="0" src="./TranzilaDirectiFrame2_files/pci-inner.gif" alt="PCI DSS"></td> -->
                </tr></tbody></table></div>
		<div id="footer">

		<div style="clear: both"></div>
			<!-- <div id="footergreenstripe">
					<div class="footertext">Tranzila ?? ?????????????? ???????????? <a href="http://www.tranzila.com/">?????????? ????????????????</a> - ???? ?????????????? ????????????</div>
			</div> -->
  </div>

  </div>
</body></html>