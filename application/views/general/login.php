<html lang="en">
<!--begin::Head-->
	<head>
		<meta charset="utf-8">
		<title>Metronic Live preview | Keenthemes</title>
		<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets.">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')?>">
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/global/plugins.bundle.css')?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/custom/prismjs/prismjs.bundle.css')?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.bundle.css')?>">
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/themes/aside/dark.css')?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/themes/brand/dark.css')?>">
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/themes/header/menu/light.css')?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/themes/header/base/light.css')?>"> -->
		<!--end::Layout Themes-->
	</head>
	<!--end::Head-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!-- End Google Tag Manager (noscript) -->
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('assets/media/images/bg-3.jpg');">
					<div class="login-form text-center p-7 position-relative overflow-hidden">
						<!--begin::Login Header-->
						<div class="d-flex flex-center mb-15">
							<a href="#">
								<img src="<?php echo base_url('assets/media/logos/logo-letter-13.png') ?>" class="max-h-75px" alt="">
							</a>
						</div>
						<!--end::Login Header-->
						<!--begin::Login Sign in form-->
						<div class="login-signin">
							<div class="mb-20">
								<h3>Sign In To Admin</h3>
								<div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
							</div>
							<form class="form fv-plugins-bootstrap fv-plugins-framework" method="post">
								<div class="form-group mb-5 fv-plugins-icon-container">
									<input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Username" name="username" autocomplete="off">
								<div class="fv-plugins-message-container"></div></div>
								<div class="form-group mb-5 fv-plugins-icon-container">
									<input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password" name="password">
								<div class="fv-plugins-message-container"></div></div>
								<div class="form-group d-flex flex-wrap justify-content-between align-items-center">
									<div class="checkbox-inline">
										<label class="checkbox m-0 text-muted">
										<input type="checkbox" name="remember">
										<span></span>Remember me</label>
									</div>
									<a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Forget Password ?</a>
								</div>
								<button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4" name="Submit">Sign In</button>
							<input type="hidden"><div></div></form>
						</div>
						<!--end::Login Sign in form-->
					</div>
				</div>
			</div>
			<!--end::Login-->
		</div>
	
		<script>var HOST_URL = "<?php echo base_url(); ?>";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?php echo base_url('assets/plugins/global/plugins.bundle.js');?>"></script>
		<script src="<?php echo base_url('assets/plugins/custom/prismjs/prismjs.bundle.js');?>"></script>
		<script src="<?php echo base_url('assets/js/scripts.bundle.js');?>"></script>
		<!-- <script src="<?php echo base_url('assets/js/engage_code.js');?>"></script> -->
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="<?php echo base_url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js');?>"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="<?php echo base_url('assets/js/pages/widgets.js');?>"></script>
		<!--end::Page Scripts-->
	
	<!--end::Body-->
<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M-1 200L-1 200C-1 200 84.16666666666667 200 84.16666666666667 200C84.16666666666667 200 168.33333333333334 200 168.33333333333334 200C168.33333333333334 200 252.5 200 252.5 200C252.5 200 336.6666666666667 200 336.6666666666667 200C336.6666666666667 200 420.8333333333333 200 420.8333333333333 200C420.8333333333333 200 505 200 505 200C505 200 505 200 505 200 "></path></svg><div class="daterangepicker ltr show-ranges opensleft"><div class="ranges"><ul><li data-range-key="Today">Today</li><li data-range-key="Yesterday">Yesterday</li><li data-range-key="Last 7 Days">Last 7 Days</li><li data-range-key="Last 30 Days">Last 30 Days</li><li data-range-key="This Month">This Month</li><li data-range-key="Last Month">Last Month</li><li data-range-key="Custom Range">Custom Range</li></ul></div><div class="drp-calendar left"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-calendar right"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-light-primary" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div></div><iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="https://vars.hotjar.com/box-dfc01efbdc94bb0936d9a35a502b0b64.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe></body></html>