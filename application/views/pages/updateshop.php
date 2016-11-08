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
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
    
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
	       	 			
	       	 			<div class="col-lg-12 small-detail-description"  style="display:none;">
	       	 				<div class="row">
	       	 				
	       	 					<div class="menu-arrow">
	       	 						<div class="menu-arrow-inside">
	       	 					 		<div class="dropdown">
										    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Menu
										    <span class="caret"></span></button>
										    <ul class="dropdown-menu menu-ul">
										     <li class="item-small">
												<input type="hidden" value="updateshop_overview" />
												<a href="javascript:;">Overview</a>
											</li>
											<li class="item-small">
												<input type="hidden" value="updateshop_information" />
												<a href="javascript:;">Inforamtion</a>
											</li>
											<li class="item-small">
												<input type="hidden" value="updateshop_photo" />
												<a href="javascript:;">Photo</a>
											</li>
											<li class="item-small">
												<input type="hidden" value="updateshop_product" />
												<a href="javascript:;">Product</a>
											</li>
											<li class="item-small">
												<input type="hidden" value="updateshop_location" />
												<a href="javascript:;">Location</a>
											</li>
										    </ul>
										  </div>
	       	 						</div>
	       	 					</div>
	       	 					
	       	 					<div class="shop-detail-status">
	       	 						<div class="shop-detail-status-inside">
		       	 						<div class="enable-shop-description " style="<?php if($shop_status == "0" || $shop_status == 0) echo "display:none"?>">
											<div class="shop-status-wrapper">
												<div id="shop-opening-box-small" class="shop-opening-box pull-right" style="<?php if($is_shop_open == "0" || $is_shop_open == 0) echo "display:none"?>">
													<p class="shop-toggle-time opening-time" title="shop working time">
														<i class="fa fa-circle" aria-hidden="true"></i> Opening						
													</p>
													
												</div>
												<div id="shop-close-box-small" class="shop-close-box pull-right" style="<?php if($is_shop_open == "1" || $is_shop_open == 1) echo "display:none"?>">
													<p class="shop-toggle-time close-time">
														<i class="fa fa-circle" aria-hidden="true"></i> Closed 
													</p>
												</div>
												<div style="clear:both;"></div>
											</div>
											<div style="clear:both;"></div>
											
											<p class="working-time pull-right">
												<i class="fa fa-clock-o" aria-hidden="true"></i><?php echo substr($shop_opening_time,0,5)?> ~ <?php echo substr($shop_close_time,0,5)?>
											</p>																				
										</div>
										
										<div class="disable-shop-description pull-right" style="<?php if($shop_status == "1" || $shop_status == 1) echo "display:none"?>">
											<p class="disable-shop-text right-div" title="client is not able to view this shop!"><i class="fa fa-ban" aria-hidden="true"></i>Disabled</p>
											<label class="switch left-div">
								  				<input class="toggleshop" type="checkbox" id="toggleshop-small" >
								  				<div class="slider"></div>
											</label>										
										</div>
	       	 						</div>
	       	 					</div>
	       	 				
	       	 				</div>
	       	 			</div>
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

	$("li.item, li.item-small").on("click", function(){
		if($(this).hasClass("li-click")){
			return;
		}
		
		$("li.item").removeClass("li-click");
		$("li.item-small").removeClass("li-click");
		
		$("li.item").eq($(this).index()).addClass("li-click");
		$("li.item-small").eq($(this).index()).addClass("li-click");
		var tabid = $(this).find("input").val();
		
		$("#updateShopframe").attr("src","<?php echo base_url(); ?>MainController/"+tabid);
	});

	

	
   
    </script>
  </body>
</html>
