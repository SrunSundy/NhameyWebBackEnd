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
	 		margin-left: 8px;
	 	}
	 	
	 	div.product-box{
	 		height: auto;
	 		
	 	}
	 	
	 	div.product-inside-box{
	 		margin-right:8px;
	 		margin-top: 8px;
	 		background: #eeeeee;
	 		box-shadow: 0 1px 4px 0 rgba(0,0,0,0.14);
	 		height: 250px;
	 		position:relative;
	 		cursor: pointer;
	 	}
	 	
	 	div.product-inside-box:hover div.product-event-menu{
	 		visibility: visible;
	 	}
	 	
	 	div.product-inside-box:hover div.black-edge-box, 
	 	div.product-inside-box:hover div.black-edge-box-bottom
	 	{
	 		
	 		visibility: visible; 
	 		height: 50px;
	 	}
	 	
	 	div.product-inside-box:hover div.product-more-detail{
	 		display: block;
	 	}
	 	
	 	div.product-header{
	 		
	 		position:relative;
	 	}
	 	
	 	img.product-img{
	 		
	 		width: 52%;
	 		height: auto;
	 		border-radius: 100%;
	 		margin-top: 25px;
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
	 	
	 	div.product-footer{
	 		position: absolute;
	 		bottom: 0;
	 	}
	 	
	 	div.product-detail-wrapper{
	 		position:relative;
	 	}
	 	
	 	div.product-detail-wrapper .product-name{
	 		text-align: center;
	 		font-weight: bold;
	 	}
	 	
	 	div.product-detail-wrapper p.product-name-detail{
	 		text-align: center;
	 		color: #616161;
	 		margin: 0;
	 		margin-top: -5px;
	 		padding-bottom:2px;
	 		font-size: 13px;
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
	 		top: 0px;
	 		left: 5px;
	 		color: green;
	 	
	 	}
	 	
	 	.cross-price{
	 		 text-decoration: line-through;
	 		 color: #BABABA !important;
	 	}
	 	
	 	span.product-promoted-price{
	 		font-weight: bold;
	 		font-size: 20px;
	 		position: absolute;
	 		top: -1px;
	 		left: 40px;
	 		color: #dd4b39;
	 	}
	 	
	 	span.product-cnt{
	 		color: #757575;
	 		font-size: 12px;
	 		padding: 5px 2px 0px 6px;
	 		margin-top: -10px;
	 	}
	 	
	 	span.product-cnt i{
	 		font-size: 12px;
	 		padding-r: 1px;
	 	}
	 	
	 	span.product-cnt i.fa-eye{
	 		font-size: 14px;
	 		padding-r: 1px;
	 	}
	 	
	 	div.product-event-menu{
	 		
	 		position: absolute;
	 		top: 5px;
	 		left: 5px;
	 		z-index: 2;
	 		visibility: hidden;
	 		 -webkit-transition: all 0.08s ease-out ;
		    -moz-transition: all 0.08s ease-out ;
		    -o-transition: all 0.08s ease-out ;
		    transition: all 0.08s ease-out ;
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
		    -webkit-transition: all 0.08s ease-out ;
		    -moz-transition: all 0.08s ease-out ;
		    -o-transition: all 0.08s ease-out ;
		    transition: all 0.08s ease-out ;
	 	}
	 	
	 	div.black-edge-box-bottom{
	 	
	 		width: 100%;
	 		height: 0px;
	 		visibility: hidden; 
	 		position: absolute;
	 		bottom: 0;
	 		background: black;
	 		opacity: 0.5;
	 		z-index: 1;
	 		background: -webkit-linear-gradient(transparent, black); /* For Safari 5.1 to 6.0 */
		    background: -o-linear-gradient(transparent, black); /* For Opera 11.1 to 12.0 */
		    background: -moz-linear-gradient(transparent, black); /* For Firefox 3.6 to 15 */
		    background: linear-gradient(transparent, black); 
		    -webkit-transition: all 0.08s ease-out ;
		    -moz-transition: all 0.08s ease-out ;
		    -o-transition: all 0.08s ease-out ;
		    transition: all 0.08s ease-out ;
	 	}
	 	
	 	div.is-popular-wrapper{
	 		position: absolute;
	 		top: 0px;
	 		right: 0;
	 		
	 	}
	 	
	 	img.is-popular-product{
	 		width: 80px;
	 		height: 80px;
	 	}
	 	
	 	div.product-more-detail{
	 		
	 		position: absolute;
	 		bottom: 0;
	 		display: none;
	 		width: 100%;
	 	
	 	}
	 	
	 	div.product-more-detail p.created-date{
	 		color: #fff;
	 		position:absolute;
	 		z-index: 2;
	 		bottom: -3px;
	 		left: 5px;
	 		
	 	}
	 	
	 	div.more-loading{
	 		width: 100%;
	 		min-height: 50px;	 		
	 		padding: 5px;
	 		margin-top: 30px;
	 	}
	 	
	 	div.more-loading-inside, div.no-more-loading-inside{
	 	
	 		width: 100%;
	 		height: 65px;
	 		display: none;
	 	}
	 	
	 	img.loading-more-img,p.loading-more-text{
	 		display:inline;
	 	}
	 	
	 	p.loading-more-text{
	 		font-weight: bold;
	 		font-size: 20px;
	 		color: #cec9c9;
	 	}
	 	
	 	img.loading-more-img{
	 		width: 50px;
	 		height:50px;
	 	}
	 	
	 	span.number-of-product{
	 		font-size: 18px;
	 		color: #b1b1b1;
	 	}
	 	
	 	div.disabled-product{
	 		width: 100%;
			height: 100%;
			background: black;
			opacity: 0.8;
			position: absolute;
			top: 0;
			left: 0;
			z-index: 1;
	 	}
	 	
	 	p.disabled-pro-text{
	 		color:#fff;
			font-size: 20px;
			font-weight: bold;
			text-align: center;
		    position: absolute;
		    top: 30%;
	 	}
	 	
	 	div.loading-wrapper{
			display: none;
		}
		
		div.loading-event-box{
			width: 100%;
			height: 100%;
			background: #fff;
			opacity: 0.4;
			position:absolute;
			top: 0;
			left: 0;
			z-index: 95;
			
		}
		
		img.loading-img-in{
			margin: auto;
		    position: absolute;
		    top: 0; left: 0; bottom: 0; right: 0;
		    z-index:96;
		   
		}
		
		button.add-more-img{
	 		border-radius: 0; 
	 		margin-top: 10px;
  			font-weight: bold;
	 	}
	 	
	 	button.add-more-img i{
	 		padding-right: 7px;
	 	}
	 	
	 	
	 	@media screen and (max-width: 768px) {
			div.product-detail-wrapper .product-name{
		 		font-size: 15px;
	 		}
			
			div.product-detail-wrapper .product-description{
	 			font-size: 14px;
	 		}
	 		
	 		span.product-cnt{	 		
	 			font-size: 11px;	 	
		 	}
		 	
		 	span.product-cnt i{
		 		font-size: 11px;
		 		padding-r: 1px;
		 	}		 	
		 	span.product-cnt i.fa-eye{
		 		font-size: 13px;
		 		padding-r: 1px;
		 	}
		 	
		 	
		 	
		}
		
		@media screen and (max-width: 400px) {
			span.cnt-bookmark, span.cnt-share{
		 		display:none;
		 	}
		 	
		 	img.is-popular-product{
		 		width: 60px;
		 		height: 60px;
		 	}
		 	
		 	p.disabled-pro-text{
		 		font-size: 15px;
		 	}
		}
	 </style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
    
    <input type="hidden" id="shop_id" value="<?php echo $shop_id ?>"/>
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
    <input type="hidden" id="dis_img_path" value="<?php echo DIS_IMAGE_PATH?>"/>
    <div class="shop-event-wrapper">			   	       	 						       	 					
	     <div  class="tab-wrapper">	       	 				
	       	 <div class="tab-header col-lg-12">
	       	 	<div class="col-lg-12">
	       	 		<div class="row">
			       	 	<div class="pull-left">
				       	 	<p class="tab-intro-text"><i class="fa fa-product-hunt" aria-hidden="true"></i><span>Product</span>
				       	 	<span id="pro-total-record" class="number-of-product"></span></p>
			       	 	</div>
			       	 		       	 	
			       	 	<button type="button" class="btn add-more-img btn-default pull-right">
			       	 		<i class="fa fa-plus-circle" aria-hidden="true"></i>Add image
			       	 	</button>
		       	 	</div>
	       	 	</div>
	       	 	
	       	 	<div class="col-lg-12">
	       	 		<div class="row">
				       	 <div class="form-group" style="margin:0 0 7px 0">		                   
						      <div class="input-group">
							                  
							       <input type="text" class="form-control pull-right" placeholder="search " id="" >
							       <div class="input-group-addon btn" id="">
							             <i class="fa fa-search" aria-hidden="true"></i>
							        </div> 
						      </div><!-- /.input group -->
						 </div><!-- /.form group -->
					 </div>
		    	 </div>
	       	 </div>
	       	 
	       	 <div class="tab-body col-lg-12">
	       	 	<div class="row">
		       	 	<div class="product-wrapper col-lg-12">
		       	 		<div class="row">
		       	 			 <div id="list_pro_result"></div>     
		       	 			 
		       	 			 <div class="more-loading">
				       	 	 	<div class="more-loading-inside" align="center" id="loading-more">		       	 	 		
					       	 	 	<img class="loading-more-img" src="<?php echo base_url() ?>assets/nhamdis/img/default.gif" />
						       	 	<p class="loading-more-text">
										Loading...
									</p>
				       	 	 			       	 	 		
				       	 	 	</div>
				       	 	 	
				       	 	 	<div class="no-more-loading-inside" align="center" id="loading-no-record">		       	 	 					       	 	 
						       	 	<p class="loading-more-text">
										:'( <span style="padding-left:10px;">No Result Found!</span>
									</p>		       	 	 			       	 	 		
				       	 	 	</div>
								
							 </div>			 			      	 					       	 		
		       	 		</div>
		       	 	</div>						
	       	 	</div>
	       	 </div>
	     </div>	       	 						       	 						       	 			
    </div><!-- ./wrapper -->

   
    <?php include 'imports/scriptimport.php'; ?>
    <script id="pro_data_result" type="text/x-jQuery-tmpl">

		<div class="product-box col-lg-2 col-sm-3 col-xs-6">
		     <div class="row">
			      <div class="product-inside-box">

					   <input type="hidden" class="product_image_name" value="{{= pro_image }}" />
					   <input type="hidden" class="product_id" value="{{= pro_id}}"/>
					   <div class="loading-wrapper">
							<div class="loading-event-box"></div>
							<div class="loading-event-img">
								<img src="{{= getSourceLoadingImg()}}"  class="loading-img-in" style="width: 25px;height:25px;"/>
				 			</div>
				 	   </div>
			       	   <div class="black-edge-box"></div>
			       	   <div class="product-event-menu">
			       	 		<div class="menu-arrow">			       	 				
								 <div class="dropdown product-menu-wrapper" >
									  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
									  </button>
									  <ul class="dropdown-menu image-event-list" style="width:30px;" >
																																					
										  <li class="event-popularity">
											  <a href="javascript:;">																																												
												  {{if pro_local_popularity ==1 || pro_local_popularity == ''}}																				
													<i class="fa fa-times-circle" aria-hidden="true"></i>
													<span class="check-box-text" >Uncheck</span>
												 {{else}}																							
													<i class="fa fa-check-circle" aria-hidden="true"></i>
													<span class="check-box-text" >Check</span>
												 {{/if}}																																																																		
											  </a>
										  </li>
														
										  <li class="event-status">
											  <a href="javascript:;">												 															
												  {{if pro_status == 1}}
													 <i class="fa fa-ban" aria-hidden="true"></i>
													 <span class="check-box-text" >Disable</span>
												  {{else}}
													 <i class="fa fa-circle-o" aria-hidden="true"></i>
													 <span class="check-box-text" >Enable</span>
												  {{/if}}																
											  </a>
										  </li>

										  <li class="event-delete">										
											  <a href="javascript:;">
												  <i class="fa fa-trash" aria-hidden="true"></i>
												  Delete
											  </a>
										  </li>
																																			
									   </ul>
								  </div>
							  </div>
			       	 	 </div>

						 <div class="disabled-product" style="display:{{if pro_status == 0}}block{{else}}none{{/if}}">
							  <p class="disabled-pro-text">This product has been disabled!</p>
						 </div>						 

						 <div class="black-edge-box-bottom"></div>
						 <div class="product-more-detail">
							  <p class="created-date">{{= pro_created_date}}</p>
						 </div>
			       	 							       	 					
			       	 	 <div class="product-header">
							 
			       	 		  <div class="is-popular-wrapper">
								  {{if pro_local_popularity ==1 || pro_local_popularity == ''}}
			       	 			   <img class="is-popular-product" src="http://pitertour.ru/images/design/spo.png"  />
								  {{/if}}
			       	 		  </div>
							  
							 
			       	 		  <div class="product-img-wrapper" align="center">
			       	 			   <img class="product-img" src="{{= getSourceImage( pro_image )}}" onerror="imgError(this)" />
			       	 		  </div>
			       	 	 </div>
			       	 	 <div class="product-body">
			       	 		  <div class="product-detail-wrapper">
			       	 		  		<h4 class="product-name wordwrap"> {{= pro_name_en }}</h4>
									<p class="product-name-detail wordwrap">( {{= pro_name_kh}} )</p>
			       	 				<p class="product-description wordwrap">{{= pro_short_description}}</p>
									
			       	 		  </div>
			       	 	 </div>
						
						 <div class="product-footer">
							  <span class="product-cnt cnt-heart" style=""><i class="fa fa-heart" aria-hidden="true"></i> {{= pro_view_count}}</span>
							  <span class="product-cnt cnt-eye" style=""><i class="fa fa-eye" aria-hidden="true"></i> {{= pro_view_count}}</span>
							  <span class="product-cnt cnt-bookmark" style=""><i class="fa fa-bookmark" aria-hidden="true"></i> {{= pro_view_count}}</span>
 							  <span class="product-cnt cnt-share" style=""><i class="fa fa-share-alt" aria-hidden="true"></i> {{= pro_view_count}}</span>						  	 						  	 
						 </div>
						  
						 {{if pro_promote_price <=0 || pro_promote_price == ''}}
							<span class="product-price">{{= formatDollar(pro_price) }}</span>
						 {{else}}
			       	 	 	<span class="product-price cross-price">{{= formatDollar(pro_price) }}</span>
						 	<span class="product-promoted-price">{{= formatDollar(pro_price) }}</span>
						 {{/if}}
			       	 </div>
		       	</div>		       	 				
		  </div>
	</script>
    <script>   

    var is_loading = false;
    var pro_total_record = 0;
    var pro_total_page = 0;

    var pro_length = 0;
    var request ={
    		  
    	"row" : 16,
    	"page": 1,
    	"row_minus" : 0,
    	"pro_status" : 3,
    	"shop_id" : $("#shop_id").val()
    }; 
          
    $(window).load(function(){
    	
		top.resizeIframe();	    	
    });

    $(window).on("resize", function() {
    	top.resizeIframe();
    });

    $(document).on("click", "li.event-popularity", function(){
    	$(this).parents("div.product-box").find("div.loading-wrapper").show();

    	var obj = this;
    	var updaterequest = {
			"pro_id" : $(this).parents("div.product-box").find("input.product_id").val(),
			"param" : "pro_local_popularity",
			"updated_value" : $(this).find("i").hasClass("fa-times-circle") ? 0 : 1 
    	};

    	console.log(updaterequest);
    	$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ProductRestController/updateProductField",
			contentType : "application/json",
			data :  JSON.stringify({"request_data" : updaterequest}),
			success : function(data){
				data = JSON.parse(data);				
				console.log(data);
				if(data.is_updated){
					if($(obj).find("i").hasClass("fa-times-circle")){
			     		$(obj).find("i").removeClass("fa-times-circle");
			     		$(obj).find("i").addClass("fa-check-circle");
			     		$(obj).find("span.check-box-text").html("Check");
			     		$(obj).parents("div.product-box").find("div.is-popular-wrapper").children().remove();
			        }else{
			        	$(obj).find("i").removeClass("fa-check-circle");
			     		$(obj).find("i").addClass("fa-times-circle");
			     		$(obj).find("span.check-box-text").html("Uncheck");
			     		$(obj).parents("div.product-box").find("div.is-popular-wrapper").append('<img class="is-popular-product" src="http://pitertour.ru/images/design/spo.png"  />');
			        }														
				}	
				$(obj).parents("div.product-box").find("div.loading-wrapper").hide();		
			}
    	});
    });

    $(document).on("click", "li.event-status", function(){

       	var obj = this;
    	if($(obj).find("i").hasClass("fa-ban")){
    		top.swal({
  			  title: "Are you sure?",
  			  text: "The client will not be able to see this product",
  			  type: "warning",
  			  showCancelButton: true,
  			  confirmButtonColor: "#DD6B55",
  			  confirmButtonText: "Yes",
  			  closeOnConfirm: true
	  		},
	  		 function(isConfirm) {
	  	        if (isConfirm) {	
	  	        	updateProductStatus(obj);	      			 
	  	        }
	  	    });
        }else{
        	updateProductStatus(obj);
        }  	
    });

 	function updateProductStatus( obj , callback ){
        
 		$(obj).parents("div.product-box").find("div.loading-wrapper").show();
    	var updaterequest = {
        	"param" : "pro_status",
        	"updated_value" : $(obj).find("i").hasClass("fa-ban") ? 0 : 1 ,
        	"pro_id" : $(obj).parents("div.product-box").find("input.product_id").val()
        };
    	console.log(updaterequest);
    	$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ProductRestController/updateProductField",
			contentType : "application/json",
			data :  JSON.stringify({"request_data" : updaterequest}),
			success : function(data){
				data = JSON.parse(data);				
				console.log(data);
				if(data.is_updated){
					
					if($(obj).find("i").hasClass("fa-ban")){
			     		$(obj).find("i").removeClass("fa-ban");
			     		$(obj).find("i").addClass("fa-circle-o");
			     		$(obj).find("span.check-box-text").html("Enable");
			     		$(obj).parents("div.product-box").find("div.disabled-product").show();
			     		
			        }else{
			        	$(obj).find("i").removeClass("fa-circle-o");
			     		$(obj).find("i").addClass("fa-ban");
			     		$(obj).find("span.check-box-text").html("Disable");
			     		$(obj).parents("div.product-box").find("div.disabled-product").hide();
			        }									
				}else{
					top.swal("Update fail!", "", "error"); 
				}
				$(obj).parents("div.product-box").find("div.loading-wrapper").hide();	 
			}
    	});		
    }

 	$(document).on("click", "li.event-delete", function(){

 		var obj = this;
 		top.swal({
			  title: "Are you sure?",
			  text: "This Product will be removed permanently!",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonColor: "#DD6B55",
			  confirmButtonText: "Yes",
			  closeOnConfirm: true
	  	},
	  	function(isConfirm) {
	  	    if (isConfirm) {
		  	    
	  	    	$(obj).parents("div.box-image").find("div.loading-wrapper").show();	
	  	    	var deleterequest = {
					"pro_id" : $(obj).parents("div.product-box").find("input.product_id").val()
	  		  	};

	  		  	console.log(deleterequest);
	  	    	$.ajax({
	  				type : "POST",
	  				url : $("#base_url").val()+"API/ProductRestController/deleteProduct",
	  				contentType : "application/json",
	  				data :  JSON.stringify({"request_data" : deleterequest}), 
	  				success : function(data){
	  					data = JSON.parse(data);				
	  					console.log(data);
	  					if(data.is_deleted){

	  						var imagename = $(obj).parents("div.product-box").find("input.product_image_name").val();
	  						if(!imagename) imagename = "default.jpg";
	  						
	  						 removeProductImageFromServer(imagename).success(function(){

		  						request["row_minus"]++;
	  							 $(obj).parents(".product-box").remove();
	  								  							
								var pro_cnt = parseInt($("#pro-total-record").text()) - 1;
								if(pro_cnt <= 0) pro_cnt = 0;
								$("#pro-total-record").html(pro_cnt);
		  						
	  							top.resizeIframe();
		  					}); 
	  						 
	  					}else{
	  						top.swal("Delete fail!", data.message, "error"); 
	  					}
	  					$(obj).parents("div.box-image").find("div.loading-wrapper").hide();
	  				}
	  	    	});		      			 
	  	    }
	  	});
 	});	


 	function removeProductImageFromServer( imagename ){
 		
    	return $.ajax({
    		url : $("#base_url").val()+"API/UploadRestController/removeProductImage",
    		type: "POST",
    		data : {    		
    			"productimage" : imagename   					
    		}
    	});	
    }
 	
    listProduct(function(){
    	window.parent.$(".iframe_hover").hide();
		window.parent.$("#updateShopframe").show();	
		top.resizeIframe();
		
    });    
     
	function listProduct( callback ){
		
		is_loading = true;
		$("#loading-more").show();
	    $.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ProductRestController/listProductByShopId",
			contentType : "application/json",
			data :  JSON.stringify({"request_data" : request}),
			success : function(data){
				data = JSON.parse(data);				
				console.log(data);

				pro_total_record = data.total_record;
				pro_total_page = data.total_page;
								
				if(data.response_data!= null && data.response_data.length <= 0){
					
					$("#loading-no-record").show();
				}else{

					pro_length += data.response_data.length;
					$("#pro-total-record").html(pro_total_record);
					$("#loading-no-record").hide();									
					$("#pro_data_result").tmpl(data.response_data).appendTo("#list_pro_result");							
				}

				request["page"]++;
				if( typeof callback === "function"){
					callback();
				}
				$("#loading-more").hide();
				setTimeout(function(){doResize();}, 200);
				is_loading = false;
			}
    	}); 
	}

	function doResize(){
		
		setTimeout(function(){top.resizeIframe();}, 500);
		var product_box = $("div.product-box").length;

		console.log("ELEMENT:"+ pro_length);
		console.log("TOTAL:"+ pro_length);
		
		if( product_box < pro_length  ){
			doResize();
		}
	}
	
	function formatDollar( price ){

		if(!price) return "";
		if(price%1 != 0){
			return "$"+parseFloat(price).toFixed(2);
		}else{
			return "$"+parseInt(price);
		}
	}

	function getSourceLoadingImg(){
		return $("#base_url").val()+"assets/nhamdis/img/updateload.gif";
	}

	function getSourceImage(src){	
		return $("#dis_img_path").val()+"/uploadimages/real/product/small"+src;
	}
	
	function imgError(image) {
	    image.onerror = "";
	    image.src = "http://www.jqueryscript.net/images/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg";
	    return true;
	}
    </script>
  </body>
</html>
