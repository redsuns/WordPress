<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Redsuns WordPress Base Theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'redsuns-wordpress-base-theme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'redsuns-wordpress-base-theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'redsuns-wordpress-base-theme' ), 'Redsuns WordPress Base Theme', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri();?>/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>

</body>
</html>
