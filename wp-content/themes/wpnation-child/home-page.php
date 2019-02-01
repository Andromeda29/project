<?php 

/*
Template Name: Home page
 */

get_header(); 

	//Extracting the values that user defined in OptionTree Plugin 
$roomSection = ot_get_option('room_section');
$aboutusSection = ot_get_option('aboutus_section');
$infoSection = ot_get_option('info_section');
$featureSection = ot_get_option('feature_section');
$gmapsKey = ot_get_option('gmaps_key');
$roomHeader = ot_get_option('main_room_header');
$roomDescription = ot_get_option('main_room_description');
$allRoomsLink = ot_get_option('link_all_room');
$aboutusHeader = ot_get_option('aboutus_header');
$aboutusImage = ot_get_option('aboutus_image');
$aboutusContent = ot_get_option('aboutus_text');
$mainSlider = ot_get_option('main_slider');
$testimonialsHeader = ot_get_option('testimonials_header');
$testimonialsCount = ot_get_option('testimonials_count');
$textHeader = ot_get_option('text_section_header');
$textContent = ot_get_option('text_section_content');
$latestNews = ot_get_option('latest_news');
$latestNewsCount = ot_get_option('latest_news_count');
$findusHeader = ot_get_option('where_to_find_us_header');
$findusTitle = ot_get_option('where_to_find_us_title');
$findusAddress = ot_get_option('where_to_find_us_address');

if (isset($findusTitle) && $findusTitle != "") $findusTitle = explode(";", $findusTitle);
if (isset($findusAddress) && $findusAddress != "") $findusAddress = explode(";", $findusAddress);
?>
        <section class="b-slider">
			<div class="bg" id="bg">
			<video loop="" muted="" autoplay="">
				<source src="<?php echo get_field('home_video'); ?>" type="video/mp4">
			</video>
			</div>
		</section>
 		<section class="b-wellcome b-module style-dark style-block-next">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="block-next">
								<?php
							if (have_posts()) : query_posts('cat=4&orderby=date&posts_per_page=1');
							while (have_posts()) : the_post(); ?>
											<a href="<?php the_permalink(); ?>" class="img">
												<?php the_post_thumbnail(array()); ?>
											</a>
										<div class="text">
											<a href="<?php the_permalink(); ?>" class="caption"><?php the_title(); ?></a>
									 	    <p><?php the_content(); ?></p>
										<?php endwhile;
									endif;
									wp_reset_query();
									?>
								       </div>
								</div>
							</div>
						</div>
					</div>
			</section>
			<section class="b-wellcome b-module style-dark">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="b-wellcome__item">
								<?php while (have_posts()) : the_post();
							the_content();
							endwhile;
							wp_reset_query(); ?>
							</div>
						</div>
					</div>
				</div>
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
						'post_type' => array('rooms'),
						'order' => 'ASC',
						'order_by' => 'id'
					);

					$query_rooms = new WP_Query($args);

					while ($query_rooms->have_posts()) {
						$query_rooms->the_post();

						?>

							

							<div class="col-md-4 col-sm-6">							
								<div class="b-rooms__item">
									<div class="b-rooms__image">
										<a href="#">
											<img class="img-responsive" src="<?= the_post_thumbnail_url(); ?>" alt="<?= the_title(); ?>">
											<div class="b-rooms__title title-price">
												<?= the_title(); ?>
												<span class="b-rooms__title-price"><?php echo get_field('price'); ?> ₴</span>
											</div>
										</a>
									</div>
									<div class="b-rooms__buttons">
										<a class="b-rooms__button" href="<?= the_permalink(); ?>" data-room="0">
											<span class="b-rooms__button-book single">Забронировать</span>
										</a>
									</div>
								</div>
							</div>

							<?php

					}

					while (have_posts()) : the_post();

					?>

						<div class="col-md-4 col-sm-6">
							<div class="b-rooms__item b-rooms__promo">
								<div class="b-rooms__image" data-mh="room-thumb" style="background-image: url(<?php echo get_field('background_2'); ?>)">
									<ul>
										<li>
											<?php echo get_field('discounts'); ?>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<?php endwhile; ?>						
						</div>
					</div>
				</div>
			</section>				
<?php get_footer(); ?> 