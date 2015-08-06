<div class="page-sidebar navbar-collapse collapse">
	<!-- BEGIN SIDEBAR MENU -->
	<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
	<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
	<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
	<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" ng-class="{'page-sidebar-menu-closed': settings.layout.pageSidebarClosed}">
		<li class="start">
			<a href="#/dashboard">
			<i class="icon-home"></i>
			<span class="title">Dashboard</span>
			</a>
		</li>
		<li>
			<a href="#/school_management">
			<i class="fa fa-institution"></i>
			<span class="title">School Management</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="#/ui_bootstrap.html">
					<i class="fa fa-building"></i> School</span>
					</a>
				</li>
				<li>
					<a href="#/file_upload.html">
					<i class="fa fa-calendar"></i> Calendars and Events</span>
					</a>
				</li>
				<li>
					<a href="#/ui_select.html">
					<i class="fa fa-bookmark"></i> Marking Period</span>
					</a>
				</li>
				<li>
					<a href="#/ui_select.html">
					<i class="fa fa-server"></i> Class Period</span>
					</a>
				</li>
				<li>
					<a href="#/ui_select.html">
					<i class="fa fa-bar-chart"></i> Grade Levels</span>
					</a>
				</li>
				<li>
					<a href="#/ui_select.html">
					<i class="fa fa-graduation-cap"></i> Course Manager</span>
					</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#/user_management">
			<i class="fa fa-users"></i>
			<span class="title">User Management</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="#/form-tools">
						<i class="fa fa-group"></i> Organization
					</a>
				</li>
				<li>
					<a href="#/pickers">
						<i class="fa fa-map-marker"></i> Franchisee
					</a>
				</li>
				<li>
					<a href="#/managers">
						<i class="fa fa-user"></i> Manager
					</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#/profile/dashboard" id="sidebar_menu_link_profile">
			<i class="fa fa-user"></i>
			<span class="title">My Profile</span>
			</a>
		</li>
		<li>
			<a href="#/fees_management">
			<i class="fa fa-money"></i>
			<span class="title">Fees Management</span>
			</a>
		</li>
		<li>
			<a href="#/todo">
			<i class="fa fa-bus"></i>
			<span class="title">Transport Management</span>
			</a>
		</li>
		<!--<li>
			<a href="#/todo">
			<i class="fa fa-send"></i>
			<span class="title">Communication</span>
			</a>
		</li>
		<li>
			<a href="#/todo">
			<i class="fa fa-cog"></i>
			<span class="title">Progress Report</span>
			</a>
		</li>-->
		<li>
			<a href="#/todo">
			<i class="fa fa-cube"></i>
			<span class="title">Learning Center</span>
			</a>
		</li>
		<li>
			<a href="#/todo">
			<i class="fa fa-support"></i>
			<span class="title">Support Request</span>
			</a>
		</li>
		<li>
			<a href="#/todo">
			<i class="fa fa-info-circle"></i>
			<span class="title">About Us</span>
			</a>
		</li>
	</ul>
	<!-- END SIDEBAR MENU -->
</div>	