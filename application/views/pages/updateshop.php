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
  		background:gray;
  		min-height: 500px;
  	}
  	div.bar-cover-wrapper{
  		
  	}
  	div.cover-box{
  		height: 300px;
  		background: pink;
  		position:relative;
  		z-index:0;
  	}
  	div.img-cover-box{
  		width: 100%;
  		height: auto;
  		position: absolute;
  		background:green;
  		top:0;
  		z-index:5;
  	}
  	div.bar-box{
  		height: 50px;
  		background: gray;
  		position:relative;
  		z-index:10;
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
  		height:500px;
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
  	}
  	
  	.shop-name-extra-text{
  	
  		font-size: 17px;
  		margin-top:-10px;
  		color:gray;
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
      <div class="content-wrapper">
      	 <!-- wrapper of both profile and cover -->  
       	 <div class="content-nham-wrapper">
       	 	<!-- wrapper of cover -->
       	 	<div class="col-lg-9 cover-wrapper-left" >
       	 		<div class="row">
	       	 		<!-- wrapper of info and cover -->
	       	 		<div class="bar-cover-wrapper">
	       	 			<div class="img-cover-box">
	       	 				   <img src="../assets/nhamdis/img/new2.jpg" class="img-cover" /> 
	       	 			</div> 
	       	 			<div class="cover-box">
	       	 				
	       	 			</div>
	       	 			<div class="bar-box"  >
	       	 				
	       	 			</div>
	       	 			<div class="small-bar-box" style="display:none">	 
	       	 				     	 				       	 				
		       	 			<div class="small-logo-wrapper">
		       	 				<div class="space-logo-box" >
			       	 				<div class="small-logo-box">
			       	 					<img src="../assets/nhamdis/img/logo.jpg" class="small-logo-img"/>
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
	       	 			
	       	 		</div>
	       	 		<!-- end wrapper of info and cover -->
       	 		</div>
       	 	</div>
       	 	<!-- end wrapper of cover -->
       	 	<!-- wrapper of profile -->
		    <div class="col-lg-3 profilemenu-wrapper-right">
		    
		    </div>
		    <!-- end wrapper of profile -->
         </div>
         <!--end wrapper of both profile and cover -->        
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
      	
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

    $(window).load(function(){
    	resizeOnWindow();
    });
    

	 $(window).on("resize",function(){
		 if(checkHasCover()){
           var imgboxheight = $(".img-cover-box").height();
           var coverboxheight = $(".cover-box").height();
		   console.log($(window).width());                                       
           if(coverboxheight > imgboxheight){         
        	  $(".cover-box").height($(".img-cover-box").height());               
             //  $(".cover-box").height(newheight);
           }else{
        	
           	 var newheight =  $(".img-cover-box").height();
               if(newheight < 300){
               	
               	newheight++;
                }else{
               	 newheight =300;
                } 
           	//console.log(newheight);
           	$(".cover-box").height(newheight);
           }
		 }else{
			 $(".cover-box").height(250);

		}
       	
       });
    function checkHasCover(){      
		if($(".bar-cover-wrapper").find(".img-cover").length <= 0){		
			return false;
		}
		return true;
     }
    function resizeOnWindow(){
      
     	   if(checkHasCover()){
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
