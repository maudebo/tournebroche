<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper-footer" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/classie.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/src/js/cbpFWTabs.js"></script>
<script>
	new CBPFWTabs( document.getElementById( 'tabs' ) );
</script>
<script>
	jQuery('.button_container').on('click touchscreen', function () {

		if (!( jQuery(this).hasClass('active'))) {

			jQuery('body').css({

				'overflow': 'hidden',
			});

		} else {
			jQuery('body').css({
				'overflow': 'initial',
			});
		}
	});



</script>

</html>

