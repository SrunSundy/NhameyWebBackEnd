<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/nhamdis/csscontroller/updateshop.css" />
 
	 <style>
	 	.shop-event-wrapper{
	 		min-height:600px;
	 		background: #fff;
	 	}
	 	
	 	p.update-title{
	 		
	 		font-size: 15px;
	 		font-weight: bold;
	 		padding-bottom: 4px;
	 		color: #90949c;
	 		border-bottom: 1px solid #EEEEEE;
	 		
	 	}
	 	
	 	.update-info-box{
	 		padding-top: 15px;
	 	}
	 	
	 	p.shop-info{
	 		font-size: 14px;
	 		padding-left:10px;
	 		color: #616161; 	
	 	}
	 	
	 	.wordwrap { 
		   white-space: pre-wrap;      /* CSS3 */   
		   white-space: -moz-pre-wrap; /* Firefox */    
		   white-space: -pre-wrap;     /* Opera <7 */   
		   white-space: -o-pre-wrap;   /* Opera 7 */    
		   word-wrap: break-word;      /* IE */
		}
	 	
	 	div.shop-info-edit-btn{
	 		width: 30px;
	 		height: 30px;
	 		line-height: 30px;
	 		border: 1px dashed #dd4b39;
	 		text-align:center;
	 		cursor: pointer;
	 	}
	 	
	 	div.shop-info-edit-btn:hover{
	 		background:#EEEEEE;
	 	}
	 	
	 	div.shop-info-edit-btn i{
	 		color: #dd4b39;
	 		
	 	}
	 	
	 	div.shop-info-wrapper{
	 		
	 	}
	 	
	 	div.div-left{
	 		float:left;
	 		width: 88%;
	 		
	 	}
	 	div.div-right{
	 		float:left;
	 		width: 12%;
	 		position:absolute; 
	 		right:0;
	 		bottom: 0;
	 	}
	 	
	 	div.save-shop-info-box{
	 		padding-top: 6px;
	 		display:none;
	 	}
	 	
	 	div.save-btn-wrapper{
	 		padding-top: 6px;
	 	}
	 	
	 	.edit-active{
	 		border: 1px dashed #9E9E9E !important;
	 	}
	 	.edit-active i{
	 		color :  #9E9E9E !important;
	 	}
	 	
	 	button.nham-btn{
	 		border-radius: 0;	 		
	 	}
	 	
	 	div.info-edit-wrapper{
	 		position:relative;
	 		min-height: 30px;
	 	}
	 	
	 	.head-text{
	 		font-size: 14px;
	 		color: #BDBDBD;
	 		font-weight: bold;
	 	}
	 	
	 	img.update-loading{
	 		display: none;
	 		padding-right: 8px;
	 	}
	 	
	 	img.update-loading-data{
	 		width: 16px;
	 		height: 16px;
	 		
	 	}
	 	div.shop-update-loading{
	 		
	 		padding-top: 15px;
	 		padding-right: 8px;
	 		display:none;
	 	}
	 </style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
  
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
    <div class="shop-event-wrapper" >	
		
     	<div  class="tab-wrapper">	       	 				
	       	 <div class="tab-header col-lg-12">
	       	 	<p class="tab-intro-text"><i class="fa fa-book" aria-hidden="true"></i><span>Information</span></p>
	       	 </div>
	       	 <div class="tab-body col-lg-12">
	       	 	<div class="row">
		       	 	<div class="col-lg-7 col-sm-7">
		       	 		<div class="row">
		       	 		
			       	 		<div class="col-lg-12 col-sm-12 update-info-box">
			       	 			<p class="update-title">BRANCH</p>
			       	 			<div class="shop-info-wrapper">			       	 				
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<p class="shop-info wordwrap">Khmer nham bay sdfs sdfsdfdddddddddddddddddddddsdfsfsfddddddddddddddddddddddddddddd</p>
				       	 				</div>
				       	 				<div class="div-right" >
				       	 						
				       	 					<div class="shop-info-edit-btn branch pull-right">
				       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
				       	 					</div>
				       	 					<div class="shop-update-loading pull-right">
			       	 							<img  class="pull-right update-loading-data" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
			       	 						</div>
				       	 				</div>
				       	 				<div style="clear:both;"></div>	
				       	 				
			       	 				</div>			       	 				
			       	 				<div style="clear:both;"></div>	
			       	 							       	 				
			       	 				<div class="save-shop-info-box">			       	 				
			       	 					<div class="col-lg-12 col-sm-12 nham-dropdown-wrapper">
					                		<div class="row">
					                			<div class="selected-dropdown">
					                    		   <input id="branchname" type="text" class="form-control input nham-dropdown-inputbox "  placeholder="Search branch ">
					                    	       <input type="hidden" class="selectedid" id="selectedbranch"/>
					                    	    </div>
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
															<p>Do you want to register "<span id="text-search-dis2"></span>" as a new branch?</p>
														</div>
					                  				</div>					                  				
					                  				<div id="nham-dropdown-footer" class="nham-dropdown-result-footer" align="center">
					                  					<button class="btn nhamey-btn" id="yesbranch">Yes</button>
					                  				</div>
					                  			</div>
					                    	</div>					                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">	                  		
					                  		<div class="row pull-right">
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			</div>
			       	 		</div>
			       	 		
			       	 		<div class="col-lg-12 col-sm-12 update-info-box">
			       	 			<p class="update-title">SHOP'S NAME</p>
			       	 			<div class="shop-info-wrapper">			       	 			
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<span class="head-text">(ENG)</span><p class="shop-info wordwrap">THE FASHION</p>
				       	 				</div>
				       	 				<div class="div-right" >
				       	 					<div class="shop-info-edit-btn pull-right">
				       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
				       	 					</div>
				       	 				</div>
				       	 				<div style="clear:both;"></div>	
			       	 				</div>			       	 				
			       	 				<div style="clear:both;"></div>				       	 				
			       	 				<div class="save-shop-info-box">			       	 				
			       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
			       	 						<div class="row">
			       	 						   <input type="text" id="shopengname" class="form-control" placeholder="shop name in english">
			       	 						</div>				                							                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">
					                  		<div class="row pull-right">
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			</div>
			       	 			
			       	 			<div class="shop-info-wrapper">			       	 			
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<span class="head-text">(KHM)</span><p class="shop-info wordwrap">THE FASHION</p>
				       	 				</div>
				       	 				<div class="div-right" >
				       	 					<div class="shop-info-edit-btn pull-right">
				       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
				       	 					</div>
				       	 				</div>
				       	 				<div style="clear:both;"></div>	
			       	 				</div>			       	 				
			       	 				<div style="clear:both;"></div>				       	 				
			       	 				<div class="save-shop-info-box">			       	 				
			       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
			       	 						<div class="row">
			       	 						   <input type="text" id="shopkhname" class="form-control" placeholder="shop name in khmer">
			       	 					    </div>				                							                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">					                 		
					                  		<div class="row pull-right">
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			 </div>
			       	 		  </div>
			       	 		  
			       	 		  <div class="col-lg-12 col-sm-12 update-info-box">
			       	 			<p class="update-title">SHOP'S CATEGORY</p>
			       	 			<div class="shop-info-wrapper">			       	 				
			       	 				<div class="info-edit-wrapper">
				       	 				<div class="div-left">
				       	 					<p class="shop-info wordwrap">Khmer nham bay </p>
				       	 				</div>
				       	 				<div class="div-right" >
				       	 						
				       	 					<div class="shop-info-edit-btn branch pull-right">
				       	 						<i class="fa fa-pencil" aria-hidden="true"></i>
				       	 					</div>
				       	 					<div class="shop-update-loading pull-right">
			       	 							<img  class="pull-right update-loading-data" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
			       	 						</div>
				       	 				</div>
				       	 				<div style="clear:both;"></div>	
				       	 				
			       	 				</div>			       	 				
			       	 				<div style="clear:both;"></div>	
			       	 							       	 				
			       	 				<div class="save-shop-info-box">			       	 				
			       	 					
			       	 					<div class="col-lg-12 col-sm-12 input-wrapper">	
			       	 						<div class="row">
			       	 						   <input type="text" id="shopkhname" class="form-control" placeholder="shop name in khmer">
			       	 					    </div>				                							                    	
					                  	</div>
					                  	<div class="col-lg-12 col-sm-12 save-btn-wrapper">	                  		
					                  		<div class="row pull-right">
					                  			<img  class="update-loading" src="<?php echo base_url() ?>assets/nhamdis/img/updateload.gif" />
					                  			<button type="button" class="btn btn-default nham-btn">save</button>
					                  		</div>
					                  	</div>
					                  	<div style="clear:both;"></div>
			       	 				</div>		       	 							       	 				
			       	 			</div>
			       	 			
			       	 		  </div>
			       	 		  
			       	 		  			       	 		
			       	 		
		       	 		</div>
		       	 		
		       	 	</div>
		       	 	<div class="col-lg-5 col-sm-5" >
		       	 	</div>						
	       	 	</div>
	       	 </div>
	    </div>
	       	 				
    </div>

    <?php include 'imports/scriptimport.php'; ?>
    
    <script>
    
	var isclickbranch = false;
    $(".shop-info-edit-btn").on("click", function(){

		$(this).focus();
        if($(this).hasClass("edit-active")){
        	$(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideUp(100);
        	$(this).removeClass("edit-active");
        }else{
        	if($(this).hasClass("branch")){
        		
            	if(!isclickbranch){
            		$(this).siblings(".shop-update-loading").show();
            		loadBranch(this, function(){ isclickbranch = true;});
                }        		
            }           
        	$(this).parents(".info-edit-wrapper").siblings(".save-shop-info-box").slideDown(100);
    		$(this).addClass("edit-active");
        }
				
    });
    
    $(window).load(function(){
   		top.resizeIframe();
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

	/*================ load branch ==================*/
		
	var myBranch = [];
	function loadBranch( obj, callback ){
	    $.ajax({
			type: "GET",
			url: $("#base_url").val()+"API/BranchRestController/getAllBranch", 
			success: function(data){
				data = JSON.parse(data);
				myBranch = data;
				if( typeof callback === "function"){
					callback();
				}
				$(obj).siblings(".shop-update-loading").hide();
				displaySearchBranch(myBranch, $("#branchname").val());
				
				top.progressbar.stop();
				
			 }
		});
	}
	
	function displaySearchBranch( data , srchbranchname){
	
		var branchdis = '';
		if(data.length <= 0){
			$("#text-search-dis1").html(cutString(srchbranchname , 35));
			$("#text-search-dis2").html(cutString(srchbranchname , 20));
			branchdis +="<div class='no-data-wrapper' align='center'>";
			branchdis +="  <i class='fa fa-reddit-alien no-data-icon' aria-hidden='true'></i>";
			branchdis +="  <span class='no-data-text'>No Record Found!</span>";
			branchdis +="</div>";
			$("#display-searching-text").show();
			$("#nham-dropdown-footer").show();
			
		}else{	
			
			$("#display-searching-text").hide();
			$("#nham-dropdown-footer").hide();		
			 for(var i=0 ; i<data.length ; i++){			
				 branchdis += '<div  class="nham-dropdown-result"><input type="hidden" value="'+data[i].branch_id+'" /><p><span class="title">'+data[i].branch_name+'</span></p></div>';
			 }				
			
		}
		$("#display-result").html(branchdis); 	
		
	}
	
	$("#branchname").on("keyup",function(){
		
		var srchresult = [];
		var srchname = $(this).val().replace(/\s/g,'');
	
		if(srchname){
			for(var i = 0; i < myBranch.length; i++)
	    	{
	    	  if(myBranch[i].branch_name.toLowerCase().indexOf(srchname.toLowerCase()) !== -1 )
	    	  {
	    	     srchresult.push(myBranch[i]);
	    	  }
	    	}
			console.log(srchresult);
			displaySearchBranch(srchresult,  srchname);
			
	    }else{
	    	displaySearchBranch(myBranch, srchname);
	    }	
	});
	
	$("#yesbranch").on("mousedown",function(){
		var branchdata = {
			"BranchData" : {
				"branch_name" : $("#branchname").val(),
				"branch_remark": ""
			}
		};
		top.progressbar.start();
		$.ajax({
			type : "POST",
			url : $("#base_url").val()+"API/BranchRestController/insertBranch",
			contentType : "application/json",
			data :  JSON.stringify(branchdata),
			success : function(data){
				 data = JSON.parse(data);
				console.log(data);
				if(data.is_insert == false){
					alert("error");
				}else{
					$("#selectedbranch").val(data.branch_id);
					$("#branchname").attr('disabled','disabled');
					$("#branchname").siblings(".font-icon-cross").remove();
					$("#branchname").parent().append("<i class='fa fa-times font-icon-cross'  aria-hidden='true'></i>");
					loadBranch();
				}
			}
		});
	});
	/*================== end load branch ===================*/
    </script>
  </body>
</html>
