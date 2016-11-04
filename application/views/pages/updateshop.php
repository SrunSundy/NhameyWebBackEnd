<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/Jcrop/jquery.Jcrop.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop-upload.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/css/nhamslider.css">
 	
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
    
    <input type="hidden" id="shop_id" value="<?php echo $shop_id ?>"/>
    
    <div class="wrapper">	
		
      <header class="main-header">
      	  <?php include 'elements/headnavbar.php';?>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
       	  <?php include 'elements/leftnavbar.php';?>
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" >
      	 <!-- wrapper of both profile and cover -->  
       	 <div class="content-nham-wrapper">
       	 	<!-- wrapper of cover -->
       	 	<div class="col-lg-9 cover-wrapper-left" >
       	 		<div class="row">
	       	 		<!-- wrapper of info and cover -->
	       	 		<div class="bar-cover-wrapper">
	       	 			<?php include 'elements/updateshop/cover.php';?>
	       	 		</div>
	       	 		<div class="fake-info-wrapper">
	       	 			<div class="col-lg-12" style="height: 20px;"></div>
	       	 			<div class="col-lg-12 shop-edit-form-wrapper" style="">
	       	 				<div class="row" >	       	 						       	 						       	 					
	       	 					<iframe style="width:100%;height:auto;" id="updateShopframe" 
          							  scrolling="no" frameborder="0" marginheight="0" marginwidth="0" src="<?php echo base_url(); ?>MainController/updateshop_overview">
								 
								</iframe>	       	 						       	 					
	       	 				</div>
	       	 			</div>
	       	 			<div style="clear:both;"></div>
	       	 		</div>
	       	 		<!-- end wrapper of info and cover -->
       	 		</div>
       	 	</div>
       	 	<!-- end wrapper of cover -->
       	 	<!-- wrapper of profile -->
		    <div class="col-lg-3 profilemenu-wrapper-right">
		    	<?php include 'elements/updateshop/logomenu.php';?>
		    </div>
		    <div style="clear:both;"></div>
		    <!-- end wrapper of profile -->
         </div>
         
         <!--end wrapper of both profile and cover -->        
      </div><!-- /.content-wrapper -->
      <footer class="main-footer" >
      	
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        	<?php include 'elements/settingnavbar.php';?>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

   
    <?php include 'imports/scriptimport.php'; ?>
    <script type="text/javascript">
	    jQuery.browser = {};
	    (function () {
	        jQuery.browser.msie = false;
	        jQuery.browser.version = 0;
	        if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
	            jQuery.browser.msie = true;
	            jQuery.browser.version = RegExp.$1;
	        }
	    })();
	</script>
    <script src="<?php echo base_url(); ?>assets/plugins/Jcrop/jquery.Jcrop.js"></script>
    <script src="<?php echo base_url(); ?>assets/nhamdis/jscontroller/updateshop.js"></script>
    
    <script>
   
    function resizeIframe(){
   	 	$("#updateShopframe").css("height", $("#updateShopframe").contents().find(".shop-event-wrapper").height() + "px");
   	}

	$("li.item").on("click", function(){
		$("li.item").removeClass("li-click");
		
		$(this).addClass("li-click");
		var tabid = $(this).find("input").val();
		
		$("#updateShopframe").attr("src","<?php echo base_url(); ?>MainController/"+tabid);
	});

	
   
    </script>
  </body>
</html>
