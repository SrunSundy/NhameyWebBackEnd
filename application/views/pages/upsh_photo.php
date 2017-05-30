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
	 	
	 	div.menu-header-bar{
	 		position: relative;
	 		height: 40px;
	 	}
	 	
	 	ul.ul-menu {
	 		position:absolute;
	 		bottom: 0;
	 		padding: 0;
	 		margin: 0;
	 		
	 	}
	 	
	 	ul.ul-menu li {
	 		list-style: none;
	 		display: inline;
	 		min-width: 60px;
	 		float: left;
	 		height: 30px;
	 		cursor: pointer;
	 		text-align: center;
	 		position: relative;
	 	}
	 	
	 	ul.ul-menu li:hover a span{
	 		color: #7c3535;
	 	}
	 	
	 	div.menu-header-bar ul.ul-menu li a{
	 		padding-left: 20px;
	 		padding-right: 20px;	 		
	 		position: relative;
	 	}
	 	
	 	div.menu-header-bar-small ul.ul-menu li a{
	 		padding-left: 7px;
	 		padding-right: 7px;		
	 		position: relative;
	 	}
	 	
	 	ul.ul-menu li.li-select a span{
	 		color: #616161;
	 	}
	 	
	 	ul.ul-menu li.li-select:before{
		    content:"";
		    display:block;
		    width:15px;
		    height: 15px;
		    -ms-transform: rotate(45deg); /* IE 9 */
    		-webkit-transform: rotate(45deg); /* Safari */
    		transform: rotate(45deg);
		   	background: white;
		   	border: 1px solid #E0E0E0;
		   	border-color: #E0E0E0 transparent transparent #E0E0E0;
		    position:absolute;
		   	bottom: -9px;
		    left: 45%;
		}
	 	
	 	span.photo-num{
	 		color: #9E9E9E;
	 		padding-left: 5px;
	 	}
	 	
	 	span.photo-type{
	 		color: #760707;
	 		font-size: 16px;
	 		font-weight: bold;
	 	}
	 	
	 	span.photo-num-small{
	 		color: #9E9E9E;
	 		padding-left: 5px;
	 		font-size: 10px;
	 	}
	 	
	 	span.photo-type-small{
	 		color: #760707;
	 		font-size: 10px;
	 		font-weight: bold;
	 	}
	 	
	 	button.add-more-img{
	 		border-radius: 0; 
	 		margin-top: 10px;
  			font-weight: bold;
	 	}
	 	
	 	button.add-more-img i{
	 		padding-right: 7px;
	 	}
	 	
	 	div.box-image-wrapper{
	 		position: relative;
	 		margin-left: 5px;
	 	}
	 	
	 	div.box-image{
	 		height: auto;	 		
	 		cursor: pointer;
	 		position: relative;
	 	}
	 	
	 	div.shop-image-front-show-box{
	 		height: 10%;
	 		width: 10%;
	 		position: absolute;
	 		top:10px;
	 		right: 10px;
	 		z-index: 1;
	 	}
	 	
	 	
	 	
	 	div.box-image:hover div.box-gradient{
	 		height: 80px;
	 		visibility: visible;
	 		
	 	}
	 	
	 	div.box-image:hover div.box-image-detail{
	 		visibility: visible;
	 	}
	 	
	 	img.image-inside{
	 		width: 100%;
	 		border-radius: 2px;
	 		 box-shadow: 1px 1px 2px #888888;
	 	}
	 	
	 	
	 	
	 	div.image-wrapper{
	 		 
	 		padding:5px 5px 0 0;
	 
	 	}
	 	
	 	div.box-gradient{
	 		width: 98%;
	 		height: 0px;
	 		visibility: hidden;
	 		position: absolute;
	 		bottom: 0;
	 		background: black;
	 		opacity: 0.8;
	 		background: -webkit-linear-gradient(transparent, black); /* For Safari 5.1 to 6.0 */
		    background: -o-linear-gradient(transparent, black); /* For Opera 11.1 to 12.0 */
		    background: -moz-linear-gradient(transparent, black); /* For Firefox 3.6 to 15 */
		    background: linear-gradient(transparent, black); 
		     -webkit-transition: all 0.08s ease-out ;
		    -moz-transition: all 0.08s ease-out ;
		    -o-transition: all 0.08s ease-out ;
		    transition: all 0.08s ease-out ;
	 	}
	 	
	 	div.box-image-detail{
	 		position: absolute;
	 		top: 0;
	 		left: 0;
	 		width: 100%;
	 		height: 100%;
	 		visibility: hidden;
	 		
	 	}
	 	
	 	div.menu-image-wrapper{
	 		position: absolute;
	 		left: 10px;
	 		top: 10px;	
	 	}
	 	
	 	div.menu-image-wrapper button{
	 		border-radius: 0;
	 		height: 30px;
	 	}
	 	
	 	div.image-detail{
			position: absolute;
			bottom: 0;
			
	 	}
	 	
	 	p.des-title{
	 		color: #fff;
	 		padding: 0 5px 5px 5px;
	 		font-weight: bold;
	 		border-bottom: 1px solid #fff;
	 		width: 97%;
	 		font-size: 18px;
	 		text-shadow: 1px 1px #212121;
	 	}
	 	
	 	p.image-des{
	 		color: #fff;
	 		padding: 0 5px 0 5px ;
	 		text-shadow: 1px 1px #212121;
	 		margin: 0;
	 	}
	 	
	 	p.no-image-des{
	 		color: #BDBDBD;
	 		font-style: italic;
	 		padding: 0 5px 0 5px ;
	 		font-size: 12px;
	 		text-shadow: 1px 1px #212121;
	 		margin: 0;
	 	}
	 	
	 	p.posted-date{
	 		color: #fff;
	 		margin: 0;
	 		margin-left: 5px;
	 		font-size:13px;
	 		text-shadow: 1px 1px #212121;
	 	}
	 	
	 	div.loading-image{
	 		position: absolute;
	 		top:0;
	 		left:0;
	 		width: 100%;
	 		height: 100%;
	 		background: #fff;	
	 		display: none;
	 	 
	 	}
	 	
	 	img.data-loading{
	 		position: absolute;
	 		top: 80px;
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
	 		display:none;
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
	 	
	 	div.menu-header-bar-small{
	 		position:relative;
	 	}
	 	
	 	span.check-box-text {
	 		
	 	}
	 	
	 	@media screen and (max-width: 768px) {
			div.menu-header-bar{
				display: none;
			}
			
			div.menu-header-bar-small{
				display: block !important;
			}
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
		div.loading-wrapper{
			display: none;
		}
		
		div.disabled-image-box{
			
			width: 98%;
			height: 100%;
			background: black;
			opacity: 0.8;
			position: absolute;
			top: 0;
			left: 0;
			
			
		}
		
		div.disabled-image-box p{
			color:#fff;
			font-size: 20px;
			font-weight: bold;
			text-align: center;
		    position: absolute;
		    top: 30%;
		    
		}
		
		@media screen and (max-width: 400px) {
			span.cnt-bookmark, span.cnt-share{
		 		display:none;
		 	}
		 	
		 	div.disabled-image-box p{
		 		font-size: 15px;
		 	}
		 	
		 	img.is-popular-product{
		 		width: 60px;
		 		height: 60px;
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
	       	 
	       	 	<div class="frame-title col-lg-12">
	       	 		<div class="row">
	       	 			<p class="tab-intro-text pull-left"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Photo</span></p>
	       	 			
	       	 			<button type="button" class="btn add-more-img btn-default pull-right">
	       	 				<i class="fa fa-plus-circle" aria-hidden="true"></i>Add image
	       	 			</button>
	       	 			
	       	 			
	       	 		</div>
	       	 	</div>
	       	 	
	       	 	<div class="menu-header-bar col-lg-7 col-sm-7">
	       	 		<div class="row">
	       	 			<div class="row">
	       	 				<ul class="ul-menu">
	       	 					<li class="item li-select">
	       	 						<a href="javascript:;">
	       	 							<input type="hidden" class="image_type" value="3" />
	       	 							<span class="photo-type">Detail</span> 
	       	 							<span class="photo-num" id="totol-detail-img"></span>
	       	 						</a>
	       	 					</li>	       	 					
	       	 					<li class="item">
	       	 						<a href="javascript:;">
	       	 							<input type="hidden" class="image_type" value="1" />
	       	 							<span class="photo-type">Logo</span> 
	       	 							<span class="photo-num" id="totol-logo-img"></span>
	       	 						</a>
	       	 					</li>	       	 					
	       	 					<li class="item">
	       	 						<a href="javascript:;">
	       	 							<input type="hidden" class="image_type" value="2" />
	       	 							<span class="photo-type on-select">Cover</span> 
	       	 							<span class="photo-num" id="totol-cover-img"></span>
	       	 						</a>
	       	 					</li>	       	 					
	       	 				</ul>
	       	 				
	       	 			
	       	 			</div>
	       	 		</div>
	       	 	</div>
	       	 	
	       	 	<div class="col-lg-5 col-sm-5">
	       	 		<div class="row">
	       	 			<div class="form-group" style="margin:0 0 7px 0">		                   
			                 <div class="input-group">
				                  
				                  <input type="text" class="form-control pull-right" placeholder="search by date range" id="createddate" >
				                  <div class="input-group-addon btn" id="search-img-btn">
				                      <i class="fa fa-search" aria-hidden="true"></i>
				                  </div>
			                 </div><!-- /.input group -->
			            </div><!-- /.form group -->
	       	 		</div>
	       	 	</div>
	       	 	
	       	 	<div style="clear:both;"></div>
	       	 	
	       	 	<div class="col-lg-12 menu-header-bar-small" style="min-height: 30px;display:none;">
	       	 		<div class="row">
		       	 		<ul class="ul-menu">
	       	 					<li class="item-small li-select">
	       	 						<a href="javascript:;">
	       	 							<input type="hidden" class="image_type" value="3" />
	       	 							<span class="photo-type-small">Detail</span> 
	       	 							<span class="photo-num-small" id="totol-detail-img-small"></span>
	       	 						</a>
	       	 					</li>	       	 					
	       	 					<li class="item-small">
	       	 						<a href="javascript:;">
	       	 							<input type="hidden" class="image_type" value="1" />
	       	 							<span class="photo-type-small">Logo</span> 
	       	 							<span class="photo-num-small" id="totol-logo-img-small"></span>
	       	 						</a>
	       	 					</li>	       	 					
	       	 					<li class="item-small">
	       	 						<a href="javascript:;">
	       	 							<input type="hidden" class="image_type" value="2" />
	       	 							<span class="photo-type-small on-select">Cover</span> 
	       	 							<span class="photo-num-small" id="totol-cover-img-small"></span>
	       	 						</a>
	       	 					</li>	       	 					
	       	 			</ul> 
	       	 		</div>
					     	 		
	       	 	</div>
	       	 	
	       	 </div>
	       	 <div class="tab-body col-lg-12" style="min-height: 500px;position:relative;">
	       	 	 <div class="row">
		       	 	 <div class="box-image-wrapper col-lg-12">
		       	 	 	<div class="row">
							<div id="image_display_result"></div>
								  	 	 		
		       	 	 	</div>		       	 	 	
		       	 	 </div>
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
	       	 	 <div class="loading-image" style="z-index: 10" align="center" id="loading-image">
					<img class="data-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
				 </div>		       	 	
	       	 </div>
	    </div>
	       	 			
    </div><!-- ./wrapper -->

   
    <?php include 'imports/scriptimport.php'; ?>
   <script id="image_data_result" type="text/x-jQuery-tmpl">
		<div class="box-image col-lg-2 col-sm-3 col-xs-6">
			 <input type="hidden" class="shop_image_name" value="{{= sh_img_name }}" />
		     <div class="row">
				 <div class="loading-wrapper">
					<div class="loading-event-box"></div>
					<div class="loading-event-img">
						<img src="{{= getSourceLoadingImg()}}"  class="loading-img-in" style="width: 25px;height:25px;"/>
				 	</div>
				 </div>
				 				
				 <div class="disabled-image-box" style="display:{{if sh_img_status == 0}}block{{else}}none{{/if}}">
					<p>This image has been disabled!</p>
				 </div>
				 			
				 <div class="shop-image-front-show-box"  >
					{{if sh_img_is_front_show == 1 }}						
 						<img src="{{= getCheckImgSource() }}" style="width: 20px;height:20px;" title="This image will be shown in the front page." />						
					{{/if}}		
				 </div>
				 <div class="image-wrapper">
					<img class="image-inside" src="{{= getSourceImage(sh_img_name) }}" onerror = "imgError(this)" />
				 </div>		       	 
		       	 <div class="box-gradient"></div>
		       	 <div class="box-image-detail">
		       	 	 <div class="image-event">
					   
		       	 	 	<div class="menu-arrow">			       	 				
			       	 		<div class="dropdown menu-image-wrapper" >
								<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</button>
								<ul class="dropdown-menu image-event-list" style="width:30px;" >
									
								
								{{if sh_img_type == 3 }}
									<li class="event-front-show">
										<a href="javascript:;">	
											<input type="hidden" class="sh_img_id" value="{{= sh_img_id}}"/>	
											{{if sh_img_is_front_show == 1 }}																					
												<i class="fa fa-times-circle" aria-hidden="true"></i>
												<span class="check-box-text" >Uncheck</span>
											{{else}}																							
												<i class="fa fa-check-circle" aria-hidden="true"></i>
												<span class="check-box-text" >Check</span>
											{{/if}}											
										</a>
									</li>
								{{/if}}
									<li class="event-status">
										<a href="javascript:;">
											<input type="hidden" class="sh_img_id" value="{{= sh_img_id}}"/>	
											{{if sh_img_status == 1}}
												<i class="fa fa-ban" aria-hidden="true"></i>
												<span class="check-box-text" >Disable</span>
											{{else}}
												<i class="fa fa-circle-o" aria-hidden="true"></i>
												<span class="check-box-text" >Enable</span>
											{{/if}}
										</a>
									</li>
									<li class="event-delete">
										<input type="hidden" class="sh_img_id" value="{{= sh_img_id}}"/>
										<a href="javascript:;">
											<i class="fa fa-trash" aria-hidden="true"></i>
											Delete
										</a>
									</li>
									
														
								</ul>
							</div>
			       	 	</div>
			       	 					       	 	 	
		       	 	 </div>
		       	 	 					
		       	 	 <div class="image-detail">
		       	 	 	<p class="des-title">Description</p>
						{{if sh_img_remark == null || sh_img_remark == ""}}
							<p class="no-image-des">NO INFORMATION!</p>
						{{else}}
							<p class="image-des">{{= cutString(sh_img_remark,60)}}</p>
						{{/if}}		       	 	 						
		       	 	 	<p class="posted-date">posted: {{= sh_img_created_date }}</p>
		       	 	 </div>
		       	 	 					
		       	 </div>
		      </div>		       	 	 			
		 </div>
					           	
   	</script>
    <script>

    var request ={
  
		"row" : 16,
		"page": 1,
		"row_minus" : 0,
		"sh_img_status": 3,
		"shop_id" : $("#shop_id").val(),
		"sh_img_type" : 3,
		"start_date_srch": "",
		"end_date_srch": ""
	
   	}; 
    var folder = "shopimages/small/";
	var total_detail_page = 1;
	var total_cover_page = 1;
	var total_logo_page = 1;

	 var image_length = 0;

	var start_date_srch;
	var end_date_srch;

	var is_loading = false;
  
    $(window).load(function(){
    	top.$(window).scrollTop(0);
    	top.resizeIframe();		
    });

    $(window).on("resize", function() {
    	top.resizeIframe();
    });

    $("ul.ul-menu li.item-small,ul.ul-menu li.item").on("click", function(){

    	
        if($(this).hasClass("li-select")){
			return;
        }

        $("ul.ul-menu li.item").removeClass("li-select");
		$("ul.ul-menu li.item-small").removeClass("li-select");
		
		$("ul.ul-menu li.item").eq($(this).index()).addClass("li-select");
		$("ul.ul-menu li.item-small").eq($(this).index()).addClass("li-select");

		var image_type = $(this).find("input.image_type").val();
		request["page"] = 1;
		request["row_minus"] = 0;
		request["sh_img_type"] = image_type;

		switch(image_type){
			case "1": 
				folder = "logo/medium/";
				break;
			
			case "2": 
				folder ="cover/small/";
				break;
			
			case "3": 
				folder ="shopimages/small/";
				break;			
		}

		$("#loading-image").show();
		loadShopImage(function(){
			$("#loading-image").hide();
			top.resizeIframe();
		}, true);
    });

    $(document).on("click", "ul.image-event-list li.event-front-show", function(){
        
    	$(this).parents("div.box-image").find("div.loading-wrapper").show();
        var obj = this;
      	var updaterequest = {
			"param" : "sh_img_is_front_show",
			"updated_value" : $(this).find("i").hasClass("fa-times-circle") ? 0 : 1 ,
			"sh_img_id" : $(this).find("input.sh_img_id").val(),
			"shop_id" : $("#shop_id").val()
		};

		console.log(updaterequest);
    	$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ShopImageRestController/updateShopImageIsFontShow",
			contentType : "application/json",
			data :  JSON.stringify({"request_data" : updaterequest
			}),
			success : function(data){
				data = JSON.parse(data);				
				console.log(data);
				if(data.is_updated){
					
					if($(obj).find("i").hasClass("fa-times-circle")){
			     		$(obj).find("i").removeClass("fa-times-circle");
			     		$(obj).find("i").addClass("fa-check-circle");
			     		$(obj).find("span.check-box-text").html("Check");
			     		$(obj).parents("div.box-image").find("div.shop-image-front-show-box").children().remove();
			        }else{
			        	$(obj).find("i").removeClass("fa-check-circle");
			     		$(obj).find("i").addClass("fa-times-circle");
			     		$(obj).find("span.check-box-text").html("Uncheck");
			     		$(obj).parents("div.box-image").find("div.shop-image-front-show-box").append('<img src="'+getCheckImgSource()+'" style="width: 20px;height:20px;" />');
			        }										
				}	
				$(obj).parents("div.box-image").find("div.loading-wrapper").hide();		
			}
    	});
     	
    });

    $(document).on("click", "ul.image-event-list li.event-status", function(){
    	var obj = this;

    	if($(obj).find("i").hasClass("fa-ban")){
    		top.swal({
  			  title: "Are you sure?",
  			  text: "The client will not be able to see this image",
  			  type: "warning",
  			  showCancelButton: true,
  			  confirmButtonColor: "#DD6B55",
  			  confirmButtonText: "Yes",
  			  closeOnConfirm: true
	  		},
	  		 function(isConfirm) {
	  	        if (isConfirm) {	
	  	        	updateShopImageStatus(obj);	      			 
	  	        }
	  	    });
        }else{
        	updateShopImageStatus(obj);
        }  	
    });

    function updateShopImageStatus( obj , callback ){
        
    	$(obj).parents("div.box-image").find("div.loading-wrapper").show();
    	var updaterequest = {
        		"param" : "sh_img_status",
        		"updated_value" : $(obj).find("i").hasClass("fa-ban") ? 0 : 1 ,
        		"sh_img_id" : $(obj).find("input.sh_img_id").val()
        };
    	console.log(updaterequest);
    	$.ajax({
			type : "POST",
				url : $("#base_url").val()+"API/ShopImageRestController/updateShopImageField",
				contentType : "application/json",
				data :  JSON.stringify({"request_data" : updaterequest
			}),
			success : function(data){
				data = JSON.parse(data);				
				console.log(data);
				if(data.is_updated){
					
					if($(obj).find("i").hasClass("fa-ban")){
			     		$(obj).find("i").removeClass("fa-ban");
			     		$(obj).find("i").addClass("fa-circle-o");
			     		$(obj).find("span.check-box-text").html("Enable");
			     		$(obj).parents("div.box-image").find("div.disabled-image-box").show();
			     		//top.swal("Shop is updated!", "The client will not be able to view this image", "success"); 
			        }else{
			        	$(obj).find("i").removeClass("fa-circle-o");
			     		$(obj).find("i").addClass("fa-ban");
			     		$(obj).find("span.check-box-text").html("Disable");
			     		$(obj).parents("div.box-image").find("div.disabled-image-box").hide();
			        }									
				}else{
					top.swal("Update fail!", "", "error"); 
				}
				$(obj).parents("div.box-image").find("div.loading-wrapper").hide();	 
			}
    	});		
    }

    $(document).on("click", "ul.image-event-list li.event-delete", function(){

    	var obj = this;
    	var image_name_remove = $(obj).parents("div.box-image").find("input.shop_image_name").val();
    	
    	if(request["sh_img_type"] == 1 || request["sh_img_type"] == 2){
    		var current_cover_name = $("#cover-image-display-hidden", window.parent.document).val();
        	var current_logo_name = $("#logo-image-display-hidden", window.parent.document).val();
        
        	var textimg = "";
        	if(request["sh_img_type"] == 1) textimg ="logo";
        	if(request["sh_img_type"] == 2) textimg ="cover";
        	
        	if(current_cover_name.trim() == image_name_remove || current_logo_name == image_name_remove){
        		top.swal("Delete fail!", "This photo is currently used as shop's "+textimg, "error"); 
        		return;
            }        	      	
        }
            	   
    	top.swal({
			  title: "Are you sure?",
			  text: "This Photo will be removed permanently!",
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
					"shop_id" :  $("#shop_id").val(),
					"sh_img_id" : $(obj).find("input.sh_img_id").val(),
					"image_type" : request["sh_img_type"],
					"image_name" : image_name_remove
	  		  	};

	  		  	console.log(deleterequest);
	  	    	$.ajax({
	  				type : "POST",
	  				url : $("#base_url").val()+"API/ShopImageRestController/deleteShopImage",
	  				contentType : "application/json",
	  				data :  JSON.stringify({"request_data" : deleterequest}), 
	  				success : function(data){
	  					data = JSON.parse(data);				
	  					console.log(data);
	  					if(data.is_deleted){
	  						
	  						var imagename = $(obj).parents("div.box-image").find("input.shop_image_name").val();
	  						removeShopImageFromServer(imagename).success(function(){

		  						request["row_minus"]++;
	  							$(obj).parents(".box-image").remove();

	  							if(request["sh_img_type"] == 1){

									var logo_cnt = parseInt($("#totol-logo-img").text()) - 1;
									if(logo_cnt <= 0) logo_cnt = 0;
									$("#totol-logo-img").html(logo_cnt);
		  							$("#totol-logo-img-small").html(logo_cnt);
		  						}else if(request["sh_img_type"] == 2){

			  						var cover_cnt = parseInt($("#totol-detail-img").text()) -1;
		  							$("#totol-detail-img").html(cover_cnt);		  							
		  							$("#totol-cover-img-small").html(cover_cnt);
		  						}else if(request["sh_img_type"] == 3){

									var detail_cnt = parseInt($("#totol-detail-img").text())-1;
									if(detail_cnt <= 0) detail_cnt = 0;
									$("#totol-detail-img").html(detail_cnt);
									$("#totol-detail-img-small").html(detail_cnt);
		  						}
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

    function removeShopImageFromServer( imagename ){

    	return $.ajax({
    		url : $("#base_url").val()+"API/UploadRestController/removeShopSingleImage",
    		type: "POST",
    		data : {
    			"removeimagedata":{
    				"image_type" : request["sh_img_type"],
    				"imagename" : imagename
    			}			
    		}
    	});	
    }

    $('#createddate').daterangepicker({      
        timePicker: false,
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-danger',
        cancelClass: 'btn-small',
        format: 'YYYY/MM/DD'
       
        
   		}/* , function(start, end) {
		   start_date_srch = start.format('YYYY-MM-DD');
		   end_date_srch = end.format('YYYY-MM-DD');
   } */);

    $("#search-img-btn").on("click", function(){
        
    	request["page"] = 1; 
    	request["row_minus"] = 0; 	
		var combodate = $('#createddate').val().split("-");
		if(combodate.length < 2 || combodate.length > 2){
			alert("Invalid Date!");
		}else{
			request["start_date_srch"] = combodate[0];
			request["end_date_srch"] = combodate[1];	
		 	$("#loading-image").show();
			loadShopImage(function(){
				$("#loading-image").hide();
				top.resizeIframe();
			}, true);		
		}
		       
      
    });

    loadShopImage(function(){
    	window.parent.$(".iframe_hover").hide();
		window.parent.$("#updateShopframe").show();
		top.resizeIframe();
    }, true);
    
	function loadShopImage( callback, isEmpty ){
		is_loading = true;
		console.log(request);
		$("#loading-more").show();
		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/ShopImageRestController/listShopImageByShopId",
			contentType : "application/json",
			data :  JSON.stringify({"request_data" : request}),
			success : function(data){
				data = JSON.parse(data);				
				console.log(data);
				$("#totol-detail-img").html(data.total_detail);
				$("#totol-logo-img").html(data.total_logo);
				$("#totol-cover-img").html(data.total_cover);

				$("#totol-detail-img-small").html(data.total_detail);
				$("#totol-logo-img-small").html(data.total_logo);
				$("#totol-cover-img-small").html(data.total_cover);

				total_detail_page = data.total_detail_page;
				total_cover_page = data.total_cover_page;
				total_logo_page = data.total_logo_page;

				if(isEmpty){
					$("#image_display_result").empty();
				}	
				if(data.response_data!= null && data.response_data.length <= 0){
					$("#loading-no-record").show();
				}else{
					image_length +=data.response_data.length;
					$("#loading-no-record").hide();									
					$("#image_data_result").tmpl(data.response_data).appendTo("#image_display_result");							
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
		var box_img = $("div.box-image").length;

		console.log("ELEMENT:"+ box_img);
		console.log("TOTAL:"+ image_length);
		
		if( box_img < image_length  ){
		//	doResize();
		}
	}

	function getSourceImage(src){	
		return $("#base_url").val()+"uploadimages/"+folder+src;
	}

	function getSourceLoadingImg(){
		return $("#base_url").val()+"assets/nhamdis/img/updateload.gif";
	}

	function getCheckImgSource(){
		return $("#base_url").val()+"assets/nhamdis/img/check.jpg";
	}

	function imgError(image) {
	    image.onerror = "";
	    image.src = "http://www.jqueryscript.net/images/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg";
	    return true;
	}
	
    </script>
  </body>
</html>
