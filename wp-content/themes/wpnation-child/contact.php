<?php 

/*
Template Name: Contact
 */
get_header();
?>
<section class="l-default about-fon">
    <div class="container">
      <div class="col-xs-12">
        <h1 class="page-title">Контактная информация</h1>
        <div class="clearfix"></div>
        <div class="page-content">
          <div class="p-contacts">
            <div class="row">
              <div class="col-md-9">
                <div class="row">
                  <?php
                  $args = array(
                    'post_type' => array('team'),
                    'order' => 'ASC',
                    'order_by' => 'id'
                  );

                  $query_team = new WP_Query($args);

                  while ($query_team->have_posts()) {
                    $query_team->the_post();

                    ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contacts-item no-gutter">
                   <div class="caption">
                          <p class="name"><?= the_title(); ?></p>
                          <p class="position"><?php echo get_field('position'); ?></p>
                          <p class="contact-info"><?php echo get_field('phone'); ?><br>
                            <span id="cloak5c21c1ac06ec0008733119a72c7a1708">
                              <a href="mailto:<?php echo get_field('email'); ?>"><?php echo get_field('email'); ?></a>
                            </span>
                          </p>
                   </div>
                </div>
                <?php } wp_reset_query(); ?>
              </div>
              </div>
              <div class="col-md-3">
                <div class="b-contacts__sidebar">
                  <div class="tripadvisor-widget">
                    <div id="TA_selfserveprop533" class="TA_selfserveprop">
                      <ul id="pfgwd3" class="TA_links UJedVGxPZ">
                        <li id="Sx588xdKd" class="PJal3P3">
                          <a target="_blank" href="<?php echo get_field('link_logo_1'); ?>">
                            <img src="<?php echo get_field('logo-1'); ?>" alt="TripAdvisor">
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="downloads">
                    <a href="<?php echo get_field('link_logo_2'); ?>" target="_blank">
                      <img class="img-responsive" src="<?php echo get_field('logo-2'); ?>" alt="Intourist Logo">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  

<?php get_footer(); ?> 