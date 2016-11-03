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
 	
 	<style>
 		.shop-event-wrapper{
 			min-height:600px;
 		}
 	</style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
   
      
	       	 			<div class="col-lg-12 shop-event-wrapper">
	       	 				<div class="row">	       	 						       	 						       	 					
	       	 					<div  class="tab-wrapper">	       	 				
	       	 						<div class="tab-header col-lg-12">
	       	 							<p class="tab-intro-text"><i class="fa fa-tachometer" aria-hidden="true"></i><span>Overview</span></p>
	       	 						</div>
	       	 						<div class="tab-body col-lg-12">
	       	 							<div class="row">
		       	 							<button id="append">APPEND</button>
		       	 							<button id="alerttest">ALERT</button>
	       	 							</div>
	       	 						</div>
	       	 					</div>
	       	 						       	 					
	       	 				</div>
	       	 			</div>
	       	 		
	       	 
 
     
   
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
   
    $(window).load(function(){
    	
    	top.resizeIframe();
    });    
   $("#append").click(function(){
		$(".shop-event-wrapper").append("<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>");
		top.resizeIframe();
	});

   $("#alerttest").click(function(){
	   top.swal({
			  title: "Are you sure?",
			  text: "The client will not be able to see this shop",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonColor: "#DD6B55",
			  confirmButtonText: "Yes, delete it!",
			  closeOnConfirm: false
		},
		 function(isConfirm) {
	        if (isConfirm) {
	        	 swal("Deleted!", "Your imaginary file has been deleted.", "success");

	        } else {
	            
	        }
	    });
	});
    
	function updateShopField(value , param){
		$.ajax({
			type : "POST",
			url : "/NhameyWebBackEnd/API/ShopRestController/updateShopField",
			data : {
				"shopdata" : {
					"updated_value" : value,
					"shop_id" : $("#shop_id").val(),
					"param" : param
				}
			},
			success : function(data){
				data = JSON.parse(data);
				console.log(data);
					
			}
		});
	}
    </script>
  </body>
</html>
