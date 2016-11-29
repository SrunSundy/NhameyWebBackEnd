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
	 		height: 25px;
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
	 		color: #ab0707;
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
	 		color: #f1f1f1;
	 		padding: 0 5px 5px 5px;
	 		font-weight: bold;
	 		border-bottom: 1px solid #BDBDBD;
	 		display:block;
	 		width: 97%;
	 		font-size: 18px;
	 		text-shadow: 1px 1px #212121;
	 	}
	 	
	 	p.image-des{
	 		color: #f1f1f1;
	 		padding: 0 5px 0 5px ;
	 		text-shadow: 1px 1px #212121;
	 		
	 	}
	 </style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
    
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
	       	 					<li >
	       	 						<a href="javascript:;">
	       	 							<span class="photo-type">Detail</span> 
	       	 							<span class="photo-num">300</span>
	       	 						</a>
	       	 					</li>	       	 					
	       	 					<li >
	       	 						<a href="javascript:;">
	       	 							<span class="photo-type">Logo</span> 
	       	 							<span class="photo-num">30</span>
	       	 						</a>
	       	 					</li>	       	 					
	       	 					<li class="li-select">
	       	 						<a href="javascript:;">
	       	 							<span class="photo-type on-select">Cover</span> 
	       	 							<span class="photo-num">20</span>
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
		       	 	 		
		       	 	 		<div class="box-image col-lg-2 col-sm-3 col-xs-6">
		       	 	 			<div class="row">
		       	 	 				<img class="image-inside" src="/NhameyWebBackEnd/uploadimages/cover/small/cover_kzW334bq4IobBmyUmk6H_1480412431.jpg" />
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
		       	 	 						<p class="image-des">This is testing h
		       	 	 						df sdfs ssssssdfsf sdfsfdsfdsfsdfsdfdf...</p>
		       	 	 					</div>
		       	 	 					
		       	 	 				</div>
		       	 	 			</div>		       	 	 			
		       	 	 		</div>
		       	 	 		
		       	 	 		<div class="box-image col-lg-2 col-sm-3 col-xs-6">
		       	 	 			<div class="row">
		       	 	 				<img class="image-inside" src="/NhameyWebBackEnd/uploadimages/cover/small/cover_kzW334bq4IobBmyUmk6H_1480412431.jpg" />
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
		       	 	 						<p class="image-des">This is testing h
		       	 	 						df sdfs ssssssdfsf sdfsfdsfdsfsdfsdfdf...</p>
		       	 	 					</div>
		       	 	 					
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
   
       
    $(window).load(function(){
   		top.resizeIframe();
   		window.parent.$(".iframe_hover").hide();
		window.parent.$("#updateShopframe").show();
    });

    $(window).on("resize", function() {
    	top.resizeIframe();
    });

    $("ul.ul-menu li").on("click", function(){
		$("ul.ul-menu li").removeClass("li-select");
        
		$(this).addClass("li-select");
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
