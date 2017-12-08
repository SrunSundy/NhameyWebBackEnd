<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	
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
 	</style>
 	<?php include 'imports/cssimport.php' ?>
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
            Advert Management
            <small>create all the adverts here</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Advert Management</li>
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
    	                      <th style="width:8%">Type</th>
    	                      <th style="width:20%">Photo</th>
    	                      <th style="width:15%">Title</th>
    	                      <th style="width:15%">Description</th>
    	                      <th style="width:10%">Shop</th>                                         
    	                      <th style="width:7%">Sponsor</th>
    	                      <th style="width:10%">Created Date</th>
    	                      <th style="width:10%">Status</th>
    	                      <th style="width:5%">Action</th>
    	                      
    	                    </tr>
                       	   </thead>
                       	   <tbody id="display-result">
                       	   
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

   
    <?php include 'imports/scriptimport.php'; ?>
  </body>
  
  <script>

	var srchKey = "";
	var pageNum = 1;

    listAdvert();
	function listAdvert(){
		progressbar.start();
		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/AdvertisementRestController/listadvert",
			contentType : "application/json",
			data : JSON.stringify({
	    		"request_data" : {
					"page" : pageNum,
					"row" : 10,
					"srch_key" : srchKey,
					"type" : 1
	        	}
		    }),
			success : function(data){

				data = JSON.parse(data);
				console.log(data.response_data);
				$("#display-result").children().remove();
				$("#display-result").tmpl(data.response_data).appendTo("#display-eve-result");
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
				pageNum++;
				   			    			
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

  </script>
</html>
