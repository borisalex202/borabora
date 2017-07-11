<?php
    $phone_explode = explode(" ", get_theme_mod('header_phone' ));
    $phone = '';
    for($i = 0; $i < count($phone_explode); $i++) {
        $phone .= $phone_explode[$i];
    }
?>
				<footer class="site-footer">
                    <div class="container">
                        <a href="/" class="logo"><img src="<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>" alt=""></a>
                        <?php echo (get_theme_mod('header_slogan' ) ? '<span class="slogan">' . get_theme_mod('header_slogan' ) . '</span>' : '') ; ?>
                        <div class="right">
                            <?php echo (get_theme_mod('header_phone' ) ? '<a href="tel:' . $phone. '" class="phone">' . get_theme_mod('header_phone' ) . '</a>' : '') ; ?>
                            <?php echo (get_theme_mod('header_info' ) ? '<p class="text">' . get_theme_mod('header_info' ) . '</p>' : '') ; ?>
                        </div>
                    </div>
				</footer><!-- .site-footer -->

			</div><!-- .site-content -->
		</div><!-- .site-container -->
	</div><!-- .wrapper-container -->
</div><!-- .wrapper -->

<?php wp_footer(); ?>

</body>
</html>
