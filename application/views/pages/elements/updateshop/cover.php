<style>
	.nham-modal-header{
		width: 100%;
		min-height: 50px;
		background: #f6f7f9;
		border-bottom: 1px solid #E0E0E0;
	}
	.nham-modal-body{
		width: 100%;
		min-height: 70px;
		
	}
	.nham-modal-title{
		color: #616161;
	    font-size: 17px;
	    font-family: HelveticaNeue-Medium, helvetica, arial, sans-serif;
	    padding-top: 14px;
	    padding-left:15px;
	    font-weight: bold;
	}
	.nham-modal-title span{
		padding-left: 8px;
	}
	.nham-modal-header button.btn-close{
		padding-top: 14px;
		padding-right: 15px;
	}
	.upload-photo-box{
		width: 98%;
		min-height: 250px;
		margin: 0 auto;
		border-bottom: 1px solid #E0E0E0;
		border-left: 1px solid #E0E0E0;
		border-right: 1px solid #E0E0E0;
		position:relative;
		padding: 5px;
		transition: all 5s linear;
		
	}
	.photo-description-box{
		width: 98%;
		min-height: 60px;
		margin: 0 auto;
		border-bottom: 1px solid #E0E0E0;
		border-left: 1px solid #E0E0E0;
		border-right: 1px solid #E0E0E0;
		position:relative;
		padding: 5px;
		display:none;
	}
	
	.photo-btncrop-box{
		width: 98%;
		min-height: 50px;
		margin: 0 auto;
		border-bottom: 1px solid #E0E0E0;
		border-left: 1px solid #E0E0E0;
		border-right: 1px solid #E0E0E0;
		position:relative;
		padding: 5px;
		display:none;
		
	}
	button.btn-crop{
		width: 100%;
		font-weight: bold;
		border-radius: 0;
	}
	button#photo-save-btn{
		display: none;
		width: 100%;
		font-weight: bold;
		border-radius: 0;
	}
	button.btn-crop:hover{
		background: #BDBDBD;
	}
	.photo-browse-box{
		width: 98%;
		height: 70px;
		margin: 0 auto;
		border-bottom: 1px solid #E0E0E0;
		border-left: 1px solid #E0E0E0;
		border-right: 1px solid #E0E0E0;
		position:relative;
		padding: 5px;
		cursor:pointer;
		background: #fafbfc;
	}
	.photo-browse-box:hover{
		background: #EEEEEE;
	}
	div.photo-upload-progress-box{
		width: 100%;
		height: 15px;
		
	}
	p.photo-upload-percentage{
		color: #E0E0E0;
		font-weight: bold;
	}
	div.photo-upload-loading{
		position:absolute;
		top:0;
		left:0;
		background: #ffffff;
		z-index:99999990;
		width:100%;
		display:none;
		height: 100%;
	}
	div.photo-fail-remove{
		position:absolute;
		top:0;
		left:0;
		background: #ffffff;
		z-index:999;
		width:100%;
		display: none;
		height: 100%;
		opacity: 0.7;
	}
	div.photo-fail-remove i{
		font-size: 22px;
		position: absolute;
		top: 8px;
		right: 13px;
		color: #dd4b39;
		cursor: pointer;
	}
	div.trigger-browse-image{
		position:absolute;
		top:0;
		left:0;
		z-index:1;
		width:100%;
		cursor: pointer;
		height: 100%;
	}
	.nham-modal-footer{
		min-height: 60px;
		
	}
	.photo-upload-wrapper{
		width: 100%;
		min-height:250px;
		margin: 0 auto;
		
	}
	.photo-upload-info{		
		padding-top: 16px;
		font-weight: bold;
	}
	.photo-upload-info-2{
		padding-top: 80px;
	}
	.photo-upload-info-2 i{
		font-size: 100px;
		opacity: 0.1;
	}
	p.text-upload-info{
		color: #BDBDBD;
	    font-family: HelveticaNeue-Medium, helvetica, arial, sans-serif;
	}
	p.text-upload-info i{
		font-size: 25px;
		
	}
	p.text-upload-info span{
		font-size: 18px;
		padding-left: 7px;
		margin-top:-10px;
	}
	img.photo-upload-output{
		width: 100%;
		height: auto;
	}
	.photo-description{
		width:100%;
		border:0;
		bottom:0px;
		resize:none;
		min-height: 60px;
	}
</style>
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
					<div class="photo-upload-info" id="trigger-cover-browse" >
						<p class="text-upload-info">
						  	<span>Browse Photo </span>
						 </p>  
					</div>	
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