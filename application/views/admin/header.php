<!DOCTYPE html>
<head>
<base href="<?php echo base_url();?>">
<meta charset="utf-8"/>
<title>ZeeLearn Admin Dashboard Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout2/css/themes/grey.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>

<body class="page-md page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner container">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.php/admin">
				<p class="logo-default"><font size="5" color="red">Zee</font><font size="5" color="white">Learn</font></p>
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->
		<div class="page-actions hide">
			<div class="btn-group">
				<button type="button" class="btn btn-circle red-pink dropdown-toggle" data-toggle="dropdown">
				<i class="icon-bar-chart"></i>&nbsp;<span class="hidden-sm hidden-xs">New&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="javascript:;">
						<i class="icon-user"></i> New User </a>
					</li>
					<li>
						<a href="javascript:;">
						<i class="icon-present"></i> New Event <span class="badge badge-success">4</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
						<i class="icon-basket"></i> New order </a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="javascript:;">
						<i class="icon-flag"></i> Pending Orders <span class="badge badge-danger">4</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
						<i class="icon-users"></i> Pending Users <span class="badge badge-warning">12</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-circle green-haze dropdown-toggle" data-toggle="dropdown">
				<i class="icon-bell"></i>&nbsp;<span class="hidden-sm hidden-xs">Post&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="javascript:;">
						<i class="icon-docs"></i> New Post </a>
					</li>
					<li>
						<a href="javascript:;">
						<i class="icon-tag"></i> New Comment </a>
					</li>
					<li>
						<a href="javascript:;">
						<i class="icon-share"></i> Share </a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="javascript:;">
						<i class="icon-flag"></i> Comments <span class="badge badge-success">4</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
						<i class="icon-users"></i> Feedbacks <span class="badge badge-danger">2</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
			<form class="search-form search-form-expanded" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search..." name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-bell"></i>
						<span class="badge badge-default">
						7 </span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3><span class="bold">12 pending</span> notifications</h3>
								<a href="extra_profile.html">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
										<span class="time">just now</span>
										<span class="details">
										<span class="label label-sm label-icon label-success">
										<i class="fa fa-plus"></i>
										</span>
										New user registered. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">3 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Server #12 overloaded. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">10 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Server #2 not responding. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">14 hrs</span>
										<span class="details">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										Application error. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">2 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Database overloaded 68%. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">3 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										A user IP blocked. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">4 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Storage Server #4 not responding dfdfdfd. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">5 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										System Error. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">9 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Storage server failed. </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-envelope-open"></i>
						<span class="badge badge-default">
						4 </span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3>You have <span class="bold">7 New</span> Messages</h3>
								<a href="page_inbox.html">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">Just Now </span>
										</span>
										<span class="message">
										Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">16 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="assets/admin/layout3/img/avatar1.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Bob Nilson </span>
										<span class="time">2 hrs </span>
										</span>
										<span class="message">
										Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">40 mins </span>
										</span>
										<span class="message">
										Vivamus sed auctor 40% nibh congue nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">46 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-calendar"></i>
						<span class="badge badge-default">
						3 </span>
						</a>
						<ul class="dropdown-menu extended tasks">
							<li class="external">
								<h3>You have <span class="bold">12 pending</span> tasks</h3>
								<a href="page_todo.html">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">New release v1.2 </span>
										<span class="percent">30%</span>
										</span>
										<span class="progress">
										<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Application deployment</span>
										<span class="percent">65%</span>
										</span>
										<span class="progress">
										<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Mobile app release</span>
										<span class="percent">98%</span>
										</span>
										<span class="progress">
										<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Database migration</span>
										<span class="percent">10%</span>
										</span>
										<span class="progress">
										<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Web server upgrade</span>
										<span class="percent">58%</span>
										</span>
										<span class="progress">
										<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Mobile development</span>
										<span class="percent">85%</span>
										</span>
										<span class="progress">
										<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">New UI release</span>
										<span class="percent">38%</span>
										</span>
										<span class="progress progress-striped">
										<span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
										</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="assets/admin/layout2/img/avatar.png"/>
						<span class="username username-hide-on-mobile"><?php echo ucfirst($this->session->userdata['logged_in']['username']); ?></span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="extra_profile.html">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li>
								<a href="page_calendar.html">
								<i class="icon-calendar"></i> My Calendar </a>
							</li>
							<li>
								<a href="inbox.html">
								<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
								3 </span>
								</a>
							</li>
							<li>
								<a href="page_todo.html">
								<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
								7 </span>
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="extra_lock.html">
								<i class="icon-lock"></i> Lock Screen </a>
							</li>
							<li>
								<a href="index.php/admin/logout">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<!--<li class="dropdown dropdown-extended quick-sidebar-toggler">
	                    <span class="sr-only">Toggle Quick Sidebar</span>
	                    <i class="icon-logout"></i>
	                </li>-->
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<div class="clearfix">
</div>
<!-- END HEADER -->