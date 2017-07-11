<?php get_header(); ?>

    <?php if(!get_theme_mod('hide_banner_section' )) :?>
        <div class="banner" <?php echo (get_theme_mod('banner_bg' ) ? 'style="background-color: ' . get_theme_mod('banner_bg' ) . ';"' : ''); ?>>
        <div class="container">
            <?php echo (get_theme_mod('banner_image' ) ? '<img src="' . get_theme_mod('banner_image' ) . '" class="banner-img">' : '') ; ?>
            <?php echo (get_theme_mod('banner_info' ) ? '<p class="banner-text">' . get_theme_mod('banner_info' ) . '</p>' : '') ; ?>
        </div>
        </div>
    <?php endif; ?>
	<main id="main" class="area standard site-main" role="main">

        <div class="container">
            <p class="heading">ПУТЕШЕСТВУЙТЕ С НАМИ</p>

            <?php if ( have_posts() ) : ?>

                <?php if ( is_home() && ! is_front_page() ) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                <?php endif; ?>

                <?php
                $count = get_theme_mod('posts_per_page' );
                while ( have_posts() && $count > 0 ) : the_post();

                    get_template_part( 'content', get_post_format() );
                    $count--;
                endwhile;

            else :
                get_template_part( 'content', 'none' );

            endif;
            ?>
        </div>

	</main><!-- .site-main -->
    <div class="info-block area standard" <?php echo (get_theme_mod('info_bg' ) ? 'style="background-color: ' . get_theme_mod('info_bg' ) . ';"' : ''); ?>>
        <div class="container">
            <?php echo (get_theme_mod('info_image' ) ? '<img src="' . get_theme_mod('info_image' ) . '" class="info-img">' : '') ; ?>
            <?php echo (get_theme_mod('info_text' ) ? '<p class="info-text">' . get_theme_mod('info_text' ) . '</p>' : '') ; ?>
        </div>
    </div>
    <div class="recreation" <?php echo (get_theme_mod('recreation_bg' ) ? 'style="background-color: ' . get_theme_mod('recreation_bg' ) . ';"' : ''); ?>>
        <div class="container">
            <div class="left">
                <?php echo (get_theme_mod('recreation_image' ) ? '<img src="' . get_theme_mod('recreation_image' ) . '" class="recreation-img">' : '') ; ?>
            </div>
            <div class="right">
                <?php echo (get_theme_mod('recreation_title' ) ? '<p class="recreation-title">' . get_theme_mod('recreation_title' ) . '</p>' : '') ; ?>
                <?php echo (get_theme_mod('recreation_text' ) ? '<p class="recreation-text">' . get_theme_mod('recreation_text' ) . '</p>' : '') ; ?>
            </div>
        </div>
    </div>


<?php get_footer(); ?>