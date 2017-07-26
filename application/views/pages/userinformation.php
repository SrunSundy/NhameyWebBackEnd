<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
 	
 	<?php include 'imports/cssimport.php' ?>
  <style>
  	div.update-shop-wrapper{
  		position: relative;
  	}
  	div.cover-wrapper{
  		background: gray;
  		min-height: 250px;
  		max-height:330px;
  	}
  	div.profile-wrapper{
  		background: yellow;
  		height: 45px;
  	}
  	div.profile-box{
  		width: 150px;
  		height: 150px;
  		position:absolute;
  		top:-125px;
  		z-index:50;
  		left: 50px;
  		background: blue;
  	}
  	div.content-nham-wrapper{
  		width:90%;
  		margin:0 auto;
  	}
  	div.menu-wrapper{
  		background:green;
  		height:45px;
  		position: absolute;
  		left:200px;
  		z-index:20;
  		min-width:280px;
  	}
  </style>
  </head>
  <body class="hold-transition skin-red-light sidebar-mini">
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>" />
    <input type="hidden" id="dis_img_path" value="<?php echo DIS_IMAGE_PATH ?>" />
    <input type="hidden" id="shop_id" value="1"/>
    
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
      <!--   <section class="content-header">
       
        </section>
 -->
        <!-- Main content -->
      
        <div class="content-nham-wrapper">
		           <div class="" style="border-radius: 0;border:0;min-height: 500px;">           		
				       <!-- wrapper updating form div -->       
				       <div class="col-lg-12 update-shop-wrapper">
				          <div class="row"> <!-- row of wrapper updating -->
				             <!-- box of cover -->
				             <div class="cover-wrapper col-lg-12">
				               			
				             </div> 
				             <!-- end box of cover -->
				             <!-- profile wrapper -->
				             <div class="profile-wrapper col-lg-12">
				             	<div class="profile-box">
				             		
				             	</div>
				             	<div class="menu-wrapper">
				             		
				             	</div>
				             </div>
				             <!-- end of profile wrapper -->
				              <div class="body-wrapper col-lg-12" style="background:white;margin-top:10px;height:500px;">
				               	
				               	
				               	
				               	<div class="form-group "> 
			                     <label>Serve Category</label>
				                     <div class=" col-sm-12 nham-dropdown-wrapper">
				                		<div class="row">
				                			<div class="selected-dropdown" id="servecategory_selected_dropdown" style="position:relative;">
				                			
					                			<div class="icon-input-wrapper" style="width:33px;height:28px;position:absolute;top:0;">
					                				<img class="icon-input" id="servecategoryicon"  src="<?php echo base_url() ?>assets/nhamdis/img/servecategory.png" class="selected_icon"/>
					                				<input type="hidden" class="default_img_src" value="<?php echo base_url() ?>assets/nhamdis/img/servecategory.png"/>				 
					                			</div>
					                			
								                <input style="padding:4px 4px 4px 28px;" id="servecategoryname" type="text" class="form-control nham-dropdown-inputbox-multi"  placeholder="Search or Select for shop type">
								                
								                <div class="error-selected-result">
								                	<p>ITEM IS SELECTED!</p>
								                </div>
								                <div class="serve-category-result" id="serve-categories">
								                	
								                	
								                </div>						                  
				                    	       <!--  <input type="hidden" class="selectedid" id="selectedservecategory"/> -->
				                    	    </div>
				                    		<div class="nham-dropdown-detail"  >
				                    			<div class="nham-dropdown-result-wrapper">
				                    				<input type="hidden" value="selected-category-box1"/>
				                    				<div id="display-result-servecategory" style="max-height:240px;overflow:auto;" class="display-result-wrapper">
				                    					
				                    				</div>		       				
				                  				</div>
				                  				
				                  				<div id="display-searching-text_servecategory" style="display:none;">
				                  					<div  class="nham-dropdown-noresult">
														<p> <i class="fa fa-search" style="font-size:20px;margin-right:10px;" aria-hidden="true"></i>
															Searching "<span id="text-search-servecategory-dis1"></span>" has no Result!</p>
													</div>
													<div class="nham-dropdown-question">	
														<p>Do you want to register "<span id="text-search-servecategory-dis2"></span>" as a new shop type?</p>
													</div>
				                  				</div>
				                  				
				                  				<div id="nham-dropdown-footer-servecategory" class="nham-dropdown-result-footer" align="center">
				                  					<button class="btn nhamey-btn" id="yesservecategory">Yes</button>
				                  				</div>
				                  			</div>
				                    	</div>	
				                    	<button type="button" id="servecategorybtnpop" style="display:none;" data-toggle="modal" style="display:none;" data-backdrop="static" data-keyboard="false" data-target="#serveCategoryModal">Open Modal</button>		                    	
				                  	</div>
			                     </div>
				             </div> 
				             
				           
				           
				             
				          </div> <!-- end of wrapper updating -->
				       </div> <!--end wrapper updating form div -->		                       
		           </div>
        </div>   
      
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








    loadServeCategory();
	var myServeCategory = [];
    function loadServeCategory(){
    	$.ajax({
   		 type: "GET",
   		 url: $("#base_url").val()+"API/ServeCategoryRestController/getServeCategoryByNameCombo", 
   		 data : {
   			"srchname" : "",
   			"limit" : 100000
   		 },
   		 success: function(data){
   			data = JSON.parse(data);

   			myServeCategory = data;
   			console.log(myServeCategory);

   			
   			displaySearchServeCategory(myServeCategory);
   		 }
      });
    }
     $("#servecategoryname").on("keyup",function(){
    	
    	// var srchname = $(this).val();
    	//var loadingimgsrc = $("#base_url").val()+"assets/nhamdis/img/nhamloading.gif";
    	//$("#display-result-servecategory").html("<img src='"+loadingimgsrc+"'  style='padding:10px;'/> ");  
    	var srchresult = [];
    	var srchname = $(this).val().replace(/\s/g,'');

    	if(srchname){
    		for(var i = 0; i < myServeCategory.length; i++)
        	{
        	  if(myServeCategory[i].serve_category_name.toLowerCase().indexOf(srchname.toLowerCase()) !== -1 )
        	  {
        	     srchresult.push(myServeCategory[i]);
        	  }
        	}
    		console.log(srchresult);
    		displaySearchServeCategory(srchresult);
    		
        }else{
        	displaySearchServeCategory(myServeCategory);
        }
    	
    	
    }); 

	function displaySearchServeCategory( data ){

		var dis = '';	
		if(data.length <= 0){
			$("#text-search-servecategory-dis1").html("sdf");
			$("#text-search-servecategory-dis2").html("sdf");
			dis +="<div class='no-data-wrapper' align='center' style='padding-bottom:4px;'>";
			dis +="  <i class='fa fa-reddit-alien no-data-icon' aria-hidden='true'></i>";
			dis +="  <span class='no-data-text'>No Record Found!</span>";
			dis +="</div>";
			$("#display-searching-text_servecategory").show();
			$("#nham-dropdown-footer-servecategory").show();
		}else{

			$("#display-result-servecategory").html(dis); 
			$("#display-searching-text_servecategory").hide();
			$("#nham-dropdown-footer-servecategory").hide();		
			 for(var i=0 ; i<data.length ; i++){			
			
				 dis += '<div  class="nham-dropdown-multi-result">';
				 dis += ' <input type="hidden" value="'+data[i].serve_category_id+'" />';
				 dis += ' <img class="pull-left icon" src="'+$("#dis_img_path").val()+'/uploadimages/real/icon/'+data[i].serve_category_icon+'"/>';
				 dis += ' <p><span class="title">'+data[i].serve_category_name+'</span></p></div>';
				 
			 }			
			 dis+="<div style='clear:both'></div>";	
		}
		$("#display-result-servecategory").html(dis); 

		console.log($("#display-result-servecategory").height());
		console.log($("#display-result-servecategory").parent().height());
		if($("#display-result-servecategory").height()<240){

			$("#display-result-servecategory").css("overflow","hidden");
		}else{
			$("#display-result-servecategory").css("overflow","auto");
			}
		
	}


    
    updateShopField();
	function updateShopField(){
		$.ajax({
			type : "POST",
			url : "/NhameyWebBackEnd/API/CountryRestController/insertCountry",
			data : {
				"reqdata" : {
					"country_name" : "Thailand"
				}
			},
			success : function(data){
				data = JSON.parse(data);
				console.log(data);
					
			}
		});
	}
    </script>
  </body>
</html>
