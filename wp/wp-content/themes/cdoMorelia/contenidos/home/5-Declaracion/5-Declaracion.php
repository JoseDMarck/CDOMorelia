    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Declaración de Fe</h2>
          </div>
        
        <div class="col-lg-12 text-center">
            <a data-toggle="modal" href="#portfolioModal1">
              <button type="button" class="btn btn-outline-primary btn-lg ">Leer Declaración</button>
            </a>
        </div>
        </div>
        
      </div>
    </section>



        <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->

                  <?php
                   $temp = $wp_query; 
                   $wp_query = null; 
                   $wp_query = new WP_Query(); 
                   $wp_query->query('showposts=1&post_type=page&page_id=21'.'&paged='.$paged); 
                    while ($wp_query->have_posts()) : $wp_query->the_post(); 
                    ?>


                  <h2 class="text-uppercase"><?php echo the_title(); ?></h2>
                  <img class="img-fluid d-block mx-auto" src="<?php the_post_thumbnail_url(); ?>" alt="">

                  <div class="DeclaracionFeContenido">
                  <?php echo the_content(); ?>
                </div>

                  <?php endwhile; ?>
                  
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>