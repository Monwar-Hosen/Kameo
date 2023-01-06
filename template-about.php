<?php 
// Template Name:About
get_header();
$post_id	=	get_the_ID();	
?>
<!---about-banner section start here-->
<?php
	$banner_bg			=	get_field('banner_bg', $post_id);
	$banner_heading		=	get_field('banner_heading', $post_id);
?>
<div class="about-banner" id="about-banner">
	<div class="content">
		<img src="<?php echo $banner_bg; ?>" alt="img">
		<div class="title">
			<h1><?php echo $banner_heading; ?></h1>
		</div>
	</div>
</div>
<!---about-banner section end here-->
<!--- kameo section start here-->
<?php
$kameo_section_heading		=	get_field('kameo_section_heading', $post_id);
$kameo_section_text			=	get_field('kameo_section_text', $post_id);
?>
<div class="kameo" id="kameo">
	<?php if($kameo_section_heading){ ?>
	<h2><?php echo $kameo_section_heading; ?></h2>
	<?php } ?>
	<p><?php echo $kameo_section_text; ?></p>
</div>
<!--- kameo section end here-->
<!---images repeater section start here--->
<div class="images-repeater" id="images-repeater">
	<div class="container">
		<div class="repeater-wrapper">
			<div class="row">
			<?php
				if( have_rows('images_section') ):
					while( have_rows('images_section') ) : the_row();
						$image = get_sub_field('image');
						?>
						<div class="col-lg-6 image-wrapper">
							<img src="<?php echo $image; ?>" alt="img">
						</div>
						<?php
					endwhile;
				endif;
			?>
			</div>
		</div>
	</div>
</div>
<!---images repeater section end here--->
<!---area section css start here-->
<?php
	$area_section_heading		=	get_field('area_section_heading', $post_id);
	$area_section_text			=	get_field('area_section_text', $post_id);
?>
<div class="area" id="area">
	<div class="content">
		<h2><?php echo $area_section_heading; ?></h2>
		<div><?php echo $area_section_text; ?></div>
	</div>
</div>
<!---area section css end here-->

<!---single-images-section start here-->
<?php
	$single_image_section_image	=	get_field('single_image_section_image', $post_id);
?>
<div class="single-images-section" id="single-images-section">
	<div class="image-wrapper">
		<img src="<?php echo $single_image_section_image; ?>">
	</div>
</div>
<!---single-images-section end here-->
<!--book-now-btn section start here--->
<?php
	$book_now_button_text	=	get_field('book_now_button_text', $post_id);
	$book_now_button_url	=	get_field('book_now_button_url', $post_id);
	if($book_now_button_text){
		?>
		<div class="book-now-btn" id="book-now-btn">
			<a href="<?php echo $book_now_button_url; ?>"><?php echo $book_now_button_text; ?></a>
		</div>
		<?php
	}
?>
<!--book-now-btn section end here--->
<!--info sectoin css start here-->
<?php
	$info_section_text	=	get_field('info_section_text', $post_id);
?>
<div class="info-section" id="info-section">
	<div class="info-wrapper">
		<h2><?php echo $info_section_text; ?></h2>
	</div>
</div>
<!--info sectoin css end here-->
<?php get_footer(); ?>