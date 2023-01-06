<?php 
// Template Name:Stay
get_header();
$post_id	=	get_the_ID();	
?>
<!---stay-content section start here-->
<?php
	$section_text	=	get_field('section_text', $post_id);
?>
<div class="stay-content" id="stay-content">
	<h1><?php echo $section_text; ?></h1>
</div>
<!---stay-section-content end here-->
<!---cpt-grid start here-->
<?php
if( have_rows('cpt_grid') ):
		?>
	<div class="cpt-grid" id="cpt-grid">
		<div class="container">
			<div class="cpt-content-wrapper">
				<div class="row">
					<?php
						while( have_rows('cpt_grid') ) : the_row();
							$image 				= 		get_sub_field('image');
							$title 				= 		get_sub_field('title');
							$text 				= 		get_sub_field('text');
							$url 				= 		get_sub_field('url');
							$title_color 		= 		get_sub_field('title_color');
							?>
							<div class="col-lg-6 cpt-single">
								<div class="content">
									<a href="<?php echo $url; ?>">
										<div class="cpt-head">
											<div class="thumb">
												<img src="<?php echo $image; ?>" alt="img">
											</div>
											<div class="title">
												<h2 style="color:<?php echo $title_color ; ?>;"><?php echo $title; ?></h1>
											</div>
										</div>
										<div class="cpt-text">
											<p><?php echo $text; ?></p>
										</div>
									</a>
								</div>
							</div>
							<?php
						endwhile;
					?>
				</div>
			</div>
		</div>
	</div>
		<?php
endif;
?>		
<!---cpt-grid end here-->
<?php get_footer(); ?>