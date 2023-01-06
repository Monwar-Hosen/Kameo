<?php 
// Template Name:Gallery
get_header();
$post_id	=	get_the_ID();	
?>

<!-- <?php
//if(wp_is_mobile()){
	?> -->
	<div class="gallery-mobile-section">
	<!-- gallery mobile tabs start here  -->
	<?php
		$slider_one_mobile_heading		=	get_field('slider_one_mobile_heading', $post_id);
		$slider_two_mobile_heading		=	get_field('slider_two_mobile_heading', $post_id);
		$slider_three_mobile_heading		=	get_field('slider_three_mobile_heading', $post_id);
	?>
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item" role="presentation">
			<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
				<?php echo $slider_one_mobile_heading; ?>
			</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
				<?php echo $slider_two_mobile_heading; ?>
			</button>
		</li>
		<li class="nav-item" role="presentation">
		<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
			<?php echo $slider_three_mobile_heading; ?>
		</button>
		</li>
	</ul>
<!---tabs-content start here --->
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	<?php
		$gallery_slider_on		=	get_field('gallery_slider_on', $post_id);
		foreach($gallery_slider_on as $gallery_slider_one){
			?>
			<img src="<?php echo $gallery_slider_one; ?>">
			<?php
		}
	?>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		<?php
			$gallery_slider_two		=	get_field('gallery_slider_two', $post_id);
			foreach($gallery_slider_two as $gallery_slider_twos){
				?>
				<img src="<?php echo $gallery_slider_twos; ?>">
				<?php
			}
		?>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
		<?php
			$gallery_slider_three		=	get_field('gallery_slider_three', $post_id);
			foreach($gallery_slider_three as $gallery_slider_threes){
				?>
				<img src="<?php echo $gallery_slider_threes; ?>">
				<?php
			}
		?>
  </div>
</div>
</div>
<!---tabs-content end here --->
	<!--- gallery mobile tabs end here -->
	<!-- <?php
//}//else{
?> -->
<div class="gallery-desktop-section">
<!--- gallery-slider-one section start here--->
<?php
	$slider_one_heading		=	get_field('slider_one_heading', $post_id);
	$gallery_slider_on		=	get_field('gallery_slider_on', $post_id);
?>
<div class="gallery-slider-one" id="gallery-slider-one">
	<div class="slider-heading">
		<h3><?php echo $slider_one_heading; ?></h3>
	</div>
	<div class="gallery-slider-one-wrapper owl-theme">
		<?php
			foreach($gallery_slider_on as $gallery_slider_one){
				?>
				<div class="slider-one-item">
					<img src="<?php echo $gallery_slider_one; ?>" alt="img">
				</div>
				<?php
			}
		?>
	</div>
</div>
<!--- gallery-slider-one section end here--->
<!--- gallery-slider-two section end here--->
<?php
	$slider_two_heading		=	get_field('slider_two_heading', $post_id);
	$gallery_slider_two		=	get_field('gallery_slider_two', $post_id);
?>
<div class="gallery-slider-two" id="gallery-slider-two">
	<div class="slider-heading">
		<h3><?php echo $slider_two_heading; ?></h3>
	</div>
	<div class="gallery-slider-one-wrapper owl-theme">
		<?php
			foreach($gallery_slider_two as $gallery_slider_twos){
				?>
				<div class="slider-one-item">
					<img src="<?php echo $gallery_slider_twos; ?>" alt="img">
				</div>
				<?php
			}
		?>
	</div>
</div>
<!--- gallery-slider-two section start here--->
<!--- gallery-slider-three section end here--->
<?php
	$slider_three_heading		=	get_field('slider_three_heading', $post_id);
	$gallery_slider_three		=	get_field('gallery_slider_three', $post_id);
?>
<div class="gallery-slider-three" id="gallery-slider-three">
	<div class="slider-heading">
		<h3><?php echo $slider_three_heading; ?></h3>
	</div>
	<div class="gallery-slider-one-wrapper owl-theme">
		<?php
			foreach($gallery_slider_three as $gallery_slider_threes){
				?>
				<div class="slider-one-item">
					<img src="<?php echo $gallery_slider_threes; ?>" alt="img">
				</div>
				<?php
			}
		?>
	</div>
</div>
</div>
<!--- gallery-slider-three section start here--->
<!-- <?php
//}
?> -->
<?php get_footer(); ?>