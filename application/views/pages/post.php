<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>
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
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
         
       		<input type="file" id="test" multiple/>
       		<button type="button" id="save">SAVE</button>
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
    <script>
    $("#save").click(function(){
    	
    	var fileToUpload = $("#test")[0].files;

    	console.log(fileToUpload);
    	if(fileToUpload != 'undefined'){

    		var formData = new FormData();
    		var data = JSON.stringify({
				"user_id" : 38
        	});
    		formData.append("data", data)
    	//	formData.append("file",  fileToUpload);
    		for (var i = 0; i < fileToUpload.length; i++) {
    			var file = fileToUpload[i];
    			formData.append("file[]", file, file.name);				
    		}

    		alert(1);
    		$.ajax({
    			url: "http://dernham.com/dernham_API/API/UploadRestController/uploadpostimagetotemp",
    			type: "POST",
    			 headers: {
    			        
    			        "X-API-KEY": 123456
    			      
    			    },
    			 
    			data : formData,
    			processData : false,
    			contentType : false,
    			success: function(data){
    				alert(2);
    				alert(data);
    				console.log(data);
    								
    			}
    		});
    	} 
    });
    </script>
  </body>
</html>
