<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Send Message | Dernham</title>
 	
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
            Push Notification Management
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Message Player</li>
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
					   </div>
                  		
                  		<div class="col-lg-5">
                  			<div class="row">
                  			
                  				<div class="col-lg-12" style="padding-top:7px;" id="normal-search-box">
                  					<div class="row">
                  						 <div class="col-lg-5"></div>
                  						 <div class="col-lg-7">
                  						 	<div class="row">
                  						 		<div class="input-group ">
							                       <input type="text" name="table_search" id="whole-search" class="form-control input-sm pull-right" placeholder="Search Name Email Phone...">
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
						<div class="col-lg-12">
						<small>Write Message</small>
						 <form>
						  <div class="form-group" >
							<textarea id="message" class="form-control"> </textarea>
						  </div>
						  <div class="form-group">
						  
						  </div>
						  
								<label class="radio-inline">
								  <input type="radio"  id="ch-sms" disabled  name="optradio">Send Wtih SMS
								</label>
								<label class="radio-inline">
								  <input type="radio"  id="ch-fb"  disabled  name="optradio">Send Wtih Facebook
						        </label>
								<label class="radio-inline">
								  <input type="radio"  id="ch-fb" checked name="optradio">Push Notification
						        </label>
								<label class="radio-inline">
								  <input type="checkbox"  class="sendall" checked name="sendall"> Send All member
						        </label>
						  <button type="button"  id="submit" class="pull-right btn btn_loading" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Send...">Send</button>
						  
						 </form>
						
						</div>
                  	</div>             
                  </div>
                  
                  <div class="col-lg-12 border-line"></div>
                 
                  
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
                <div class="box-body table-responsive no-padding playerlist" style="margin-top:-10px;" >
                  <table class="table table-hover tableplayer" >
	                  <thead>
	                    <tr>
						  <th style="width:7%"><input type="checkbox" id="select_all"/> #</th>
	                      <th style="width:1%">User Id</th>
						  <th style="width:1%">User Photo</th>
	                      <th style="width:15%">Full Name</th>
	                      <th style="width:15%">Gender</th>
	                      <th style="width:15%">Phone Number</th>
	                      <th style="width:15%">Email</th>
	                      
	                    </tr>
                   	   </thead>
                   	   <tbody id="display-shop-result">
                   	   
                   	   </tbody>
                   	   
                  </table>
                </div><!-- /.box-body -->
                
                <div class="" >
	                <div id="pagi-display" class="pagination-display " style="padding-left:20px;">	     
	                </div>
                </div>
                
              </div><!-- /.box -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
      		<?php include 'elements/footnavbar.php';?>
      </footer>

      <!-- Control Sidebar -->
      
    </div><!-- ./wrapper -->

   
    <?php include 'imports/scriptimport.php'; ?>
   <script id="display-shop-table" type="text/x-jQuery-tmpl">
		<tr>
           <td><input class="checkbox"  type="checkbox" name="user_id[]"></td>		
			<td class="cl-userid">
				{{= user_id}}
							
			</td>
			<td>
				<input type="hidden" value="{{= user_id}}"/>
				<div class="img-logo-wrapper" >
				   <img class="table-shop-img" src="http://dernham.com/user_profile/{{= user_photo}}" />
				   <span class="active-shop" style="position:absolute;top:0;right0;">
					    <i class="fa fa-circle shop-display-status" id="{{= user_id }}" aria-hidden="true"></i>
				   </span>
				</div>				
			</td>
           	<td>				
				{{= user_fullname }} 
			</td>
			<td>{{= user_gender }} </td>
			</td>
            <td>{{= user_phone }}</td>
            <td>{{= user_email }}</td>
 			
 			
									
		</tr>
					           	
   	</script>
	<script>
		$('.sendall').change(function(){ 
			var status = this.checked; 
			if(status==true){
				status=false;
			}else{
				status=true;
			}
			$('.checkbox').each(function(){ 
				this.checked = status; 
			});
		}); 
		$('.playerlist').on('change', '#select_all', function (){ 
			var status = this.checked; 
			$('.checkbox').each(function(){ 
				this.checked = status; 
			});
		});
		
		$('.playerlist').on('change', '.checkbox', function (){ 
			if(this.checked == false){ 
				$("#select_all")[0].checked = false; 
				
			}
			if ($('.checkbox:checked').length == $('.checkbox').length ){
				$("#select_all")[0].checked = true;
				
			}
		});
	$('#submit').click(function () {
	var message= $("#message").val();
	var userId= [];
	var btn_loading = $(".btn_loading");
    btn_loading.button('loading');
	if($('.sendall').is(':checked')) {
	  $.ajax({
		 url: "<?php echo base_url(); ?>API/Pushnotification/push_notificationAll",
		 type: "POST",
		 data:{
			message:message,
			
		 },
		 success: function(data){
		   btn_loading.button('reset');  
		   alert(data);
		 }
		});
	}else{
		 $('.tableplayer tbody').find('input[type="checkbox"]:checked ').each(function () {
	    var row = $(this).closest("tr");    // Find the row
	    var id = row.find(".cl-userid").text(); 
	    userId.push(id);
	   });
	    $.ajax({
		 url: "<?php echo base_url(); ?>API/Pushnotification/push_notification",
		 type: "POST",
		 data:{
			message:message,
			userId:userId
		 },
		 success: function(data){
		   btn_loading.button('reset');  
		   alert(data);
		 }
		});
		
	}
	
	
  });
	</script>
    <script src="<?php echo base_url(); ?>assets/nhamdis/jscontroller/listplayer.js"></script>
  </body>
</html>

			                								                					                
					            