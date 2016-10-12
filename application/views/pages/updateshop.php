<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>
  <style>
  	div.update-shop-wrapper{
  		position: relative;
  	}
  	div.cover-wrapper{
  		background: gray;
  		min-height: 250px;
  		max-height:330px;
  	}
  	div.profile-wrapper{
  		background: yellow;
  		height: 45px;
  	}
  	div.profile-box{
  		width: 150px;
  		height: 150px;
  		position:absolute;
  		top:-125px;
  		z-index:50;
  		left: 50px;
  		background: blue;
  	}
  	div.content-nham-wrapper{
  		width:90%;
  		margin:0 auto;
  	}
  	div.menu-wrapper{
  		background:green;
  		height:45px;
  		position: absolute;
  		left:200px;
  		z-index:20;
  		min-width:280px;
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
        <!-- Content Header (Page header) -->
      <!--   <section class="content-header">
       
        </section>
 -->
        <!-- Main content -->
      
        <div class="content-nham-wrapper">
		           <div class="" style="border-radius: 0;border:0;min-height: 500px;">           		
				       <!-- wrapper updating form div -->       
				       <div class="col-lg-12 update-shop-wrapper">
				          <div class="row"> <!-- row of wrapper updating -->
				             <!-- box of cover -->
				             <div class="cover-wrapper col-lg-12">
				               			
				             </div> 
				             <!-- end box of cover -->
				             <!-- profile wrapper -->
				             <div class="profile-wrapper col-lg-12">
				             	<div class="profile-box">
				             		
				             	</div>
				             	<div class="menu-wrapper">
				             		
				             	</div>
				             </div>
				             <!-- end of profile wrapper -->
				              <div class="body-wrapper col-lg-12" style="background:white;margin-top:10px;height:500px;">
				               			
				             </div> 
				          </div> <!-- end of wrapper updating -->
				       </div> <!--end wrapper updating form div -->		                       
		           </div>
        </div>   
      
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
    updateShopField("Pizza Company","shop_name_en");
    updateShopField("Pizza Company","shop_name_kh");
	
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
