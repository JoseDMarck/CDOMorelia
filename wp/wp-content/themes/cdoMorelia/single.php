 <?php echo get_template_part("header-single"); ?>


 <div class="BloqueMain">

 	<div class="seccion-post">
	 	
	 	<div class="imagen">
	 		<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
	 	</div>

	 	<div class="titulo">
	 		<h1 class="section-heading text-uppercase"><?php echo the_title(); ?></h1>
	 	</div>


	 	<div class="contenido">
           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
	 	</div>


 	</div><!-- seccion-post -->
 
 </div><!-- BloqueMain-->


 

<?php get_footer(); ?>
