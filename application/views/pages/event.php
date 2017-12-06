<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Event List | Dernham</title>
 	
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
  		width: 120px;
  		height: 90px;;
  		border-radius: 5px;
  		top:6px;
  		right:0;
  		border: 2px solid #fff;
  		box-shadow: 1px 1px 2px gray;
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
  	
  	div.status-style{
  		position: relative;
  	}
  	
  	div.appeal-status{
  		width:20px;
  		height: 20px;
  		background: #4CAF50;
  		border-radius: 5px; 
  		position:absolute;
  		top:-7px;
  		left:-7px;
  		border-radius:5px;
  	}
  	
  	@media screen and (min-width: 768px) {
        #shopFacilityModal .modal-dialog {
          width: 800px; /* New width for default modal */
        }
        #shopFacilityModal .modal-sm {
          width: 350px; /* New width for small modal */
        }
    }
    @media screen and (min-width: 992px) {
        #shopFacilityModal .modal-lg {
          width: 950px; /* New width for large modal */
        }
    }
  	
  </style>
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/Jcrop/jquery.Jcrop.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop-upload.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/addshop-validation.css" />
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/addshop-openmodal.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/css/nhamslider.css">
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
  	
  	<input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
  	<input type="hidden" id="dis_img_path" value="<?php echo DIS_IMAGE_PATH ?>" />
  
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
            Event Management
            <small>create all the event here</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">event</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          	  <div class="box box-danger" style="border-radius: 0;min-height: 500px;" >
          	  
              	<div class="box-header">
                 
                  
                  <div class="col-lg-12">
                  	<div class="row">
                  		<div class="col-lg-7">
                  			
                  		</div>
                  		
                  		<div class="col-lg-5">
                  			<div class="row">
                  				<div class="col-lg-12">
                  					<div class="row">
                  						<button type="button" class="btn btn-default pull-right header-shop-btn" id="btnAddEvent">
		                  					<i class="fa fa-plus-circle" aria-hidden="true"></i>
		                  					Add Event 
		                  				</button>
		                  				
                  					</div>
                  				</div>
                  				
                  				<div class="col-lg-12" style="padding-top:10px;" id="normal-search-box">
                  					<div class="row">
                  						 <div class="col-lg-5"></div>
                  						 <div class="col-lg-7">
                  						 	<div class="row">
                  						 		<div class="input-group ">
							                       <input type="text" name="table_search" id="whole-search" class="form-control input-sm pull-right" placeholder="Search shop name,content ,creator...">
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
                  		
                  		
                  		<!-- add data -->
                  		<div class="col-lg-12">
                  			
                  		</div>
                  		
                  		<!-- end add data -->
                  		
                  	</div>             
                  </div>
                  
                  
                  <div class="col-lg-12" style="padding-top:-5px;">
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
                  			<p class="search-shop-result pull-right">searching results: <span id="total-record">0</span></p>                    			             			 
                  		</div>     
                  		<div style="clear:both"></div>      		                  		                		
                  	</div>             
                  </div>
                  
                  
                </div><!-- /.box-header -->
              	  
              	   <!-- table and pagination -->
                   <div class="box-body table-responsive no-padding" style="margin-top:-10px;" >
                      <table class="table table-hover" >
    	                  <thead>
    	                    <tr>
    	                      <th style="width:15%">Photo</th>
    	                      <th style="width:28%">Content</th>
    	                      <th style="width:15%">Shop</th>
    	                      <th style="width:15%">Created Date</th>
    	                      <th style="width:10%">Creator</th>                                         
    	                      <th style="width:10%">Status</th>
    	                      <th style="width:7%">Action</th>
    	                      
    	                    </tr>
                       	   </thead>
                       	   <tbody id="display-eve-result">
                       	   
                       	   </tbody>
                       	   
                      </table>
                    </div><!-- /.box-body -->
                    
                    <div class="" >
    	                <div id="pagi-display" class="pagination-display " style="padding-left:20px;">	     
    	                </div>
                    </div>
                    <!-- end table and pagination -->
              </div><!-- /.box -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
      		<?php include 'elements/footnavbar.php';?>
      </footer>

      <!-- Control Sidebar -->
      
    </div><!-- ./wrapper -->
    
    
 <!--add event popup --> 
	 <div class="modal fade" id="shopFacilityModal" role="dialog">
	     <div class="modal-dialog" >
	         <div class="modal-content">
	             <div class="modal-header">
	                <button type="button" id="shopfacilityclose" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title pop-title" style="font-weight:bold;"><i class="fa fa-th-large" aria-hidden="true" style="padding-right: 10px;"></i>Add Event</h4>
	             </div>
	             <div class="modal-body">
	              
             		<div class="col-lg-6">
             			<div class="row">
                 			<div class="form-group">
    		                     <label>Shop Name</label>
    		                     <input id="shop-name" class="form-control" type="text" />
    		                 </div>
    		                 
    		                
			                  <div  class="form-group">
								<label>Event's Image</label>
								<div class="col-lg-12 photo-browsing-wrapper" align="center">
									<div class="row">
										<div class="col-lg-12" align="center"  style="position:relative;">												                     		                  		                    	  					                    
					                    	<div class="photo-display-wrapper" style="width:67%;min-height:180px;" id="cover-display-wrapper">
					                    		<label class="gray-image-plus"><i class="fa fa-plus"></i></label>
					                    		<p style="font-weight:bold;color:#9E9E9E;margin-top:-10px;"> Add  image </p>
					                    	</div> 
											
											<!-- fake on -->
											<div class="photo-open-modal" id="cover-open-modal"></div>
											<div class="photo-upload-remove-fake" id="cover-upload-remove-fake"></div>
											<div class="photo-upload-remove" id="cover-upload-remove">
												<i id="cover-upload-remove-icon" class="fa fa-trash" aria-hidden="true"></i>	
											</div>
											<div class="photo-remove-loading" id="cover-remove-loading" align="center">
												<img class="loading-inside-box" 
													src="<?php echo base_url() ?>/assets/nhamdis/img/ringsmall.svg"  />	
											</div>
											<!-- end fake on -->														                    	  		                    	  		                    	  
										</div>
										<textarea rows="" placeholder="have your word about this..." id="cover_description"  class="nham_description"  cols=""></textarea>
									</div>
								</div>						
							</div>
             			</div>
                		 
                	</div>
                	
                	<div class="col-lg-6">
                		<div class="row" style="padding-left: 10px">
                			 <div class="form-group">
			                     <label>Event's Description</label>
			                     <textarea id="shopremark" class="form-control" rows="3" placeholder="describe what the event is all about" style="resize:none;height: 272px;"></textarea>
			                  </div>
			                  
                		</div>
                	</div>
                	<div style="clear:both;"></div>
	             		
	                	
	                	
	                	
	             </div>
	             <div class="modal-footer">
	                 <button type="button" id="belowcloseshopfacility" class="btn btn-default pull-left" style="display:none;" data-dismiss="modal">Close</button>
	               	<button type="button" id="shopfacilitysave" class="btn nham-btn btn-danger">Save</button>
	             </div>
	         </div><!-- /.modal-content -->
	     </div><!-- /.modal-dialog -->
	 </div><!-- /.modal --><!-- Modal -->
	 <button type="button" id="btnShowPopUp" style="display:none;" data-toggle="modal" style="display:none;" data-backdrop="static" data-keyboard="false" data-target="#shopFacilityModal">Open Modal</button>
	  <!--  end add event popup -->
	  
	  
	<!-- list of shop -->
	<div class="modal fade" id="listShopModal" role="dialog">
	     <div class="modal-dialog"  >
	         <div class="modal-content">
	             <div class="modal-header">
	                <button type="button" id="shopfacilityclose" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title pop-title" style="font-weight:bold;"><i class="fa fa-th-large" aria-hidden="true" style="padding-right: 10px;"></i>Shop List</h4>
	             </div>
	             <div class="modal-body" style="height: 600px;">
	               
	     
	                    <div class="col-lg-6"></div>
	      				<div class="input-group col-lg-6">
	                       <input type="text" name="table_search" id="shop_search" class="form-control input-sm pull-right" placeholder="Search shop name,type ,address...">
	                       <div class="input-group-btn">
	                         <button id="btn_shop_srch" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
	                       </div>
	                     </div>
    	                <!-- table and pagination -->
                       <div class="box-body table-responsive no-padding" style="" >
                          <table class="table table-hover" >
        	                  <thead>
        	                    <tr>
        	                      <th style="width:20%">Logo</th>
        	                      <th style="width:30%">Name</th>
        	                      <th style="width:50%">Address</th>
        	                      
        	                    </tr>
                           	   </thead>
                          </table>
                        </div><!-- /.box-body -->
                         <div class="box-body table-responsive no-padding" style="height:500px;overflow-y: auto;" >
                          <table class="table table-hover" >
        	                  <tbody id="display-listshop-result">
                   	   			 
                   	   			
                   	  		  </tbody>
                          </table>
                        </div><!-- /.box-body -->
                 
    				
    				         	
	             </div>
	         </div><!-- /.modal-content -->
	     </div><!-- /.modal-dialog -->
	 </div><!-- /.modal --><!-- Modal -->
	 <button type="button" id="btnListShop" style="display:none;" data-toggle="modal" style="display:none;" data-backdrop="static" data-keyboard="false" data-target="#listShopModal">Open Modal</button>	
	<!--end list of shop -->
   
    <?php include 'imports/scriptimport.php'; ?>
  
 
  </body>
 <script id="display-eve-table" type="text/x-jQuery-tmpl">
		<tr>					
			<td>
				<input type="hidden" value="{{= evt_id}}"/>
				<div class="img-logo-wrapper" >
				   <img class="table-shop-img" src="http://dernham.com/dernham_API/uploadimages/real/place/image-detail/medium/{{= evt_img}}" />				
				</div>				
			</td>
           	<td>					
				<div>
                    {{= subText( evt_cntt, 150) }}
                </div>
			</td>

            <td>					
				<div data-shop_id="{{= shop_id }}">
                    {{= shop_name_en }} ( {{= shop_name_kh }} )
                </div>
			</td>

            <td>					
				<div>
                    {{= created_date }}
                </div>
			</td>

            <td>					
				<div>
                    {{= admin_name }}
                </div>
			</td>

            <td>					
				<div class="status-style">   
                    <div class="appeal-status" id="{{= generateIdWithShopId('toggleEve',evt_id)}}" style="background: {{= backgroundStatus(status) }}"></div>
                    <select class="form-control evtstatus"  >
						<option value="0" {{= checkStatus(0 , status) }}> Disabled </option>
						<option value="1" {{= checkStatus(1 , status) }}> Active </option>
					</select>
                </div>
			</td>

            <td>					
				<div>
                    <i class="shop-edit fa fa-pencil-square" aria-hidden="true"></i>
                </div>
			</td>
           
		</tr>
					           	
   	</script>
   	
   	<script id="display-listshop-table" type="text/x-jQuery-tmpl">
         <tr>
             <td style="width:20%">
				<img src="https://dernham.com/dernham_API/uploadimages/real/place/logo/small/{{= shop_logo }}"   style="width:30px;height:30px;border-radius: 100%;"/>
			</td>
            <td style="width:30%">
                <span>{{= shop_name_en }}</span>
            </td>
            <td style="width:40%">{{= shop_address }}</td>
         </tr>
   	</script>
<script>

var pageNum = 1;
var totalPage = 1;
var srchKey = "";


var pageShNum = 1;
var totalShPage = 1

$(document).ready(function(){
	
	
	listEvent();
});

$("#btn-whole-search").on("click", function(){

	srchKey = $("#whole-search").val();
	listEvent();
});

$('#whole-search').keypress(function (e) {
    
	if (e.which == 13) {
		$("#btn-whole-search").click();
	    return false;    //<---- Add this line
	}
});

$("#btnAddEvent").on("click", function(){
	$('#btnShowPopUp').click();
});

$("#shop-name").on("click", function(){
	pageShNum = 1;
	listShop();
	$('#btnListShop').click();
});


$("#btn_shop_srch").on("click", function(){

	var txtShop = $("#shop_search").val();
	pageShNum = 1;
	listShop(txtShop);
});

$(document).on("change", ".evtstatus" ,function(){
	var evtid = $(this).parents("tr").children("td").eq(0).find("input").val();
	var first_status_val = $(this).val();
	var my_obj = this;
	$(this).prop("disabled", "disabled");
	
	toggleEvent( first_status_val ,evtid , function(data){

		console.log(data);
		$(my_obj).removeAttr("disabled");	
		if(data.response_code == "200"){
			$("#toggleEve"+evtid).css({
				"background" : backgroundStatus(first_status_val)
			});
		}else{
			var goback = (first_status_val == 0) ? 1 : 0;
			$(my_obj).val(goback);
			swal("Update Error!", data.message, "error");
		}
		
	
		//swal("Shop is updated!", "This shop will be visible for clients", "success"); 
	});
	
});

function toggleEvent(status , evtId, callback){

	$.ajax({
		type : "POST",
		url : $("#base_url").val()+"API/EventRestController/toggleevent",
		contentType : "application/json",
		data :  JSON.stringify({
			"request_data" : {
				"evt_id" : evtId,
				"status" : status
			}					
		}),
		success : function(data){
			data = JSON.parse(data);
			if( typeof callback === "function"){
				callback(data);
			}
			
		}
	});
}

function listEvent(){

	progressbar.start();
	$.ajax({
		type : "POST",
		url : $("#base_url").val()+"API/EventRestController/listevent",
		contentType : "application/json",
		data : JSON.stringify({
    		"request_data" : {
				"page" : pageNum,
				"row" : 10,
				"srch_key" : srchKey
        	}
	    }),
		success : function(data){

			data = JSON.parse(data);
			console.log(data.response_data);
			$("#display-eve-result").children().remove();
			$("#display-eve-table").tmpl(data.response_data).appendTo("#display-eve-result");
			$("#total-record").html(data.total_record);
			totalPage = data.total_page;	 
			$('#pagi-display').bootpag({
    			total : totalPage, 
    			maxVisible: 5, 
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

function listShop(srch){

	if(srch) srch = "";
	$.ajax({
		 type: "GET",
		 url: $("#base_url").val()+"API/ShopRestController/getShopByNameCombo", 
		 data : {			 
			"srchname" : srch,
			"limit" : 10,
			"page" : pageShNum	 	
		 },
		 success: function(data){
			 data = JSON.parse(data);
			console.log(data);

			if(pageShNum <= 1) $("#display-listshop-result").children().remove();
			
			$("#display-listshop-table").tmpl(data).appendTo("#display-listshop-result");

			pageShNum++
  	 	 }
  });
}

function subText(str, cutvalue){
  if(!str) return "";
    if(str.length > cutvalue){
      return str.substring(0,cutvalue)+"...";  
    }else{
      return str;
    }    
  }

function checkStatus( status , compare ){
	
	if(status == compare){
		return "selected";
	}else{
		return "";
	}
}

function generateIdWithShopId(text,shopid){
	
	return text+shopid;
}

function backgroundStatus( status ){
	if(status == "1" || status == 1){
		return "#4CAF50";
	}else{
		return "#F44336";
	}
}

</script>
</html>

			                								                					                
				