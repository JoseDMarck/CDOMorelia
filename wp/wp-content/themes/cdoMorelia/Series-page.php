<?php /* Template Name: Series Loop */ ?>
<?php get_header(); ?>




     <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      
      <div class="container" id="series">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Predicaciones</h2>
            <h3 class="section-subheading text-muted">Escucha y comparte de los audios de las predicaciones que se están impartiendo en la iglesia </h3>
          </div>
        </div>


        <div class="row">
<?php
  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('showposts=9&post_type=post&category_name=Series'.'&paged='.$paged); 

  while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>


    <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="<?php echo the_permalink();?>">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-eye fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h5><?php echo the_title(); ?></h5>
            </div>
      </div>



<?php endwhile; ?>


          
        </div><!-- row -->


        <div style="clear: both;"></div>


 <?php
      if (function_exists(custom_pagination)) {
        custom_pagination($custom_query->max_num_pages,"",$paged);
      }
    ?>
      </div><!-- container -->
    </section>




<?php get_footer(); ?>
