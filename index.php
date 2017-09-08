

	<?php
	 get_header();
   	?>
   	<!--to add slider plugin-->
	<?php
     echo do_shortcode('[gsh_slider_plugin]');
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
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('apple') ?>)</span>apple</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('summsung') ?>)</span>summsung</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('nokia') ?>)</span>nokia</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('htc') ?>)</span>htc</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('lg') ?>)</span>lg</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('sony') ?>)</span>sony</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('lenovo') ?>)</span>lenovo</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('hp') ?>)</span>hp</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('asus') ?>)</span>asus</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('msi') ?>)</span>msi</a></li>
									<li><a href="#"> <span class="pull-right">(<?php count_posts_by_company_tag('others') ?>)</span>others</a></li>
								</ul>

								
							</div>
						</div><!--/brands_products-->
						<div class="shipping text-center"><!--shipping-->
							<img src="<?php echo get_template_directory_uri();?>/assets/images/mobiles/m6.png" class="img-responsive" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						
											<?php 
											$args=array(
												'post_type' =>'product',
												'orderby' => 'ASC',
												'post_per_page' =>6
											);
											$timer=1;
											$products= new WP_Query($args);

											if ( $products->have_posts() ) {
                                               
												while ( $products->have_posts() && $timer<=6) {
													$products->the_post();

												echo '<div class="col-sm-4">';
							                    echo '<div class="product-image-wrapper">';
								                echo '<div class="single-products my-custom-single-product">';  
										        echo '<div class="productinfo text-center">'; 
       
												echo '<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" alt="" height="268px" width="249px" class="img_responsive">';
												echo '<h2>'.get_post_meta(get_the_ID(),'product_price', true).'</h2>';
												echo '<p>'.get_the_title(get_the_ID()).'</p>';
												echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart">Add to cart</i></a>';
												echo'</div>';	
										        echo '<div class="product-overlay">';
											    echo '<div class="overlay-content">';

													echo '<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" alt="" height="268px" width="249px" class="img_responsive">';
                                                    echo '<h2>'.get_post_meta(get_the_ID(),'product_price', true).'</h2>';
                                                    echo '<span>Color : '.get_post_meta(get_the_ID(),'color', true).'</span>';
                                                    echo '<span>Opreating System : '.get_post_meta(get_the_ID(),'opreating_system', true).'</span>';
                                                    echo '<span>Quantity : '.get_post_meta(get_the_ID(),'product_quantity', true).'</span>';
                                                    echo '<br>';
                                                    echo '<a href="'.get_permalink().'" class="more-details"><i class="fa fa-plus-square"></i>More Deatails :</a>';
                                                    echo '<br>';
                                                    echo '<br>';
													echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart">Add to cart</i></a>';
													echo '</div>';
													echo '</div>';
													echo '</div>';
													echo '<div class="choose">
													<ul class="nav nav-pills nav-justified">
									                <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									                 </ul>
									                 </div>
									                 </div>
								                     </div>';
                                                    $timer++;

											    }  
												
												wp_reset_postdata();
											} else {
	
											}
											
								            ?>
								
			</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
								<li><a href="#blazers" data-toggle="tab">Blazers</a></li>
								<li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
								<li><a href="#kids" data-toggle="tab">Kids</a></li>
								<li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
												<?php
														$args=array(
														'post_type' =>'product',
														'orderby'=>'date',
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
							
							<div class="tab-pane fade" id="blazers" >
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
							
							<div class="tab-pane fade" id="sunglass" >
								<?php
														$args=array(
														'post_type' =>'product',
														'orderby'=>'date',
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
							
							<div class="tab-pane fade" id="kids" >
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
							
							<div class="tab-pane fade" id="poloshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<?php 
											$args=array(
												'post_type' =>'product',
												'name'=>'eleventh-product'
											);
											$products= new WP_Query($args);

											if ( $products->have_posts() ) {
												while ( $products->have_posts() ) {
													$products->the_post();
													echo '<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" alt="" height="268px" width="249px" class="img_responsive">';
													echo '<h2>'.get_post_meta(get_the_ID(),'product_price', true).'</h2>';
													echo '<p>'.get_the_title(get_the_ID()).'</p>';
													echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart">Add to cart</i></a>';
												}
												wp_reset_postdata();
											} else {
												
											}
								            ?>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<?php 
											$args=array(
												'post_type' =>'product',
												'name'=>'twelveth-product'
											);
											$products= new WP_Query($args);

											if ( $products->have_posts() ) {
												while ( $products->have_posts() ) {
													$products->the_post();
													echo '<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" alt="" height="268px" width="249px" class="img_responsive">';
													echo '<h2>'.get_post_meta(get_the_ID(),'product_price', true).'</h2>';
													echo '<p>'.get_the_title(get_the_ID()).'</p>';
													echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart">Add to cart</i></a>';
												}
												wp_reset_postdata();
											} else {
												
											}
								            ?>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<?php 
											$args=array(
												'post_type' =>'product',
												'name'=>'first-product'
											);
											$products= new WP_Query($args);

											if ( $products->have_posts() ) {
												while ( $products->have_posts() ) {
													$products->the_post();
													echo '<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" alt="" height="268px" width="249px" class="img_responsive">';
													echo '<h2>'.get_post_meta(get_the_ID(),'product_price', true).'</h2>';
													echo '<p>'.get_the_title(get_the_ID()).'</p>';
													echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart">Add to cart</i></a>';
												}
												wp_reset_postdata();
											} else {
												
											}
								            ?>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<?php 
											$args=array(
												'post_type' =>'product',
												'name'=>'sconed-product'
											);
											$products= new WP_Query($args);

											if ( $products->have_posts() ) {
												while ( $products->have_posts() ) {
													$products->the_post();
													echo '<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" alt="" height="268px" width="249px" class="img_responsive">';
													echo '<h2>'.get_post_meta(get_the_ID(),'product_price', true).'</h2>';
													echo '<p>'.get_the_title(get_the_ID()).'</p>';
													echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart">Add to cart</i></a>';
												}
												wp_reset_postdata();
											} else {
												
											}
								            ?>
											</div>
											
										</div>
									</div>
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
												'orderby' => 'ASC'
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
													echo '<a href="'.get_permalink().'" class="more-details-1"><i class="fa fa-plus-square"></i>More Deatails</a>';
													echo '<br><br>';
													echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
                                                    
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
												'orderby' => 'modified'
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
													echo '<a href="'.get_permalink().'" class="more-details-1"><i class="fa fa-plus-square"></i>More Deatails</a>';
													echo '<br><br>';
													echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
                                                    
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
	