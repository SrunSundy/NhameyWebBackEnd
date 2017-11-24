<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>shop overview | Dernham</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop.css" />
 	<style>
	 	.shop-event-wrapper{
	 		min-height:600px;
	 		background: #fff;
	 	}
	 	
	 	div.box-item{
	 	    height: 80px;
            border-left: 3px solid #e2dfdf;
            text-align: center;
	 	}
	 	
	 	div.box-item p {
	 	   margin-top: 10px;
	 	}
	 	
	 	div.box-recent{
	 	    height: 47px;
            line-height: 43px;
            border-top: 2px solid #d8d8d8;
	 	}
	 </style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
   
    <input type="hidden" id="shop_id" value="<?php echo $shop_id ?>"/>
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
    <input type="hidden" id="dis_img_path" value="<?php echo DIS_IMAGE_PATH ?>"/>
    
    <div class="shop-event-wrapper" >	
		<div  class="tab-wrapper">	       	 				
	       	 <div class="tab-header col-lg-12">
	       	 		<p class="tab-intro-text"><i class="fa fa-tachometer" aria-hidden="true"></i><span>Overview</span></p>
	       	 </div>
	       	 <div class="tab-body col-lg-12" style="margin-top:20px;">
		       	 <div class="row">
			       	 	
			       	 	
			       	 	<div class="box-item  col-sm-4 " style="border: 0">
			       	 		<p>
    			       	 		<i class="fa fa-users" aria-hidden="true" style="font-size: 48px;color: #d4d4d4; margin-right: 22px;"></i>
    			       	 		<span style="color:#3a3a3a"><span id="follower_cnt">0 Follower</span></span>
			       	 		<p>
			       	 	</div>
			       	 	<div class="box-item  col-sm-4 ">
			       	 		<p>
    			       	 		<i class="fa fa-cloud-upload" aria-hidden="true" style="font-size: 48px;color: #d4d4d4; margin-right: 22px;"></i>
    			       	 		<span style="color:#3a3a3a"><span id="image_cnt" >0 Posted image</span></span>
			       	 		<p>
			       	 	
			       	 	</div>
			       	 	<div class="box-item  col-sm-4 ">
			       	 		<p>
    			       	 		<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 48px;color: #d4d4d4; margin-right: 22px;"></i>
    			       	 		<span style="color:#3a3a3a"><span id="check_in_cnt">0 People check-in</span></span>
			       	 		<p>
			       	 	</div>
			       	 	
			       	 	<div style="clear:both;"></div>
			       	 	
			       	 	<div class="col-lg-12"  style="margin-top: 5px;">
            	       	 	<p class="tab-intro-text" style="font-size: 16px;"><span>Recent Statistic</span></p>
            	       	</div>
            	       	
            	       	<div class="col-lg-12"  style="margin-top: 5px;margin-bottom: 15px;">
            	       	 	<select class="form-control" style="width: 200px;" id="chart-type">
            	       	 		<option value="1">A Week</option>
            	       	 		<option value="2">A Month</option>
            	       	 	</select>
            	       	</div>
            	       	
            	       	<div class="col-sm-3">
            	       		
            	       			<div class="box-recent" style="border: 0">
        			       	 		<p>
            			       	 		<i class="fa fa-users" aria-hidden="true" style="font-size: 25px;color: #d4d4d4; margin-right: 16px;"></i>
            			       	 		<span style="color:#3a3a3a" id="p_follower">0 Follower</span>
        			       	 		<p>
        			       	 	</div>
        			       	 	<div class="box-recent">
        			       	 		<p>
            			       	 		<i class="fa fa-cloud-upload" aria-hidden="true" style="font-size: 25px;color: #d4d4d4; margin-right: 16px;"></i>
            			       	 		<span style="color:#3a3a3a" id="p_image">0 Posted image</span>
        			       	 		<p>
        			       	 	
        			       	 	</div>
        			       	 	<div class="box-recent">
        			       	 		<p>
            			       	 		<i class="fa fa-map-marker" aria-hidden="true" style="font-size: 25px;color: #d4d4d4; margin-right: 22px; margin-left: 7px;"></i>
            			       	 		<span style="color:#3a3a3a" id="p_check_in">0 People check-in</span>
        			       	 		<p>
        			       	 	</div>         	       			
            	       		
            	       	</div>
            	       	<div class="col-sm-9">
            	       		<div class="chart" id="w_place_chart">
	                           <!-- Sales Chart Canvas -->
	                        	<canvas id="statistic_chart" style="height: 380px;"></canvas>
	                      	</div><!-- /.chart-responsive -->
            	       	
            	       	</div>
            	       	<div style="clear:both;"></div>
            	       	
			       	 							
		       	 </div>
	       	 </div>
	    </div>	
    
    </div><!-- ./wrapper -->

   
    <?php include 'imports/scriptimport.php'; ?>
   
    <script src="<?php echo base_url(); ?>assets/plugins/Chart.bundle.min.js"></script>   
    <script>
   
    $(window).load(function(){

    	defaultDataRequest();
    	statisticByType(7);
    	fn_createChartByWeek();
    	window.parent.$(".iframe_hover").hide();
		window.parent.$("#updateShopframe").show();
		top.resizeIframe();
   });

    $("#chart-type").on("change", function(){
		if($(this).val() == "2"){
			fn_createChartByMonth()
		}else{
			fn_createChartByWeek();
		}
    });
        
	function updateShopField(value , param){
		$.ajax({
			type : "POST",
			url : "/NhameyWebBackEnd/API/ShopRestController/updateShopField",
			data : {
				"shopdata" : {
					"updated_value" : value,
					"shop_id" : $("#shop_id").val(),
					"param" : param
				}
			},
			success : function(data){
				data = JSON.parse(data);
				console.log(data);
					
			}
		});
	}

function defaultDataRequest(){
	$.ajax({
		type : "POST",
		url : $("#base_url").val()+"/API/ShopRestController/shopoverviewinfo",
		data : JSON.stringify({
			"resq_data" : {
				"shop_id" : $("#shop_id").val()
			}					
		}),
		success : function(data){
			data = JSON.parse(data);

			var followCnt = "" , imageCnt = "" , checkInCnt = "";
			if(data.shop_follower_cnt && parseInt(data.shop_follower_cnt) > 1) followCnt = data.shop_follower_cnt+" Followers";
			else followCnt = data.shop_follower_cnt+" Follower";

			if(data.shop_image_cnt && parseInt(data.shop_image_cnt) > 1) imageCnt = data.shop_image_cnt+" Posted images";
			else imageCnt = data.shop_image_cnt+" Posted image";

			if(data.check_in_cnt && parseInt(data.check_in_cnt) > 1) checkInCnt = data.check_in_cnt+ " People check-ins";
			else checkInCnt = data.check_in_cnt+ " People check-in";
			
		    $("#follower_cnt").html(followCnt);
		    $("#image_cnt").html(imageCnt);
		    $("#check_in_cnt").html(checkInCnt);
				
		}
	});
}

function statisticByType( day ){
	$.ajax({
		type : "POST",
		url : $("#base_url").val()+"/API/ShopRestController/shopoverviewinfo",
		data : JSON.stringify({
			"resq_data" : {
				"shop_id" : $("#shop_id").val(),
				"days" : day
			}					
		}),
		success : function(data){
			data = JSON.parse(data);

			console.log(data);

			var followCnt = "" , imageCnt = "" , checkInCnt = "";
			if(data.shop_follower_cnt && parseInt(data.shop_follower_cnt) > 1) followCnt = data.shop_follower_cnt+" Followers";
			else followCnt = data.shop_follower_cnt+" Follower";

			if(data.shop_image_cnt && parseInt(data.shop_image_cnt) > 1) imageCnt = data.shop_image_cnt+" Posted images";
			else imageCnt = data.shop_image_cnt+" Posted image";

			if(data.check_in_cnt && parseInt(data.check_in_cnt) > 1) checkInCnt = data.check_in_cnt+ " People check-ins";
			else checkInCnt = data.check_in_cnt+ " People check-in";

			$("#p_follower").html(followCnt);
			$("#p_image").html(imageCnt);
			$("#p_check_in").html(checkInCnt);
				
		}
	});
}

function fn_createChartByWeek(){

    var days = [];
	for(var i=6; i >=0; i--){			
		days.push(fn_getDate(i));
	}
	fn_createLineBarChart("statistic_chart", days, null);
}

function fn_createChartByMonth(){

	var months = [];
	for(var i=4; i>=1; i--){
		months.push(fn_getSevenOfMonth(i));
	}
	fn_createLineBarChart("statistic_chart", months, null);
}

function fn_createLineBarChart(chart_id, chart_date, chart_data){
    	
    	if(chart_data == null){
    		
    		chart_data = {
    			"l1" : [],
    			"l2" : [],
    			"l3" : []   			
    		};
    		for(var i=0; i<7; i++){
    			chart_data.l1.push(0);
    			chart_data.l2.push(0);
    			chart_data.l3.push(0);
    
    		}
    	}
    	if(chart_date ==  null){
    		chart_date = ["January","Febuary","March","April","May","June","July","August","September","October","November","December"];
        }
    	 
    	 console.log(chart_data.l1);
    	 console.log(chart_data.l2);
    	 console.log(chart_data.l3);
     	var par = "#"+chart_id;
    	$(par).children().remove();
    	$(par).append("<canvas style=' height:380px;' id='"+chart_id+"'></canvas>"); 
    	
    	var limit_tick = 10;
    	var max_limitvalue = 200;
    	//var all_data = chart_data.l1.concat(chart_data.l2);
    	/* //var max_data = Math.max.apply(Math,all_data);
    	if(max_data<20){
    		limit_tick = 0;
    		max_limitvalue = 0;
    	} *//*else if(max_data > 5000 && max_data <= 10000){
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
    				 backgroundColor: "#F44336",
    				 borderColor: "#F44336",
    				 fill: false,
    				 borderWidth: 2,
    				 pointBorderColor: "#F44336",
    				 pointBackgroundColor: "white",
    				 pointHoverBorderWidth: 2,
    				 pointBorderWidth: 2,
    				 pointRadius: 4,
    				 pointHoverRadius: 5,
    				 pointHitRadius: 4,
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
    										dis_data = data+"";
    									}else{
    										dis_data = data+'';
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
                        	return  data.datasets[tooltipItems.datasetIndex].label +" : "+ fn_numFormat(tooltipItems.yLabel) + "";
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

    							var dis_label = "";
    							if(label >= 1000){
									dis_label = fn_numFormat(label /1000) + "K";
        						}else{
            						if(label < 1){
										dis_label = label.toFixed(1);
                					}else{
                						dis_label = fn_numFormat(label);
                    				}
									
            					}
    							
    							return dis_label;
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

function fn_getDate( num_day , format){
	
	if(format == null){
		format = '';
	}
	var today = new Date();
	var last = new Date(today.getTime() - (num_day * 24 * 60 * 60 * 1000));
	
	var dd =last.getDate();
	var mm=last.getMonth()+1;
	var yyyy=last.getFullYear();
	if(dd<10)	
		dd='0'+dd;	
	if(mm<10 && format == "yyyymmdd" || format == "yyyy-mm-dd")
	    mm='0'+mm;
	if(format == "yyyymmdd")
		return yyyy+""+mm+""+dd;
	else if(format == "yyyy-mm-dd"){
		return yyyy+"-"+mm+"-"+dd;
	}
	else {
		/*var m_names = new Array("Jan", "Feb", "Mar", 
				"Apr", "May", "Jun", "Jul", "Aug", "Sep", 
				"Oct", "Nov", "Dec");*/
		return mm+"/"+dd+"("+fn_getDayOfWeek(yyyy+"/"+mm+"/"+dd)+")";
	}
		
}

function fn_getSevenOfMonth(weekNum){

	var lastDate = (weekNum * 7)-1;
	var firstDate = (weekNum*7)-7;

	return fn_getDate(lastDate)+"~"+fn_getDate(firstDate);
}

function fn_getDayOfWeek(date){

	var dayofweek = ["Sun","Mon", "Tue", "Wed", "Thu" ,"Fri", "Sat"];
	var d = new Date(date).getDay();
	return dayofweek[d];
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
