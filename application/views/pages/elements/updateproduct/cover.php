<style>
	.left-div{
		float: left;
		
	}
	.right-div{
		float:left;
	}
	.disable-shop-description{
		padding-top:10px;
	}
	
	p.disable-shop-text{
		color: #dd4b39;
		font-weight: bold;
		padding-right:8px;
		padding-top:1px;
		font-size:18px;
	}
	
	p.disable-shop-text i{
		padding-right: 7px;
	}
	
	p.shop-toggle-time{
		
		font-size: 16px;
	}
	
	p.shop-toggle-time i{
		font-size: 10px;
		padding-right:4px;
	}
	
	p.close-time{
		color: #dd4b39;
	}
	
	p.opening-time{
		color: #4CAF50;
	}
	
	p.working-time{
		margin-top: -10px;
		color: #9E9E9E;
		font-style: italic;
	}
	
	p.working-time i{
		padding-right:6px;
	}
	
	div.shop-status-wrapper{
		height:30px;		
	}
	
	
</style>

<div class="small-bar-box" style="display: none">

	<div class="small-logo-wrapper">
		<div class="space-logo-box">
			<div class="small-logo-box">
				<img id="small-logo-img" src="<?php echo DIS_IMAGE_PATH ?>/uploadimages/real/product/medium/<?php echo $shop_logo ?>"
					class="small-logo-img"  /> <i class="fa fa-camera" id="edit-logo-small-pop-up"
					aria-hidden="true"></i>
			</div>
		</div>

		<div class="small-shop-name">
			<h3 class="shop-name-text"><?php echo $shop_name_en ?></h3>
			<p class="shop-name-extra-text"><?php echo $shop_name_kh ?></p>
		</div>
		<div style="clear: both;"></div>
		<div class="contact-shop-block">
			<button type="button" class="btn btn-danger"
				style="border-radius: 0; width: 200px; float: right; margin-right: 5px; margin-top: 10px;">Notify</button>
		</div>
	</div>
</div>

<!-- cover update modal -->
<div class="modal fade" id="coverModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
		
			<div class="nham-modal-header">
				<button type="button" id="coverformclose" class="close btn-close"
					data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<p class="nham-modal-title">
					<i class="fa fa-picture-o" aria-hidden="true"></i><span>Update Cover</span>
				</p>
			</div>
			
			<div class="nham-modal-body">
				<div class="photo-browse-box" align="center">
					<div class="photo-upload-info"  >
						<p class="text-upload-info">
						  	<span>Browse Photo </span>
						 </p>  
					</div>
					
					<!-- fake on -->	
					<div class="trigger-photo-browse" id="trigger-cover-browse"></div>
					<!-- end fake on -->
				</div>			
				<input type='file' id="uploadcover" style="display:none" accept="image/*"/>
				<div class="upload-photo-box" id="cover-upload-box">					
					<div class="photo-upload-wrapper" align="center" id="display-cover-upload" >
						<div class="photo-upload-info-2" >
						 	<i class="fa fa-picture-o" aria-hidden="true"></i>
						</div>					  	        		
			        </div>
			         				        			        
			        <!-- fake on -->			        
			        <div class="photo-upload-loading" id="cover-upload-loading" align="center">
			        	<div class="photo-upload-progress-box">
			        		<div id="cover-upload-progress" 
			        		 	class="progress-bar progress-bar-danger progress-bar-striped" 
			        		 	role="progressbar" aria-valuenow="60" 
			        		 	aria-valuemin="0" 
			        		 	aria-valuemax="100" style="height:10px;">					                      
							</div>
			        	</div>
			        	
						<div style="width: 100%;">
							<p id="cover-upload-percentage" class="photo-upload-percentage">0%</p>
							<img src="<?php echo base_url(); ?>assets/nhamdis/img/ring.svg" />
						</div>
			        	
			        </div>
			        <div class="photo-fail-remove" id="cover-fail-remove">
			        	<i class="fa fa-times" id="cover-fail-event" aria-hidden="true"></i>
			        </div>			      
			        <!-- end fake on -->
				</div>
				<div class="photo-description-box" id="cover-description-box">
					<textarea rows="" id="cover-description" placeholder="have your word about this..."   class="photo-description"  cols=""></textarea>
				</div>
				
				<div class="photo-btncrop-box" id="cover-btncrop-box">
					<button type="button" id="cover-crop-btn" class="btn btn-crop">Crop image</button>
					<button type="button" id="cover-save-btn" class="btn photo-save-btn btn-danger">Save</button>
				</div>
			</div>
			
			<div class="nham-modal-footer">
				
			</div>			
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<button type="button" id="openCoverModel" style="display:none;" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#coverModal">Open Modal</button>		                    	
<!-- cover update modal -->
<!-- logo update modal -->
<div class="modal fade" id="logoModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
		
			<div class="nham-modal-header">
				<button type="button" id="logoformclose" class="close btn-close"
					data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<p class="nham-modal-title">
					<i class="fa fa-picture-o" aria-hidden="true"></i><span>Update Logo</span>
				</p>
			</div>
			
			<div class="nham-modal-body">
				<div class="photo-browse-box" align="center">
					<div class="photo-upload-info"  >
						<p class="text-upload-info">
						  	<span>Browse Photo </span>
						 </p>  
					</div>
					
					<!-- fake on -->	
					<div class="trigger-photo-browse" id="trigger-logo-browse"></div>
					<!-- end fake on -->
				</div>			
				<input type='file' id="uploadlogo" style="display:none" accept="image/*"/>
				<div class="upload-photo-box" id="logo-upload-box">					
					<div class="photo-upload-wrapper" align="center" id="display-logo-upload" >
						<div class="photo-upload-info-2" >
						 	<i class="fa fa-picture-o" aria-hidden="true"></i>
						</div>					  	        		
			        </div>
			         				        			        
			        <!-- fake on -->			        
			        <div class="photo-upload-loading" id="logo-upload-loading" align="center">
			        	<div class="photo-upload-progress-box">
			        		<div id="logo-upload-progress" 
			        		 	class="progress-bar progress-bar-danger progress-bar-striped" 
			        		 	role="progressbar" aria-valuenow="60" 
			        		 	aria-valuemin="0" 
			        		 	aria-valuemax="100" style="height:10px;">					                      
							</div>
			        	</div>
			        	
						<div style="width: 100%;">
							<p id="logo-upload-percentage" class="photo-upload-percentage">0%</p>
							<img src="<?php echo base_url(); ?>assets/nhamdis/img/ring.svg" />
						</div>
			        	
			        </div>
			        <div class="photo-fail-remove" id="logo-fail-remove">
			        	<i class="fa fa-times" id="logo-fail-event" aria-hidden="true"></i>
			        </div>			      
			        <!-- end fake on -->
				</div>
				<div class="photo-description-box" id="logo-description-box">
					<textarea rows="" id="logo-description" placeholder="have your word about this..."   class="photo-description"  cols=""></textarea>
				</div>
				
				<div class="photo-btncrop-box" id="logo-btncrop-box">
					<button type="button" id="logo-crop-btn" class="btn btn-crop">Crop image</button>
					<button type="button" id="logo-save-btn" class="btn photo-save-btn btn-danger">Save</button>
				</div>
			</div>
			
			<div class="nham-modal-footer">
				
			</div>			
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<button type="button" id="openLogoModel" style="display:none;" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#logoModal">Open Modal</button>		                    	
<!-- logo update modal -->
