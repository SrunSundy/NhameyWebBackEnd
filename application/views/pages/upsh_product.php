<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>update shop product | Dernham</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop.css" />
	 <style>
	 	.shop-event-wrapper{
	 		min-height:600px;
	 		background: #fff;
	 	}
	 	
	 	div.product-wrapper{
	 		margin-left: 5px;
	 	}
	 	
	 	div.product-box{
	 		height: auto;
	 		
	 	}
	 	
	 	div.product-inside-box{
	 		margin-right:5px;
	 		margin-top: 5px;
	 		background: #eeeeee;
	 		box-shadow: 0 1px 4px 0 rgba(0,0,0,0.14);
	 		height: 250px;
	 		position:relative;
	 		cursor: pointer;
	 	}
	 	
	 	div.product-inside-box:hover div.product-event-menu{
	 		visibility: visible;
	 	}
	 	
	 	div.product-inside-box:hover div.black-edge-box{
	 		
	 		visibility: visible; 
	 		height: 50px;
	 	}
	 	
	 	div.product-header{
	 		
	 		position:relative;
	 	}
	 	
	 	img.product-img{
	 		
	 		width: 52%;
	 		height: auto;
	 		border-radius: 100%;
	 		margin-top: 15px;
	 		border: 3px solid #fff;
	 		
	 	}
	 	.wordwrap {
			white-space: pre-wrap; /* CSS3 */
			white-space: -moz-pre-wrap; /* Firefox */
			white-space: -pre-wrap; /* Opera <7 */
			white-space: -o-pre-wrap; /* Opera 7 */
			word-wrap: break-word; /* IE */
		}
	 	
	 	div.product-body{
	 		position:relative;
	 	}
	 	
	 	div.product-detail-wrapper{
	 		position:relative;
	 	}
	 	
	 	div.product-detail-wrapper .product-name{
	 		text-align: center;
	 		font-weight: bold;
	 	}
	 	
	 	div.product-detail-wrapper .product-description{
	 		padding: 5px;
	 	}
	 	
	 	div.product-detail-wrapper .product-description:first-letter{
	 		 text-transform: uppercase;
	 		
	 	}
	 	
	 	span.product-price{
	 		font-weight: bold;
	 		font-size: 18px;
	 		position: absolute;
	 		bottom: 0px;
	 		right: 5px;
	 		color: green;
	 	
	 	}
	 	
	 	div.product-event-menu{
	 		
	 		position: absolute;
	 		top: 5px;
	 		left: 5px;
	 		z-index: 2;
	 		visibility: hidden;
	 	}
	 	
	 	div.black-edge-box{
	 		width: 100%;
	 		height: 0px;
	 		visibility: hidden; 
	 		position: absolute;
	 		top: 0;
	 		background: black;
	 		opacity: 0.5;
	 		z-index: 1;
	 		background: -webkit-linear-gradient(black, transparent); /* For Safari 5.1 to 6.0 */
		    background: -o-linear-gradient(black, transparent); /* For Opera 11.1 to 12.0 */
		    background: -moz-linear-gradient(black, transparent); /* For Firefox 3.6 to 15 */
		    background: linear-gradient(black, transparent); 
		    -webkit-transition: all 0.05s ease-out ;
		    -moz-transition: all 0.05s ease-out ;
		    -o-transition: all 0.05s ease-out ;
		    transition: all 0.05s ease-out ;
	 	}
	 	
	 	div.is-popular-wrapper{
	 		position: absolute;
	 		top: 0px;
	 		right: 0;
	 		
	 	}
	 	
	 	img.is-popular-product{
	 		width: 30px;
	 		height: 30px;
	 	}
	 	
	 	@media screen and (max-width: 768px) {
			div.product-detail-wrapper .product-name{
		 		font-size: 15px;
	 		}
			
			div.product-detail-wrapper .product-description{
	 			font-size: 14px;
	 		}
		}
	 </style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
    
    <input type="hidden" id="shop_id" value="<?php echo $shop_id ?>"/>
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
    <div class="shop-event-wrapper">			   	       	 						       	 					
	     <div  class="tab-wrapper">	       	 				
	       	 <div class="tab-header col-lg-12">
	       	 	<p class="tab-intro-text"><i class="fa fa-product-hunt" aria-hidden="true"></i><span>Product</span></p>
	       	 </div>
	       	 <div class="tab-body col-lg-12">
	       	 	<div class="row">
		       	 	<div class="product-wrapper col-lg-12">
		       	 		<div class="row">
		       	 		
		       	 			<div class="product-box col-lg-2 col-sm-3 col-xs-6">
		       	 				<div class="row">
			       	 				<div class="product-inside-box">
			       	 					<div class="black-edge-box"></div>
			       	 					<div class="product-event-menu">
			       	 						<div class="menu-arrow">			       	 				
									       	 	<div class="dropdown product-menu-wrapper" >
													<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
														<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
													</button>
													<ul class="dropdown-menu image-event-list" style="width:30px;" >
																																					
														<li class="event-front-show">
															<a href="javascript:;">	
																<input type="hidden" class="sh_img_id" value=""/>																																						
																<i class="fa fa-times-circle" aria-hidden="true"></i>
																<span class="check-box-text" >Uncheck</span>																																																																		
															</a>
														</li>
														
														<li class="event-status">
															<a href="javascript:;">
																<input type="hidden" class="sh_img_id" value=""/>																
																<i class="fa fa-circle-o" aria-hidden="true"></i>
																<span class="check-box-text" >Enable</span>																	
															</a>
														</li>
														<li class="event-delete">
															<input type="hidden" class="sh_img_id" value=""/>
															<a href="javascript:;">
																<i class="fa fa-trash" aria-hidden="true"></i>
																Delete
															</a>
														</li>
																																			
													</ul>
												</div>
									       	 </div>
			       	 					</div>
			       	 							       	 					
			       	 					<div class="product-header">
			       	 						<div class="is-popular-wrapper">
			       	 							<img class="is-popular-product" src="http://logotipka.ru/images/stories/skachat_img/stars/star27-150.png"  />
			       	 						</div>
			       	 						<div class="product-img-wrapper" align="center">
			       	 							<img class="product-img" src="<?php echo base_url(); ?>uploadimages/product/small/logo_CgNNVThoGQkfuQgPp6X5_1481268360.jpg" />
			       	 						</div>
			       	 					</div>
			       	 					<div class="product-body">
			       	 						<div class="product-detail-wrapper">
			       	 							<h4 class="product-name wordwrap"> Fried Mushroom</h4>
			       	 							<p class="product-description wordwrap"> this is the best mushroom I have ever tasted. Love it! Really delicious!</p>
			       	 						</div>
			       	 					</div>
			       	 					<span class="product-price">$18</span>
			       	 				</div>
		       	 				</div>		       	 				
		       	 			</div>
		       	 			
		       	 					       	 		
		       	 		</div>
		       	 	</div>						
	       	 	</div>
	       	 </div>
	     </div>	       	 						       	 						       	 			
    </div><!-- ./wrapper -->

   
    <?php include 'imports/scriptimport.php'; ?>
    
    <script>   

    var request ={
    		  
    	"row" : 16,
    	"page": 1,
    	"row_minus" : 0,
    	"pro_status" : 3,
    	"shop_id" : $("#shop_id").val()
    }; 
          
    $(window).load(function(){
    	
    	window.parent.$(".iframe_hover").hide();
		window.parent.$("#updateShopframe").show();	
		top.resizeIframe();	    	
    });

    $(window).on("resize", function() {
    	top.resizeIframe();
    });

    listProduct();     
	function listProduct(){

		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ProductRestController/listProductByShopId",
			contentType : "application/json",
			data :  JSON.stringify({"request_data" : request}),
			success : function(data){
				data = JSON.parse(data);				
				console.log(data);
				
				setTimeout(function(){top.resizeIframe();}, 200);
				
			}
    	});
	}
    </script>
  </body>
</html>
