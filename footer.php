<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>G</span>-SHOPPER</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/home/partner1.png" alt="" />
									</div>
								</a>
								<p>First Partner</p>
								<h2>24 OCT 2016</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/home/partner2.png" alt="" />
									</div>
								</a>
								<p>Sconed Partner</p>
								<h2>05 JAN 2016</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/home/partner3.png" alt="" />
									</div>
								</a>
								<p>Third Partner</p>
								<h2>29 FEB 2015</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/home/partner4.png" alt="" />
									</div>
								</a>
								<p>Fourth Partner</p>
								<h2>18 JAN 2017</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<?php
    							if (is_active_sidebar('footer_widget_1')) {
    	                        	dynamic_sidebar('footer_widget_1');
    							}
    						?>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<?php
    							if (is_active_sidebar('footer_widget_2')) {
    	                        	dynamic_sidebar('footer_widget_2');
    							}
    						?>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<?php
    							if (is_active_sidebar('footer_widget_3')) {
    	                        	dynamic_sidebar('footer_widget_3');
    							}
    						?>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<?php
    							if (is_active_sidebar('footer_widget_4')) {
    	                        	dynamic_sidebar('footer_widget_4');
    							}
    						?>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					<div class="col-md-12">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2017 G-SHOPPER. All rights reserved.</p>
					<p class="pull-right">Developed by <span><a target="_blank" href="#">G-SHOPPER/Developer Team</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

    <?php wp_footer();?>
 <!--<script type="text/javascript">
 	$("#zoom_05").elevateZoom({
	  zoomType: "inner",
	  cursor: "crosshair"
	});
 </script>-->
</body>
</html>