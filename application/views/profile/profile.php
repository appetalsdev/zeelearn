<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
	Profile
</h3>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="#/dashboard.html">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#/profile/dashboard">User Profile</a>
		</li>
	</ul>
	<div class="page-toolbar">
		<div class="btn-group pull-right">
							<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
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

<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN PROFILE SIDEBAR -->
		<div class="profile-sidebar">
			<!-- PORTLET MAIN -->
			<div class="portlet light profile-sidebar-portlet">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="assets/admin/layout2/img/avatar.png" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
					{{frm.firstname}} {{frm.lastname}}
					</div>
					<div class="profile-usertitle-job">
					{{frm.role_names}}
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li ng-class="{active: $state.includes('profile.dashboard')}">
							<a ui-sref="profile.dashboard">
							<i class="icon-home"></i>
							Overview </a>
						</li>
						<li ng-class="{active: $state.includes('profile.account')}">
							<a ui-sref="profile.account">
							<i class="icon-settings"></i>
							Account Settings </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
			<!-- END PORTLET MAIN -->
			<!-- PORTLET MAIN -->
			<div class="portlet light">
				<!-- STAT -->
				<div class="row list-separated profile-stat">
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="uppercase profile-stat-title">
							37
						</div>
						<div class="uppercase profile-stat-text">
							Projects
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="uppercase profile-stat-title">
							51
						</div>
						<div class="uppercase profile-stat-text">
							Tasks
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="uppercase profile-stat-title">
							61
						</div>
						<div class="uppercase profile-stat-text">
							Uploads
						</div>
					</div>
				</div>
				<!-- END STAT -->
				<div>
					<h4 class="profile-desc-title">About Marcus Doe</h4>
					<span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
					<div class="margin-top-20 profile-desc-link">
						<i class="fa fa-globe"></i>
						<a href="http://www.keenthemes.com">www.keenthemes.com</a>
					</div>
					<div class="margin-top-20 profile-desc-link">
						<i class="fa fa-twitter"></i>
						<a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
					</div>
					<div class="margin-top-20 profile-desc-link">
						<i class="fa fa-facebook"></i>
						<a href="http://www.facebook.com/keenthemes/">keenthemes</a>
					</div>
				</div>
			</div>
			<!-- END PORTLET MAIN -->
		</div>
		<!-- END BEGIN PROFILE SIDEBAR -->
		<!-- BEGIN PROFILE CONTENT -->
		<div ui-view class="profile-content fade-in-up"> 
		</div>
		<!-- END PROFILE CONTENT -->
	</div>
</div>
<!-- END PAGE CONTENT-->