<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>update shop photo | Dernham</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop.css" />
 	<style>
	 	.shop-event-wrapper{
	 		min-height:600px;
	 		background: #fff;
	 	}
	 </style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
    
    <div class="shop-event-wrapper">			     	 						       	 						       	 					
	    <div  class="tab-wrapper">	       	 				
	       	 <div class="tab-header col-lg-12">
	       	 	<p class="tab-intro-text"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Photo</span></p>
	       	 </div>
	       	 <div class="tab-body col-lg-12">
	       	 	<div class="row">
		       	 							
	       	 	</div>
	       	 </div>
	    </div>
	       	 			
    </div><!-- ./wrapper -->

   
    <?php include 'imports/scriptimport.php'; ?>
   
    <script>
   
       
    $(window).load(function(){
   		top.resizeIframe();
   		window.parent.$(".iframe_hover").hide();
		window.parent.$("#updateShopframe").show();
    });

    $(window).on("resize", function() {
    	top.resizeIframe();
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
