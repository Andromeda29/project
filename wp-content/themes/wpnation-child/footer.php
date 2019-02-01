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

//Extracting the values that user defined in OptionTree Plugin 
$footerCopyright = ot_get_option('copyright_text');
$gmapsKey = ot_get_option('gmaps_key');

?>

	<footer class="b-footer style-dark">
				<div class="container">
					<div class="col-md-6">
						<div class="b-footer__box b-footer__map" id="flat-map" style="">
						
							<!-- BEGIN CONTACT PAGE GOOGLE MAPS -->
								<?php if (isset($gmapsKey) && !empty($gmapsKey)) { ?>
										<div id="map" style="width: 100%;height: 100%;"></div>
									<?php 
							} else { ?>
									<p style="text-align:center;margin-top:30px;margin-bottom:70px;">
									<?php _e('Please obtain Google Maps API key and enter it in <b>WordPress Dashboard > Appearance > Theme Options > Google Maps > Google Maps API Key</b> field to display Google Maps here.', 'nation') ?></p>
									<?php 
							} ?>
							<!-- END CONTACT PAGE GOOGLE MAPS -->
						</div>
					</div>
					  <?php if (!isset($headerBar[0]) || $headerBar[0] != 'off') { ?>
					<div class="col-md-6">
						<div class="b-footer__box b-footer__contacts">
							<div class="b-footer__contacts-box">
								<h3>Контактная информация</h3>
								<div class="b-footer__contacts-row">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
									<?php echo $generalAddress; ?>
								</div>
								<div class="b-footer__contacts-row">
									<i class="fa fa-phone" aria-hidden="true"></i>
									<?php echo $headerTelephone; ?>
								</div>
								<div class="b-footer__contacts-row">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								<?php echo $headerEmail; ?>
								</div>
								<div class="downloads visible-md visible-lg">
									<a href="images/intourist_logo.zip" target="_blank">
										<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/photo_2019-01-30_16-14-34.jpg" alt="Intourist Logo">
									</a>
								</div>
							</div>
							<!-- <div class="b-footer__contacts-box hidden">
								<h3>Мы в социальных сетях</h3>
								<div class="b-footer__contacts-social">
									<a href="https://vk.com/intourist_com_ua" target="_blank">
										<img src="images/icons/icon-vk.png" alt="">
									</a>
									<a href="https://www.facebook.com/Intourist.hotel" target="_blank">
										<img src="images/icons/icon-facebook.png" alt="">
									</a>
									<a href="https://www.instagram.com/explore/locations/227942010/intourist-hotel-zaporizhzhya/" target="_blank">
										<img src="images/icons/icon-instagram.png" alt="">
									</a>
								</div>
							</div> -->
							<div class="b-footer__contacts-box">
								<?php echo $footerCopyright; ?>
							</div>
						</div>
					</div>
					  <?php 
					} ?>

					<img class="b-footer__img visible-md visible-lg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/doorman.png" alt="">
				</div>
			</footer>
	</div>	
	<?php wp_footer(); ?>
	
  </body>
</html>