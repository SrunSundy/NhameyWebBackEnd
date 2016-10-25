
<div class="img-cover-box">
	<img src="<?php echo base_url(); ?>assets/nhamdis/img/new1.jpg"
		class="img-cover" id="cover-image-display" />

</div>
<div class="cover-box">
	<div class="nham-btn-upload-fake"></div>
	<div class="nham-btn-upload-real" id="btn-cover">
		<p>
			<i class="fa fa-picture-o" aria-hidden="true"></i><span>Update Cover</span>
		</p>
	</div>
</div>
<div class="bar-box">
	<div class="col-lg-4">
		<div class="row">
			<button type="button" class="btn btn-danger notify-btn">Notify</button>
		</div>
	</div>
	<div class="col-lg-8"></div>
	<div style="clear: both;"></div>
</div>
<div class="small-bar-box" style="display: none">

	<div class="small-logo-wrapper">
		<div class="space-logo-box">
			<div class="small-logo-box">
				<img src="<?php echo base_url(); ?>assets/nhamdis/img/new2.jpg"
					class="small-logo-img"  /> <i class="fa fa-camera"
					aria-hidden="true"></i>
			</div>
		</div>

		<div class="small-shop-name">
			<h3 class="shop-name-text">FC Bayern Manich</h3>
			<p class="shop-name-extra-text">( @the best munich )</p>
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
					<button type="button" id="photo-crop-btn" class="btn btn-crop">Crop image</button>
					<button type="button" id="photo-save-btn" class="btn btn-danger">Save</button>
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