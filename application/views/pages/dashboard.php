<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Dernham</title>
 	
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
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        
          <!-- Info boxes -->
          <div class="row">
            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Users</span>
                  <span class="info-box-number">90<small>%</small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">New Users (1 month)</span>
                  <span class="info-box-number">41,410</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Places</span>
                  <span class="info-box-number">760</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">New Places</span>
                  <span class="info-box-number">2,000</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            
          </div><!-- /.row -->
          
          
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
          	  <div class="row">
	            <div class="col-md-12">
	              <div class="box">
	                <div class="box-header with-border">
	                  <h3 class="box-title">User's report</h3>
	                  <div class="box-tools pull-right">
	                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	                    <div class="btn-group">
	                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
	                      <ul class="dropdown-menu" role="menu">
	                        <li><a href="#">Action</a></li>
	                        <li><a href="#">Another action</a></li>
	                        <li><a href="#">Something else here</a></li>
	                        <li class="divider"></li>
	                        <li><a href="#">Separated link</a></li>
	                      </ul>
	                    </div>
	                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
	                  </div>
	                </div><!-- /.box-header -->
	                <div class="box-body">
	                  <div class="row">
	                    <div class="col-md-8">
	                      <p class="text-center">
	                        <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
	                      </p>
	                      <div class="chart">
	                        <!-- Sales Chart Canvas -->
	                        <canvas id="user_chart" style="height: 250px;"></canvas>
	                      </div><!-- /.chart-responsive -->
	                    </div><!-- /.col -->
	                    <div class="col-md-4">
	                      <p class="text-center">
	                        <strong>Goal Completion</strong>
	                      </p>
	                      <div class="progress-group">
	                        <span class="progress-text">Add Products to Cart</span>
	                        <span class="progress-number"><b>160</b>/200</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
	                        </div>
	                      </div><!-- /.progress-group -->
	                      <div class="progress-group">
	                        <span class="progress-text">Complete Purchase</span>
	                        <span class="progress-number"><b>310</b>/400</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-red" style="width: 80%"></div>
	                        </div>
	                      </div><!-- /.progress-group -->
	                      <div class="progress-group">
	                        <span class="progress-text">Visit Premium Page</span>
	                        <span class="progress-number"><b>480</b>/800</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-green" style="width: 80%"></div>
	                        </div>
	                      </div><!-- /.progress-group -->
	                      <div class="progress-group">
	                        <span class="progress-text">Send Inquiries</span>
	                        <span class="progress-number"><b>250</b>/500</span>
	                        <div class="progress sm">
	                          <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
	                        </div>
	                      </div><!-- /.progress-group -->
	                    </div><!-- /.col -->
	                  </div><!-- /.row -->
	                </div><!-- ./box-body -->
	              
	              </div><!-- /.box -->
	            </div><!-- /.col -->
	          </div><!-- /.row -->
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
    var user_data = {
				"l1": [100,150,120,190,300,250,165,175,189,187,152,230],
				"l2": [90,50,250,300,185,145,176,190,260,210,245,152],	
				"l5": [250,256,165,212,65,141,421,117,251,410,365,59]
    	   	};
    fn_createLineBarChart("user_chart",null,user_data);
    function fn_createLineBarChart(chart_id, chart_date, chart_data){
    	
    	if(chart_data == null){
    		
    		chart_data = {
    			"l1" : [],
    			"l2" : [],
    			"l3" : [],
    			"l4" : [],
    			"l5" : []
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
    					data: chart_data.l5
    				},{
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
    				data: chart_data.l2
    			},
    			{
    				 label: "dfd",				 
    				 type:"bar",
    				 backgroundColor: "#3891d8",
    				 borderColor: "#3891d8",
    				 borderWidth: 1,
    				 data: chart_data.l1
    			}
    			]
    		},options: {
    			responsive: false,
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
