 <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url"                content="<?php echo the_permalink(); ?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Casa de Oración Morelia" />
    <meta property="og:image"              content="<?php echo get_template_directory_uri();?>/img/general.png" />

    <link rel="icon" href="<?php echo get_template_directory_uri();?>/img/logos/favicon.png" sizes="32x32" />

    <title>Casa de Oración Morelia</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri();?>/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/agency/agency.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/agency/style.css" rel="stylesheet">
 <?php wp_head(); ?>
 
  </head>

 <body id="page-top">

<!-- 1.- Menu de navegación -->
<?php echo get_template_part("contenidos/home/1-navegacion/1-navegacion")?>