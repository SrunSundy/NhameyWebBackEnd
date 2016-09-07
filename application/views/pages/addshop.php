<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<style>
 		
 		div#brandsearchdetail{
 			
 			
 			background:#fff;
 			display:none; 
 			border: 1px solid #E0E0E0;
 			position: absolute;
 			width:100%;
 				
	 		z-index:99999;
 		}
 	div.brand-result-wrapper{
 		height:300px;
 		overflow-y: auto;	
 	}
 	div.brand-result,div.brand-more{
 		width: 100%;
 		height: 35px;
 		line-height: 30px;
 		border-top: 1px solid #E0E0E0;
 	
 	}
 	
 	div.brand-result-footer{
 		border-top:  1px solid #E0E0E0;
 		padding: 10px;
 		height: 60px;
 		
 	}
 	button.nhamey-btn{
 		 
 		 width: 130px;
 		 height: 40px;
 		 border-radius: 0;
 	
 	}
 	</style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
      	  <?php include 'elements/headnavbar.php';?>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
       	  <?php include 'elements/leftnavbar.php';?>
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height: 910px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Shop Management
            <small>manage all inserted shop</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Shop Management</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content" >
         	 <!-- Chat box -->
              <div class="box box-danger" style="border-radius: 0;min-height: 500px;">
                <div class="box-header">
                	<div class=" col-sm-12" style="position:relative;">
                		<div class="row">
                    		<input type="text" class="form-control input-lg" id="searchinputbox" placeholder="Search brand to insert shop">
                    	
                    		<div class="" id="brandsearchdetail" >
                    			<div class="brand-result-wrapper">
	                    			<div class="brand-result">
	                  					<p>sdfsff</p>
	                  				</div>
	                  				<div class="brand-result">
	                  					<p>sdfsff</p>
	                  				</div>
	                  				<div class="brand-result">
	                  					<p>sdfsff</p>
	                  				</div>
	                  				<div class="brand-result">
	                  					<p>sdfsff</p>
	                  				</div>
	                  				<div class="brand-result">
	                  					<p>sdfsff</p>
	                  				</div>
	                  				<div class="brand-result">
	                  					<p>sdfsff</p>
	                  				</div>
	                  				<div class="brand-result">
	                  					<p>sdfsff</p>
	                  				</div>
	                  				<div class="brand-result">
	                  					<p>sdfsff</p>
	                  				</div>
	                  				<div class="brand-result">
	                  					<p>sdfsff</p>
	                  				</div>
	                  				<div class="brand-result">
	                  					<p>sdfsff</p>
	                  				</div>
	                  				<div class="brand-result">
	                  					<p>sdfsff</p>
	                  				</div><div class="brand-result">
	                  					<p>sdfsff</p>
	                  				</div>
	                  				
                  					<div class="brand-more" >
	                  					<p align="center">MORE</p>
                    				</div>
                  				
                  				</div>
                  				<div class="brand-result-footer" align="center">
                  					<button class="btn nhamey-btn" id="test">Yes</button>
                  					<button class="btn nhamey-btn" id="test">No</button>
                  				</div>
                    	</div>
                    	
                  	</div>
                  	
                  	
                </div>
                <div class="box-body" >
                </div>
                <div class="box-footer">
                 
                </div>
              </div><!-- /.box (chat box) -->
       
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
      		<?php include 'elements/footnavbar.php';?>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        	<?php include 'elements/settingnavbar.php';?>
      </aside>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

   
    <?php include 'imports/scriptimport.php'; ?>
  </body>
  <script>

	//add event handler to hide the `txtAddGenreContainer` element when the document is clicked
	  $(document).on('click', function () {
	      var $tar = $("#brandsearchdetail");//UPDATE
	    	  $tar.hide();
	      
	  });
	
	  //add event handler to the `addGenreFinal` and `newGenreTxt` elements to stop the click event from bubbling up the document
	  $('#brandsearchdetail , #searchinputbox').on('click', function (event) {
	      event.stopPropagation();
	  });

	
	   $("#searchinputbox").on("focus keyup",function(){
			$("#brandsearchdetail").show();
			
		});
	
	
		$("div.brand-result").on("click",function(){
			console.log($(this).text());
		});
		$("#test").on("click",function(){
			alert(1);
		});
  </script>
</html>
