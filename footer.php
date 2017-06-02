<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container" class="footer-container">
			<footer id="footer" class="footer">

				<div class="contact-footer">
					<h3 class="line-it-after"><a href="/contact/">Contact</a></h3>
					<p>You can contact me on <a class="white" href="tel:07413710927">07413 710 927</a> or at <a class="white" href="email:mark@marktsavage.co.uk">mark@marktsavage.co.uk</a> .
				</div>

				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

<?php if ( !is_user_logged_in() ) :  ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '999999999-1', 'auto');
  ga('send', 'pageview');

</script>
<?php endif; ?>

</body>
</html>
