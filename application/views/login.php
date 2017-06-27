



<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/login.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  
</head>
<style>
	.invalid-input{
		border : 1px solid red;
	}
</style>
<body style="background:#ccc">
  <input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
<div class="container">
  <div class="info">
    <h1>DerNham Login</h1><span>Made with <i class="fa fa-heart"></i> by DerNham Team</span>
  </div>
</div>
<div class="form" style="max-width: 350px !important;" >
	
  
  <div class="thumbnail" style="background-color:#eb1514 !important;"><img src="http://dernham.com/plugin/100x100.png"/></div>

  <form class="login-form">
    <input type="text" placeholder="username" id="username" />
    <input type="password" placeholder="password" id="pwd"/>
    <!--<button type="button" onclick="login()" style="background-color:#eb1514 !important;">login</button>-->
    <button type="button" onclick="login()" class=" btn btn_loading"  style="background-color:#eb1514 !important;" data-loading-text="<span style='color: gray;font-weight:bold'><i class='fa fa-circle-o-notch fa-spin' style='margin-right: 7px;'></i> login...</span>">login</button>
						  
    <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
  </form>
</div>
<!-- <video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
  <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video> -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

  <script>
  
  function login(){
	  if(validateInputNull("username") || validateInputNull("pwd")){
		 return;
	  }
	  var btn_loading = $(".btn_loading");
	    btn_loading.button('loading');
	  $.ajax({
			 type: "POST",
			 url: $("#base_url").val()+"API/UserRestController/login", 
			 contentType : "application/json",
			 data : JSON.stringify({
				"req_data" : {
					"email" : $("#username").val(),
					"password": $("#pwd").val()
				 }
			 }),			
			 success: function(data){
				 var data = JSON.parse(data);
				 if(data.status){					 
					location.href = $("#base_url").val()+"MainController/dashboard";
				 }
				 btn_loading.button('reset');  				
	  	 	 }
	  }); 
  }

  $("#username , #pwd").keypress(function(e) {
	    if(e.which == 13) {
	    	login();
	    }
  });

  function validateInputNull( input_id ){
	 var input_id = "#"+input_id;
	 if(!$(input_id).val()){
		$(input_id).focus();
		return true;
	 }else{
		 return false;
	 }
  }
  </script>
</body>
</html>
