<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package growmodotest
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info text-light bg-grey-10">
	
			<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( '@2023 Estatein. All Rights Reserved.', 'growmodotest' ), 'WordPress' );
			?>
			<a class="text-light" href="<?php echo esc_url( __( '/terms-and-conditions', 'growmodotest' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Terms & Conditions', 'growmodotest' ), 'WordPress' );
				?>
			</a>			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
