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
  	
  	.shop-open-time{
  		color: #9E9E9E;
  		padding-left: 1px;
  		font-style: italic;
  	}
  	
  	.active-shop{
  		
  		font-size: 8px;
  		padding-right: 5px;
  	}
  	
  	img.table-shop-img{
  		width: 50px;
  		height: 50px;
  		border-radius: 5px;
  		position:absolute;
  		top:6px;
  		right:0;
  		border: 2px solid #fff;
  		box-shadow: 1px 1px 2px gray;
  	}
  	
  	.img-logo-wrapper{
  		width:55px;
  		height:55px;
  		position:relative;
  	}
  	
  	.shop-display-status{
  		
  		transition: all 0.5s linear;
  	}
  	
  	i.shop-edit{
  		font-size: 22px;
  		color: #dd4b39;
  		cursor: pointer;
  	}
  	
  	
  	@media screen and (max-width: 1198px) {
  		#srch-order-by{
  			width: 100% !important;
  		}
  		.select2{
  			width: 100% !important;
  		}
  		
  		
  	}
  </style>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/css/nhamslider.css">
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
                  									<i class="fa fa-building" style="color:#ccc;" aria-hidden="true"></i>
                  									Disable: 500000
                  								</p>      
                  							</div>
                  						</div>
                  						
                  						<div class="col-lg-3">
                  							<div class="row">
                  								<p class="text-show-style" title="Total of active shop">
                  									<i class="fa fa-building"  style="color:#dd4b39;" aria-hidden="true"></i>
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
							                       <input type="text" name="table_search" id="whole-search" class="form-control input-sm pull-right" placeholder="Search shop name,type ,address...">
							                       <div class="input-group-btn">
							                         <button id="btn-whole-search" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
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
                  	        
                  	        <div class="col-lg-12" align="center">
                  	        	<div class="row">
	                  	            <select class="form-control nham-control  country-option" 
							            id="srch_country" style="width: 100%; border-radius: 0!important;">						                      	
							        </select>
							    </div>
                  	        </div>
                  	        
                  	        <div class="col-lg-12" >
                  	          <div class="row">                  	                        	          	
                  	          	<div class="col-lg-4" style="padding-top:13px;" align="center">
                  	          		<div class="row">
	                  	          	   <select class="form-control nham-control  city-option" 
							        		id="srch_city" style="width: 100%; border-radius: 0!important;">						                      	
							           </select>
							        </div>
                  	          	</div>
                  	          	
                  	          	<div class="col-lg-4" style="padding-top:13px;" align="center">
                  	          		<div class="row">
		                  	          	 <select class="form-control nham-control  district-option" 
								        	id="srch_district" style="width: 90%; border-radius: 0!important;">						                      	
								         </select>
							        </div>
                  	          	</div>
                  	          	
                  	          	<div class="col-lg-4" style="padding-top:13px;" align="center">
                  	          		<div class="row">
	                  	          	    <select class="form-control nham-control  commune-option" 
							        		id="srch_commune" style="width: 100%; border-radius: 0!important;">						                      	
							            </select>
							        </div>
                  	          	</div>      	         				                						                    
						       
                  	          </div>
                  	        </div>
                  	        
                  	        <div class="col-lg-12" style="padding-top:13px;">
                  	          <div class="row">
                  	          	 <div class="col-lg-4" style="padding-bottom:10px;" align="center">
                  	          	 	<div class="row">                 	          	 						                						                    
						                <select class="form-control nham-control  category-option"  style="width: 100%; border-radius: 0!important;padding-left:10px;">
						                      	
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
                  	 	    
                  	 	    <div class="col-lg-12"  style="padding-top:16px;">
                  	 	    	<div class="row">
                  	 	    		<select class="form-control " style="width: 100%;" id="shopservetype">
					                     <option selected="selected" value="food">Food</option>
					                     <option value="drink">Drink</option>					                    
					                </select>     	 	    		
                  	 	    	</div>
                  	 	    </div>
                  	 	    
                  	 	    <div class="col-lg-12" style="padding-top:13px;">
                  	 	    	<div class="row">                  	 	    	
                  	 	    		<input type="text" class="form-control" placeholder="searching..." />                 	 	    		       	 	    		
                  	 	    	</div>
                  	 	    </div>
                  	 	    
                  	 	    <div class="col-lg-12" style="padding-top:11px;padding-bottom:10px;" >
                  	 	    	<div class="row">                 	 	    	                 	 	    		
                  	 	    		<button type="button" class="btn btn-default " style="border-radius:0px;width:100%;">Search</button>
                  	 	    	</div>                  	 	    			                 	 	    	
                  	 	    </div>
                  	 	    
                  	 	</div>
                  		 
						
                  	 </div>
                  </div>
                  
                  <div class="col-lg-12" style="padding-top:10px;">
                  	<div class="row">    
                  		<div class="nham-div-line">                			
                  			<div class="form-group">
					             <select class="form-control " id="shop-row-num" style="width: 70px;">
					            	  <option value="5">5</option>
					                  <option value="10" selected="selected" >10</option>
					                  <option value="15" >15</option>
					                  <option value="30">30</option>
					                  <option value="50" >50</option>			                    
					             </select>
					         </div><!-- /.form-group -->                 		           			 
                  		</div>      
                  		<div class="nham-div-line">                  			
                  			<p class="search-shop-result pull-right">searching results: <span id="shop-total-record"></span></p>                    			             			 
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
	               
	                      <th style="width:15%">created_date</th>
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
                
                <div id="pagi-display" class="pagination-display">
     
                </div>
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
			<td>
				<input type="hidden" value="{{= shop_id}}"/>
				<div class="img-logo-wrapper" >
				   <img class="table-shop-img" src="{{= addSrcLogoimg(shop_logo) }}" />
				   <span class="active-shop" style="position:absolute;top:0;right0;">
					    <i class="fa fa-circle shop-display-status" id="{{= shop_id }}" style="{{= dynamicColor(is_shop_open, shop_id, time_to_close, time_to_open) }}" aria-hidden="true"></i>
				   </span>
				</div>				
			</td>
           	<td>				
				{{= shop_name_en }} 
			{{if shop_name_kh || shop_name_kh != ""}}
				({{= shop_name_kh }})
			{{/if}}
				<div class="shop-open-time">open : {{= trimString(shop_opening_time,0, 5) }} - {{= trimString(shop_close_time,0, 5) }} </div>
			</td>
            <td>{{=  trimString(shop_created_date,0, 10)  }} <span class="shop-open-time">{{=  trimString(shop_created_date, 10 , 16)  }}</span></td>
            <td>{{= shop_address }}</td>
 			<td>{{= shop_view_count }}</td>
 			<td>{{= shop_img_total }}</td>
 			<td>{{= shop_remark }}</td>
			<td>{{= admin_name }}</td>
 			<td>
				<label class="switch">
  					<input class="toggleshop" id="{{= generateIdWithShopId('toggleshop',shop_id)}}" type="checkbox" {{= checkShopStatus(shop_status)}}>
  					<div class="slider"></div>
				</label>
			</td>
			<td align="center">				
				<i class="shop-edit fa fa-pencil-square" aria-hidden="true"></i>
			</td>						
		</tr>
					           	
   	</script>
    <script>
  
    	var input = {
    		"row" : $("#shop-row-num").val(),
			"page" : 1,
			"whole_search" : $("#whole-search").val()
	    };	
	    				
	    loadShopDataToTable();
	   
	    $(document).ready(function(){
	    	
	    	$(".category-option").select2({ placeholder: "Select a serve category"});
			$(".country-option").select2({ placeholder: "Select a country" });
			$(".city-option").select2({ placeholder: "Select a city" });
	    	$(".district-option").select2({ placeholder: "Select a district" });
	    	$(".commune-option").select2({ placeholder: "Select a commune" });
			
	    	$("span.select2-selection").css({ "height":"34px","border-radius" : "0","border":"1px solid #ccc"});
		    
	    });

	    $('#whole-search').keypress(function (e) {
		    
	    	if (e.which == 13) {
	    		$("#btn-whole-search").click();
	    	    return false;    //<---- Add this line
	    	}
	    });

	    function loadShopDataToTable(){

	    	progressbar.start();
	    	$.ajax({
	    		type : "POST",
	    		url : $("#base_url").val()+"API/ShopRestController/listShop",
	    		contentType : "application/json",
				data : JSON.stringify({
		    		"display-setting" : input
			    }),
	    		success : function(data){

	    			data = JSON.parse(data);
	    			console.log(data);
	    			
	    			var total_page = data.total_page;
	    			var showvisible = 5;
	    			$("#display-shop-result").children().remove();
	    			$("#shop-total-record").html(data.total_record);
	    			if( data.response_data.length > 0){	    				
		    			$("#display-shop-table").tmpl(data.response_data).appendTo("#display-shop-result");
							    					    			
		    		}else{
						alert(1);
						total_page = 1;
						
			    	}
										 
	    			$('#pagi-display').bootpag({
		    			total : total_page, 
		    			maxVisible: showvisible, 
		    			leaps: true,
	    		        firstLastUse: true,
	    		        first: '&#8592;',
	    		        last: '&#8594;',
	    		        wrapClass: 'pagination',
	    		        activeClass: 'active',
	    		        disabledClass: 'disabled',
	    		        nextClass: 'next',
	    		        prevClass: 'prev',
	    		        lastClass: 'last',
	    		        firstClass: 'first'
		    		});
	    			progressbar.stop();	
	    			   			    			
	    		},
				xhr: function() {
					var xhr = new XMLHttpRequest();
					xhr.upload.addEventListener("progress", function(event) {
						if (event.lengthComputable) {
							var percentComplete = Math.round( (event.loaded / event.total) * 100 );
							 //console.log(percentComplete);
							
							$("#start_progress_bar").css({width: percentComplete+"%"});
								
						};
					}, false);

					return xhr;
					
				}
	    	});

		}

	    function updateShopStatus( status , shopid , callback){

		   	progressbar.start();   	
	    	$.ajax({
				type : "POST",
				url : $("#base_url").val()+"API/ShopRestController/toggleShop",
				contentType : "application/json",
				data :  JSON.stringify({
					"resq_data" : {
						"shop_id" : shopid,
						"shop_status" : status
					}					
				}),
				success : function(data){
					data = JSON.parse(data);
					if(data.is_updated == true){
						if( typeof callback === "function"){
							callback();
						}
					}else{
						swal("Update Error!", data.message, "error");
					}
					progressbar.stop();
				}
	    	});
		}


		function generateIdWithShopId(text,shopid){
			
			return text+shopid;
		}
		
		function dynamicColor(isopen, obj, delayclose, delayopen ){
			if(isopen == "1") {
				setTimeout(function(){ 
					$("#"+obj).css("color","#F44336"); 
				}, delayclose);
				return "color:#4CAF50";
			}
			else{
				setTimeout(function(){ 
					$("#"+obj).css("color","#4CAF50"); 
				}, delayopen);
				return "color:#F44336";
			} 
		}

		function checkShopStatus(status){

			if(status == "1"){
				return "checked";
			}else{
				return "";
			}
		}
		
		function addSrcLogoimg( image ){
			return $("#base_url").val()+"uploadimages/logo/small/"+image;
		}

		function trimString( string, startindex , endindex ){			
			return string.substring(startindex , endindex);
		}

		$(document).on("click", ".toggleshop", function(){

			var shopid = $(this).parents("tr").children("td").eq(0).find("input").val();
			
			if($(this).is(":checked")){
				$(this).prop('checked', false);
				updateShopStatus( 1 ,shopid , function(){
					$("#toggleshop"+shopid).prop('checked', true);
					swal("Shop is updated!", "This shop will be visible for clients", "success"); 
				});
				/* $(this).prop('checked', false);				
				
				swal({
					  title: "Are you sure?",
					  text: "This shop will be seen by the clients",
					  type: "warning",
					  showCancelButton: true,
					  confirmButtonColor: "#DD6B55",
					  confirmButtonText: "Yes, delete it!",
					  closeOnConfirm: false
				},
				function(isConfirm){
					if (isConfirm) {	 */											
						
				/* 	}
					
				}); */
			}else{
				$(this).prop('checked', true);
								
				swal({
					  title: "Are you sure?",
					  text: "The client will not be able to see this shop",
					  type: "warning",
					  showCancelButton: true,
					  confirmButtonColor: "#DD6B55",
					  confirmButtonText: "Yes",
					  closeOnConfirm: false
				},
				 function(isConfirm) {
			        if (isConfirm) {				       			        	
			        	updateShopStatus( 0 ,shopid , function(){
			        		$("#toggleshop"+shopid).prop('checked', false);								
				        	swal("Shop is updated!", "The client will not be able to view this shop", "success"); 
				        });					 
			        } else {
			            
			        }
			    });
			}
			
			
		});

		function formBaseUrl(){
			return "<?php echo base_url(); ?>MainController/updateshop";
		}
		
		$(document).on("click", ".shop-edit", function(){

			//$(this).siblings("form").submit();
			var shopid = $(this).parents("tr").children("td").eq(0).find("input").val();
			location.href= "<?php echo base_url(); ?>MainController/updateshop/"+shopid;
			
		
		});
		
		$('#pagi-display').bootpag().on("page", function(event, /* page number here */ num){
		    input["page"] = num;	    	
		    loadShopDataToTable();
		});
		    
		$("#btn-whole-search").on("click", function(){

			$('#pagi-display').bootpag({page : '1' });
			
			input["whole_search"] = $("#whole-search").val();
			input["page"] = 1;			
			loadShopDataToTable();
		});
		
		$("#shop-row-num").on("change", function(){

			$('#pagi-display').bootpag({page : '1' });

			input["page"] = 1;
			input["row"] = $(this).val();
						
			loadShopDataToTable();
		});
		
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

			                								                					                
					            