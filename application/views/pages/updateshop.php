<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>
  <style>
  	div.content-nham-wrapper{
  		width: 93%;
  		margin: 0 auto;
  	
  		
  	} 
  	div.cover-wrapper-left{
  		position:relative;
  		min-height: 500px;
  	}
  	div.profilemenu-wrapper-right{
  		
  		min-height: 500px;
  		position: fixed;
  		right: 0;
  		
  		
  	}
  	div.bar-cover-wrapper{
  		
  	}
  	div.cover-box{
  		height: 300px;
  		background: #263238;
  		position:relative;
  		z-index:0;
  		
  	}
  	div.img-cover-box{
  		width: 100%;
  		height: auto;
  		position: absolute;
  		background:#263238;
  		top:0;
  		border: 1px solid #BDBDBD;
  		z-index:5;
  		border-top:0;
  	}
  	div.bar-box{
  		height: 50px;
  		background: #fff;
  		position:relative;
  		z-index:10;
  		border: 1px solid #E0E0E0;
  	}
  	div.small-bar-box{
  		height: 50px;
  		background: #fff;
  		min-height: 150px;
  		
  		position:relative;
  		z-index:15;
  	}
  	.img-cover{
  		width: 100%;
  		height: auto;
  	}
  	div.fake-info-wrapper{
  		position:relative;
  		min-height:500px;
  		z-index: 10;
  		background: #ecf0f5;
  	}

  	div.small-logo-wrapper{
  		
  		width: 100%;
  		height: 50px;
  				
  	}
  	div.small-logo-box{
  		width: 135px;
  		height: 135px;
  		padding: 5px ;
  		position:absolute;
  		top: -70px;
  		left: 15px;
  		background: white;
  	}
  	div.space-logo-box{
  		float:left;
  		width:155px;
  		height:50px;	
  	}
  	
  	div.small-shop-name{
  		float:left;
  		height:50px;
  		margin-left: 15px;
  		margin-top: 10px;
  		
  	}
  	.shop-name-text{
  		font-weight:bold;
  		margin-top:0px;
  		word-wrap: break-word;
  	}
  	
  	.shop-name-extra-text{
  	
  		margin-top:-6px;
  		line-height: 16px;
  		color:#90949c;
  		font-family: HelveticaNeue-Medium, helvetica, arial, sans-serif;
    	font-size: 14px;
  		word-wrap: break-word;
  	}
  	.big-shop-name-text{
  	
  		margin-top:13px;
  		font-family: HelveticaNeue-Light, helvetica, arial, sans-serif;
    	font-size: 24px;
    	line-height: 26px;
    	vertical-align: middle;
    	word-wrap: normal;
  	}
  	
  	div.contact-shop-block{
  		width: 100%;
  		height: 50px;
  		
  		position:absolute;
  		bottom: 0;
  	}
  	.small-logo-img{
  		width: 100%;
  		height: 100%;
  	}
  	.logo-box{
  		width: 180px;
  		height: 180px;
  		margin-top: 15px;
  		background: white;
  		padding: 5px;
  		border-radius: 2px;
  		position:relative;
  		border: 1px solid #E0E0E0;
  		
  	}
  	.logo-box:hover div.edit-logo,.logo-box:hover div.edit-logo-button-wrapper{
  		visibility: visible;
  		height: 70px;
  	}
  	div.edit-logo{
  		position:absolute;
  		bottom: 0;
  		left:0;
  		width: 100%;
  		height:0;
  		background: black;
  		opacity: 0.5;
  		visibility: hidden;
  		-webkit-transition: all 0.1s ;
		-moz-transition: all 0.1s ;
		-ms-transition: all 0.1s;
		-o-transition: all 0.1s ;
		transition: all 0.1s ;
  	}
  	div.edit-logo-button-wrapper{
  		position:absolute;
  		bottom: 0;
  		left:0;
  		width: 100%;
  		height:0; 		
  		visibility: hidden;
  		-webkit-transition: all 0.1s ;
		-moz-transition: all 0.1s ;
		-ms-transition: all 0.1s;
		-o-transition: all 0.1s;
		transition: all 0.1s ;
  	
  	}
  	div.shop-name{
  		width: 180px;
  	}
  	.logo-img{
  		width: 100%;
  		height: 100%;
  		border: 1px solid #E0E0E0;
  	}
  	
  	.notify-btn{
  		
  		width:280px;
  		float:left;
		margin-left: 7px;
  		margin-top:7px;
  		
  	}
  	
  	
  	
  	div.menu-wrapper{
  		margin-top: 30px;
  		width: 180px;
  	}
  	
  	ul.menu-ul{
  		width: 180px;
  	}
  	ul.menu-ul li.item{
  		list-style: none;
  		display:block;
		float:right;
  		width:180px;
  		height:35px;
  	}
  	ul.menu-ul li.item a:hover{
  		 
  		background:rgba(0, 0, 0, .05);
  	}
  	.li-click{
  		font-weight: bold;
  		background:rgba(0, 0, 0, .05);
  		border-right: 5px solid #dd4b39; 
  	}
  	ul.menu-ul li.item a{
  		text-decoration: none;  		
  		display:block;
  		height:35px;
  		line-height: 35px;
  		color: #4b4f56;
  		font-size: 15px;
  		padding-right: 15px;
  		text-align: right;
  		font-family: HelveticaNeue-Light, helvetica, arial, sans-serif;
  	}
  div.shop-edit-form-wrapper{
  	
  	  min-height: 500px;
  	  background: #fff;
  	  border: 1px solid #E0E0E0;
  }
  @media screen and (max-width: 1195px) {
     .small-bar-box {
        display:block !important;
     }
     .profilemenu-wrapper-right{
     	display: none;
     }
     .bar-box{
     	display: none;
     }
  }
  .top-zero{
  	 top: 0px;
  }
  
  
  
  .nham-tab{
  	 display:none;
  }
  
  </style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
    
    <input type="hidden" id="shop_id" value="1"/>
    
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
	       	 			<div class="img-cover-box">
	       	 				   <img src="../assets/nhamdis/img/test.jpg"   class="img-cover" /> 
	       	 			</div> 
	       	 			<div class="cover-box">
	       	 				
	       	 			</div>
	       	 			<div class="bar-box"  >
	       	 				<div class="col-lg-4">
	       	 					<div class="row">
	       	 						<button type="button" class="btn btn-danger notify-btn">Notify</button>
	       	 					</div>	 
	       	 				</div>
	       	 				<div class="col-lg-8">
	       	 					      	 					
	       	 				</div>
	       	 				<div style="clear:both;"></div>
	       	 			</div>
	       	 			<div class="small-bar-box" style="display:none">	 
	       	 				     	 				       	 				
		       	 			<div class="small-logo-wrapper">
		       	 				<div class="space-logo-box" >
			       	 				<div class="small-logo-box">
			       	 					<img src="../assets/nhamdis/img/test.jpg" class="small-logo-img"/>
			       	 				</div> 
		       	 				</div>
		       	 					
		       	 				<div class="small-shop-name" >
		       	 					<h3 class="shop-name-text">FC Bayern Manich</h3>	 
		       	 					<p class="shop-name-extra-text" >( @the best munich )</p>	       	 	
		       	 				</div>
		       	 				<div style="clear:both;"></div>
		       	 				<div class="contact-shop-block">		       	 				
		       	 					<button type="button" class="btn btn-danger" style="border-radius:0;width:200px;float:right;margin-right:5px;margin-top:10px;">Notify</button>			       	 						       	 					
		       	 				</div>			       	 				
		       	 			</div>		       	 				       	 					       	 					       	 			
	       	 			</div>
	       	 		</div>
	       	 		<div class="fake-info-wrapper">
	       	 			<div class="col-lg-12" style="height: 20px;"></div>
	       	 			<div class="col-lg-12 shop-edit-form-wrapper">
	       	 				<div class="row">
	       	 					<div class="nham-tab" id="overview" style="display:block">
	       	 						Overview
	       	 					</div>
	       	 					<div class="nham-tab" id="information">
	       	 						Information
	       	 					</div>
	       	 					<div class="nham-tab" id="photo">
	       	 						Photo
	       	 					</div>
	       	 					<div class="nham-tab" id="product">
	       	 						Product
	       	 					</div>
	       	 					<div class="nham-tab" id="map">
	       	 						Map
	       	 					</div>
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
		    	<div class="col-lg-12 logo-wrapper" style="margin-left:35px;">
		    		<div class="logo-box">
		    			 <img src="../assets/nhamdis/img/test.jpg" class="logo-img"/> 
		    			 <div class="edit-logo"></div>
		    			 <div class="edit-logo-button-wrapper">
		    			 	<p style="color:white">ABC</p>
		    			 </div>
		    		</div>
		    		<div class="shop-name">
		    			 <h3 class="big-shop-name-text">Khmerload</h3>	 
		       	 		 <p class="shop-name-extra-text" >( @the best munich )</p>	       	
		    		</div>
		    		<div class="menu-wrapper">
		    			<ul class="menu-ul">
		    				<li class="item">
		    					<input type="hidden" value="overview"/>
		    					<a href="javascript:;">Overview</a>
		    				</li>
		    				<li class="item">
		    					<input type="hidden" value="information"/>
		    					<a href="javascript:;">Inforamtion</a>
		    				</li>
		    				<li class="item">
		    					<input type="hidden" value="photo"/>
		    					<a href="javascript:;">Photo</a>
		    				</li>
		    				<li class="item">
		    					<input type="hidden" value="product"/>
		    					<a href="javascript:;">Product</a>
		    				</li>
		    				<li class="item">
		    					<input type="hidden" value="map"/>
		    					<a href="javascript:;">Map</a>
		    				</li>
		    			</ul>
		    		</div>
		    	</div>
		    	<div style="clear:both;"></div>
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
    <script>
   
   
    var checkHasCover = true;
	$(".img-cover").error(function() {
	    checkHasCover = false;
	 });
    $(window).load(function(){
    	 $(window).scrollTop(200);
    	resizeOnWindow();
    });

	$(".menu-ul li.item").on("click", function(){
		$(".menu-ul li.item").removeClass("li-click");
		$(this).addClass("li-click");
		
		var tabid = $(this).find("input").val();
		$(".nham-tab").css("display","none");
		$("#"+tabid).css("display", "block");
	});
    
     $(window).scroll(function(){
    	   var scrollHeight = $(document).scrollTop(); 
    	   if(scrollHeight >= 100){    		
				$(".profilemenu-wrapper-right").addClass("top-zero");
				
           }else{
        	   $(".profilemenu-wrapper-right").removeClass("top-zero");
            }
     })
   
   
	$(window).on("resize",function(){
		
		if(checkHasCover){
           var imgboxheight = $(".img-cover-box").height();
           var coverboxheight = $(".cover-box").height();
		   console.log($(window).width());                                       
           if(coverboxheight > imgboxheight){         
        	  $(".cover-box").height($(".img-cover-box").height());                           
           }else{        	
           	 var newheight =  $(".img-cover-box").height();
             if(newheight < 300){               	
               	 newheight++;
             }else{
               	 newheight =300;
             } 
           	 $(".cover-box").height(newheight);
           }
		}else{
			 $(".cover-box").height(250);
		}
       	
    });
  
    function resizeOnWindow(){
      	console.log($(".cover-box").height());
      	console.log($(".img-cover-box").height());
     	   if(checkHasCover){
     		  var imgboxheight = $(".img-cover-box").height();
              var coverboxheight = $(".cover-box").height();
              
              if(coverboxheight < imgboxheight){
          	  		$(".cover-box").height(300);
           	  }else{
           		console.log($(".img-cover-box").height());
           		console.log($(".bar-cover-wrapper").find(".img-cover-box").html());
           		$(".cover-box").height($(".img-cover-box").height());
               }
           }else{
        	   $(".cover-box").height(250);
            }
    	  
      
       
    }














    
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
