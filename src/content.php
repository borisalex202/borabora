<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<a href="<?php echo esc_url( get_permalink() ); ?>" class="entry-header" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
        <?php the_post_thumbnail()?>
	</a><!-- .entry-header -->

	<div class="entry-content">
		<?php
			if ( is_single() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :

                the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                the_excerpt();
                echo '<a href="' . esc_url( get_permalink() ) . '">читать больше</a>';
            endif;

		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
