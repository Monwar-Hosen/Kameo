<?php 
// Template Name:Contact
get_header();
$post_id	=	get_the_ID();	
?>
<!---contact-single-section start here--->
<?php
$section_bg_image				=	get_field('section_bg_image', $post_id);
$section_address				=	get_field('section_address', $post_id);
$section_city					=	get_field('section_city', $post_id);
$section_email					=	get_field('section_email', $post_id);
$section_phone_no				=	get_field('section_phone_no', $post_id);
$contact_form_shortcode			=	get_field('contact_form_shortcode', $post_id);
$contact_form_information		=	get_field('contact_form_information', $post_id);
?>
<div class="contact-single-section" id="contact-single-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 p-0">
				<div class="left-content">
					<img src="<?php echo $section_bg_image; ?>" alt="img">
					<div class="section-content-wrapper">
						<div class="first-content">
							<p><?php echo $section_address; ?></p>
							<p><?php echo $section_city; ?></p>
						</div>
						<div class="second-content">
							<p><a href="mailto:<?php echo $section_email; ?>"><?php echo $section_email; ?></a></p>
							<p><a href="tel:<?php echo $section_phone_no; ?>"><?php echo $section_phone_no; ?></a> (Whatsapp or Tel)</p>
						</div>
						<div class="contact-information-box" style="max-width: 70%;text-align: center;margin: auto;font-size: 10px;line-height: 13px;padding-top:20px;order:3;">
						<?php echo $contact_form_information; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 p-0">
				<div class="right-content">
					<?php
						echo do_shortcode($contact_form_shortcode);
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<!---contact-single-section end here--->
<?php get_footer(); ?>