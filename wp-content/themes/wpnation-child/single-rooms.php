<?php 

get_header(); 

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
	
		<div id="wrapper">		
			<section class="l-apartment" style="background: url(<?php echo get_field('background'); ?>)">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="container">
					<div class="col-xs-12">
						<h1 class="page-title"><?=the_title();?></h1>
						<div class="clearfix"></div>
						<div class="b-apartment__top clearfix">
							<div class="b-apartment__images">
								<div class="b-apartment__images-main">
									<div id="my-gallery" class="my-gallery slider-for" itemscope itemtype="http://schema.org/ImageGallery">									
<?php 
							
							for ($g=1;$g<16;$g++){
								if (MultiPostThumbnails::has_post_thumbnail('rooms', 'slider-image-'.$g)) {	

									?>

									<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
											<a href="<?php echo MultiPostThumbnails::get_post_thumbnail_url('rooms', 'slider-image-'.$g)?>" itemprop="contentUrl" data-size="960x640">
												<img src="<?php echo MultiPostThumbnails::get_post_thumbnail_url('rooms', 'slider-image-'.$g)?>" itemprop="thumbnail" alt="<?=the_title()?>" />
											</a>
											<figcaption itemprop="caption description"><?=the_title()?></figcaption>
										</figure>
										<?php
								}                    
							}
						?>
										
										
									</div>
								</div>
								<div class="b-apartment__images-list">
									<div class="b-apartment__images-thumbs">
										<ul class="clearfix slider-nav">
										<?php
										for ($g=1;$g<16;$g++){
								if (MultiPostThumbnails::has_post_thumbnail('rooms', 'slider-image-'.$g)) {	
									?>

									<li>
										<img class="b-apartment__images-thumb" src="<?php echo MultiPostThumbnails::get_post_thumbnail_url('rooms', 'slider-image-'.$g)?>" alt="<?=the_title()?>">
									</li>
										<?php
								}                    
							}

							?>
							
											
										</ul>
									</div>
								</div>
                            </div>
                            
                            
                            
                            <?php $reservationPage = get_pages(array(
                                'meta_key' => '_wp_page_template',
                                'meta_value' => 'reservation.php'
                            ));
                            $reservationID = $reservationPage[0]->ID;
                            ?>

                            

							<div class="b-apartment__form">
								<div class="rsform">




                                <form id="room-date-form" action="<?php echo get_permalink( $reservationID ) ?>" method="post">
                                <h3 class="b-slider__form-title">Бронирование онлайн:</h3>

                                <div class="b-slider__form-row input-daterange">
                                    <div class="row">
										<div class="col-sm-6">
                                            <div class="b-slider__form-label" for="from">Приезд</div>
                                            <div id="check-in-date-wrap" class="fake-input">
                                                <input autocomplete="off" type="text" name="check-in" id="check-in-date" class="reservation-form-field">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="b-slider__form-label" for="from">Отъезд</div>
                                            <div id="check-out-date-wrap" class="fake-input">
                                                <input autocomplete="off" type="text" name="check-out" id="check-out-date" class="reservation-form-field">
                                            </div>
					                    </div>
                                     </div>
                                </div>

					
                    <!-- <div style="clear:both"></div> -->
                    
                    <div class="b-slider__form-row">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="b-slider__form-label" for="from">Кол-во гостей</div>
                                <select name="room-adults" id="single-room-adult-selection" class="select-box form-guests valid rsform-select-box">
                                    <option value="0">0</option>
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <div class="b-slider__form-label" for="from">Дети</div>
                                <select name="room-children" id="single-room-children-selection" class="select-box form-guests valid rsform-select-box">
                                    <option value="0" selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            </div>
                    </div>

                    <div>
                        <div class="room-price">
							<div>
								<span>₴</span> <span><?=get_field('price');?></span>
                            	<span class="price-sub">за одноместное размещение</span>
							</div>
                            
                            <span class="price-sub"><?=get_field('price_2');?> грн за двухместное размещение</span>
                        </div>
                    </div>


					
					
					<input type="hidden" value="1" name="room-number">
					<input type="hidden" value="true" name="from-single-room">
					<input type="hidden" value="<?php echo get_post_meta(get_the_ID(),'calendar',true) ?>" name="selected-room">
					<div class="clear"></div>
					
					<button type="submit" id="book-button"><?php _e('Book Now','nation'); ?><span class="icon-shopping-cart"></span></button>
					
					<?php wp_nonce_field( 'resform', 'resform_step1' ); ?>
                </form>
        	</div>
		</div>
    </div>
                



<!--                 
									<form id="room-date-form" action="<?php echo get_permalink( $reservationID ) ?>" method="post">
										
										<div class="b-slider__form-step b-slider__form-step-1">
											<div class="b-slider__form-list">
												<h3 class="b-slider__form-title">Бронирование онлайн:</h3>
												<div class="b-slider__form-row input-daterange">
													<div class="row">
														<div class="col-sm-6">
															<div class="b-slider__form-label" for="from">Приезд</div>
															<div class="b-slider__form-input get-date">
																<div id="check-in-date-wrap" class="fake-input date-start form-from global-date-from">
																	<input type="text" name="check-in" id="check-in-date" class="reservation-form-field">
                                                                </div>
                                                                
															</div>
														</div>
														<div class="col-sm-6">
															<div class="b-slider__form-label" for="to">Отъезд</div>
															<div class="b-slider__form-input get-date cal-parent">
																<div id="check-out-date-wrap" class="fake-input date-end form-to global-date-to">
																	<input type="text" name="check-out" id="check-out-date" class="reservation-form-field">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="b-slider__form-row">
													<div class="row">
														<div class="col-sm-6">
															<div class="b-slider__form-label">Кол-во гостей</div>
															<div class="b-slider__form-input">
																<select name="room-adults" id="single-room-adult-selection"  class="select-box form-guests valid rsform-select-box">
                                                                    <option value="" selected><?php _e("No. adults","nation"); ?></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                </select>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="b-slider__form-label">Дети</div>
															<div class="b-slider__form-input">
																<select name="room-children" id="single-room-children-selection" class="select-box form-child valid rsform-select-box">
                                                                    <option value="" selected><?php _e("No. children","nation"); ?></option>
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                </select>
                                                                <input type="hidden" value="1" name="room-number">
                                                                <input type="hidden" value="true" name="from-single-room">
                                                                <input type="hidden" value="<?php echo get_post_meta(get_the_ID(),'calendar',true) ?>" name="selected-room">
															</div>
														</div>
													</div>
												</div>
												<div class="b-slider__form-row">
													<div class="row">
														<div class="col-sm-12">
															<div class="b-slider__form-label">Категория номера <span id="room-price"></span></div>
															<div class="b-slider__form-input">
																<select name="form[room][]" id="room" class="select-box js-select-apartments form-room rsform-select-box"><option value="Стандарт Double">Стандарт Double</option><option value="Стандарт Twin">Стандарт Twin</option><option value="Полулюкс">Полулюкс</option><option value="Полулюкс Twin">Полулюкс Twin</option><option value="Люкс">Люкс</option></select>
															</div>
														</div>
													</div>
												</div>
												<div class="b-slider__form-row last">
													<div class="row">
														<div class="col-sm-12">
                                                            <button class="b-slider__form-button-shownext js-showstep-2 animated" type="submit" id="book-button"><?php _e('Book Now','nation'); ?>
                                                            
                                                        </button>
					
					                                        <?php wp_nonce_field( 'resform', 'resform_step1' ); ?>
															
														</div>
													</div>
												</div>
											</div>
										</div>
										
									</form> -->
							

						<div class="b-apartment__bottom clearfix">
							<div class="col-xs-12">
								<div class="b-page__text">
									<?=the_content();?>
								</div>
							</div>
						</div>

					</div>
				</div>
				<?php endwhile; ?>
			</section>
			<section class="b-module mod-apartments style-white frontpage-module" style="background: url(<?php echo get_field('background'); ?>)">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h3 class="mod-title"><?php __('Другие номера', 'nation') ?></h3>
						</div>
					</div>
					<div class="row">
						<div class="b-rooms__list clearfix">


						<?php
							$args = array(
                                'post_type' => array( 'rooms' ),
                                'order' => 'ASC',
                                'order_by' => 'id'
							);

							$query_rooms = new WP_Query( $args );

							while ( $query_rooms->have_posts() ) {
							$query_rooms->the_post();

						?>							

							<div class="col-md-4 col-sm-6">							
								<div class="b-rooms__item">
									<div class="b-rooms__image">
										<a href="#">
											<img class="img-responsive" src="<?=the_post_thumbnail_url();?>" alt="<?=the_title();?>">
											<div class="b-rooms__title title-price">
												<?=the_title();?>
												<span class="b-rooms__title-price"><?php echo get_field('price'); ?> ₴</span>
											</div>
										</a>
									</div>
									<div class="b-rooms__buttons">
										<a class="b-rooms__button" href="<?=the_permalink();?>" data-room="0">
											<span class="b-rooms__button-book single">Забронировать</span>
										</a>
									</div>
								</div>
							</div>

							<?php
						}					
						
							$args = array(
                                'post_type' => array( 'discounts' ),
                                'order' => 'ASC',
                                'order_by' => 'id'
							);
							$query_discounts = new WP_Query( $args );
							while ( $query_discounts->have_posts() ) {
							$query_discounts->the_post();
						?>

						<div class="col-md-4 col-sm-6">
							<div class="b-rooms__item b-rooms__promo">
								<div class="b-rooms__image" data-mh="room-thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">										
									<?php the_content(); ?>
								</div>
							</div>
						</div>
							<?php }?>
						
						</div>
					</div>
				</div>
			</section>			
		</div>
		<div class="modal fade" id="confirmed" tabindex="-1" role="dialog" aria-labelledby="confirmLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
						</button>
						<h4 class="modal-title" id="confirmLabel">Мы получили вашу заявку</h4>
					</div>
					<div class="modal-body">
						<div class="confirm-row">
							<div class="confirm-thanks">
								<p style="margin-bottom: 20px;">
									Подтверждение вы получите на указанный вами электронный адрес в течении нескольких минут.
								</p>
								<h4><strong>Хорошего дня!</strong></h4>
							</div>
						</div>
					</div>
					<div class="modal-footer text-center">
						<button type="button" class="confirm-submit" data-dismiss="modal">
						Закрыть
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="pswp__bg"></div>
			<div class="pswp__scroll-wrap">
				<div class="pswp__container">
					<div class="pswp__item"></div>
					<div class="pswp__item"></div>
					<div class="pswp__item"></div>
				</div>
				<div class="pswp__ui pswp__ui--hidden">
					<div class="pswp__top-bar">
						<div class="pswp__counter"></div>
						<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
						<button class="pswp__button pswp__button--share" title="Share"></button>
						<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
						<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
						<div class="pswp__preloader">
							<div class="pswp__preloader__icn">
								<div class="pswp__preloader__cut">
									<div class="pswp__preloader__donut"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
						<div class="pswp__share-tooltip"></div>
					</div>
					<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
					</button>
					<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
					</button>
					<div class="pswp__caption">
						<div class="pswp__caption__center"></div>
					</div>
				</div>
			</div>
		</div>


	

    <?php 
    







    

get_footer(); ?>

