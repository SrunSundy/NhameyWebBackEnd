 <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
   <!--  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   <!--  <script> -->
    <!--   $.widget.bridge('uibutton', $.ui.button); -->
   <!--  </script> -->
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
   
    <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
     <!-- daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    
     <!-- bootstrap time picker -->
    <script src="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    
    <!-- iCheck 1.0.1 -->
    <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
   
   
    <script src="<?php echo base_url(); ?>assets/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>assets/plugins/knob/jquery.knob.js"></script>
  
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    
     <script src="<?php echo base_url(); ?>assets/plugins/bootpag/jquery.bootpag.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
   
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.min.js"></script>
    
     <script src="<?php echo base_url(); ?>assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
   
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
   
    <script src="<?php echo base_url(); ?>assets/plugins/fileinput/fileinput.min.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-tmpl/jquery.tmpl.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/nhamdis/js/nhamsetting.js"></script>
    <script src="<?php echo base_url(); ?>assets/nhamdis/js/nhamdropdown.js"></script>
    <script src="<?php echo base_url(); ?>assets/nhamdis/js/nhamdropdownmulti.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/nhamdis/js/nhamaddress.js"></script>
     <script src="<?php echo base_url(); ?>assets/nhamdis/js/nhamloading.js"></script>
    
    <script>
	var t = window.location.href.substr(window.location.href.lastIndexOf('/') + 1);
	var _base_url = "<?php echo base_url(); ?>MainController/"+t;
	$("li a[href='"+_base_url+"']").parents("li").addClass("active");
	</script>
	<script>

	$("#log-out-user").on("click", function(){
		var base_u = "<?php echo base_url(); ?>";
		$.ajax({
			 type: "POST",
			 url: base_u + "API/UserRestController/logout",	
			 success : function(data){
				location.href = base_u+"/MainController/login";
			 }
			
	  }); 
	});
	</script>
	
	<script>
	var myPage = 1;
	var myTtPage = 1;
	loadNotification(false);
	function loadNotification(scroll){
		//alert();
		var base_u = "<?php echo base_url(); ?>";
		$("#noti_loading").show();
		$.ajax({
			 type: "POST",
			 url: base_u + "API/DashboardRestController/getNotification",	
			 data :JSON.stringify({
				"request_data" : {
					"page" : myPage,
					"row" : 15
				}
			 }),
			 success : function(data){
				console.log(data);

				var cnt = parseInt(data.noti_cnt);
				if(cnt > 0)
					$(".header_notificaiton_top").html(data.noti_cnt);
				$(".header_notificaiton").html(data.noti_cnt);

				//$("#list_notification").children().remove();
				var myData = data.response_data;
				myTtPage = data.total_page;
				var html = "";
				for(var i=0; i<myData.length; i++){
					if(parseInt(myData[i].read_cnt) > 0){
						html += "<li style='background: #efefef' >";
	                    html += " <a href='javascript:;' class='gotoReport' data-NotiId='"+myData[i].notification_id+"' data-postId='"+myData[i].object_id+"' data-reportType='"+myData[i].report_type+"' >";
	                    if(parseInt(myData[i].reporter_cnt) <= 1)
	                    	html += "a post has been reported! 	<img src='http://dernham.com/dernham_API/uploadimages/real/post/medium/"+myData[i].post_image_src+"' style='width:auto;height:60px;margin-left:20px; float:right' > ";
	                    else
	                    	html +=  myData[i].reporter_cnt+" users have reported the post! <img src='http://dernham.com/dernham_API/uploadimages/real/post/medium/"+myData[i].post_image_src+"' style='width:auto;height:60px;margin-left:20px;float:right'> ";
	                    html += "<p style='color: #b1b1b1;font-size: 13px;margin-top: 5px;'> <i class='fa fa-clock-o' style='margin-right:5px;'></i> "+moment(myData[i].created_date).fromNow()+"</p>";
	                    html += " </a>";
	                    html += "</li>";
					}else{
						html += "<li>";
	                    html += " <a href='javascript:;' class='gotoReport' data-NotiId='"+myData[i].notification_id+"' data-postId='"+myData[i].object_id+"' data-reportType='"+myData[i].report_type+"' >";
	                    if(parseInt(myData[i].reporter_cnt) <= 1)
	                    	html += "a post has been reported! 	<img src='http://dernham.com/dernham_API/uploadimages/real/post/medium/"+myData[i].post_image_src+"' style='width:auto;height:60px;margin-left:20px; float:right' > ";
	                    else
	                    	html +=  myData[i].reporter_cnt+" users have reported the post! <img src='http://dernham.com/dernham_API/uploadimages/real/post/medium/"+myData[i].post_image_src+"' style='width:auto;height:60px;margin-left:20px;float:right'> ";
	                    html += "<p style='color: #b1b1b1;font-size: 13px;margin-top: 5px;'> <i class='fa fa-clock-o' style='margin-right:5px;'></i> "+moment(myData[i].created_date).fromNow()+"</p>";
	                    html += " </a>";
	                    html += "</li>";
					}
					
				}
				if(scroll){
					$("#list_notification").append(html);
				}else{
					$("#list_notification").html(html);
				}
				myPage++;
				$("#noti_loading").hide();
			 }
		 
			
	 	}); 
	 	
	}

	$(document).on("click", ".gotoReport", function(){

		var base_u = "<?php echo base_url(); ?>";
		$.ajax({
			 type: "POST",
			 url: base_u + "API/DashboardRestController/updateNotification",
			 data :JSON.stringify({
				"request_data" : {
					"post_id" : $(this).attr("data-postId"),
					"report_type" : $(this).attr("data-reportType")
				}
			 }),
			 success : function(data){
				 location.href = "listplayerPost";
			 }
		 
			
	 	}); 
		
	});

	 $('#list_notification').on('scroll', function() {
	        if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {

		        if(myPage <= myTtPage)
	        		loadNotification(true);
	        }
	 });
	</script>
    
    
    
   
    