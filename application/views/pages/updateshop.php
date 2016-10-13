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
  		height: 315px;
  		background: white;
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
  		width: 130px;
  		height: 130px;
  		position:absolute;
  		top: -70px;
  		left: 15px;
  		background: gray;
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
  		margin-top:-8px;
  		color:gray;
  	}
  	div.contact-shop-block{
  		width: 100%;
  		height: 40px;
  		background: brown;
  		position:absolute;
  		bottom: 0;
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
	       	 				 <img src="../assets/nhamdis/img/test.jpg" class="img-cover" /> 
	       	 			</div> 
	       	 			<div class="cover-box">
	       	 				
	       	 			</div>
	       	 			<div class="bar-box" style="display:none" >
	       	 				
	       	 			</div>
	       	 			<div class="small-bar-box">	 
	       	 				     	 				       	 				
		       	 			<div class="small-logo-wrapper">
		       	 				<div class="space-logo-box" >
			       	 				<div class="small-logo-box">
			       	 				</div> 
		       	 				</div>
		       	 					
		       	 				<div class="small-shop-name" >
		       	 					<h3 class="shop-name-text">FC Bayern Manich</h3>	 
		       	 					<p class="shop-name-extra-text" >( @the best munich )</p>	       	 	
		       	 				</div>
		       	 				<div style="clear:both;"></div>
		       	 				<div class="">
		       	 					<button type="button" class="btn btn-danger">Danger</button>	
		       	 				</div>	
		       	 				<div class="">
		       	 					<button type="button" class="btn btn-danger">Danger</button>	
		       	 				</div>	
		       	 				<div class="">
		       	 					<button type="button" class="btn btn-danger">Danger</button>	
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
      		<?php include 'elements/footnavbar.php';?>
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
           var imgboxheight = $(".img-cover-box").height();
           var coverboxheight = $(".cover-box").height();
		   console.log($(window).width());                                       
           if(coverboxheight > imgboxheight){         
        	  $(".cover-box").height($(".img-cover-box").height());               
             //  $(".cover-box").height(newheight);
           }else{
        	 var heightbigger = 0;
           	 var newheight =  $(".img-cover-box").height();
               if(newheight < 315){
               	heightbigger++;
               	newheight += heightbigger;
                }else{
               	 newheight =315;
                } 
           	//console.log(newheight);
           	$(".cover-box").height(newheight);
           }
       	
       });
    function checkHasCover(){      
		if($(".bar-cover-wrapper").find(".img-cover-box").length <= 0){		
			$(".cover-box").height(250);
			return false;
		}
		return true;
     }
    function resizeOnWindow(){
        console.log($(window).width());
     
    	   var imgboxheight = $(".img-cover-box").height();
           var coverboxheight = $(".cover-box").height();
           
           if(coverboxheight < imgboxheight){
       	  		$(".cover-box").height(315);
        	}else{
        		console.log($(".img-cover-box").height());
        		console.log($(".bar-cover-wrapper").find(".img-cover-box").html());
        		$(".cover-box").height($(".img-cover-box").height());
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
