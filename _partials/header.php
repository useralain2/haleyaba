<?php

$curr_page_name = preg_replace( array('/^.+\//'), array(''), $_SERVER['PHP_SELF'] );

?>

<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			<?php echo $html_title; ?>
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({ google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]}, active: function() { sessionStorage.fonts = true; } });        
		</script>
        <!--end::Web font -->

        <!-- Typekit - kit named 'Essential Italy') -->
		<script src="https://use.typekit.net/ukv7gsy.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
        
		<!--begin::Metronic Base Styles -->
        <link href="assets/metronic/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/metronic/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Metronic Base Styles -->
        
		<!--begin::Custom Styles -->
		<link href="assets/css/main.css" rel="stylesheet" type="text/css" />
        <!--end::Custom Styles -->
        
        <link rel="shortcut icon" href="assets/metronic/demo/default/media/img/logo/favicon.ico" />
        
	</head>
	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
	
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			
			<header id="m_header" class="m-grid__item m-header" m-minimize-offset="200" m-minimize-mobile-offset="200" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">

						<?php require '_partials/_header-brand.php'; ?>

						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

							<?php require '_partials/_header-hor-menu.php'; ?>

							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">

								<?php require '_partials/_topbar-search-default.php'; ?>

								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										
										<?php require '_partials/_topbar-notifications.php'; ?>

										<?php require '_partials/_topbar-quick-actions.php'; ?>

										<?php require '_partials/_topbar-user-profile.php'; ?>

										<!--
										<li id="m_quick_sidebar_toggle" class="m-nav__item">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon">
													<i class="flaticon-grid-menu"></i>
												</span>
											</a>
										</li>
										-->
									</ul>
								</div>
							</div>
							<!-- END: Topbar -->

						</div>
					</div>
				</div>
			</header>

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<?php require '_partials/_aside-left.php'; ?>

				<div class="m-grid__item m-grid__item--fluid m-wrapper">