<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>
<style>
span.select2-selection{
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
        <h1>User Management</h1>
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
                	<div class=" col-sm-12 nham-dropdown-wrapper">
                		<div class="row">
                			
                    		<div class="nham-dropdown-detail"  >
                    			<div class="nham-dropdown-result-wrapper">
                    				<div id="display-result" class="display-result-wrapper" style="min-height:35px;">                  					
                    				</div>   								
                  				</div>
                  				<div id="display-searching-text" style="display:none;">
                  					<div  class="nham-dropdown-noresult">
										<p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>
											Searching "<span id="text-search-dis1"></span>" has no Result!</p>
									</div>
									<div class="nham-dropdown-question">	
										<p>Do you want to register "<span id="text-search-dis2"></span>" as a new brand?</p>
									</div>
                  				</div>
                  				
                  				<div id="nham-dropdown-footer" class="nham-dropdown-result-footer" align="center">
                  					<button class="btn nhamey-btn" id="yesbrand">Yes</button>
                  				</div>
                  			</div>
                    	</div>
                  	</div>
                </div>
                
                <div class="box-body" >
                  	 <!-- Small boxes (Stat box) -->
		        
			          <!-- Main row -->
			          <div class="row">
			            <!-- Left col -->
			            <section class="col-lg-5 connectedSortable">
			             	<h5 class="gray-color">Informative Text</h5>
		                     
		                     <div class="form-group">
			          			<div class="form-group">
							    	<label>Full name</label>
							        <input type="text" id="user_fullname" class="form-control" placeholder="Your Full name in English">
							 	</div>
			                 </div>
		                     
		                     <div class="form-group">
			                    <label>Gender</label>
			                    <select class="form-control " style="width: 100%;" id="user_gender">
			                      <option selected="selected" value="food">Male</option>
			                      <option value="drink">Female</option>
			                    </select>
			                 </div><!-- /.form-group -->
			                 
			                 <div class="form-group">
			          			<div class="form-group">
							    	<label>Email</label>
							        <input type="text" id="user_email" class="form-control" placeholder="Your email">
							 	</div>
			                 </div>
			                 
			                 <div class="form-group">
			          			<div class="form-group">
							    	<label>Username</label>
							        <input type="text" id="user_username" class="form-control" placeholder="Username">
							 	</div>
			                 </div>
			                 
			                 <div class="form-group">
			          			<div class="form-group">
							    	<label>Password</label>
							        <input type="password" id="user_password" class="form-control" placeholder="Password">
							 	</div>
			                 </div>
							 			                  
			                 <div class="form-group">
			                     <label>Remark</label>
			                     <textarea id="user_remark" class="form-control" rows="3" placeholder="Remark" style="resize:none;"></textarea>
			                 </div>
			            </section><!-- /.Left col -->
			            
			            <!-- right col (We are only adding the ID to make the widgets sortable)-->
			            <section class="col-lg-7 connectedSortable">
							<h5 class="gray-color">Informative Image</h5>
							<div  class="form-group">
								<label>Photo</label>
								<div class="col-lg-12 logo-browsing-wrapper" align="center"  style="position:relative;">												                     		                  		                    	  
			                    	<input type='file' id="coverupload" style="display: none;" accept="image/*"/>
			                    	<div class="image-upload-wrapper" id="cover-upload-wrapper">
			                    		<label class="gray-image-plus"><i class="fa fa-plus"></i></label>
			                    		<p style="font-weight:bold;color:#9E9E9E">Add user's photo</p>
			                    	</div> 
									<div id="cover-upload-image" class="upload-image-hover"></div>
												                    	  		                    	  		                    	  
								</div>
							</div>							 			      			
			            </section><!-- right col -->
			          </div><!-- /.row (main row) -->
                </div>
                <div class="box-footer">
                 	<button type="button" class="btn btn-danger shop-save" id="saveuser"> Save </button>
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
  
	<script type="text/javascript">

		function getDataToInsert(){
			var userdata = {
				"req_data" : {
					"fullname":$("#user_fullname").val(),
					"gender":$("#user_gender").val(),
					"email":$("#user_email").val(),
					"username":$("#user_username").val(),
					"password":$("#user_password").val(),
					"remark":$("#user_remark").val(),
					"photo":"test",
					"admin_id": 1
				}
			};
			return userdata;
		}
		
		$("#saveuser").on("click",function(){
			console.log(getDataToInsert());
			/*
			 $.ajax({
				 type: "POST",
				 url: "/NhameyWebBackEnd/API/UserRestController/insertUser", 
				 data: getDataToInsert(),
				 success: function(data){
		         	alert(data);    
		     	 }
		    });
		    */ 
		});
	
  </script>
	
</html>