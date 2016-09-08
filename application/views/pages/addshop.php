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
 		height:210px;
 		overflow-y: auto;	
 	}
 	div.brand-result,div.brand-more{
 		width: 100%;
 		height: 35px;
 		line-height: 30px;
 		border-top: 1px solid #E0E0E0;
 		cursor: pointer;
 	}
 	
 	div.brand-result:hover{
 	
 		background: #E0E0E0;
 	}
 	
 	div.add-background{
 	
 		background: #E0E0E0;
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
 	div.div-top-gap{
 	
 		margin-top: 10px;
 	}
 	.gray-color{
 		color: #9E9E9E;
 		font-style: italic;
 		font-size: 16px;
 	}
 	.gray-color-noitalic{
 		color: #9E9E9E;
 		font-size: 16px;
 	}
 	span.red-background{
 		background: #dd4b39 !important;
 		color: #fff;
 	}
 	div.image-browsing{
 		width: 170px;
 		height: 190px;
 		border-radius: 0;
 		background: #E0E0E0;
 		cursor: pointer;
 		margin-top:12px;
 	}
 	
 	
 	div.logo-browsing-wrapper{
 		border: 1px solid #E0E0E0; 
 		
 	}
 	p.tagp-of-i{
 		
 		font-size: 80px;
 		color: #9E9E9E;
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
	                  					<p>sdfaaaaaaaaaaaaaaasff</p>
	                  				</div>
	                  				<div class="brand-result">
	                  					<p>sdfddddddddddesff</p>
	                  				</div>
	                  				<div class="brand-result">
	                  					<p>sdfeeeeeeeeeeeeeeeesff</p>
	                  				</div>
	                  				<div class="brand-result">
	                  					<p>srrrrrrrrrrrrrrfsff</p>
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
                <div class="box-body div-top-gap" >
                	<!--  -->
                  	 <!-- Small boxes (Stat box) -->
		        
			          <!-- Main row -->
			          <div class="row">
			            <!-- Left col -->
			            <section class="col-lg-5 connectedSortable">
			             	<h5 class="gray-color">Informative Text</h5>
			             	<div class="input-group">
			                    <span class="input-group-addon red-background"><i class="fa fa-flag" aria-hidden="true"></i></span>
			                    <input type="text" class="form-control" placeholder="Enter the shop name">
		                  	</div>
			
			            </section><!-- /.Left col -->
			            <!-- right col (We are only adding the ID to make the widgets sortable)-->
			            <section class="col-lg-7 connectedSortable">
							<h5 class="gray-color">Informative Image</h5>
							<div><label>Logo</label></div>
							<div class="col-lg-12 logo-browsing-wrapper" align="center"  >
											                     		                  		                    	  
		                    	<div class="fileinput fileinput-new " data-provides="fileinput">
									<div class="fileinput-preview thumbnail image-browsing" data-trigger="fileinput" style="width: 170px; height: 190px;">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThQkfXNS4-nJ2yGOOalgeEmAI1sWhTOpnbiZf6BW2u3uHWxLHUdA" />								  
									
									</div>
									<div style="display:none">
									    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input onchange="readURL(this);" type="file"  name="..."></span>
									    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
									</div>
								</div>
											                    	  		                    	  		                    	  
							</div>
							 			      			
			            </section><!-- right col -->
			          </div><!-- /.row (main row) -->
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
			  $("div.brand-result").removeClass("add-background");
			  $(this).addClass("add-background");
			  $("#searchinputbox").val($(this).text().trim());
			  $("#brandsearchdetail").hide();
			 
		});


		function readURL(input) {
			/* alert(input.files.length);
		            // if (input.files && input.files[0]) {
		                var reader = new FileReader();

		                reader.onload = function (e) {
						alert(e.target.result);
						alert($("#yyy").val());
						console.log(e.target.result);
							var test = '<img src="'+e.target.result+'" />';
		                    $('#imagewrapper').append(test);
		               
		                };

		                reader.readAsDataURL(input.files[0]);
		          //  }
		        } */
		
		$("#test").on("click",function(){
			alert(1);
		});
  </script>
</html>
