<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User list | Dernham</title>
 	
 	<?php include 'imports/cssimport.php' ?>
<style>
span.select2-selection{
		height: 40px;
		border-radius: 0;
}

</style>

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
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
			            <section class="col-lg-12 connectedSortable">
			            	<div class="form-group ">
			                    <label>User</label>
			                     <div class=" col-sm-12 nham-dropdown-wrapper">
			                		<div class="row">
			                			<div class="selected-dropdown">
			                    		    <input id="user_name" type="text" class="form-control  nham-dropdown-inputbox"  placeholder="Search by name">
			                    	        <input type="hidden" class="selectedid" id="selected_user_name"/>
			                    	    </div>
			                    		<div class="nham-dropdown-detail"  >
			                    			<div class="nham-dropdown-result-wrapper">
			                    				<div id="display_result_user_name" class="display-result-wrapper">
			                    					
			                    				</div>			       				
			                  				</div>
			                  				<div id="nham_dropdown_footer_user_name" class="nham-dropdown-result-footer" align="center">
			                  				</div>
			                  			</div>
			                    	</div>			                    	
			                  	</div>
		                     </div><br><br>
			            
		                    <div class="form-group">
		                    	<table id="tb_list" style="width:100%">
		                    		
		                    	</table>
		                    </div> 
									                     
			            </section><!-- /.Left col -->
			          </div><!-- /.row (main row) -->
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

  $(window).load(function() {
	listUser();
  });
  
	document.getElementById("user_name").addEventListener("keyup",function(){
		listUser();
	});

	document.getElementById("user_name").addEventListener("focus",function(){
		listUser();
	});
	
  function listUser(){
		var tb_data='<col width="5%"><col width="20%"><col width="20%"><col width="20%"><col width="5%"><col width="20%">';
		tb_data+='<tr><th>no</th><th>name</th><th>email</th><th>last logged in</th><th>status</th><th>action</th></tr>';
		var value = document.getElementById("user_name").value;
		var loadingimgsrc = "";
		$("#display_result_user_name").html("<img src='"+loadingimgsrc+"'  style='padding:20px;'/> "); 
			
		$.ajax({
			 type: "GET",
			 url: "/NhameyWebBackEnd/API/UserRestController/getUserByNameCombo", 
			 data : {			 
					"srchname" : value,
					"limit" : 10		 	
			 },
			 success: function(data){
				data = JSON.parse(data);
				console.log("data: "+data);
				var typedis = '';
				if(data.length <= 0){
					typedis +='<div  class="nham-dropdown-noresult">';
					typedis +=' <p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>';
					typedis +='  Searching "'+cutString(value , 35)+'" has no Result!</p>';
					typedis +='</div>';
					typedis +='<div class="nham-dropdown-question">';
					typedis +='<p>Do you want to add "'+cutString(value , 20)+'" ?</p>';
					typedis +='</div>';
					$("#nham_dropdown_footer_user_name").show();
				}else{								
					$("#nham_dropdown_footer_user_name").hide();		
					for(var i=0 ; i<data.length ; i++){	
						var id= data[i]["admin_id"];
						var name=data[i]["admin_name"];
						var email=data[i]["admin_email"];
						var last_logged= data[i]["admin_logged"];
						var status= data[i]["admin_status"];
						
						typedis += '<div class="nham-dropdown-result"><input type="hidden" value="'+ id +
						'" /><p><span class="title">'+ name +'</span></p></div>';
						
							tb_data+='<tr id="row'+id+'">'+
							'<th>'+ (i+1) + '</th>' +	
							'<th><input id="txtname'+id+'" type="text" value="'+ name +'"></th>' +
							'<th><input id="txtemail'+id+'" type="text" value="'+ email +'"></th>' +
							'<th>'+ last_logged + '</th>'+
							'<th><input id="txtstatus'+id+'" type="text" value="'+ status  +'"></th>' +
							'<th><input type="button" onclick="updateUserAdmin('+id+')" value="save">&nbsp;'+
							'<input type="button" onclick="deleteUserAdmin('+id+')" value="delete"></th></tr>';
						
					}
				}
				document.getElementById("tb_list").innerHTML=tb_data;
				document.getElementById("display_result_user_name").innerHTML=typedis;
				
	   	 	 }
	   });
	}

//=================
	function deleteUserAdmin(id){		
		var req_data = {
				"req_data" : {
					"id": id
				}
			};
		console.log(req_data);
			$.ajax({
				type : "POST",
				url : "/NhameyWebBackEnd/API/UserRestController/deleteUserAdmin",
				data : req_data,
				success : function(data){
					data = JSON.parse(data);
					console.log(data);
					if(data.is_insert == false){
						alert("error");
					}else{
						document.getElementById("row"+id).style.backgroundColor="#f9112c";
						listUser();
					}					
				}
			});		
	}
	
	
	//==================
	function updateUserAdmin(id){
			var name = document.getElementById("txtname"+id).value;
			var status = document.getElementById("txtstatus"+id).value;
			var email = document.getElementById("txtemail"+id).value;
			var req_data = {
					"req_data" : {
						"id": id,
						"name" : name,
						"email" : email,
						"status" : status
					}
				};
			
				$.ajax({
					type : "POST",
					url : "/NhameyWebBackEnd/API/UserRestController/updateUserAdmin",
					data : req_data,
					success : function(data){
						data = JSON.parse(data);
						console.log(data);
						if(data.is_insert == false){
							alert("error");
						}else{
							 document.getElementById("row"+id).style.backgroundColor="#5def34";
							 listUser();
						}					
					}
				});		
	}

  </script>
  
	
</html>