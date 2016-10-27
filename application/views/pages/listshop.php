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
  		height:100px;
  		
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
  	
  	i.active-shop{
  		
  		font-size: 10px;
  		padding-right: 5px;
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
                  									<i class="fa fa-circle" style="color:#4CAF50;" aria-hidden="true"></i>
                  									Active : 500000
                  								</p>      
                  							</div>
                  						</div>
                  						
                  						<div class="col-lg-3">
                  							<div class="row">
                  								<p class="text-show-style" title="Total photo of the shop">
                  									<i class="fa fa-picture-o" style="color:#2196F3" aria-hidden="true"></i>
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
                  						 <div class="col-lg-6"></div>
                  						 <div class="col-lg-6">
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
                    <tr>
                      <th style="width:7%">Logo</th>
                      <th style="width:15%">Name</th>
                      <th style="width:5%">serve_type</th>
                      <th style="width:10%">created_date</th>
                      <th style="width:15%">address</th>
                      <th style="width:5%">view</th>
                      <th style="width:5%">status</th>
                      <th style="width:13%">remark</th>
                      <th style="width:10%">creator</th>
                      <th style="width:5%">photo</th>
                      <th style="width:10%">action</th>
                    </tr>
                    <tr>
                      <td>183</td>
                      <td><i class="fa fa-circle active-shop" style="color:#4CAF50;" aria-hidden="true"></i>John Doe (Jobora tomani)<span class="shop-open-time">[opening : 9:00 - 21:00 ]</span></td>
                      <td>11-7-2014</td>
                      <td><span class="label label-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="label label-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="label label-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="label label-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
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
    
    <script>
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
