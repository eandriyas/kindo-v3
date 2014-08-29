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
			
			<p id="copyright">Copyright &copy; 2013. Kompetisi Indonesia | Kompetisi dengan cara berbeda<br/>
			<a href="http://www.kompetisiindonesia.com/home/sitemap">Sitemap</a> | <a href=" http://www.Kompetisiindonesia.com/home/privacy-policy">Privacy Policy</a>
			</p>
			
		</div> <!-- end .container -->
	</footer> <!-- end #main-footer -->

	<?php wp_footer(); ?>
	<!--G Anal-->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44428186-1', 'kompetisiindonesia.com');
  ga('send', 'pageview');
  ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

	</script>
	
	<!-- Histats.com  START (hidden counter)-->
	<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 	type=%27text/javascript%27%3E%3C/script%3E"));</script>
	<a href="http://www.histats.com" target="_blank" title="site stats" ><script  type="text/javascript" >
	try {Histats.start(1,2475171,4,0,0,0,"");
	Histats.track_hits();} catch(err){};
	</script></a>
	<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2475171&101" alt="site stats" border="0"></a></noscript>
	<!-- Histats.com  END  -->
	
	<!--facebook like -->
			<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1419514554927551";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
			
	
</body>
</html>
