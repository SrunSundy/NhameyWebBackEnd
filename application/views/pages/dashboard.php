<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Dernham</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 <style>
 	.des-title{
 		font-size: 17px;
    	font-weight: bold;
 	}
 	
 	ul.top-user li{
 		width: 80px;
 		hight: 80px;
 		padding: 0;
 	}
 	
 	ul.top-user li img{
 		width: 65px;
 		height: 65px;
 	}
 	
 	
 	ul.top-user li a{
 		font-size: 11px;
 	}
 	
 	ul.small-user{
 		margin-right: 10px;
 	}
 	
 	ul.small-user li{
 		/* position:absolute; */
 		width: 20px;
 		height: 40px;
 		transition: all 0.2s linear;
 		padding: 0;
 		padding-top: 7px;
 		
 		
 	}
 	
 	ul.small-user li img{
 		width: 20px;
 		height: 20px;
 	}
 	
 	
 	
 	ul.small-user li:hover{
 		margin-top: -10px;
 		z-index: 10;
 	
 	}
 	
 	ul.small-user li:hover img{
 		
 		z-index: 10;
 	}
 	
 	ul.top-post li img{
 		border-radius: 0;
 	}
 	
 	ul.top-post li {
 		width: 120px;
 		hight: 120px;
 		padding: 0;
 		margin-left: 8px
 	}
 	
 	ul.top-post li img{
 		width: 110px;
 		height: 110px;
 	}
 	
 	div.num-post{
 	
 		width:25px;
 		height: 25px;
 		border-radius: 100%;
 		background: #2196F3;
 		position:absolute;
 		top: -8px;
 		right: 0;
 		color:white;
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
          <h1>
            Dashboard
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>
                  <p>Total Places</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-stalker"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Total Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-chatboxes"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>44</h3>
                  <p>Total Posts</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Total Cuisine</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          
          
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
            
              <!-- Place statistic col -->
          	  <div class="row">
	            <div class="col-md-12">
	              <div class="box">
	                <div class="box-header with-border">
	                  <h3 class="box-title des-title" >Place Statistic</h3>
	                  <div class="box-tools pull-right">
	                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>	                   
	                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
	                  </div>
	                </div><!-- /.box-header -->
	                <div class="box-body">
	                  <div class="row">
	                    <div class="col-md-8">
	                      <p class="text-left">
	                        <strong>Monthly's Report</strong>
	                      </p>
	                      <div class="data-chart-setting" style="padding-bottom: 7px;float: right; margin-right: 13px;">
	                      
	                       <select class="pull-right" style="width: 120px;height: 30px;padding-left:10px;margin-left:15px;">
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      	
	                      	</select>
	                        <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
			                    <div class="btn-group" data-toggle="btn-toggle" >
			                      <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
			                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
			                    </div>
		                    </div>
	                      	
	                      </div>
	                      <div class="chart">
	                        <!-- Sales Chart Canvas -->
	                        <canvas id="user_chart" style="height: 310px;"></canvas>
	                      </div><!-- /.chart-responsive -->
	                       
	                       <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL PLACES</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL DISABLE</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL BOOSTERS</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL ADVERTISERS</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
	                      
	                    </div><!-- /.col -->
	                    <div class="col-md-4">
	                      <p class="text-left">
	                        <strong>Place's Current Statistic</strong>
	                      </p>
	                      <div class="progress-group" style="padding-bottom: 15px;">
	                        <span class="progress-text">Top Places</span>
	                      	<div class="box-body no-padding">
		                      <ul class="users-list top-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Alexander Pierce</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Norman</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Jane</a>
		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">John</a>
		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Alexander</a>
		                          
		                        </li>
		                      <!--    <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Sarah</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nora</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nadia</a>
		                          
		                        </li>
		                         <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nora</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nadia</a>
		                          
		                        </li>-->
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                      <div class="progress-group">
	                        <span class="progress-text">New Places (last 1 month)</span>
	                        <span class="progress-number"><b>160</b>/200</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
	                        </div>
	                         <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">	                         	                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                      <div class="progress-group">
	                        <span class="progress-text">Unauthorized Places</span>
	                        <span class="progress-number"><b>310</b>/400</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                      <div class="progress-group">
	                        <span class="progress-text">Disabled PLaces</span>
	                        <span class="progress-number"><b>480</b>/800</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">Advertising Places</span>
	                        <span class="progress-number"><b>310</b>/400</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">Boosting Places</span>
	                        <span class="progress-number"><b>310</b>/400</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                     
	                    </div><!-- /.col -->
	                  </div><!-- /.row -->
	                </div><!-- ./box-body -->
	              
	              </div><!-- /.box -->
	            </div><!-- /.col -->
	          </div><!-- /.row -->
           	  <!-- end place statistic col -->
           	  
           	   <!-- user statistic col -->
          	  <div class="row">
	            <div class="col-md-12">
	              <div class="box">
	                <div class="box-header with-border">
	                  <h3 class="box-title des-title" >User Statistic</h3>
	                  <div class="box-tools pull-right">
	                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>	                   
	                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
	                  </div>
	                </div><!-- /.box-header -->
	                <div class="box-body">
	                  <div class="row">
	                  
	                    <div class="col-md-12">
	                    	<div class="progress-group" style="padding-bottom: 8px;">
	                        <span class="progress-text">Top Users</span>
	                      	<div class="box-body no-padding">
		                      <ul class="users-list top-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Alexander Pierce</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Norman</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Jane</a>
		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">John</a>
		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Alexander</a>
		                          
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Sarah</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nora</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nadia</a>
		                          
		                        </li>
		                         <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nora</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nadia</a>
		                          
		                        </li>
		                         <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Sarah</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nora</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nadia</a>
		                          
		                        </li>
		                         <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nora</a>
		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nadia</a>
		                          
		                        </li>
		                         <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">
		                          <a class="users-list-name" href="#">Nadia</a>
		                          
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                    </div>
	                    
	                    <div class="col-md-8">
	                      <p class="text-left">
	                        <strong>Monthly's Report</strong>
	                      </p>
	                      <div class="data-chart-setting" style="padding-bottom: 7px;float: right; margin-right: 13px;">
	                      
	                       <select class="pull-right" style="width: 120px;height: 30px;padding-left:10px;margin-left:15px;">
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      	
	                      	</select>
	                        <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
			                    <div class="btn-group" data-toggle="btn-toggle" >
			                      <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
			                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
			                    </div>
		                    </div>
	                      	
	                      </div>
	                      <div class="chart">
	                        <!-- Sales Chart Canvas -->
	                        <canvas id="place_chart" style="height: 300px;"></canvas>
	                      </div><!-- /.chart-responsive -->
	                      
	                       
	                       <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL USERS</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL DISABLE</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL ACTIVE</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL UNAUTHORIZED</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
	                      
	                    </div><!-- /.col -->
	                    <div class="col-md-4">
	                      <p class="text-left">
	                        <strong>User's report</strong>
	                      </p>
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">New Users (last 1 month)</span>
	                        <span class="progress-number"><b>160</b>/200</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
	                        </div>
	                         <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">	                         	                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                      
	                       
	                      <div class="progress-group">
	                        <span class="progress-text">Shop Owners</span>
	                        <span class="progress-number"><b>160</b>/200</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
	                        </div>
	                         <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">	                         	                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">Reported Users</span>
	                        <span class="progress-number"><b>310</b>/400</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                      
	                       <div class="progress-group">
	                        <span class="progress-text">Unauthorized Users</span>
	                        <span class="progress-number"><b>480</b>/800</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">Disabled Users</span>
	                        <span class="progress-number"><b>480</b>/800</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                     
	                    </div><!-- /.col -->
	                  
	                  
	                  </div><!-- /.row -->
	                </div><!-- ./box-body -->
	              
	              </div><!-- /.box -->
	            </div><!-- /.col -->
	          </div><!-- /.row -->
           	  <!-- end user statistic col -->
           	  
           	  <!-- post statistic col -->
          	  <div class="row">
	            <div class="col-md-12">
	              <div class="box">
	                <div class="box-header with-border">
	                  <h3 class="box-title des-title" >Post Statistic</h3>
	                  <div class="box-tools pull-right">
	                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>	                   
	                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
	                  </div>
	                </div><!-- /.box-header -->
	                <div class="box-body">
	                  <div class="row">
	                  
	                    <div class="col-md-12">
	                    	<div class="progress-group" style="padding-bottom: 8px;">
	                        <span class="progress-text">Top Posts</span>
	                      	<div class="box-body no-padding">
		                      <ul class="users-list top-post clearfix">
		                        <li>		                         
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>		                         
		                        </li>
		                        <li>
		                           <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                          
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>		                          		                        
		                        </li>		                        
		                        <li>
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                                                   
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>		                         		                         
		                        </li>
		                        <li>
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                                                   
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>		                         		                         
		                        </li>
		                        <li>
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">	                                                   
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>		                          		                          
		                        </li>
		                        <li>
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">                                              
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>		                          		                        
		                        </li>
		                        <li>
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">                                            
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>	                          		                        
		                        </li>
		                        <li>
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">                                           
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>		                          		                          
		                        </li>
		                         <li>		                          
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">                                         
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>
		                        </li>
		                        <li>		                          
		                          <div style="position:relative;">
		                             <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">                                     
		                             <div class="num-post">
		                             	<span>2</span>
		                             </div>
		                          </div>
		                        </li>
		                        
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                    </div>
	                    
	                    <div class="col-md-8">
	                      <p class="text-left">
	                        <strong>Monthly's Report</strong>
	                      </p>
	                      <div class="data-chart-setting" style="padding-bottom: 7px;float: right; margin-right: 13px;">
	                      
	                       <select class="pull-right" style="width: 120px;height: 30px;padding-left:10px;margin-left:15px;">
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      		<option>2010</option>
	                      	
	                      	</select>
	                        <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
			                    <div class="btn-group" data-toggle="btn-toggle" >
			                      <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
			                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
			                    </div>
		                    </div>
	                      	
	                      </div>
	                      <div class="chart">
	                        <!-- Sales Chart Canvas -->
	                        <canvas id="post_chart" style="height: 300px;"></canvas>
	                      </div><!-- /.chart-responsive -->
	                      
	                       
	                       <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL USERS</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL DISABLE</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL ACTIVE</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
		                    
		                    <div class="col-sm-3 col-xs-6">
		                      <div class="description-block border-right">
		                        <span class="description-percentage text-green"> IN 2010</span>
		                        <h5 class="description-header">$35,210.43</h5>
		                        <span class="description-text">TOTAL UNAUTHORIZED</span>
		                      </div><!-- /.description-block -->
		                    </div><!-- /.col -->
	                      
	                    </div><!-- /.col -->
	                    <div class="col-md-4">
	                      <p class="text-left">
	                        <strong>User's report</strong>
	                      </p>
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">New Users (last 1 month)</span>
	                        <span class="progress-number"><b>160</b>/200</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
	                        </div>
	                         <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">	                         	                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                      
	                       
	                      <div class="progress-group">
	                        <span class="progress-text">Shop Owners</span>
	                        <span class="progress-number"><b>160</b>/200</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
	                        </div>
	                         <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">	                         	                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
                    
	                      </div><!-- /.progress-group -->
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">Reported Users</span>
	                        <span class="progress-number"><b>310</b>/400</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                      
	                       <div class="progress-group">
	                        <span class="progress-text">Unauthorized Users</span>
	                        <span class="progress-number"><b>480</b>/800</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                      
	                      <div class="progress-group">
	                        <span class="progress-text">Disabled Users</span>
	                        <span class="progress-number"><b>480</b>/800</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
	                        </div>
	                        <div class="box-body no-padding" style="margin-top:-22px">
		                      <ul class="users-list small-user clearfix">
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user8-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user6-128x128.jpg" alt="User Image">		                        
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" alt="User Image">		                       
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user5-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User Image">		                         
		                        </li>
		                        <li>
		                          <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="User Image">		                       
		                        </li>
		                      </ul><!-- /.users-list -->
		                    </div><!-- /.box-body -->
		                    
	                      </div><!-- /.progress-group -->
	                     
	                    </div><!-- /.col -->
	                  
	                  
	                  </div><!-- /.row -->
	                </div><!-- ./box-body -->
	              
	              </div><!-- /.box -->
	            </div><!-- /.col -->
	          </div><!-- /.row -->
           	  <!-- end user statistic col -->
           	  
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
           <!--  <section class="col-lg-5 connectedSortable">

            </section> --><!-- right col -->
          </div><!-- /.row (main row) -->

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
    <script src="<?php echo base_url(); ?>assets/plugins/Chart.bundle.min.js"></script>
    <script>

	/* var li_small_u_parent = $("ul.small-user li").parent().prop('className');

	var le = $("."+li_small_u_parent.split(" ")[1]);
	for(var i=0; i<le.length; i++){
		
		var child = $(le).eq(i).children();
		var gap = 0;
		for(var c=0; c<child.length; c++){
			
			child.eq(c).css({
				"left" : gap+"px"
			});	
			gap += 20;
		}
	} */
	
    var user_data = {
				"l1": [500,650,720,690,800,550,465,375,489,687,752,930], /*Total Users*/
				"l2": [90,50,250,300,185,145,176,190,260,210,245,152],	 /*Total Active Users*/
				"l3": [250,256,165,212,65,141,421,117,251,410,365,59],   /*Total Unauthorized Users*/
				"l4": [50,26,105,152,125,101,121,107,151,110,65,159]     /*Total Disabled Users*/
    	   	};
    fn_createLineBarChart("user_chart",null,user_data);
    fn_createLineBarChart("place_chart",null,user_data);
    fn_createLineBarChart("post_chart",null,user_data);
    function fn_createLineBarChart(chart_id, chart_date, chart_data){
    	
    	if(chart_data == null){
    		
    		chart_data = {
    			"l1" : [],
    			"l2" : [],
    			"l3" : [],
    			"l4" : [],
    		};
    		for(var i=0; i<12; i++){
    			chart_data.l1.push(0);
    			chart_data.l2.push(0);
    			chart_data.l3.push(0);
    			chart_data.l4.push(0);
    			chart_data.l5.push(0);
    		}
    	}
    	if(chart_date ==  null){
    		chart_date = ["January","Febuary","March","April","May","June","July","August","September","October","November","December"];
        }
    	
    /* 	var par = "#w_"+chart_id;
    	$(par).children().remove();
    	$(par).append("<canvas style='width:890px; height:231px;' id='"+chart_id+"'></canvas>"); */
    	
    	var limit_tick = 10;
    	var max_limitvalue = 200;
    	var all_data = chart_data.l1.concat(chart_data.l2);
    	var max_data = Math.max.apply(Math,all_data);
    	if(max_data<20){
    		limit_tick = 0;
    		max_limitvalue = 0;
    	}/*else if(max_data > 5000 && max_data <= 10000){
    		limit_tick = 10;
    		max_limitvalue = 10000;
    	}*/
    	
    	  var config = {
    		data :{
    			labels: chart_date,
    			datasets: [ 
    				{
    				 label: "ff",
    				 lineTension: 0,
    				 type:"line",    				
    				 backgroundColor: "#f7cd4e",
    				 borderColor: "#f7cd4e",
    				 fill: false,
    				 borderWidth: 2,
    				 pointBorderColor: "#f7cd4e",
    				 pointBackgroundColor: "white",
    				 pointHoverBorderWidth: 2,
    				 pointBorderWidth: 2,
    				 pointRadius: 4,
    				 pointHoverRadius: 5,
    				 pointHitRadius: 4,
    				data: chart_data.l3
    			},{
	   				 label: "ff",
					 lineTension: 0,
					 type:"line",    				
					 backgroundColor: "#00a65a",
					 borderColor: "#00a65a",
					 fill: false,
					 borderWidth: 2,
					 pointBorderColor: "#00a65a",
					 pointBackgroundColor: "white",
					 pointHoverBorderWidth: 2,
					 pointBorderWidth: 2,
					 pointRadius: 4,
					 pointHoverRadius: 5,
					 pointHitRadius: 4,
					data: chart_data.l2
				},{
	   				 label: "ss",
					 lineTension: 0,
					 type:"line",    
					 backgroundColor: "rgba(252, 50, 50,0.3)",
					 borderColor: "#fd5858",
					 borderWidth: 2,
					 pointBorderColor: "#fd5858",
					 pointBackgroundColor: "white",
					 pointHoverBorderWidth: 2,
					 pointBorderWidth: 2,
					 pointRadius: 4,
					 pointHoverRadius: 5,
					 pointHitRadius: 4,
					 data: chart_data.l4
				},{
    				 label: "dfd",				 
    				 type:"bar",
    				 backgroundColor: "#3891d8",
    				 borderColor: "#3891d8",
    				 borderWidth: 1,
    				 data: chart_data.l1
    			}
    			]
    		},options: {
    			responsive: true,
    			title:{
    				display:false
    			},
    			legend: {
    				display: false
    			},
    			animation: {
    	        	
    				onComplete: function () {
    					var chartInstance = this.chart,
    						ctx = chartInstance.ctx;
    						ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
    						ctx.textAlign = 'center';
    						ctx.textBaseline = 'bottom';
    						var all_val = [];
    						this.data.datasets.forEach(function (dataset, i) {
    						
    							var meta = chartInstance.controller.getDatasetMeta(i);											
    							meta.data.forEach(function (bar, index) {
    								var data = dataset.data[index];   						
    								all_val.push(data);
    							});							
    							if(dataset.type == "bar"){
    								
    								var max_val = Math.max.apply( Math, all_val );					
    								meta.data.forEach(function (bar, index) {
    									var data = dataset.data[index]; 

    									var cur_val = (data / max_val)*100;
    									var dis_data = "";
    									if(data < 1000){
    										dis_data = data+"dfg";
    									}else{
    										dis_data = data+'ghf';
    									}	
    									
    									if(cur_val > 95.8){
    										
    										var color = "white";
    										if(dis_data.length > 7){
    											color = "#BDBDBD";
    										}
    										ctx.fillStyle = color;
    										ctx.fillText(dis_data, bar._model.x, bar._model.y+17);
    									}else{
    										ctx.fillStyle = 'gray';
    										ctx.fillText(dis_data, bar._model.x, bar._model.y-2);
    									}
    									
    								});
    								
    								
    							}
    							
    						});
    				}
    	        },
    			tooltips: {			
    				mode: 'label',
    				callbacks: {
                        label: function(tooltipItems, data) {
                        	return  data.datasets[tooltipItems.datasetIndex].label +" : "+ fn_numFormat(tooltipItems.yLabel) + "媛�";
                        }
                    }               
    			},
    			hover: {
    				animationDuration: 0
    			},				
    			scales: {
    				xAxes: [{
    					display: true,
    					
    					scaleLabel: {
    						display: true
    					},
    					gridLines: {
    						show: false,
    						drawBorder: false,
    						color: "rgba(0,0,0,0)"
    					}
    				}],
    				yAxes: [{
    					display: true,
    					ticks: {
    						beginAtZero: true,
    						callback: function(label, index, labels) {
    		
    							
    							var dis_label;
    							var c_label = label +"";
    							if( c_label.includes(".") ){								
    								dis_label = label.toFixed(1);
    							}else{
    								dis_label = label;
    							}	
    							return fn_numFormat(dis_label) + "sdf";
    						},
    						maxTicksLimit: 10
    						
    					},
    					gridLines: {
    						show: true,
    						color: "#d4d4d4",
    						borderDash: [3, 3]
    					},
    					scaleLabel: {
    						display: true

    					}
    				}]
    			}
    	    }
    	 };
    	 var myBarChart = Chart.Bar(document.getElementById(chart_id), config);
    	 Chart.pluginService.register({
    		afterDatasetsDraw: function(chart) {
    			var ctx = chart.chart.ctx;					
    								
    			var xAxe = chart.config.options.scales.xAxes[0];
    			var xScale = chart.scales[xAxe.id];
    			var yAxe = chart.config.options.scales.yAxes[0];
    			var yScale = chart.scales[yAxe.id];
    			
    			ctx.strokeStyle = "rgb(172, 172, 172)";
    			ctx.beginPath();
    			ctx.moveTo(xScale.right,yScale.bottom+0.5);
    			ctx.lineTo(xScale.left-10, yScale.bottom+0.5);
    			ctx.stroke();
    			
    								
    		}	
    	 });
    }
    
    function fn_numFormat(val){
    	var myval = parseFloat(val);
    	if(myval < 1000){
    		return val;
    	}
    	return parseFloat(val).toFixed(1).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").split(".")[0];
    }
    </script>
  </body>
</html>
