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
  <body class="">
  
	    <section class="content-header">
        <h1 class="text-center">User Login</h1>
         
        </section>

        <!-- Main content -->
        <section class="content" >
         	 <!-- Chat box -->
              <div class="box box-danger" style="border-radius: 0;min-height: 500px;">
            
                <div class="box-body" >
                  	 <!-- Small boxes (Stat box) -->
		        
			        <!-- Main row -->
					<div class="row">
			            <!-- Left col -->
			             <section class="col-lg-4 connectedSortable"></section>
			            <section class="col-lg-4 connectedSortable">
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
							 			                  
			          	 <div class="box-footer">
                 		<button type="button" class="btn btn-danger shop-save" onclick="login()"><b>Log in</b></button>
                		</div>
			            </section><!-- /.Left col -->
			             <section class="col-lg-4 connectedSortable"></section>
			            <!-- right col (We are only adding the ID to make the widgets sortable)-->
			      
			    	</div><!-- /.row (main row) -->
                </div>
                
               
		</div><!-- /.box (chat box) -->
     
     </section><!-- /.content -->
    <?php include 'pages/imports/scriptimport.php'; ?>
    
	<script type="text/javascript">
       var base_url="<?php echo base_url()?>";
		function getDataToInsert(){
			var userdata = {
				"req_data" : {
	
					"type":$("#user_type").val(),
					"email":$("#user_email").val(),
					"password":$("#user_password").val(),
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
						 /* swal({
							 title: data.status,
						     text: "loging Sucess!",
						     html: true,
						     type: "success",
						    			     
						 }); */
						 window.location = base_url+"MainController/addshop";
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
  </body>
  
	
</html>