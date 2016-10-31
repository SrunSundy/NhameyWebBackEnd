<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	
  <style>
  	p.list-shop-total{
  		font-size: 18px;
  		font-weight: bold;
  		color: #616161;
  	}
  	
  	button.header-shop-btn{
  		border-radius: 0;
  		font-weight: bold;
  	} 	
  
  	button.header-shop-btn i{
  		padding-right: 7px;
  	}
  	
  	p.search-shop-result{
  		color:#9E9E9E;
  		font-style: italic;
  		line-height:40px;
  		
  	}
  	
  	div.advance-search-box{
  		
  		
  		border-bottom:2px solid #E0E0E0;
  		
  		display:none;
  		background:#f6f7f9;
  	}
  	
  	div.border-line{
  		margin-top:7px;
  		height: 2px;
  		background: #E0E0E0;
  	}
  	
  	div.nham-div-line{
  		width: 50%;
  		float:left;
  	}
  	
  	p.text-show-style{
  		color: #757575;
  	}
  	
  	p.text-show-style i{
  		padding-right:5px;
  	}
  	
  	th{
  		color: #757575;
  	}
  	
  	span.shop-open-time{
  		color: #9E9E9E;
  		padding-left: 8px;
  		font-style: italic;
  	}
  	
  	.active-shop{
  		
  		font-size: 8px;
  		padding-right: 5px;
  	}
  	
  	@media screen and (max-width: 1198px) {
  		#srch-order-by{
  			width: 100% !important;
  		}
  		
  		
  	}
  </style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
  	
  	<input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
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
        <section class="content-header">
          <h1>
            Shop Management
            <small>manage all the shop</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">listshop</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          	  <div class="box box-danger" style="border-radius: 0;min-height: 500px;" >
          	  
                <div class="box-header">
                  <!--<h3 class="box-title">Total Number of Shop : 12010</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>-->
                  
                  <div class="col-lg-12">
                  	<div class="row">
                  		<div class="col-lg-7">
                  			<div class="row">
                  				<div class="col-lg-12">
                  					<div class="row">
                  						<p class="list-shop-total">Total Number of Shop : 500000</p>
                  					</div>
                  				</div>
                  				
                  				<div class="col-lg-12" id="shop-data-detail">
                  					<div class="row">
                  						<div class="col-lg-3">
                  							<div class="row">
                  								<p class="text-show-style" title="Total of disable shop">
                  									<i class="fa fa-ban" style="color:#dd4b39;" aria-hidden="true"></i>
                  									Disable: 500000
                  								</p>      
                  							</div>
                  						</div>
                  						
                  						<div class="col-lg-3">
                  							<div class="row">
                  								<p class="text-show-style" title="Total of active shop">
                  									<i class="fa fa-thumbs-up"  style="color:#2196F3;" aria-hidden="true"></i>
                  									Enable : 500000
                  								</p>      
                  							</div>
                  						</div>
                  						
                  						<div class="col-lg-3">
                  							<div class="row">
                  								<p class="text-show-style" title="Total photo of the shop">
                  									<i class="fa fa-picture-o" style="color:#00BCD4" aria-hidden="true"></i>
                  									Photo : 500000
                  								</p>      
                  							</div>
                  						</div>
                  						          						
                 					</div>
                  				</div>
                  				
                  			</div>
                  		</div>
                  		
                  		<div class="col-lg-5">
                  			<div class="row">
                  				<div class="col-lg-12">
                  					<div class="row">
                  						<button type="button" class="btn btn-default pull-right header-shop-btn" >
		                  					<i class="fa fa-plus" aria-hidden="true"></i> 
		                  					Add shop 
		                  				</button>
		                  				
		                  				<button type="button" class="btn btn-default pull-right header-shop-btn" id="advance-search-btn-down">
		                  					<i class="fa fa-sort-desc" aria-hidden="true" style="font-size:16px;"></i>
		                  					Advanced search 
		                  				</button>
		                  				
		                  				<button type="button" class="btn btn-default pull-right header-shop-btn" id="advance-search-btn-up" style="display:none;">
		                  					<i class="fa fa-sort-asc" aria-hidden="true" style="font-size:16px;"></i>
		                  					Advanced search 
		                  				</button>
                  					</div>
                  				</div>
                  				
                  				<div class="col-lg-12" style="padding-top:7px;" id="normal-search-box">
                  					<div class="row">
                  						 <div class="col-lg-5"></div>
                  						 <div class="col-lg-7">
                  						 	<div class="row">
                  						 		<div class="input-group ">
							                       <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search shop name, address...">
							                       <div class="input-group-btn">
							                         <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
							                       </div>
							                     </div>
                  						 	</div>
                  						 </div>
                  						 
                  					</div>
                  				</div>      
                  				           				
                  			</div>
                  		</div>
                  	</div>             
                  </div>
                  
                  <div class="col-lg-12 border-line"></div>
                  <div class="col-lg-12 advance-search-box"  id="advance-search-box">
                  	 <div class="row">
                  	 	<div class="col-lg-9">
                  	 	
                  	       <div class="col-lg-12"  style="padding-top:10px;">
                  	          <div class="row">
                  	          	 <div class="form-group">		                   
			                        <div class="input-group">
				                       <div class="input-group-addon">
				                         <i class="fa fa-clock-o"></i>
				                       </div>
				                       <input type="text" class="form-control pull-right" placeholder="Select range of date" id="reservationtime">
			                        </div><!-- /.input group -->
			                     </div><!-- /.form group -->
                  	          </div>
                  	        </div>
                  	        
                  	        <div class="col-lg-12" >
                  	          <div class="row">
                  	          	 <div class="col-lg-4" style="padding-bottom:10px;">
                  	          	 	<div class="row">                 	          	 						                						                    
						                <select class="form-control nham-control  select2"  style="width: 100%; border-radius: 0!important;padding-left:10px;">
						                      	
						                </select>	
                  	          	 	</div>
                  	          	 </div>
                  	          	 
                  	          	 <div class="col-lg-4" style="padding-bottom:10px;" align="center">
                  	          	 	<div class="row">              	          	 						                						                    
						                <select class="form-control " style="width: 90%; padding-left:10px;" id="srch-order-by">
					                      <option selected="selected" value="food">Food</option>
					                      <option value="drink">Drink</option>					                    
					                    </select>
                  	          	 	</div>
                  	          	 </div>
                  	          	 
                  	          	 <div class="col-lg-4" style="padding-bottom:10px;">
                  	          	 	<div class="row">          	          	 						                						                    
						                <select class="form-control " style="width: 100%;" id="shopservetype">
					                      <option selected="selected" value="food">Food</option>
					                      <option value="drink">Drink</option>					                    
					                    </select>
                  	          	 	</div>
                  	          	 </div>
                  	          	 
                  	          </div>
                  	         </div>
                  	 	  
                  	 	</div>
                  	 	
                  	 	<div class="col-lg-3" style="padding-top:7px;">
                  	 	    <div class="col-lg-12">
                  	 	    	<div class="row">
                  	 	    		<div class="nham-div-line div-top-gap">
										<label class="nham-control nham-control--checkbox">Thursday
											<input type="checkbox"  id="thur" value="4"  class="work-day"/>
											<div class="nham-control__indicator"></div>
										</label>
									</div>	
									<div class="nham-div-line div-top-gap">
										<label class="nham-control nham-control--checkbox">Friday
											<input type="checkbox"  id="fri" value="5"  class="work-day"/>
											<div class="nham-control__indicator"></div>
										</label>
									</div>	
                  	 	    	</div>
                  	 	    </div>
                  	 	    
                  	 	    <div class="col-lg-12" >
                  	 	    	<div class="row">
                  	 	    		<div class="col-lg-9" style="padding-top:16px;">
                  	 	    			<div class="row">
                  	 	    				<input type="text" class="form-control" placeholder="searching..." />
                  	 	    			</div>                  	 	    			
                  	 	    		</div>    
                  	 	    		<div class="col-lg-3" style="padding-top:16px;padding-bottom:10px;">
                  	 	    			<div class="row">
                  	 	    				<button type="button" class="btn btn-default " style="border-radius:0px;width:100%;">Search</button>
                  	 	    			</div>                  	 	    			
                  	 	    		</div>                  	 	    		
                  	 	    	</div>
                  	 	    </div>
                  	 	</div>
                  		 
						
                  	 </div>
                  </div>
                  
                   <div class="col-lg-12" style="padding-top:10px;">
                  	<div class="row">    
                  		<div class="nham-div-line">                			
                  			<div class="form-group">
					             <select class="form-control " style="width: 70px;">
					                  <option selected="selected" >15</option>
					                  <option>30</option>
					                  <option>50</option>			                    
					             </select>
					         </div><!-- /.form-group -->                 		           			 
                  		</div>      
                  		<div class="nham-div-line">                  			
                  			<p class="search-shop-result pull-right">searching results: 1852</p>                    			             			 
                  		</div>     
                  		<div style="clear:both"></div>      		                  		                		
                  	</div>             
                  </div>
                  
                  
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding" style="margin-top:-10px;" >
                  <table class="table table-hover" >
	                  <thead>
	                    <tr>
	                      <th style="width:7%">Logo</th>
	                      <th style="width:15%">Name</th>
	                      <th style="width:5%">serve_type</th>
	                      <th style="width:10%">created_date</th>
	                      <th style="width:15%">address</th>
	                      <th style="width:5%">view</th>                                         
	                      <th style="width:5%">photo</th>
	                       <th style="width:13%">remark</th>
	                      <th style="width:10%">creator</th>
	                       <th style="width:5%">status</th>
	                      <th style="width:10%">action</th>
	                    </tr>
                   	   </thead>
                   	   <tbody id="display-shop-result">
                   	   
                   	   </tbody>
                   	   
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
        </section><!-- /.content -->
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
   <script id="display-shop-table" type="text/x-jQuery-tmpl">
		<tr>					
			<td><img src="{{= addSrcLogoimg(shop_logo) }}" /></td>
           	<td>
				<span class="active-shop">
					<i class="fa fa-circle" style="color:#4CAF50;" aria-hidden="true"></i>
				</span>
				{{= shop_name_en }} ({{= shop_name_kh }})
				<span class="shop-open-time">[opening : {{= trimString(shop_opening_time, 5) }} - {{= trimString(shop_close_time, 5) }} ]</span></td>
            <td>{{= shop_serve_type }}</td>
            <td>{{=  trimString(shop_created_date, 10) }}</td>
            <td>{{= shop_address }}</td>
 			<td>{{= shop_view_count }}</td>
 			<td>{{= shop_view_count }}</td>
 			<td>{{= shop_remark }}</td>
			<td>{{= admin_name }}</td>
 			<td>{{= shop_status }}</td>						
		</tr>					           	
   	</script>
    <script>
	
	    $(document).ready(function(){
	    	
	    	$(".select2").select2({
	    		placeholder: "Select a serve category"
			});
	    	$("span.select2-selection").css({ "height":"34px","border-radius" : "0","border":"1px solid #ccc"});
		    
	    });


	    loadShopDataToTable();
	    
	    function loadShopDataToTable(){

	    	$.ajax({
	    		type : "GET",
	    		url : $("#base_url").val()+"API/ShopRestController/listShop",
	    		success : function(data){

	    			data = JSON.parse(data);
	    			console.log(data);
	    			$("#display-shop-table").tmpl(data).appendTo("#display-shop-result");
	    			
	    		}
	    	});

		}

		function addSrcLogoimg( image ){
			return $("#base_url").val()+"uploadimages/logo/small/"+image;
		}

		function trimString( string, cutindex ){
			return string.substring(0, cutindex);
		}
    	$('#reservationtime').daterangepicker({
    		
             
             timePicker: false,
             buttonClasses: ['btn btn-default'],
             applyClass: 'btn-small btn-danger',
             cancelClass: 'btn-small',
             format: 'DD/MM/YYYY',
             
        });
		$("#advance-search-btn-down").on("click", function(){
			
			$(this).hide();
			$("#advance-search-btn-up").show();
			$("#advance-search-box").slideDown();
			$("#normal-search-box").slideUp();
			$("#shop-data-detail").slideUp();
			
		});

		$("#advance-search-btn-up").on("click", function(){
			
			$(this).hide();
			$("#advance-search-btn-down").show();
			$("#advance-search-box").slideUp();
			$("#normal-search-box").slideDown();
			$("#shop-data-detail").slideDown();
			
		});
    </script>
  </body>
</html>

			                								                					                
					            