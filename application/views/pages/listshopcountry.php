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
        <h1>Country Management</h1>
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
			                    <label>Country</label>
			                     <div class=" col-sm-12 nham-dropdown-wrapper">
			                		<div class="row">
			                			<div class="selected-dropdown">
			                    		    <input id="shop_country" type="text" class="form-control  nham-dropdown-inputbox"  placeholder="Search or Select for country">
			                    	        <input type="hidden" class="selectedbrandid" id="selected_shop_country"/>
			                    	    </div>
			                    		<div class="nham-dropdown-detail"  >
			                    			<div class="nham-dropdown-result-wrapper">
			                    				<div id="display_result_shop_country" class="display-result-wrapper">
			                    					
			                    				</div>			       				
			                  				</div>
			                  				<div id="nham_dropdown_footer_shop_country" class="nham-dropdown-result-footer" align="center">
			                  					<button class="btn nhamey-btn" id="yes_shop_country">Yes</button>
			                  				</div>
			                  			</div>
			                    	</div>			                    	
			                  	</div>
		                     </div><br><br>
			            
		                    <div class="form-group">
		                    	<table style="width:100%" id="tb_list">
		                   		                    		
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
  
	
	<script>
	
	$(window).load(function() {
		listAddress({"me": document.getElementById("shop_country"), "name": 'country', "isList": true});
	});


	save_address=function(id){
		var data_name = document.getElementById("txtname"+id).value;
		var status = document.getElementById("txtstatus"+id).value;
		var req_data = {
				"req_data" : {
					"address_type": 'country',
					"id": id,
					"data_name" : data_name,
					"parent_id" : 0,
					"status" : status,
					"admin_id" : 1,
				}
			};
		
			$.ajax({
				type : "POST",
				url : "/NhameyWebBackEnd/API/ShopAddressRestController/updateShopAddress",
				data : req_data,
				success : function(data){
					data = JSON.parse(data);
					console.log(data);
					if(data.is_insert == false){
						alert("error");
					}else{
						 document.getElementById("row"+id).style.backgroundColor="#5def34";
					}					
				}
			});		
	};
	
	//============country============
	addMultiListers({"element": document.getElementById("shop_country"),
		"events": ['keyup','focus'],
		"name": 'country',
		"parent_id": 0,
		"isList": true});

	document.getElementById("yes_shop_country").addEventListener("mousedown",function(){
		addAddress({"name":'country', "parent_id":0});
	});
		
	</script>
	
</html>