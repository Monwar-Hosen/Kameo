<?php 
// Template Name:Home
get_header();
$post_id	=	get_the_ID();	
?>
<!--banner section start here--->
	<?php
		$select_banner_type		=   get_field('select_banner_type', $post_id);
		$banner_image			=	get_field('banner_image', $post_id);
		$banner_image_mobile			=	get_field('banner_image_mobile', $post_id);
		$banner_video			=	get_field('banner_video', $post_id);
		$banner_heading			=	get_field('banner_heading', $post_id);
		$banner_text			=	get_field('banner_text', $post_id);
		$banner_button_text		=	get_field('banner_button_text', $post_id);
		$banner_button_url		=	get_field('banner_button_url', $post_id);
		
		if($banner_bg){
			$banner_bg_field	=	$banner_bg['url'];
		}
	?>
<div class="banner" id="banner">
	<div class="background">
		<?php if( get_field('select_banner_type') == 'banner_video' ) {
		?>
		<video autoplay loop muted playsinline class="wrapper__video">
          	<source src="<?php echo $banner_video; ?>" type="video/mp4">
       	</video>
       	<?php
       }else if( get_field('select_banner_type') == 'banner_image' ) {
       ?>
       	<img src="<?php echo $banner_image; ?>" class="for-desktop" alt="img">
       	<img src="<?php echo $banner_image_mobile; ?>" class="for-mobile" alt="img">
       <?php
       }
       ?>
		<div class="banner-content">
			<h1><?php echo $banner_heading; ?></h1>
			<p><?php echo $banner_text; ?></p>
			<?php
				if($banner_button_text){
					?>
					<a class="read-more-btn" href="<?php echo $banner_button_url; ?>"><?php echo $banner_button_text; ?></a>
					<?php
				}
			?>
			<a class="arrows" href="#hidway"><img src="<?php echo get_template_directory_uri(); ?>/images/banner-arrow-new.svg" alt="img"></a>
		</div>
	</div>
</div>
<!--banner section end here--->
<!---hidway section start here-->
<?php
	$hidway_section_heading			=	get_field('hidway_section_heading', $post_id);
	$hidway_section_text			=	get_field('hidway_section_text', $post_id);
	$hidway_section_button_text		=	get_field('hidway_section_button_text', $post_id);
	$hidway_section_url				=	get_field('hidway_section_url', $post_id);
	$hidway_section_image			=	get_field('hidway_section_image', $post_id);
?>
<div class="hiddway" id="hidway">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 p-0">
				<div class="left-content">
					<div class="left-content-inner">
						<h2><?php echo $hidway_section_heading; ?></h2>
						<p><?php echo $hidway_section_text; ?></p>
						<?php
							if($hidway_section_button_text){
								?>
								<a href="<?php echo $hidway_section_url; ?>"><?php echo $hidway_section_button_text; ?></a>
								<?php
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-lg-6 p-0">
				<div class="right-content">
					<img src="<?php echo $hidway_section_image; ?>" alt="img">
				</div>
			</div>
		</div>
	</div>
</div>
<!---hidway section end here-->
<!---slider section start here-->
<div class="home-slider" id="home-slider">
		<div class="content-wrapper">
		<?php
			if( have_rows('home_slider_images_content') ):
				while( have_rows('home_slider_images_content') ) : the_row();
					$images = get_sub_field('images');
					if($images){
						?>
						<!---image wrapper start here-->
							<div class="image">
								<img src="<?php echo $images; ?>" alt="img">
							</div>
						<!---image wrapper end here-->
						<?php
					}
				endwhile;
			endif;
		?>
	</div>
</div>
<!---slider section end here-->
<!--home stays section start here--->
<?php
	$stays_section_heading		=	get_field('stays_section_heading', $post_id);
	$stays_section_text			=	get_field('stays_section_text', $post_id);
?>
<div class="home-stays" id="home-stays">
	<div class="container">
		<div class="stays-inner">
			<div class="row">
				<div class="col-lg-7 p-0">
					<div class="left-content">
						<h2><?php echo $stays_section_heading; ?></h2>
						<p><?php echo $stays_section_text; ?></p>
					</div>
				</div>
				<div class="col-lg-5 p-0">
					<div class="right-content">
						<ul>
							<li><p class="mob-head">AMENITIES</p></li>
							<?php
								if( have_rows('stays_section_right_content') ):
									while( have_rows('stays_section_right_content') ) : the_row();
										$text_repeater 		= get_sub_field('text_repeater');
										$url_repeater 		= get_sub_field('url_repeater');
										?>
										<li><a href="<?php echo $url_repeater; ?>"><?php echo $text_repeater; ?></a></li>
										<?php
									endwhile;
								endif;
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--home stays section end here--->
<!--book-now section css start here--->
<?php
	$book_now_head_section_button_text		=	get_field('book_now_head_section_button_text', $post_id);
	$book_now_head_section_button_url		=	get_field('book_now_head_section_button_url', $post_id);
	$map									=	get_field('map', $post_id);
	$map_key								=	get_field('map_key', 'option');
	$book_now_right_content_image			=	get_field('book_now_right_content_image', $post_id);
	$book_now_right_content_heading			=	get_field('book_now_right_content_heading', $post_id);
	$book_now_right_content_heading_url		=	get_field('book_now_right_content_heading_url', $post_id);
	$book_now_right_content_text			=	get_field('book_now_right_content_text', $post_id);
	$book_now_right_content_button_text		=	get_field('book_now_right_content_button_text', $post_id);
	$book_now_right_content_button_url		=	get_field('book_now_right_content_button_url', $post_id);
?>
<div class="book-now" id="book-now">
	<?php
		if($book_now_head_section_button_text){
			?>
			<div class="section-head">
				<a href="<?php echo $book_now_head_section_button_url ?>"><?php echo $book_now_head_section_button_text; ?></a>
			</div>
			<?php
		}
	?>
	<div class="container">
		<div class="book-now-content-wrapper">
			<div class="row">
				<div class="col-lg-8 p-0 " style="overflow:hidden;">
					<div class="left-content">
						<div id="map"></div>
						<script>
							var myLatlng = new google.maps.LatLng(<?php echo $map['lat']; ?>,<?php echo $map['lng']; ?>);
							var mapOptions = {
							  zoom: 14,
							  center: myLatlng,
							  mapTypeId: google.maps.MapTypeId.ROADMAP,
							  disableDefaultUI: true
							}
							var map = new google.maps.Map(document.getElementById("map"), mapOptions);

							var marker = new google.maps.Marker({
							    position: myLatlng,
							    title:"Hello World!"
							});

							// To add the marker to the map, call setMap();
							marker.setMap(map);

						</script>
						<!-- <iframe
								style="border:0"
								loading="lazy"
        						disableDefaultUI= "true"
        						mapTypeId= "roadmap"
								referrerpolicy="no-referrer-when-downgrade"
								src="https://www.google.com/maps/embed/v1/place?key=<?php //echo $map_key; ?>&q=<?php //echo $map['address']; ?>">
						</iframe> -->
					</div>
				</div>
				<div class="col-lg-4 p-0">
					<div class="right-content">
						<div class="thumb">
							<img src="<?php echo $book_now_right_content_image; ?>" alt="img">
						</div>
						<h2><a href="<?php echo $book_now_right_content_heading_url; ?>"><?php echo $book_now_right_content_heading; ?></a></h2>
						<p><?php echo $book_now_right_content_text; ?></p>
						<a href="<?php echo $book_now_right_content_button_url; ?>"><?php echo $book_now_right_content_button_text; ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--book-now section css end here--->

<!---posts grid section start here -->
		<?php
			if( have_rows('grid_content_repeater') ):
			?>
			<div class="posts-grid elem" id="posts-grid">
				<div class="container">
					<div class="row">
			<?php
				while( have_rows('grid_content_repeater') ) : the_row();
					$image 				= 	get_sub_field('image');
					$heading 			= 	get_sub_field('heading');
					$text 				= 	get_sub_field('text');
					$button_text 		= 	get_sub_field('button_text');
					$button_link 		= 	get_sub_field('button_link');
					?>
					<div class="col-lg-4 col-md-6">
						<div class="post">
							<div class="thumb">
								<img src="<?php echo $image; ?>">
							</div>
							<h2><?php echo $heading; ?></h2>
							<p><?php echo $text; ?></p>
							<?php
								if($button_text){
									?>
									<a href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
									<?php
								}
							?>
						</div>
					</div>
					<?php
				endwhile;
				?>
					</div>
				</div>
			</div>
				<?php
			endif;
		?>

<!---posts grid section end here -->
<!--- switch-off section start here --->
<?php
	$switch_off_section_bg			=	get_field('switch_off_section_bg', $post_id);
	$switch_off_section_heading		=	get_field('switch_off_section_heading', $post_id);
	$switch_off_section_text		=	get_field('switch_off_section_text', $post_id);
	$switch_section_button_text		=	get_field('switch_section_button_text', $post_id);
	$switch_section_button_url		=	get_field('switch_section_button_url', $post_id);
?>
<div class="switch-off" id="switch-off">
	<img src="<?php echo $switch_off_section_bg; ?>" alt="img">
	<div class="content">
		<h2><?php echo $switch_off_section_heading; ?></h2>
		<p><?php echo $switch_off_section_text; ?></p>
		<?php
			if($switch_section_button_text){
				?>
				<a href="<?php echo $switch_section_button_url; ?>"><?php echo	$switch_section_button_text; ?></a>
				<?php
			}
		?>
	</div>
</div>
<!--- switch-off section end here --->
<?php get_footer(); ?>