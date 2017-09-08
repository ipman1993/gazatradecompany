<?php
function wpc_enqueue_script(){
	//for css
	wp_enqueue_style('gt_wp_enqueue1',get_theme_file_uri('/assets/css/bootstrap.min.css'),array(),'3.0.3');
	wp_enqueue_style('gt_wp_enqueue2',get_theme_file_uri('/assets/css/font-awesome.min.css'),array(),'4.0.3');
	wp_enqueue_style('gt_wp_enqueue3',get_theme_file_uri('/assets/css/prettyPhoto.css'),array());
	wp_enqueue_style('gt_wp_enqueue4',get_theme_file_uri('/assets/css/price-range.css'),array(),'2.0');
	wp_enqueue_style('gt_wp_enqueue5',get_theme_file_uri('/assets/css/animate.css'),array());
	wp_enqueue_style('gt_wp_enqueue6',get_theme_file_uri('/assets/css/main.css'),array());
	wp_enqueue_style('gt_wp_enqueue7',get_theme_file_uri('/assets/css/responsive.css'),array());
	wp_enqueue_style('gt_wp_enqueue8',get_theme_file_uri('/style.css'),array());
    //for js
	wp_enqueue_script('gt_wp_enqueue_script1',get_theme_file_uri('/assets/js/jquery.js'),array(),'1.10.2',true);
	wp_enqueue_script('gt_wp_enqueue_script2',get_theme_file_uri('/assets/js/bootstrap.min.js'),array(),'3.0.3',true);
	wp_enqueue_script('gt_wp_enqueue_script3',get_theme_file_uri('/assets/js/jquery.scrollUp.min.js'),array(),'2.3.3',true);
	wp_enqueue_script('gt_wp_enqueue_script4',get_theme_file_uri('/assets/js/price-range.js'),array(),'2.0.0',true);
	wp_enqueue_script('gt_wp_enqueue_script5',get_theme_file_uri('/assets/js/jquery.prettyPhoto.js'),array(),'3.1.5',true);
	wp_enqueue_script('gt_wp_enqueue_script7',get_theme_file_uri('/assets/js/jquery.elevateZoom-3.0.8.min.js'),array(),'3.0.8',true);
	wp_enqueue_script('gt_wp_enqueue_script6',get_theme_file_uri('/assets/js/main.js'),array(),true);
  
}
  
  add_action('wp_enqueue_scripts', 'wpc_enqueue_script');


   //function register  menus
  function add_menus(){
   register_nav_menus(array('header-bottom' => 'bottom-header' ,
   	                        'header-middle' => 'middle-header'
   	                        

    )); 
  }
  add_action( 'init', 'add_menus' );
        
   
  //to add active class to current page
  function add_class_to_href( $classes, $item ) {
	if ( in_array('current_page_item', $item->classes) ) {
	$classes['class'] = 'custom-active';
	}
	return $classes;
	}
	add_filter( 'nav_menu_link_attributes', 'add_class_to_href', 10, 2 );
	
        //function to add short code for slider 

		/*function slider_func( $atts ) {
		    $values = shortcode_atts( array(
		        'height' => 400,
		        'width' => 400
		    ), $atts );

		    return '		';
		}
		add_shortcode( 'slider', 'slider_func' );*/
		
        
		//function to add short code for youtube vedio
		function youtube_shortcode( $atts ) {
		    $values = shortcode_atts( array(
		        'height' => 400,
		        'width' => 400,
		        'youtube_code'=>'MjSeHQpEoTA'
		    ), $atts );
		    return '<iframe width="'.$values['width'].'" height="'.$values['height'].'" src="https://www.youtube.com/embed/"'.$values['youtube_code'].'" frameborder="0" allowfullscreen></iframe>';
		}	


        add_shortcode( 'youtube_vedio', 'youtube_shortcode' );
       
        
        
		//function to add short code for google map (Gaza Sky Geeks location)
		function te_google_map_shortcode( $atts ) {
		    $values = shortcode_atts( array(
		        'height' => 400,
		        'width' => 600,
		    ), $atts );
		    return '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.4069518324545!2d34.44753688484959!3d31.512981081372047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7f6b18708d27%3A0x1f26dc8d799cd45b!2sGaza+Sky+Geeks!5e0!3m2!1sar!2s!4v1502699302178" width="'.$values['width'].'" height="'.$values['height'].'" frameborder="0" style="border:0" allowfullscreen></iframe>';
		}	


        add_shortcode( 'te_google_map', 'te_google_map_shortcode' );
        


        //function to add short code for dailymotion vedio
		function te_dailymotion_vedio_shortcode( $atts ) {
		    $values = shortcode_atts( array(
		        'height' => 400,
		        'width' => 600,
		    ), $atts );
		    return '<iframe frameborder="0" width="'.$values['width'].'" height="'.$values['height'].'" src="//www.dailymotion.com/embed/video/x1yq49q" allowfullscreen></iframe><br /><a href="http://www.dailymotion.com/video/x1yq49q" target="_blank">Absolution (1978) - Richard Burton, Dominic...</a> <i>by <a href="http://www.dailymotion.com/filmgorillas" target="_blank">filmgorillas</a></i>';


		}	


        add_shortcode( 'te_dailymotion_vedio', 'te_dailymotion_vedio_shortcode' );
        
        // function to add product custom post
        function te_product_post(){
		$labels = array(
				'name' => 'Product',
				'singular_name' => 'Product',
				'menu_name' => 'Products',
				'name_admin_bar' => 'Product',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New Product',
				'new_item' => 'New Product' );

		$args = array(
				'labels' => $labels,
				'description' => 'Description',
				'exclude_from_search'=>'true',
				'public' => true,
				'menu_position'=>10,
				'menu_icon'=>'dashicons-cart',
				'taxonomies'=> array('category'),
				'supports' => array('title','editor','thumbnail','custom-fields')
				);

		register_post_type('product', $args);
		
     }

     add_theme_support( 'post-thumbnails' ); //this method to add featured image to custom post

     add_action( 'init', 'te_product_post' );

  // functions how to creat a axonomy for custom post 
     function american_product_taxonomy(){ // function to add taxonomy for the product post

     	$args=array(
     		'label'=>'American products' // the name of this tag
     		);

     	register_taxonomy('american','product',$args);
     }
     add_action( 'init', 'american_product_taxonomy' );


     // another taxonomy fot product post
    function androide_product_taxonomy(){ // function to add taxonomy for the product post

    	$args=array(
         'label'=>'Androide' // the name of this tag
    		);

     	register_taxonomy('androide','product',$args);
     }
     add_action( 'init', 'androide_product_taxonomy' );


	//this is code for meta box
	
	function product_input(){

		$price = get_post_meta(get_the_ID(),'product_price',true);
	    $web_id = get_post_meta(get_the_ID(),'product_web_id',true);
	    $quantity = get_post_meta(get_the_ID(),'product_quantity',true);

	?>
	<fieldset>
	<label for="product_price" style="margin-right:82px">Price</label>
	<input type="text" name="product_price" id="product_price" value=<?php echo $price; ?>>
	</fieldset>
	<fieldset>
	<label for="product_web_id" style="margin-right:10px; display:block">Web ID</label>
	<input type="text" name="product_web_id" id="product_web_id" value=<?php echo $web_id; ?>>
	</fieldset>	
	<fieldset>
	<label for="product_quantity" style="margin-right:10px; display:block">Quantity</label>
	<input type="text" name="product_quantity" id="product_quantity" value=<?php echo $quantity; ?>>
	</fieldset>
    
    <?php
     $company = get_post_meta(get_the_ID(),'company',true);
     $type_of_screen = get_post_meta(get_the_ID(),'type_of_screen',true);
     $product_condition = get_post_meta(get_the_ID(),'product_condition',true);
     $color = get_post_meta(get_the_ID(),'color',true);
     $opreating_system = get_post_meta(get_the_ID(),'opreating_system',true);
     $availability = get_post_meta(get_the_ID(),'availability',true);

    ?>
    <fieldset>
    <label for="availability">Availability</label><br>
	<select name="availability">
	  <option value="available" <?php if($availability == 'available'){ echo 'selected'; } ?>>Available</option>
	  <option value="non_available" <?php if($availability == 'non_available'){ echo 'selected'; } ?>>Non_available</option>
   </select>
   </fieldset>
   <fieldset>
    <label for="color">Color</label><br>
	<select name="color">
	  <option value="gold" <?php if($color == 'gold'){ echo 'selected'; } ?>>Gold</option>
	  <option value="silver" <?php if($color == 'silver'){ echo 'selected'; } ?>>Silver</option>
	  <option value="black" <?php if($color == 'black'){ echo 'selected'; } ?>>Black</option>
	  <option value="weight" <?php if($color == 'weight'){ echo 'selected'; } ?>>Weight</option>
	  <option value="red" <?php if($color == 'red'){ echo 'selected'; } ?>>Red</option>
	  <option value="blue" <?php if($color == 'blue'){ echo 'selected'; } ?>>Blue</option>
	  <option value="others" <?php if($color == 'others'){ echo 'selected'; } ?>>Others</option>
   </select>
   </fieldset>		
   <fieldset>
    <label for="opreating_system">Opreating System</label><br>
	<select name="opreating_system">
	  <option value="ios" <?php if($opreating_system == 'ios'){ echo 'selected'; } ?>>IOS</option>
	  <option value="android" <?php if($opreating_system == 'android'){ echo 'selected'; } ?>>Android</option>
	  <option value="windows_phone" <?php if($opreating_system == 'windows_phone'){ echo 'selected'; } ?>>Windows phone</option>
	  <option value="windows" <?php if($opreating_system == 'windows'){ echo 'selected'; } ?>>Windows</option>
	  <option value="mac" <?php if($opreating_system == 'mac'){ echo 'selected'; } ?>>Mac</option>
	  <option value="linux" <?php if($opreating_system == 'linux'){ echo 'selected'; } ?>>Linux</option>
	  <option value="others" <?php if($opreating_system == 'others'){ echo 'selected'; } ?>>Others</option>
   </select>
   </fieldset>		
    <fieldset>
    <label for="product_condition">Condition</label><br>
	<select name="product_condition">
	  <option value="New" <?php if($product_condition == 'New'){ echo 'selected'; } ?>>New</option>
	  <option value="Old" <?php if($product_condition == 'Old'){ echo 'selected'; } ?>>Old</option>
   </select>
   </fieldset>	
   <fieldset>
    <label for="company">Company</label><br>
	<select name="company">
	  <option value="apple" <?php if($company == 'apple'){ echo 'selected'; } ?>>Apple</option>
	  <option value="summsung" <?php if($company == 'summsung'){ echo 'selected'; } ?>>Sammsung</option>
	  <option value="sony" <?php if($company == 'sony'){ echo 'selected'; } ?>>Sony</option>
	  <option value="htc" <?php if($company == 'htc'){ echo 'selected'; } ?>>HTC</option>
	  <option value="nokia" <?php if($company == 'nokia'){ echo 'selected'; } ?>>Nokia</option>
	  <option value="lg" <?php if($company == 'lg'){ echo 'selected'; } ?>>LG</option>
	  <option value="asus" <?php if($company == 'asus'){ echo 'selected'; } ?>>ASUS</option>
	  <option value="hp" <?php if($company == 'hp'){ echo 'selected'; } ?>>Hp</option>
	  <option value="lenovo" <?php if($company == 'lenovo'){ echo 'selected'; } ?>>Lenovo</option>
	  <option value="msi" <?php if($company == 'msi'){ echo 'selected'; } ?>>MSI</option>
	  <option value="dell" <?php if($company == 'dell'){ echo 'selected'; } ?>>Dell</option>
	  <option value="acer" <?php if($company == 'acer'){ echo 'selected'; } ?>>Acer</option>
	  <option value="hawaii" <?php if($company == 'hawaii'){ echo 'selected'; } ?>>Hawaii</option>
	  <option value="others" <?php if($company == 'others'){ echo 'selected'; } ?>>Others</option>
   </select>
   </fieldset>	
    <fieldset>
    <label for="type_of_screen">Type of screen</label><br>
	<select name="type_of_screen">
	  <option value="with_touch" <?php if($type_of_screen == 'with_touch'){ echo 'selected'; } ?>>with touch</option>
	  <option value="without_touch" <?php if($type_of_screen == 'without_touch'){ echo 'selected'; } ?>>without touch</option>
   </select>
   </fieldset>				
	<?php
	}
	function product_meta_box(){
	add_meta_box('price_meta_box_input', 'addition information of Product', 'product_input', null, 'normal', 'default', null);
	}
	add_action('add_meta_boxes', 'product_meta_box');
    
    /******************************************/ // this function to add the infromation of meta box to database
	function save_product_meta_box($post_id){

	  if(isset($_POST['product_price'])){
		update_post_meta($post_id,'product_price',$_POST['product_price']);}

	  if(isset($_POST['product_web_id'])){
		update_post_meta($post_id,'product_web_id',$_POST['product_web_id']);}

	  if(isset($_POST['product_quantity'])){
		update_post_meta($post_id,'product_quantity',$_POST['product_quantity']);}

	  if(isset($_POST['product_condition'])){
		update_post_meta($post_id,'product_condition',$_POST['product_condition']);}	

	  if(isset($_POST['company'])){
		update_post_meta($post_id,'company',$_POST['company']);}	

      if(isset($_POST['type_of_screen'])){
		update_post_meta($post_id,'type_of_screen',$_POST['type_of_screen']);}

	  if(isset($_POST['availability'])){
		update_post_meta($post_id,'availability',$_POST['availability']);}

      if(isset($_POST['opreating_system'])){
		update_post_meta($post_id,'opreating_system',$_POST['opreating_system']);}

	  if(isset($_POST['color'])){
		update_post_meta($post_id,'color',$_POST['color']);}		 		

	
    
	}
    add_action('save_post','save_product_meta_box'); 

    //function to add slider custom post
    function te_slider_post(){
		$labels = array(
				'name' => 'Slider',
				'singular_name' => 'Slider',
				'menu_name' => 'Slider Posts', );

		$args = array(
				'labels' => $labels,
				'description' => 'Description',
				'exclude_from_search'=>'true',
				'public' => true,
				'menu_position'=>10,
				'taxonomies'=> array('category'),
				'supports' => array('title','editor','thumbnail','custom-fields')
				);

		register_post_type('slider', $args);
		
     }

     add_theme_support( 'post-thumbnails' ); //this method to add featured image to custom post

     add_action( 'init', 'te_slider_post' );


    //function to register a sidebar widgets
     
    function te_register_sidebar_widgets(){
      $args=array(
         'name'=>'Sidebar',
         'before_widget'=>'<ul class="nav nav-pills nav-stacked">',
         'after_widget'=>'<span class="pull-right">',
         'id'=>'widgets'
      	);
      register_sidebar($args);
    } 


    add_action('widgets_init','te_register_sidebar_widgets');


    //functions to register a footer widgets
    function te_register_footer_widgets_1(){
      $args=array(
         'name'=>'Footer_widget_1',
         'id'=>'footer_widget_1',
         'before_widget' => '<ul class="nav nav-pills nav-stacked">',
         'after_widget' => '</ul>'
      	);
      register_sidebar($args);
    } 


    add_action('widgets_init','te_register_footer_widgets_1');

    function te_register_footer_widgets_2(){
      $args=array(
         'name'=>'Footer_widget_2',
         'id'=>'footer_widget_2',
         'before_widget' => '<ul class="nav nav-pills nav-stacked">',
         'after_widget' => '</ul>'
      	);
      register_sidebar($args);
    } 


    add_action('widgets_init','te_register_footer_widgets_2');

    function te_register_footer_widgets_3(){
      $args=array(
         'name'=>'Footer_widget_3',
         'id'=>'footer_widget_3',
         'before_widget' => '<ul class="nav nav-pills nav-stacked">',
         'after_widget' => '</ul>'
      	);
      register_sidebar($args);
    } 


    add_action('widgets_init','te_register_footer_widgets_3');

    function te_register_footer_widgets_4(){
      $args=array(
         'name'=>'Footer_widget_4',
         'id'=>'footer_widget_4',
         'before_widget' => '<ul class="nav nav-pills nav-stacked" style="margin-left:0 !important">',
         'after_widget' => '</ul>'
      	);
      register_sidebar($args);
    } 


    add_action('widgets_init','te_register_footer_widgets_4');


/************************************************************************/
    // functions to register category sidebar
    //mobile function
    function te_register_category_sidebar_mobile(){
      $args=array(
         'name'=>'category_mobile',
         'id'=>'category_mobile',
         'before_widget' => '<ul>',
         'after_widget' => '</ul>'
      	);
      register_sidebar($args);
    } 


    add_action('widgets_init','te_register_category_sidebar_mobile');


    //labtop function
    function te_register_category_sidebar_labtop(){
      $args=array(
         'name'=>'category_labtop',
         'id'=>'category_labtop',
         'before_widget' => '<ul>',
         'after_widget' => '</ul>'
      	);
      register_sidebar($args);
    } 


    add_action('widgets_init','te_register_category_sidebar_labtop');

    //tablet function
    function te_register_category_sidebar_tablet(){
      $args=array(
         'name'=>'category_tablet',
         'id'=>'category_tablet',
         'before_widget' => '<ul>',
         'after_widget' => '</ul>'
      	);
      register_sidebar($args);
    } 


    add_action('widgets_init','te_register_category_sidebar_tablet');

    /**************************************************************************/


		//function to catch the first image in the content of the post 
		function catch_that_image() {
		  global $post, $posts;
		  $first_img = '';
		  ob_start();
		  ob_end_clean();
		  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		  $first_img = $matches [1] [0];

		  if(empty($first_img)){ //Defines a default image
		    $first_img = "/images/default.jpg";
		  }
		  return $first_img;
}

   function count_posts_by_company_tag($arg){
    //variables  
    $apple=0;
    $summsung=0;
    $sony=0;
    $htc=0;
    $nokia=0;
    $lenovo=0;
    $lg=0;
    $hp=0;
    $asus=0;
    $msi=0;
    $others=0;

    $args=array(
         'post_type' => 'product'
    	);
    $products= new WP_Query($args);
    while ($products->have_posts()){
        $products->the_post();

    	if (get_post_meta(get_the_ID(),'company',true)=='msi'){
            $msi++;
    	}
    	elseif (get_post_meta(get_the_ID(),'company', false)=='apple'){
            $apple++;
    	}
    	elseif (get_post_meta(get_the_ID(),'company',true)=='nokia'){
            $nokia++;
    	}
    	elseif (get_post_meta(get_the_ID(),'company',true)=='summsung'){
            $summsung++;
    	}
    	elseif (get_post_meta(get_the_ID(),'company',true)=='htc'){
            $htc++;
    	}
    	elseif (get_post_meta(get_the_ID(),'company',true)=='lg'){
            $lg++;
    	}
    	elseif (get_post_meta(get_the_ID(),'company',true)=='lenovo'){
            $lenovo++;
    	}
    	elseif (get_post_meta(get_the_ID(),'company',true)=='asus'){
            $asus++;
    	}
    	elseif (get_post_meta(get_the_ID(),'company',true)=='hp'){
            $hp++;
    	}
    	elseif (get_post_meta(get_the_ID(),'company',true)=='sony'){
            $sony++;
    	}
    	else{
            $others++;
    	}
    }
    //var_dump($apple);
    //exit();
    // if condition to print the number of posts
    if ($arg=='apple'){
    	echo $apple;
    }
    elseif ($arg=='sony'){
    	echo $sony;
    }
    elseif ($arg=='htc'){
    	echo $htc;
    }
    elseif ($arg=='lg'){
    	echo $lg;
    }
    elseif ($arg=='summsung'){
    	echo $summsung;
    }
    elseif ($arg=='nokia'){
    	echo $nokia;
    }
    elseif ($arg=='hp'){
    	echo $hp;
    }
    elseif ($arg=='asus'){
    	echo $asus;
    }
    elseif ($arg=='lenovo'){
    	echo $lenovo;
    }
    elseif ($arg=='msi'){
    	echo $msi;
    }
    else{
    	echo $others;
    }
   }







   
?>
