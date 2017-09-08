<?php /*Template Name: product-details*/?>

<?php
get_header();
?>

<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mobiles">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mobiles
										</a>
									</h4>
								</div>
								<div id="mobiles" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php
				    							if (is_active_sidebar('category_mobile')) {
				    	                        	dynamic_sidebar('category_mobile');
				    							}
				    						?>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#labtops">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Labtops
										</a>
									</h4>
								</div>
								<div id="labtops" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php
				    							if (is_active_sidebar('category_labtop')) {
				    	                        	dynamic_sidebar('category_labtop');
				    							}
				    						?>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#tablets">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Taplets
										</a>
									</h4>
								</div>
								<div id="tablets" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php
				    							if (is_active_sidebar('category_tablet')) {
				    	                        	dynamic_sidebar('category_tablet');
				    							}
				    						?>
										</ul>
									</div>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						<div class="shipping text-center"><!--shipping-->
						<?php 
						            $g_post_id=get_the_ID();
									$args=array(
										'post_type' =>'product',
										'name' =>get_post_permalink(get_the_ID()),
										'posts_per_page'=>1
									);
									$products= new WP_Query($args);

										if ( $products->have_posts() ) {
											
											$products->the_post();
											echo '<img  src="'.catch_that_image().'" alt="" height="327px" width="290px" class="img-responsive" >';

											    wp_reset_postdata();
										} else {
												
										}
								?>
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<?php 
									$args=array(
										'post_type' =>'product',
										'p' => get_the_ID()
									);
									$products= new WP_Query($args);

										if ( $products->have_posts() ) {
											
											
											$products->the_post();

											echo '<img src="'.get_the_post_thumbnail_url().'" alt="" height="327px" width="290px" class="img-responsive"/>';

										?>
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/mobiles-2/iphone_se_16gb_rose_gold_listSingle.png" height="85px" width="85px" alt=""></a>
										  <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/mobiles-2/iphone_se_16gb_rose_gold_listSingle.png" height="85px" width="85px" alt=""></a>
										  <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/mobiles-2/iphone_se_16gb_rose_gold_listSingle.png" height="85px" width="85px" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/mobiles-2/iphone_se_16gb_rose_gold_listSingle.png" height="85px" width="85px" alt=""></a>
										  <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/mobiles-2/iphone_se_16gb_rose_gold_listSingle.png" height="85px" width="85px" alt=""></a>
										  <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/mobiles-2/iphone_se_16gb_rose_gold_listSingle.png" height="85px" width="85px" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/mobiles-2/iphone_se_16gb_rose_gold_listSingle.png" height="85px" width="85px" alt=""></a>
										  <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/mobiles-2/iphone_se_16gb_rose_gold_listSingle.png" height="85px" width="85px" alt=""></a>
										  <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/mobiles-2/iphone_se_16gb_rose_gold_listSingle.png" height="85px" width="85px" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="<?php echo get_template_directory_uri();?>/assets/images/product-details/new.jpg" class="newarrival" alt="" />
                                
                                <?php 
											echo '<h2>'.get_the_title(get_the_ID()).'</h2>';
											echo '<p>';
											echo 'Web ID: ';
											echo get_post_meta(get_the_ID(),'product_web_id', true);
											echo '</p>';
											/*echo get_theme_file_uri('/assets/images/product-details/rating.png');*/
											echo '<span>';
											echo '<span>';
											echo 'US ';
											echo get_post_meta(get_the_ID(),'product_price', true);
											echo '</span>';
											echo '<label>';
											echo 'Quantity';
											echo '</label>';
											echo '<input type="text" value="'.get_post_meta(get_the_ID(),'product_quantity', true).'"/>';
											echo '<button type="button" class="btn btn-fefault cart">';
											echo '<i class="fa fa-shopping-cart" style="padding-right:5px">';
											echo 'Add to cart';
											echo '</i>';
											echo '</button>';
											echo '</span>';
											echo '<p>';
											echo '<b>';
											echo 'Availability: ';
											echo '</b>';
											echo get_post_meta(get_the_ID(),'availability', true);
											echo '</p>';
											echo '<p>';
											echo '<b>';
											echo 'Condition: ';
											echo '</b>';
											echo get_post_meta(get_the_ID(),'product_condition', true);
											echo '</p>';
											echo '<p>';
											echo '<b>';
											echo 'Company: ';
											echo '</b>';
											echo get_post_meta(get_the_ID(),'company', true);
											echo '</p>';
											
											
											    wp_reset_postdata();
										} else {
												
										}
								?>
								<a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
								<li><a href="#tag" data-toggle="tab">Tag</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<?php
														$args=array(
														'post_type' =>'product',
														'order'=>'ASC',
														'post_per_page' =>4
													);
													$timer=1;
													$products= new WP_Query($args);

													if ( $products->have_posts() ) {
														while ( $products->have_posts() && $timer<=4 ) {
															$products->the_post();
													echo '<div class="col-sm-3">
														<div class="product-image-wrapper">
															<div class="single-products">
																<div class="productinfo text-center">';		
													echo '<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" alt="" height="268px" width="249px" class="img_responsive">';
													echo '<h2>'.get_post_meta(get_the_ID(),'product_price', true).'</h2>';
													echo '<p>'.get_the_title(get_the_ID()).'</p>';
													echo '<a href="'.get_permalink().'" class="more-details-1"><i class="fa fa-plus-square"></i>More Deatails</a>';
													echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart">Add to cart</i></a>';
													echo '	</div>
															</div>
														</div>
													</div>';
													$timer++;
												}
												wp_reset_postdata();
											} else {
												
											}
								            ?>
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								<?php
														$args=array(
														'post_type' =>'product',
														'order'=>'ASC',
														'post_per_page' =>4
													);
													$timer=1;
													$products= new WP_Query($args);

													if ( $products->have_posts() ) {
														while ( $products->have_posts() && $timer<=4 ) {
															$products->the_post();
													echo '<div class="col-sm-3">
														<div class="product-image-wrapper">
															<div class="single-products">
																<div class="productinfo text-center">';		
													echo '<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" alt="" height="268px" width="249px" class="img_responsive">';
													echo '<h2>'.get_post_meta(get_the_ID(),'product_price', true).'</h2>';
													echo '<p>'.get_the_title(get_the_ID()).'</p>';
													echo '<a href="'.get_permalink().'" class="more-details-1"><i class="fa fa-plus-square"></i>More Deatails</a>';
													echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart">Add to cart</i></a>';
													echo '	</div>
															</div>
														</div>
													</div>';
													$timer++;
												}
												wp_reset_postdata();
											} else {
												
											}
								            ?>
							</div>
							
							<div class="tab-pane fade" id="tag" >
								<?php
														$args=array(
														'post_type' =>'product',
														'order'=>'ASC',
														'post_per_page' =>4
													);
													$timer=1;
													$products= new WP_Query($args);

													if ( $products->have_posts() ) {
														while ( $products->have_posts() && $timer<=4 ) {
															$products->the_post();
													echo '<div class="col-sm-3">
														<div class="product-image-wrapper">
															<div class="single-products">
																<div class="productinfo text-center">';		
													echo '<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" alt="" height="268px" width="249px" class="img_responsive">';
													echo '<h2>'.get_post_meta(get_the_ID(),'product_price', true).'</h2>';
													echo '<p>'.get_the_title(get_the_ID()).'</p>';
													echo '<a href="'.get_permalink().'" class="more-details-1"><i class="fa fa-plus-square"></i>More Deatails</a>';
													echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart">Add to cart</i></a>';
													echo '	</div>
															</div>
														</div>
													</div>';
													$timer++;
												}
												wp_reset_postdata();
											} else {
												
											}
								            ?>
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="<?php echo get_template_directory_uri();?>/assets/images/product-details/rating.png" alt="" class="img-responsive" height="12px" width="80px" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active"> 
								<?php 
											$args=array(
												'post_type' =>'product',
												'order' => 'ACS'
											);
											$timer=1;
											$products= new WP_Query($args);

											if ( $products->have_posts() ) {
												while ( $products->have_posts() && $timer<=3 ) {
													$products->the_post();
													echo '<div class="col-sm-4">
										                 <div class="product-image-wrapper">
											             <div class="single-products">
												         <div class="productinfo text-center">';
												    echo '<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" alt="" />';
												    echo '<h2>'.get_post_meta(get_the_ID(),'product_price', true).'</h2>';
													echo '<p>'.get_the_title(get_the_ID()).'</p>';
													echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
													echo '<br>';
                                                    echo '<a href="'.get_permalink().'" class="more-details-1"><i class="fa fa-plus-square"></i>More Deatails</a>';
													echo '</div>
															</div>
														</div>
													</div>';
													$timer++;
												}
												wp_reset_postdata();
											} else {
												
											}
								            ?>
								</div>
								<div class="item">	
									<?php 
											$args=array(
												'post_type' =>'product',
												'order' => 'ASC'
											);
											$timer=1;
											$products= new WP_Query($args);

											if ( $products->have_posts() ) {
												while ( $products->have_posts() && $timer<=3 ) {
													$products->the_post();
													echo '<div class="col-sm-4">
										                 <div class="product-image-wrapper">
											             <div class="single-products">
												         <div class="productinfo text-center">';
												    echo '<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" alt="" />';
												    echo '<h2>'.get_post_meta(get_the_ID(),'product_price', true).'</h2>';
													echo '<p>'.get_the_title(get_the_ID()).'</p>';
													echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
													echo '<br>';
                                                    echo '<a href="'.get_permalink().'" class="more-details-1"><i class="fa fa-plus-square"></i>More Deatails</a>';
													echo '</div>
															</div>
														</div>
													</div>';
													$timer++;
												}
												wp_reset_postdata();
											} else {
												
											}
								            ?>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>		
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
?>