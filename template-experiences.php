<?php 
// Template Name:Experiences
get_header();
$post_id	=	get_the_ID();	
?>
<!---exp-banner start here--->
<?php
	$banner_bg			=	get_field('banner_bg', $post_id);
	$banner_title		=	get_field('banner_title', $post_id);
?>
<div class="exp-banner" id="exp-banner">
	<div class="content">
		<img src="<?php echo $banner_bg; ?>" alt="img">
		<div class="title">
			<h1><?php echo $banner_title; ?></h1>
		</div>
	</div>
</div>
<!---exp-banner end here--->
<!---content-section start here-->
<?php
	$section_text	=	get_field('section_text', $post_id);
?>
<div class="content-section" id="content-section">
	<p><?php echo $section_text; ?></p>
</div>
<!---content-section end here-->
<!---exp-grid section start here-->
<?php
	if( have_rows('grid_repeater') ):
		?>
		<div class="exp-grid" id="exp-grid">
			<div class="container">
				<div class="grid-content">
					<div class="row">
						<?php
						while( have_rows('grid_repeater') ) : the_row();
							$image 		= get_sub_field('image');
							$heading 	= get_sub_field('heading');
							$text 		= get_sub_field('text');
							$url		= get_sub_field('url');
							?>
							<?php
							if($url){ ?>
								<div class="col-lg-6 exp-single">
									<a href="<?php echo $url; ?>">
										<div class="thumb">
											<img src="<?php echo $image; ?>" alt="img">
										</div>
										<h2><?php echo $heading; ?></h2>
										<p><?php echo $text; ?></p>
									</a>	
								</div>
							<?php
							}else{ ?>
								<div class="col-lg-6 exp-single">
									<div class="thumb">
										<img src="<?php echo $image; ?>" alt="img">
									</div>
									<h2><?php echo $heading; ?></h2>
									<p><?php echo $text; ?></p>
								</div>
							<?php
							}
						endwhile;
						?>
					</div>
				</div>
			</div>
		</div>
		<?php
	endif;
?>		
<!---exp-grid section end here-->
<?php get_footer(); ?>