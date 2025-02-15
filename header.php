<!DOCTYPE html>
<html lang= "<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <!-- Add my css -->
     <link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/assignmentOne/css/custom-style.css')) ?>">
</head>
<body <?php body_class(); ?>>
<header>
    <h1><?php bloginfo('name'); ?></h1>
    <div>
        <a href="<?php esc_url(home_url()); ?>">
            <img src="<?php echo esc_url(home_url('wp-content/uploads/2025/02/logo1.png'))?>" alt= "header logo">
    </div>
    <nav>
        <?php 
        wp_nav_menu(array(
             'menu'          =>  'main',
            'theme_location' => '',
            'depth'          => 2,
            'fallback'       => false
            
        )); ?>
    </nav>
</header> 