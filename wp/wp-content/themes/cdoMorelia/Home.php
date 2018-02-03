<?php /* Template Name: Inicio */ ?>
<?php get_header(); ?>



 <body id="page-top">

<!-- 1.- Menu de navegación -->
<?php echo get_template_part("contenidos/home/1-navegacion/1-navegacion")?>

<!-- 2.-  Bienvenida -->
<?php echo get_template_part("contenidos/home/2-Bienvenida/2-Bienvenida")?>

<!-- 3.-  Horarios -->
<?php echo get_template_part("contenidos/home/3-Horarios/3-Horarios")?>

<!-- 4.-  Series -->
<?php echo get_template_part("contenidos/home/4-Series/4-Series")?>

<!-- 5.- Declaración -->
<?php echo get_template_part("contenidos/home/5-Declaracion/5-Declaracion")?>

<!-- 6.- Contacto -->
<?php echo get_template_part("contenidos/home/6-Contacto/6-Contacto")?>






<?php get_footer(); ?>
