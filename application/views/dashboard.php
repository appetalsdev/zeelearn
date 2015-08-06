<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
	Dashboard
</h3>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="index.html">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Dashboard</a>
		</li>
	</ul>
	<div class="page-toolbar">
		<div class="btn-group pull-right">
			<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" dropdown-menu-hover data-delay="1000" data-close-others="true">
			Actions <i class="fa fa-angle-down"></i>
			</button>
			<ul class="dropdown-menu pull-right" role="menu">
				<li>
					<a href="#">
					<i class="icon-user"></i> New User </a>
				</li>
				<li>
					<a href="#">
					<i class="icon-present"></i> New Event <span class="badge badge-success">4</span>
					</a>
				</li>
				<li>
					<a href="#">
					<i class="icon-basket"></i> New order </a>
				</li>
				<li class="divider">
				</li>
				<li>
					<a href="#">
					<i class="icon-flag"></i> Pending Orders <span class="badge badge-danger">4</span>
					</a>
				</li>
				<li>
					<a href="#">
					<i class="icon-users"></i> Pending Users <span class="badge badge-warning">12</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN MAIN CONTENT -->
<div ng-controller="DashboardController">
	<div class="note note-success note-bordered">
		
	</div>
	<!-- BEGIN DASHBOARD STATS -->
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat blue-madison">
				<div class="visual">
					<i class="fa fa-institution"></i>
				</div>
				<div class="details">
					<div class="desc">
						School Management
					</div>
				</div>
				<a class="more" href="#/school_management">
				View more <i class="m-icon-swapright m-icon-white"></i>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat red-intense">
				<div class="visual">
					<i class="fa fa-users"></i>
				</div>
				<div class="details">
					<div class="desc">
						User Management
					</div>
				</div>
				<a class="more" href="#/user_management">
				View more <i class="m-icon-swapright m-icon-white"></i>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat green-haze">
				<div class="visual">
					<i class="fa fa-money"></i>
				</div>
				<div class="details">
					<div class="desc">
						Fees Management
					</div>
				</div>
				<a class="more" href="#">
				View more <i class="m-icon-swapright m-icon-white"></i>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat purple-plum">
				<div class="visual">
					<i class="fa fa-bus"></i>
				</div>
				<div class="details">
					<div class="desc">
						Transport Management
					</div>
				</div>
				<a class="more" href="#">
				View more <i class="m-icon-swapright m-icon-white"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- END DASHBOARD STATS -->
</div>
<!-- END MAIN CONTENT -->