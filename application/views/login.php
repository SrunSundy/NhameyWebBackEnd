<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add User | Dernham</title>
 	
 	<?php include 'pages/imports/cssimport.php' ?>
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
      	  <?php include 'pages/elements/headnavbar.php';?>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
       	  <?php include 'pages/elements/leftnavbar.php';?>
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
              
                  	</div>
                </div>
                
                <div class="box-body" >
                  	 <!-- Small boxes (Stat box) -->
		        
			        <!-- Main row -->
					<div class="row">
			            <!-- Left col -->
			            <section class="col-lg-12 connectedSortable">
			             	<h5 class="gray-color">Informative Text</h5>
		                  
		                     <div class="form-group">
			                    <label>Type</label>
			                    <select class="form-control " style="width: 100%;" id="user_type">
			                      <option value="1">Root</option>
			                      <option selected="selected" value="2">Normal</option>
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
							    	<label>Password</label>
							        <input type="password" id="user_password" class="form-control" placeholder="Password">
							 	</div>
			                 </div>
							 			                  
			          
			            </section><!-- /.Left col -->
			            
			            <!-- right col (We are only adding the ID to make the widgets sortable)-->
			      
			    	</div><!-- /.row (main row) -->
                </div>
                
                <div class="box-footer">
                 	<button type="button" class="btn btn-danger shop-save" onclick="login()"><b>Log in</b></button>
                </div>
		</div><!-- /.box (chat box) -->
     
     </section><!-- /.content -->
     </div><!-- /.content-wrapper -->
     <footer class="main-footer">
      		<?php include 'pages/elements/footnavbar.php';?>
     </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        	<?php include 'pages/elements/settingnavbar.php';?>
      </aside>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <?php include 'pages/imports/scriptimport.php'; ?>
  </body>
  
	<script type="text/javascript">
       var base_url="<?php echo base_url()?>";
		function getDataToInsert(){
			var userdata = {
				"req_data" : {
	
					"type": $("#user_type").val(),
					"email": $("#user_email").val(),
					"password": $("#user_password").val()
				}
			};
			return userdata;
		}
		
		function login(){
			console.log(getDataToInsert());
			
			
			 $.ajax({
				 type: "POST",
				 url: base_url+"API/UserRestController/login", 
				 data: getDataToInsert(),
				 success: function(data){
					data = JSON.parse(data);
					console.log(data);
					if(data.status){
						 swal({
							 title: data.status,
						     text: "loging Sucess!",
						     html: true,
						     type: "success",
						    			     
						 });
					}else{
						swal({
							 title: data.status,
						     text: "Fail to Login!",
						     html: true,
						     type: "error",
						    			     
						 });
					}  
		     	 }
		    });
		}
	
  </script>
	
</html>