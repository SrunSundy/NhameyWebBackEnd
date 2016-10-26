
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
	<!-- Sidebar user panel -->
	<div class="user-panel" style="height: 80px;">
		<div class="pull-left image">
			<img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg"
				class="img-circle" alt="User Image">
		</div>
		<div class="pull-left info">
			<p>Alexander Pierce</p>
			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		</div>
	</div>
	
	<!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu">
	
		<li><a href="<?php echo base_url(); ?>MainController/dashboard"> <i class="fa fa-th"></i> <span>Dashboard</span></a></li>
		<!-- <li><a href="category"> <i class="fa fa-sitemap" aria-hidden="true"></i> <span>Category</span></a></li> -->
		
		<li class="treeview">
              <a href="#">
                <i class="fa fa-building" aria-hidden="true"></i> <span>Shop Management</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>MainController/addshop"><i class="fa fa-circle-o"></i> Add Shop</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Shop Detail</a></li>
          
              </ul>
        </li>
        
       
        
		<li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart" aria-hidden="true"></i> <span>Product Management</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>MainController/addproduct"><i class="fa fa-circle-o"></i> Add Product</a></li>
               
          
              </ul>
        </li>
		<li><a href="user"> <i class="fa fa-users" aria-hidden="true"></i> <span>User Management</span></a></li>
		<!-- <li><a href="post"> <i class="fa fa-pencil-square" aria-hidden="true"></i> <span>Post Management</span></a></li>
		<li><a href="comment"> <i class="fa fa-comments" aria-hidden="true"></i> <span>Comment Management</span></a></li> -->
 		<li class="treeview">
              <a href="#">
                <i class="fa fa-building" aria-hidden="true"></i> <span>Location Management</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>MainController/listshopcountry"><i class="fa fa-circle-o"></i> Add Country</a></li>
                <li><a href="<?php echo base_url(); ?>MainController/listshopcity"><i class="fa fa-circle-o"></i>Add City</a></li>
                <li><a href="<?php echo base_url(); ?>MainController/listshopdistrict"><i class="fa fa-circle-o"></i>Add District</a></li>
                <li><a href="<?php echo base_url(); ?>MainController/listshopcommune"><i class="fa fa-circle-o"></i>Add Commune</a></li>
          
              </ul>
        </li>
	</ul>
</section>
<!-- /.sidebar -->