<?php 
	//Extracting the values that user defined in OptionTree Plugin 
	$logoUrl = ot_get_option('logo_url');
	$smallLogoUrl = ot_get_option('small_logo_url');
	$headerTelephone = ot_get_option('telephone');
	$headerEmail = ot_get_option('email');
	$headerReservation = ot_get_option('header_reservation_link');	
	$generalAddress = ot_get_option('general_address');
	$countryFlag = ot_get_option('country_flag');
	$siteLanguage = ot_get_option('website_language');
	$languageSelector = ot_get_option('language_selector');
	$headerBar = ot_get_option('top_header_bar');
	
	// Home page's reservation widget 	
	$showResWidget = ot_get_option('show_res_widget');
	$bookingLink = ot_get_option('booking_link');
	$widgetHeaderText = ot_get_option('widget_header_text');
	
	$widgetMaxAdult = ot_get_option('widget_max_adult');
	$widgetMaxChildren = ot_get_option('widget_max_children');
	$widgetRoomNumber = ot_get_option('widget_room_number');
	
?>

<!DOCTYPE html>
<!--[if IE 8 ]>    <html class="ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<title><?php bloginfo('name'); ?></title>
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<link type="image/x-icon" rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico"  /> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">				
		<?php wp_head(); ?> 
	</head>
	<body id="to-top" <?php if ( is_404() ) { body_class('body-error-page'); } else { body_class(); } ?>
    	<div id="wrapper">
		    <header id="main-page-header-wrap" class='b-header <?php 
					if ( is_page_template('home-page.php') ) { 
						echo "header-shadow "; 
					} if ( isset($headerBar[0]) && $headerBar[0] == 'off' ) {
						echo "main-page-extra-padding";
					} 
				?>'>
				<div class="b-header__top hidden-xs">
					<div class="container-fluid">
						<div class="col-sm-8">
                            <?php if ( !isset($headerBar[0]) || $headerBar[0] != 'off' ) { ?>
                     <!-- BEGIN TOP INFO BAR -->
							<div id="top-street-address" class="b-header__top-box">
								<span>
									<i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $generalAddress; ?>
								</span>
								<span>
									<i class="fa fa-phone" aria-hidden="true"></i>
									<a href="tel:+380976141414"><?php echo $headerTelephone; ?></a>
								</span>
								<span class="last hidden-sm">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
									<a href="mailto:reservation@intourist.com.ua"><?php echo $headerEmail; ?></a>
								</span>
                            </div>
                          <!-- END TOP INFO BAR -->
                            <?php } ?>
						</div>
						<div class="col-sm-4">
							<div class="b-header__top-nav-box">
								<div class="b-header__top-nav b-header__top-box">
									<!-- <ul class="menu"> -->
                                        <?php 
                                           if ( has_nav_menu( 'language_menu' ) ) {
													wp_nav_menu(array(
														'menu' => 'Language Menu',
														'theme_location' => 'language_menu',
														'container' => false,
														'echo' => true,
														'menu_class' => 'sub_menu',
														'items_wrap' => '<ul class="menu %2$s">%3$s</ul>',
														'depth' => 1,
														'walker' => new language_menu_walker()
                                                    ));
                                                }
                                        ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="b-header__bottom">
					<nav class="navbar navbar-dark">
						<div class="container-fluid">
							<div  id="main-logo">
							<!-- MAIN LOGO -->
								<a href="<?php echo home_url(); ?>"><img src="<?php if (isset($logoUrl['background-image'])) echo $logoUrl['background-image']; ?>" id="main-logo" /><img src="<?php if (isset($smallLogoUrl['background-image'])) echo $smallLogoUrl['background-image']; ?>" id="main-logo-min" /></a>
							</div>
					

							<div class="navbar-header">

								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="/">
									<img src="images/topbar-logo.png" alt="">
								</a>
							</div>
							<?php if ( !isset($headerBar[0]) || $headerBar[0] != 'off' ) { ?>
							<div class="collapse navbar-collapse" id="navbar">
								<ul class="nav navbar-nav main-nav navbar-right visible-xs">
									<li>
										<a href="tel:+380976141414"><?php echo $headerTelephone; ?></a>
									</li>
									<li>
										<a href="mailto:reservation@intourist.com.ua">reservation@intourist.com.ua</a>
									</li>
								</ul>
							<?php } ?>
								<ul class="nav navbar-nav lang-nav visible-xs">
									<li>
										<a href="#" data-toggle="dropdown" class="dropdown-toggle">
											<img src="images/ru_ru.gif" alt="Русский" title="Русский">
											<span>Русский
												<span class="caret"></span>
											</span>
										</a>
										<ul class="lang-block dropdown-menu" dir="ltr">
											<li class="lang-active">
												<a href="#">
													<img src="images/ru_ru.gif" alt="Русский" title="Русский">
													<span>Русский</span>
												</a>
											</li>
											<li class="">
												<a href="#">
													<img src="images/uk_ua.gif" alt="Українська" title="Українська">
													<span>Українська</span>
												</a>
											</li>
											<li class="">
												<a href="#">
													<img src="images/en.gif" alt="English" title="English">
													<span>English</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
								<?php wp_nav_menu(array(
								'menu' => 'main-menu',
								'theme_location' => 'main-menu',
								'container' => false,
								'echo' => true,
								'depth' => 3,
								'items_wrap' => '<ul id="top-navigation-menu" class="nav navbar-nav main-nav dropdown %2$s">%3$s</ul>',
							'walker' => new main_menu_walker() 
							)) 
							?>
								<!-- <ul class="nav navbar-nav main-nav navbar-right visible-xs"> -->
									 <?php 
									if (has_nav_menu('language_menu')) {
										wp_nav_menu(array(
											'menu' => 'Language Menu',
											'theme_location' => 'language_menu',
											'container' => false,
											'echo' => true,
											'menu_class' => 'sub_menu',
											'items_wrap' => '<ul class="nav navbar-nav main-nav navbar-right visible-xs %2$s">%3$s</ul>',
											'depth' => 1,
											'walker' => new language_menu_walker()
										));
									}
									?>
								<!-- </ul> -->
							</div>
						</div>
					</nav>
				</div>
			</header>
		
