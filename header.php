<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta charset="UTF-8">
    <title><?php wp_title( '-', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <script src="https://kit.fontawesome.com/f6f8cbf1c2.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <?php 
        $general_background_image = '';
        if(get_field('general_background_image')){
            $general_background_image = 'class="background-sphere"';
        }
    ?>

    <?php require_once('modules/off-canvas-nav/templates/oc-menu.php'); ?>

	<div id="page" <?php echo $general_background_image;?> >

		<header class="header">

            <div class="header__main">

                <div class="max__width">

                    <div class="header_logo_menu">
                        <div class="logo">
                            <a href="<?php echo esc_url(home_url()); ?>" title="<?php bloginfo('name'); ?>">Dr Helen Barrett
                                <!-- <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>"> -->
                            </a>
                        </div><!-- logo -->
                    </div>

                    <div class="header__cta">

                        <div class="header__menu">
                            <?php wp_nav_menu(array('menu' => 'Main Menu', 'container' => false)); ?>
                        </div><!-- header__right -->

                        <div class="oc__nav__trigger">
                            <a class="button outline primary small"><i class="fal fa-align-left"></i>Menu</a>
                        </div>
 
                    </div>

                </div><!-- max__width -->
            </div><!-- header__main -->
		</header><!-- header -->