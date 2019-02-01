<?php 

/*
Template Name: About
 */
get_header(); 
?>
<section class="l-default about-fon">
    <div class="container">
      <div class="col-xs-12">
        <div class="clearfix"></div>
        <div class="page-content">
         <?php while (have_posts()) : the_post();
                the_content();
                endwhile;
                wp_reset_query(); 
                ?>
		</div>
      </div>
    </div>
  </section>


<?php get_footer(); ?> 