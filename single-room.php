<?php 
get_header();
$post_id	=	get_the_ID();	
?>
<!---single-room-banner start here-->
<?php
	$title					=	get_the_title($post_id);
	//$fetaured_image			=	wp_get_attachment_image_url(get_post_thumbnail_id($post_id), 'full');
	$banner_image			= 	get_field('banner_image', $post_id);
?>
<div class="single-room-banner" id="single-room-banner">
	<div class="content">
		<img src="<?php echo $banner_image; ?>" alt="room-img">
		<div class="room-title">
			<h1><?php echo $title; ?></h1>
		</div>
	</div>
</div>
<!---single-room-banner end here-->
<!----room-facilities setion start here--->
<div clas="room-facilities" id="room-facilities">
	<div class="facility-content-wrapper">
		<?php
			if( have_rows('facilities') ):
				while( have_rows(facilities) ) : the_row();
					$quantity = get_sub_field('quantity');
					$text = get_sub_field('text');
					?>
					<div class="facility-content">
						<p class="quantity"><?php echo $quantity; ?></p>
						<p class="text"><?php echo $text; ?></p>
					</div>
					<?php
				endwhile;
			endif;
		?>
	</div>
</div>
<!----room-facilities setion end here--->
<!---section one content start here-->
<?php
	$section_one_left_image_slider		=	get_field('section_one_left_image_slider', $post_id);
	$section_one_right_content_image	=	get_field('section_one_right_content_image', $post_id);
	$section_one_right_content_heading	=	get_field('section_one_right_content_heading', $post_id);
	$section_one_right_content_text		=	get_field('section_one_right_content_text', $post_id);
?>
<div class="room-section-one" id="room-section-one">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 p-0">
				<div class="room-slider-one">
					<div class="room-slider-one">
						<?php
							foreach($section_one_left_image_slider as $section_one_left_image_sliders){
								?>
								<div class="room-slider-one-img">
									<img src="<?php echo $section_one_left_image_sliders; ?>" alt="img">
								</div>
								<?php
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 p-0">
				<div class="room-section-one-right-content">
					<div class="right-content-wrapper">
						<img src="<?php echo $section_one_right_content_image; ?>" alt="img">
						<h2><?php echo $section_one_right_content_heading ?></h2>
						<p><?php echo $section_one_right_content_text; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!---section one content end here-->
<!----amenities-section start here-->
<?php
	$amenities_heading		=	get_field('amenities_heading', $post_id);
?>
<div class="single-room-amenities" id="single-room-amenities">
	<div class="container">
		<div class="amenities-head">
			<h2><?php echo $amenities_heading; ?></h2>
		</div>
		<div class="row">
		<?php
			if( have_rows('amenities_content_repeater') ):
				while( have_rows('amenities_content_repeater') ) : the_row();
					$image 				= get_sub_field('image');
					$heading 			= get_sub_field('heading');
					$text_repeater 		= get_sub_field('text_repeater');
					?>
					<div class="col-lg-4">
						<div class="single-amenities-content">
							<img src="<?php echo $image; ?>" alt="img">
							<h3><?php echo $heading; ?></h3>
							<?php
								if($text_repeater){
									echo '<div class="repeat-content">';
										foreach($text_repeater as $texts){
											foreach($texts as $text){
											?>
												<p><?php echo $text; ?></p>
											<?php
											}
										}
									echo '</div>';
								}
							?>
						</div>
					</div>
					<?php
				endwhile;
			endif;
		?>
		</div>
	</div>
</div>
<!----amenities-section end here-->
<!---single-room-book-now-btn start here--->
<?php
	$book_now_button_text		=	get_field('book_now_button_text', $post_id);
	$book_now_url				=	get_field('book_now_url', $post_id);
?>
<div class="single-room-book-now-btn" id="single-room-book-now-btn">
	<a href="<?php echo $book_now_url; ?>"><?php echo $book_now_button_text; ?></a>
</div>
<!---single-room-book-now-btn end here--->
<!---more-villas-section start here--->
<?php
	$more_villas_text				=	get_field('more_villas_text', $post_id);
	$choose_more_villas_to_show		=	get_field('choose_more_villas_to_show', $post_id);
?>
<div class="more-villas-section" id="more-villas-section">
	<div class="container">
		<div class="more-villas-head">
			<h2><?php echo $more_villas_text; ?></h2>
		</div>
		<img class="white-overlay" src="<?php echo get_template_directory_uri(); ?>/images/more-villas-arrows.png" alt-="img">
		<div class="row single-room-more-villas">
			<?php
				foreach($choose_more_villas_to_show as $more_villas_id){
					$image		=	wp_get_attachment_image_url(get_post_thumbnail_id($more_villas_id), 'full');
					$title		=	get_the_title($more_villas_id);
					$tagline	=	get_field('tag_line', $more_villas_id);
					?>
					<div class="col-lg-4 single-room-wrapper">
						<a href="<?php echo get_the_permalink($more_villas_id); ?>">
							<div class="single-room">
                                <div class="single-room-more-villas-img">
                                    <img src="<?php echo $image; ?>" alt="img">
                                </div>
								<div class="related-content">
									<h4><?php echo $title; ?></h4>
									<p><?php echo $tagline; ?></p>
								</div>
							</div>
						</a>
					</div>
					<?php
				}
			?>
		</div>
	</div>
</div>
<!---more-villas-section end here--->
<?php get_footer(); ?>