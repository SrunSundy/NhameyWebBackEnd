<style>
    #myHeader .slimScrollDiv, #myHeader #list_notification{
        height: 450px !important;
    }
    
    #myHeader #list_notification{
        max-height: 450px !important;
    }
</style>
<!-- Logo -->
<a href="index2.html" class="logo"> <!-- mini logo for sidebar mini 50x50 pixels -->
	<span class="logo-mini"><b>D</b>NA</span> <!-- logo for regular state and mobile devices -->
	<span class="logo-lg"><b>DerNham</b> Admin</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="offcanvas"
		role="button"> <span class="sr-only">Toggle navigation</span>
	</a>
	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">

			<!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning header_notificaiton_top"></span>
                </a>
                <ul class="dropdown-menu"  style="width: 380px;" id="myHeader">
                  <li class="header">You have <span class="header_notificaiton"></span> notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu" id="list_notification" style="height:450px !important;">
                    
                   
                    </ul>
                  </li>
                  <li class="footer"><a href="#" id="noti_loading" style="display:none;">Loading...</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              
			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu"><a href="#"
				class="dropdown-toggle" data-toggle="dropdown"> <img
					src="<?php echo DIS_IMAGE_PATH ?>/uploadimages/real/admin/<?php echo $this->session->userdata("admin_photo");?>" class="user-image"
					alt="User Image"> <span class="hidden-xs"><?php echo $this->session->userdata("admin_name");?></span>
			</a>
				<ul class="dropdown-menu">
					<!-- User image -->
					<li class="user-header"><img src="<?php echo DIS_IMAGE_PATH ?>/uploadimages/real/admin/<?php echo $this->session->userdata("admin_photo");?>"
						class="img-circle" alt="User Image">
						<p>
							<?php echo $this->session->userdata("admin_name");?> <small>Member since <?php echo $this->session->userdata("admin_created_date");?></small>
						</p></li>
					<!-- Menu Body -->
					<!--<li class="user-body">
						<div class="col-xs-4 text-center">
							<a href="#">Followers</a>
						</div>
						<div class="col-xs-4 text-center">
							<a href="#">Sales</a>
						</div>
						<div class="col-xs-4 text-center">
							<a href="#">Friends</a>
						</div>
					</li> -->
					<!-- Menu Footer-->
					<li class="user-footer">
						<div class="pull-left">
							<a href="#" class="btn btn-default btn-flat">Profile</a>
						</div>
						<div class="pull-right">
							<a href="#" id="log-out-user" class="btn btn-default btn-flat">Sign out</a>
						</div>
					</li>
				</ul></li>
			<!-- Control Sidebar Toggle Button -->
			<!-- <li><a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->
			
		</ul>
	</div>
</nav>