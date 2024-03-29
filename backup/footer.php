			</div> <!-- end .container -->
		</div> <!-- end #main-area -->	
	</div> <!-- end #page-wrap -->		
				
	<footer id="main-footer">
		<div class="container clearfix">
			<div id="footer-top-shadow"></div>
			
			<?php if ( is_active_sidebar( 'footer-area-1' ) || is_active_sidebar( 'footer-area-2' ) || is_active_sidebar( 'footer-area-3' ) || is_active_sidebar( 'footer-area-4' ) ) { ?>
				<div id="footer-widgets" class="clearfix">
					<?php 
						$footer_columns_num = apply_filters( 'evolution_footer_columns_num', 4 );
						for ( $i = 1; $i <= $footer_columns_num; $i++ ){
							echo '<div class="footer-widget footer-col' . $i . ( $i == $footer_columns_num ? ' last' : '' ) . '">';
								if ( is_active_sidebar( 'footer-area-' . $i ) && ! dynamic_sidebar( 'footer-area-' . $i ) ) :
								endif;
							echo '</div> <!-- end . footer-widget -->';
						}
					?>
				</div> <!-- end #footer-widgets -->	
			<?php } ?>
			
			<p id="copyright"><?php esc_html_e('KompetisiIndonesia','TwentyWebDev'); ?> <a href="http://www.kompetisiindonesia.com" title="Kompetisi dengan cara berbeda">Kompetisi dengan cara berbeda</a> | <?php esc_html_e('KompetisiIndonesia','TwentyWebDev'); ?> <a href="http://www.wordpress.org">WordPress</a></p>
		</div> <!-- end .container -->
	</footer> <!-- end #main-footer -->

	<?php wp_footer(); ?>
</body>
</html>
<a href="http://www.wplocker.com">shared on wplocker.com</a>
