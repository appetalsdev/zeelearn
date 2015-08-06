<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js" data-ng-app="ZeelearnApp"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js" data-ng-app="ZeelearnApp"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" data-ng-app="ZeelearnApp">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<title data-ng-bind="'ZeeLearn | ' + $state.current.data.pageTitle"></title>

<meta charset="utf-8"/>
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
<link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/select2/select2.css"/>
<!-- END GLOBAL MANDATORY STYLES -->

<link href="assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css"/>

<!-- BEGIN DYMANICLY LOADED CSS FILES(all plugin and page related styles must be loaded between GLOBAL and THEME css files ) -->
<link id="ng_load_plugins_before"/>
<!-- END DYMANICLY LOADED CSS FILES -->

<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout2/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->

<link rel="shortcut icon" href="favicon.ico"/>
<base href="<?php echo base_url();?>">
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body ng-controller="AppController" class="page-md page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo page-on-load" ng-class="{'page-sidebar-closed': settings.layout.pageSidebarClosed}">

	<!-- BEGIN PAGE SPINNER -->
	<div ng-spinner-bar class="page-spinner-bar">
		<div class="bounce1"></div>
		<div class="bounce2"></div>
		<div class="bounce3"></div>
	</div>
	<!-- END PAGE SPINNER -->

	<!-- BEGIN HEADER -->
	<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
		<?php $this->load->view('header'); ?>
	</div>
	<!-- END HEADER -->

	<div class="clearfix">
	</div>

	<!-- BEGIN CONTAINER -->
	<div class="container">
		<div class="page-container">
			<!-- BEGIN SIDEBAR -->
			<div class="page-sidebar-wrapper">			
				<?php $this->load->view('sidebar'); ?>
			</div>
			<!-- END SIDEBAR -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!-- BEGIN STYLE CUSTOMIZER(optional) -->
					<!--<div data-ng-include="'tpl/theme-panel.html'" data-ng-controller="ThemePanelController" class="theme-panel hidden-xs hidden-sm">				
					</div>-->
					<!-- END STYLE CUSTOMIZER -->
					<!-- BEGIN ACTUAL CONTENT -->
					<div ui-view class="fade-in-up">
					</div> 
					<!-- END ACTUAL CONTENT -->
				</div>
			</div>
		</div>
		<!-- BEGIN FOOTER -->
		<div class="page-footer">
			<?php $this->load->view('footer'); ?>
		</div>
		<!-- END FOOTER -->
	</div>
	
	<!-- END CONTAINER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE JQUERY PLUGINS -->
	<!--[if lt IE 9]>
	<script src="assets/global/plugins/respond.min.js"></script>
	<script src="assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
	<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/select2/select2.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
	<!-- END CORE JQUERY PLUGINS -->

	<!-- BEGIN CORE ANGULARJS PLUGINS -->
	<script src="assets/js/angular/angular.min.js" type="text/javascript"></script>	
	<script src="assets/js/angular/angular-sanitize.min.js" type="text/javascript"></script>
	<script src="assets/js/angular/angular-touch.min.js" type="text/javascript"></script>	
	<script src="assets/global/plugins/angularjs/plugins/angular-ui-router.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/angularjs/plugins/ocLazyLoad.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/angularjs/plugins/ui-bootstrap-tpls.min.js" type="text/javascript"></script>
	<script src="assets/js/angular/angular-messages.min.js" type="text/javascript"></script>
	<!-- END CORE ANGULARJS PLUGINS -->
	
	<!-- BEGIN APP LEVEL ANGULARJS SCRIPTS -->
	<script type="text/javascript"> var str = '<?php echo base_url(); ?>';
                BASE_URL = str.substring(0, str.length - 1);
				GLOBAL_PAGINATION_SIZE = <?php echo $this->config->item('pagination_limit');?>
    </script>
	<script src="assets/js/lodash.min.js" type="text/javascript"></script>
	<script src="assets/js/app.js" type="text/javascript"></script>
	<script src="assets/js/directives.js" type="text/javascript"></script>
	<script src="assets/js/createDialog.js" type="text/javascript"></script>
	<script src="assets/js/angular/angular-bootstrap-select.js" type="text/javascript"></script>
	<script src="assets/js/mask.js" type="text/javascript"></script>
	<!-- END APP LEVEL ANGULARJS SCRIPTS -->

	<!-- BEGIN APP LEVEL JQUERY SCRIPTS -->
	<script src="assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>
	<script src="assets/admin/pages/scripts/ui-toastr.js"></script>
	<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
	<script src="assets/admin/pages/scripts/table-advanced.js" type="text/javascript"></script>
	<script src="assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
	<script src="assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>  
	<!-- END APP LEVEL JQUERY SCRIPTS -->

	<script type="text/javascript">
		/* Init Metronic's core jquery plugins and layout scripts */
		$(document).ready(function() {   
			Metronic.init(); // Run metronic theme
			Metronic.setAssetsPath('assets/'); // Set the assets folder path		
			UIToastr.init();
		});
		
		toastr.options = {
			"closeButton": true,
			"debug": true,
			"positionClass": "toast-bottom-left",
			"showDuration": "1000",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "linear",
			"hideEasing": "swing",
			"showMethod": "slideDown",
			"hideMethod": "slideUp"
		};
		
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>