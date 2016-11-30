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
	 		min-width: 80px;
	 		float: left;
	 		height: 30px;
	 		cursor: pointer;
	 		text-align: center;
	 		position: relative;
	 	}
	 	
	 	ul.ul-menu li:hover a span{
	 		color: #7c3535;
	 	}
	 	
	 	ul.ul-menu li a{
	 		padding-left: 20px;
	 		padding-right: 20px;	 		
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
	 	
	 	div.box-image:hover div.box-gradient{
	 		height: 80px;
	 		visibility: visible;
	 	}
	 	
	 	div.box-image:hover div.box-image-detail{
	 		display: block;
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
	 	}
	 	
	 	div.box-image-detail{
	 		position: absolute;
	 		top: 0;
	 		left: 0;
	 		width: 100%;
	 		height: 100%;
	 		display:none;
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
	 		font-size: 5px;
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
	 		top: 80px;
	 		width: 100%;
	 		height: 100%;
	 		background: #fff;	
	 		display: none;
	 	 	
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
	       	 	
	       	 	<div class="menu-header-bar col-lg-12">
	       	 		<div class="row">
	       	 			<div class="row">
	       	 				<ul class="ul-menu">
	       	 					<li class="li-select">
	       	 						<a href="javascript:;">
	       	 							<input type="hidden" class="image_type" value="3" />
	       	 							<span class="photo-type">Detail</span> 
	       	 							<span class="photo-num" id="totol-detail-img"></span>
	       	 						</a>
	       	 					</li>	       	 					
	       	 					<li >
	       	 						<a href="javascript:;">
	       	 							<input type="hidden" class="image_type" value="1" />
	       	 							<span class="photo-type">Logo</span> 
	       	 							<span class="photo-num" id="totol-logo-img"></span>
	       	 						</a>
	       	 					</li>	       	 					
	       	 					<li >
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
	       	 	
	       	 </div>
	       	 <div class="tab-body col-lg-12">
	       	 	 <div class="row">
		       	 	 <div class="box-image-wrapper col-lg-12">
		       	 	 	<div class="row">
							<div id="image_display_result"></div>
							<div class="loading-image" align="center" id="loading-image">
								<img class="data-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
							</div>	 	 		  	 	 		
		       	 	 	</div>		       	 	 	
		       	 	 </div>
	       	 
	       	 	 </div>	       	 	
	       	 </div>
	    </div>
	       	 			
    </div><!-- ./wrapper -->

   
    <?php include 'imports/scriptimport.php'; ?>
   <script id="image_data_result" type="text/x-jQuery-tmpl">
		<div class="box-image col-lg-2 col-sm-3 col-xs-6">
			 <input type="hidden" class="shop_id" value="{{= shop_id }}"/>
		     <div class="row">
				 <div class="image-wrapper">
					<img class="image-inside" src="{{= getSourceImage(sh_img_name) }}"  onerror="imgError(this);"/>
				 </div>		       	 
		       	 <div class="box-gradient"></div>
		       	 <div class="box-image-detail">
		       	 	 <div class="image-event">
		       	 	 	<div class="menu-arrow">			       	 				
			       	 		<div class="dropdown menu-image-wrapper" >
								<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</button>
								<ul class="dropdown-menu " style="width:30px;" >
									<li>
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
		"sh_img_status": 3,
		"shop_id" : $("#shop_id").val(),
		"sh_img_type" : 3
	
   	}; 
    var folder = "shopimages/small/";

    
    $(window).load(function(){
    	top.resizeIframe();		
    });

    $(window).on("resize", function() {
    	top.resizeIframe();
    });

    $("ul.ul-menu li").on("click", function(){

        if($(this).hasClass("li-select")){
			return;
        }
		$("ul.ul-menu li").removeClass("li-select");       
		$(this).addClass("li-select");

		var image_type = $(this).find("input.image_type").val();
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
	
		loadShopImage();
    });

    loadShopImage();
	function loadShopImage(){

		$("#loading-image").show();
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
				
				$("#image_display_result").empty();
				$("#image_data_result").tmpl(data.response_data).appendTo("#image_display_result");

				top.resizeIframe();

				$("#loading-image").hide();
				window.parent.$(".iframe_hover").hide();
				window.parent.$("#updateShopframe").show();
				
			}
    	});
	}

	function getSourceImage(src){
	
		return $("#base_url").val()+"uploadimages/"+folder+src;
	}


	function imgError(image) {
	    image.onerror = "";
	    image.src = "http://www.jqueryscript.net/images/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg";
	    return true;
	}
	
    </script>
  </body>
</html>
