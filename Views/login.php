<?php $this->section('content') ?>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Enova CRM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="<?php echo base_url(); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- <script src="<?php echo base_url(); ?>/assets/vendor/jquery.min.js"></script> -->

  <script src="<?php echo base_url(); ?>/assets/js/jquery.hotkeys.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/shortcuts_v1.js"></script>

  <!-- Template Main CSS File -->
  <!-- <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet"> -->
<style>
.whitelogin
{
  background-color: #FFFFFF !important;
}
  .carousel-inner
  {
    top: 114px;
  }
.carousel-control-prev {
    left: 33px;
    background: #ca1c29;
    width: auto;
    border-radius: 50%;
}
.carousel-control-next
{
    right: 33px;
    background: #ca1c29;
    width: auto;
    border-radius: 50%;
}

#carouselExampleCaptions
{
  top: 114px;
}

.w-100
{
      width: 100%!important;
    height: 100%;
object-fit: cover;
} 
 #invalid_captcha{
 
/*padding: 10px;*/
cursor: pointer;
 /*   position: absolute;
    top: 183px;
    right: 6px;
    z-index: 2;
 */   color: #c3000f;
}



 /*forgot password popup start*/

#forgot_password_popup .popup_header {
  display: flex;
  align-items: center;
  border-bottom: 1px solid #b1b1b1;
}

#forgot_password_popup .popup_body {
  padding: 15px;
}
.freq_sec h4, .samspec_sec h4 {
  font-weight: 600;
}

#forgot_password_popup .popup_title {
  font-weight: 600;
}
#forgot_password_popup {
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8);
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
 text-align: left;
  z-index: 10;
}
#forgot_password_popup .popup__content {
  width: 80%;
  overflow: auto;
/*  padding: 50px;*/
padding: 10px;
  background: white;
  color: black;
  position: relative;
top: 50%;
/*  top: 50%;*/
  left: 50%;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
}
#forgot_password_popup .popup__content .close {
  position: absolute;
  right: 20px;
  top: 20px;
  display: block;
  color: #000;
  font-size: 24px;
  opacity: 0.7;
}
#forgot_password_popup .popup__content .close span {
  cursor: pointer;
  position: fixed;
  width: 20px;
  height: 3px;
  background: #099ccc;
}
#forgot_password_popup .popup__content .close span:nth-child(1) {
  transform: rotate(45deg);
}
#forgot_password_popup .popup__content .close span:nth-child(2) {
  transform: rotate(135deg);
}





#forgot_password_popup .container {
    text-align: center;
    /*width: 80%;*/
    width: 50%;
}

#forgot_password_popup .container .master,
#forgot_password_popup .container .thumbnails {
    margin: auto;
    width: 100%;
    border: 2px solid #ccc;
    padding: 5px;
}

#forgot_password_popup .container .master {
    padding-bottom: 0;
    position: relative;
}

#forgot_password_popup .container .master img {
    z-index: 1;
    width: 100%;
    height: 99%
}

#forgot_password_popup .container .master .fa-chevron-left,
#forgot_password_popup .container .master .fa-chevron-right {
    position: absolute;
    left: 5px;
 /*   top: 5px;*/
    top: 50%;
    /*background-color: rgb(0,0,0, .7);*/
    background-color: rgb(0,123,255, .7);
    color: #fff;
    padding: 10px 15px;
    z-index: 2;
    cursor: pointer;
}

#forgot_password_popup .container .master .fa-chevron-right {
    right: 5px;
    left: auto;
}

#forgot_password_popup .container .thumbnails {
    overflow: hidden;
}

#forgot_password_popup .container .thumbnails img {
    float: left;
    width: 19.2%;
    outline: 2px solid #bbb;
    opacity: .6;
    cursor: pointer;
    transition: all .6s ease-in-out;
}

#forgot_password_popup .container .thumbnails img:last-child {
    margin-right: 0!important;
}

#forgot_password_popup .container .thumbnails img.active {
    outline: 2px solid #e63946;
    opacity: 1;
}


#forgot_password_popup .container {

  display: block;
}

#forgot_password_popup .master {
  height: auto !important;
}

.popup_title {
  color: #007BFF;
}
.mainmenu_sec {
  display: none !important;
}
 /*forgot pasword popup end*/
</style>
  <style type="text/css">
.error
{
  color: red;
}
#CaptchaImageCode
{
 border:solid 1px lightgrey;
     padding: 5px 0px 0px 0px;
/*    border-radius: 25px;*/
    background: rgba(255,255,255,.1);width: 100%;
    color: #fff;
    display: block;
    text-align:center;

}
    canvas#CapCode
    {
      width: 110px !important;
    }
    .plusclo-button
    {
    position: fixed;
    right: 5px;
    z-index: 5;
    top: 140px;
    }
    .login-box{
  width:100%;
  margin:auto;
  max-width:525px;
  border-radius: 20px;
/*  min-height:612px;*/
  height: 100%;
  background:url(https://images.unsplash.com/photo-1507208773393-40d9fc670acf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1268&q=80) no-repeat center;
  box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-snip{
  width:100%;
/*  height:100%;*/
  position:absolute;
  border-radius: 20px;
  padding:24px;
  box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.4);
/*  opacity: 0.89;*/
  background:#FFF;
}
.login-snip .login,
.login-snip .sign-up-form{
  top:0;
  left:0;
  right:0;
  bottom:0;
  position:absolute;
  transform:rotateY(180deg);
  backface-visibility:hidden;
  transition:all .4s linear;
}
.login-snip .sign-in,
.login-snip .sign-up,
.login-space .group .check{
  display:none;
}
.login-snip .tab,
.login-space .group .label,
.login-space .group .button{
  text-transform:uppercase;
}
.login-snip .tab{
  font-size:22px;
  margin-right:15px;
  padding-bottom:5px;
  margin:0 15px 10px 0;
  display:inline-block;
  color: #cbc8c8;
  border-bottom:2px solid transparent;
}
.login-snip .sign-in:checked + .tab,
.login-snip .sign-up:checked + .tab{
  color:#000;
  border-color:#1161ee;
}
.login-space{
  min-height:345px;
  position:relative;
  perspective:1000px;
  transform-style:preserve-3d;
}
.login-space .group{
  margin-bottom:15px;
}
.login-space .group .label,
.login-space .group .input,
.login-space .group .button{
  width:100%;
  color:#000;
  display:block;
}
.login-space .group .input,
.login-space .group .button{
  border:solid 1px lightgrey;
  padding:6px 17px;
  border-radius:25px;
  background:rgba(255,255,255,.1);
}
.login-space .group input[data-type="password"]{
  text-security:circle;
  -webkit-text-security:circle;
}
.login-space .group .label{
  color:#000000;
  font-size:12px;
}
.login-space .group .button{
  background:#c3000f;
  color: #FFF;
}
.login-space .group label .icon{
  width:15px;
  height:15px;
  border-radius:2px;
  position:relative;
  display:inline-block;
  background:rgba(255,255,255,.1);
}
.login-space .group label .icon:before,
.login-space .group label .icon:after{
  content:'';
  width:10px;
  height:2px;
  background:#fff;
  position:absolute;
  transition:all .2s ease-in-out 0s;
}
.login-space .group label .icon:before{
  left:3px;
  width:5px;
  bottom:6px;
  transform:scale(0) rotate(0);
}
.login-space .group label .icon:after{
  top:6px;
  right:0;
  transform:scale(0) rotate(0);
}
.login-space .group .check:checked + label{
  color:#fff;
}
.login-space .group .check:checked + label .icon{
  background:#1161ee;
}
.login-space .group .check:checked + label .icon:before{
  transform:scale(1) rotate(45deg);
}
.login-space .group .check:checked + label .icon:after{
  transform:scale(1) rotate(-45deg);
}
.login-snip .sign-in:checked + .tab + .sign-up + .tab + .login-space .login{
  transform:rotate(0);
}
.login-snip .sign-up:checked + .tab + .login-space .sign-up-form{
  transform:rotate(0);
}

*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}
.hide/><M
{
  display: none;
}

.hr{
  height:2px;
  margin:10px 0 10px 0;
  background:rgba(255,255,255,.2);
}
.foot{
  text-align:center;
  color: #FFFFFF;
}
.card{
  width: 289px;
   position:fixed;
   border-radius: 20px;
      right: 5px;
      z-index: 4;
      border: none;
    top: 140px;
}

::placeholder{
color: #b3b3b3;
} 
/*.fa.fa-fw.fa-eye.field-icon.toggle-password, .fa.fa-fw.field-icon.toggle-password.fa-eye-slash {
    position: absolute;
    top: 127px;
    right: 6px;
    cursor: pointer;
    z-index: 2;
    color: #FFFFFF;
}*/
#forgot_pass_btn
{
    color: #FFFFFF;

}
.fa, .fas
{
cursor: m/.pointer;
}
#UserCaptchaCode {
    /* padding: 15px 10px; */
    outline: none;
    font-size: 26px;
    font-weight: 600;
    font-family: 'Open Sans', sans-serif;
    /* width: 343px; */
    width: 100%;
    /* color: #4d4d4d; */
    color: #000;
    padding: 0px 15px !important;
}

.h2, h2 {
    font-size: 2rem;
    color: white;
}
label#password-error {
    position: absolute;
    top: 43px;
    padding-bottom: 10px;
    }
  
  </style>
<div id="full-screen" class="col-md-12 login_main_page">
   

  <header id="header" class="fixed-top">
       <div class=" ">
           <div class="row ">
          <div class="col-sm-2">
      <a href="<?php echo base_url('Billing'); ?>"><img class="img-responsive" title="eNova" src="<?php echo base_url() ?>/uploads/banner/logo.png" alt="logo" ></a>
    </div>
                <div class="col-sm-8">
                  <div class="row">
       <div class="col-sm-10 hide"> <i class="bi bi-envelope"></i> <a href="https://shanthi-medical.business.site/?utm_source=gmb&utm_medium=referral">https://enovasolutions.com/</a> &#x2003;<br/>
        <i class="bi bi-phone"></i> +91 95007 77781</div>
        <div class="col-sm-2"> </div>
          </div>
           <!-- <h1 class="logo"><a >ENOVA</a></h1> -->
           <h1 class="logo"><a >Enova Software & Hardware Solutions Pvt Ltd</a></h1>
      </div>
         <!-- <div class="col-sm-2"><a href="javascript:;" class="appointment-btn1 scrollto"><span class="d-md-inline"><img width="100px" height="100px" src="<?php echo base_url('uploads/banner/book-appointment.gif'); ?>" alt="IMG"></span></a></div> -->
  </div>
  </header> 

     

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators hide">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('uploads/banner/banner1.jpg'); ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('uploads/banner/banner2.jpg'); ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('uploads/banner/banner3.jpg'); ?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


 

  <section id="hero1" class=" ">



    <div class="container">
      <div class="plusclo-button">
        <button class="btn btn-primary expplus" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">+</button>
      </div>
      <div class="collapse" id="collapseExample"></div>
    </div>
  </section>

  <!-- End Header-->
  <div class="collapse show" id="collapseExample">
     
      <div class ="row">
  <div class=" ">
    <div class="card">
<div class="login-box">
  <div class="login-snip">
       <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">User Login</label>
        <div class=" hide"><input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        </div>
<div id="right_column" >
  <div class="login_form12">
    <form action="<?= base_url('/Login')?>" class="form" method="POST" name="login_form12" id="login_form12">

      <div class="login-space">
           <div class="login1">
      <div class="group">
        <label for="user" class="label">Username</label>
        <input type="text" name="user_name" class="input whitelogin" id="user_name" placeholder=" ">
        <!-- <label class="form_label">Username</label> -->
      </div>
      <div class="group">
        <label for="user" class="label">Password</label>
        <div class="input-group" style="flex-wrap: initial;">
        <input type="password" id="password" name="password" class="input whitelogin" placeholder=" ">
        <div class="input-group-append input" style="width: 64px;">
        <span toggle="#password-field" title="Show Password" class="fa fa-fw fa-eye field-icon toggle-password" id="toggle-password"></span>

      </div>
      </div>

     
        <fieldset style="margin-top: 36px;">  
          <div class='CaptchaWrap'>
           
              
       
  <div class="input-group mb-3" style="flex-wrap: initial;">
     <div id="CaptchaImageCode" class="input">
                 <canvas id="CapCode" class="input"></canvas>
               </div>
 <div class="input-group-append input" style="width: 64px;">
                 <span class="ReloadBtn"><i class="fas fa-sync-alt"></i></span>     
                    </div>
                    </div>
      </div>
    
                  <div class="group">
            <label class="label">Enter Captcha</label>
            <div class="input-group mb-3" style="flex-wrap: initial;">
                  <input type="UserCaptchaCode" maxlength="4" id="UserCaptchaCode" name="UserCaptchaCode" class="input whitelogin" placeholder=" ">
  
                    </div>

                    <span id="invalid_captcha"></span>

          </div>
          <div class="group">
            <label class="label">
              <div id="forgot" class="mb-3" style="flex-wrap: initial; text-align: right; color:blue;">Forgot Password?</div>
            </label>
          </div>

          


          </fieldset>
      <?php if (session()->getFlashdata('message_name') !== NULL) : ?>
      <div class="alert alert-danger" role="alert">
        <?php echo session()->getFlashdata('message_name'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <?php endif; ?>
        <div class="group">
        <input type="button" class="form_button button" id="login" value="Login">
      </div>
        <div class="form-box">
          <!-- <span class="pull-right right forgot" data-toggle="modal" data-target="#forgot_pass_btn1" id="forgot_pass_btn" style="cursor: pointer;color: #FFFFFF;">Forgot Password?
         </span> -->
        </div>
      </div>
    </div>
      </div>
    </form>
 </div>
</div>

</div>
</div>
</div>
</div>
</div>

<div class="modal fade " id="forgot_pass_btn1" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style=" ">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class=" ">
      <div id="send_otp_container" class="hide">
        <div class="form_div">
          <form id="otp_value_form" class="otp_form">
            <div class="group-align">
            <label class="form_label">Username</label>
            <input type="text" name="otp_value" class="form_input form-control" id="otp_value">
          </div>
          </form>
        </div>
        <div class="hide" id="verify_mob_num"><span id="otp_mobilenumber"></span></div>
        <div class="form_div otp_div hide" id="otp_div">
          <form id="otp_number_form" class="otp_form">
            <input type="text" name="otp_number" class="form_input" id="otp_number" placeholder=" ">
            <label class="form_label">Enter OTP</label>
          </form>
        </div>
        <div >
          <span id="timer"></span>
          <button type="button" class="hide" id="resend_otp">Resend OTP</button>
        </div>
      </div>
      <div id="confirm_pass_div" class="hide">
        <form id="confirm_pass_form" class="otp_form">
          <div class="form_div">
            <input type="text" name="new_pass" class="form_input" id="new_pass" placeholder=" ">
            <label class="form_label">New Password</label>
          </div>
          <div class="form_div">
            <input type="text" name="confirm_pass" class="form_input" id="confirm_pass" placeholder=" ">
            <label class="form_label">Confirm Password</label>
          </div>
        </form>
      </div>
      <input type="text" class="hide" id="otp_mobile_number"> 
      <button type="button" class="btn btn-primary" id="otp_btns"></button>
    </div>
      </div>
  
    </div>
  </div>
</div>

</div>
 </div>



 

 
 
  <section id="footer" class="hide">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 footer-contact">
            <h3>©eNova Software and Hardware Solutions (P) Ltd  </h3>
            <p>2/196, Second Floor, Honeymoni Complex, Sathy Main Road, Saravanampatti, Coimbatore - 641 035<br><br>
              <strong>Phone:</strong> +91 95007 77781<br>
              <strong>Weblink:</strong> https://enovasolutions.com/<br>
            </p>
          </div>
          
          <div class="col-lg-6 col-md-6 footer-newsletter">
             
           <!--  <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- ======= Footer =======

   Vendor JS Files -->
  <script src="<?php echo base_url(); ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>/assets/js/main.js"></script>




<script>
    //appends an "active" class to .popup and .popup-content when the "Open" button is clicked
$("#vdo1_open").on("click", function(){
  $("#video1, #video1_popupcontent").addClass("active");
   $('#video1').removeClass('hide');
  $("#video2, #video2_popupcontent").css("display","none");
  $("#video1, #video1_popupcontent").css("display","block");

});

//removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
$("#v1_close, .popup-overlay").on("click", function(){
  $("#video1, #video1_popupcontent").removeClass("active");
   $('#video1').addClass('hide');
  $("#video2, #video2_popupcontent").css("display","none");
});


    //appends an "active" class to .popup and .popup-content when the "Open" button is clicked
$("#vdo2_open").on("click", function(){
  $("#video2, #video2_popupcontent").addClass("active");
   $('#video2').removeClass('hide');
  $("#video1, #video1_popupcontent").css("display","none");
  $("#video2, #video2_popupcontent").css("display","block");
});

//removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
$("#v2_close, .popup-overlay").on("click", function(){
  $("#video2, #video2_popupcontent").removeClass("active");
   $('#video2').addClass('hide');
  $("#video1, #video1_popupcontent").css("display","none");
});

</script>



<script>
let slideIndex = 0;
// showSlides();

// function showSlides() {
//   let i;
//   let slides = document.getElementsByClassName("mySlides");
//   let dots = document.getElementsByClassName("dot1");
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";  
//   }
//   slideIndex++;
//   if (slideIndex > slides.length) {slideIndex = 1}    
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";  
//   dots[slideIndex-1].className += " active";
//   setTimeout(showSlides, 3000); // Change image every 2 seconds
// }
</script>


<script>

     $(document).on("focusin", '#captcha_form', function() {
        $('#invalid_captcha').addClass('hide');
    });
    $(document).on('click','#toggle-password',function(){

    $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $('#password').attr('type');

        if (input == "password") {
            $('#password').attr("type", "text");
        } else {
            $('#password').attr("type", "password");
        }
    });
  </script>

<script>
    $(document).ready(function(){
$(document).on('click','.expplus', function()
{
$('#user_name').focus();
});


        $('.user_details').addClass('hide');
        $('#login_form12').validate({
            rules:{
                'user_name':{
                    required:true,
                },
                'password':{
                    required:true,
                },
                'captcha':{
                    required:true,
                }
                           
            },
            messages:{
                'user_name': {
                    required:'Username is required'
                },
                'password': {
                    required:'Password is required'
                },
                'captcha': {
                    required:'Please enter the captcha'
                }
            }
        });

        $("#login_form12 input").first().focus();

    });
</script>

<script>
    $(document).ready(function(){

$(document).on('click','.ReloadBtn',function(){
  CreateCaptcha();
});
var cd;

$(function(){
  CreateCaptcha();
});

// Create Captcha
function CreateCaptcha() {
  var alpha = new Array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
                    
  var i;
  for (i = 0; i < 4; i++) {
    var a = alpha[Math.floor(Math.random() * alpha.length)];
    var b = alpha[Math.floor(Math.random() * alpha.length)];
    var c = alpha[Math.floor(Math.random() * alpha.length)];
    var d = alpha[Math.floor(Math.random() * alpha.length)];
    
  }
  cd = a+' '+b+' '+c+' '+d;
  $('#CaptchaImageCode').empty().append('<canvas id="CapCode" class="capcode" width="300" height="80"></canvas>')
  
  var c = document.getElementById("CapCode"),
      ctx=c.getContext("2d"),
      x = c.width / 2,
      img = new Image();


  img.src = "<?php echo base_url()?>/assets/images/captcha_bg.jpg";

  img.onload = function () {
      var pattern = ctx.createPattern(img, "repeat");
      ctx.fillStyle = pattern;
      ctx.fillRect(0, 0, c.width, c.height);
      ctx.font="46px Roboto Slab";
      ctx.fillStyle = '#000';
      ctx.textAlign = 'center';
      ctx.setTransform (1, -0.12, 0, 1, 0, 15);
      ctx.fillText(cd,x,55);
  };
  
  
}

$('#UserCaptchaCode').keyup(function(e){
  if (/\D/g.test(this.value))
  {
    this.value = this.value.replace(/\D/g, '');
  }
});

  $(document).on('click','#login',function(){
    var string1 = cd.split(" ").join("");
    var captcha = $('#UserCaptchaCode').val().split(" ").join("");

    if(captcha != "" && captcha != null) {
      if(string1.trim() != captcha){
        $('#invalid_captcha').removeClass('hide');
        $('#invalid_captcha').text('Invalid Captcha! Please try again.').show();
        CreateCaptcha();
        $('#UserCaptchaCode').val('');
        $('#invalid_captcha').fadeOut(3000);
      }else{
        if($('#login_form12').valid()){
          $('#loader').removeClass('hide');
          $('#login_form12').submit()          
        }
      }
    }else{
      $('#login_form12').valid()
    }

  });
  });

    $("#UserCaptchaCode").keyup(function(event) {
      if (event.keyCode === 13) {
        $("#login").click();
      }
    });
    $("#user_name").keyup(function(event) {
      if (event.keyCode === 13) {
        $("#login").click();
      }
    });
    $("#password").keyup(function(event) {
      if (event.keyCode === 13) {
        $("#login").click();
      }
    });


   $("#forgot_pass_btn").click(function() {

      $("#otp_value").focus();

      $("#otp_value_form")[0].reset();
      $("#otp_number_form")[0].reset();
      $("#confirm_pass_form")[0].reset();
      $("#send_otp_container").removeClass('hide');
      $("#confirm_pass_div").addClass('hide');
      $("#resend_otp").addClass('hide');
      $("#verify_mob_num").addClass('hide');
      $("#otp_div").addClass('hide');
      $("#timer").addClass('hide');
      $("#otp_btns").removeClass('verify_otp');
      $("#otp_btns").removeClass('new_pass_btn');
      $("#otp_btns").addClass('get_otp_btns');
      $("#otp_btns").html('Get OTP');
      $("#forgot_password_popup").fadeIn(500);
         
  });
  $(".close").click(function() {
    $("#forgot_password_popup").fadeOut(500);
  });

  $(document).on("click", '.get_otp_btns', function() {
    var otp_val = $('#otp_value').val();
    if($('#otp_value_form').valid() ){
    $.ajax({
    url: "<?php echo base_url(); ?>/get_user",
    method: "POST",
    data: {otp_val:otp_val},
    success: function (data) {
      // success('dffgdf');
      var result = JSON.parse(data);
      var mob_no = phone_star(result.phone_no);
      var timer_otp = timer(30);
      
      $('#otp_mobile_number').val(result.phone_no);
      $('#verify_mob_num').removeClass('hide');
      $('#otp_div').removeClass('hide');
      $('#otp_mobilenumber').html(mob_no);
      $("#timer").removeClass('hide');
      $('#timer').html(timer_otp);
      $('#otp_btns').html('Verify OTP');
      $('#otp_btns').removeClass('get_otp_btns');
      $('#otp_btns').addClass('verify_otp');

    }
  });
  }

   });

  function phone_star(phone){
    prefixLength = 4;
    suffixLength = 3;

    prefix  = phone.substring(0, prefixLength);
    suffix  = phone.slice(-suffixLength);
    nbStars = phone.length - (prefixLength + suffixLength);

    formattedPhone = prefix + "*".repeat(nbStars) + suffix;

    return formattedPhone;
  }

  let timerOn = true;

  function timer(remaining) {
  var m = Math.floor(remaining / 60);
  var s = remaining % 60;
  
  m = m < 10 ? '0' + m : m;
  s = s < 10 ? '0' + s : s;
  document.getElementById('timer').innerHTML = m + ':' + s;
  remaining -= 1;
  
  if(remaining >= 0 && timerOn) {
    setTimeout(function() {
        timer(remaining);
    }, 1000);
    return;
  }

  if(!timerOn) {
    // Do validate stuff here
    return;
  }
  
  // Do timeout stuff here
  $('#timer').addClass('hide');
  $('#resend_otp').removeClass('hide');
}

$(document).on("click", '.verify_otp', function() {
  var otp_num = $('#otp_number').val();
  var mobile_number = $('#otp_mobile_number').val();
if($('#otp_number_form').valid() ){
  $.ajax({
    url: "<?php echo base_url(); ?>/check_otp",
    method: "POST",
    data: {otp_num:otp_num,mobile_number:mobile_number},
    success: function (data) {
      if (data == 'true') {
        success('OTP Verified Successfully');
        $('#otp_btns').removeClass('verify_otp');
        $('#otp_btns').addClass('new_pass_btn');
        $('#otp_btns').html('Save Password');
        $('#send_otp_container').addClass('hide');
        $('#confirm_pass_div').removeClass('hide');
      }else{
        danger('Invalid OTP.');
      }
    $("#forgot_password_popup").fadeOut(500);
      
    }
    }); 
}
  });

$(document).on("click", '.new_pass_btn', function() {
  var otp_val = $('#otp_value').val();
  var new_password = $('#new_pass').val();
if($('#confirm_pass_form').valid() ){
    $.ajax({
    url: "<?php echo base_url(); ?>/update_password",
    method: "POST",
    data: {otp_val:otp_val,new_password:new_password},
    success: function (data) {
      if(data > 0){
        success('Pasword Updated successfully.');
      }else{
        danger('Password Not updated. Please try again later.');
      }

    }
    }); 
  }
});

  $('#otp_value_form').validate({  
            rules:{
               "otp_value_form":{
                 required:true,
              },
            },
            messages:{
               "otp_value_form":{
                   required:"Please Enter Username ",
              },
            }
        });
    $('#otp_number_form').validate({  
            rules:{
               "otp_number":{
                 required:true,
                 minlength: 6,
                 maxlength: 6,
              },
            },
            messages:{
               "otp_number":{
                  required:"Please Enter OTP ",
                  minlength: "Please Enter the valid OTP",
                  maxlength: "Please Enter the valid OTP",
              },
            }
        });

    $('#confirm_pass_form').validate({  
            rules:{
               "new_pass":{
                required:true,
                minlength: 5,
              },
              "confirm_pass":{
                required:true,
                equalTo: "#new_pass",
                minlength: 5,
              },
            },
            messages:{
               "new_pass":{
                   required:"Please Enter the New password ",
                   minlength: "Please Enter the password above 5 letters",
              },
               "confirm_pass":{
                   required:"Please Enter the Confirm Password ",
                   equalTo: "Passowrds are not same",
                   minlength: "Please Enter the password above 5 letters",

              },
            }
        });

    
    

  </script>

<?php $this->endSection() ?>
