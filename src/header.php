<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
    $phone_explode = explode(" ", get_theme_mod('header_phone' ));
    $phone = '';
    for($i = 0; $i < count($phone_explode); $i++) {
        $phone .= $phone_explode[$i];
    }
?>
<div id="page" class="wrapper">

	<div class="wrapper-container">

		<div class="site-container">
            <header class="site-header" <?php echo (get_theme_mod('header_bg' ) ? 'style="background-color: ' . get_theme_mod('header_bg' ) . ';' : ''); ?>">
                <div class="container">
                    <a href="/" class="logo"><img src="<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>" alt=""></a>
                    <?php echo (get_theme_mod('header_slogan' ) ? '<span class="slogan">' . get_theme_mod('header_slogan' ) . '</span>' : '') ; ?>
                    <div class="right">
                        <?php echo (get_theme_mod('header_phone' ) ? '<a href="tel:' . $phone. '" class="phone">' . get_theme_mod('header_phone' ) . '</a>' : '') ; ?>
                        <?php echo (get_theme_mod('header_info' ) ? '<p class="text">' . get_theme_mod('header_info' ) . '</p>' : '') ; ?>
                    </div>
                </div>
            </header><!-- .site-header -->

			<div id="content" class="site-content">
