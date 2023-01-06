<?php
/* 
Template Name: Post Archives
*/


get_header();
?>

	<main id="primary" class="site-main">
		<style type="text/css">
			.prfxso_hero_parent {
				width: 100%;
			    height: 600px;
			    overflow: hidden;
			}
			.prfxso_hero_image {
			    width: 100%;
			    height: 100%;
			    background-image: url(https://www.kameohotel.com/wp-content/uploads/2022/10/antiblog.jpg);
			    /* background-position-y: -815px; */
			    background-repeat: no-repeat;
			    background-position: center;
			    /* background-position-x: -468px; */
			    /* transform: scale(1.5); */
			    display: flex;
			    align-items: center;
			    justify-content: center;
			}
			.prfxso_hero_heading{
				color: white;
				font-size: 50px;
			}
			.prfxso_content{
				width: 90%;
    			margin: 0 auto;
    			margin-top: 20px;
			}
			.prfxso_readmore{
				font-style: italic;
    			text-decoration: underline;
			}
			.prfxso_post_image{
				width: 16%;
				margin-right: 20px;
			}
			.prfxso_post_content{
				width: 70%;
			}
			.prfxso_antiblog_content{
				display: flex;
				align-items: center;
				justify-content: center;
			}
			.prfxso_antiblog_content .para{
				width: 73%;
				text-align: center;
				font-size: 18px;
			}
			.prfxso_post_image img{
				width: 100%;
			}
			.prfxso_post{
				display: flex;
				align-items: flex-start;
				flex-wrap: wrap;
				margin-top: 20px;
			}
			.prfxso_content a{
				color: black;
				text-decoration: none;
			}

			@media screen and (max-width: 480px) {
				.prfxso_post_image, .prfxso_post_content{
					width: 100%;
				}
				.prfxso_post_content{
					margin-top: 10px;
				}
				.prfxso_post_title{
					font-size: 16px;
					font-weight: bold;
				}
				.prfxso_antiblog_content .para{
					width: 100%;
				}
			}
		</style>
		<div>
			<div class="prfxso_hero_parent">
				<div class="prfxso_hero_image">
					<div class="prfxso_hero_heading">
						ANΤίBLOG
					</div>
				</div>
			</div>
		</div>
		<div class="prfxso_content">
			<div class="prfxso_antiblog_content">
				<div class="para">
					Hello! My name is Ornit Kravitz, and I am the owner of KAMEO. I chose Antiparos of all islands, just a few minutes upon arrival to it for the first time in my life. I set foot on it and I knew it was the one. Why? That is exactly what this blog is about – to try and explain what it is about Antiparos that makes total foreigners like me react so strongly to it.I invite you to take this journey with me so we can unfold the magic together...
					<span class="prfxso_readmore"><a href="/αντίblog-intro/">Read more</a></span>
				</div>
			</div>
			
			
			
		<?php
			$arg = array(
				'numberposts'      => -1,
				'orderby'          => 'date',
				'order'            => 'DESC',
				'post_type'        => 'post',
				'suppress_filters' => true,
			);
			$all_posts = get_posts($arg);

			foreach ($all_posts as $postdata) {
				$post_image_url = get_the_post_thumbnail_url($postdata->ID);
				if( $postdata->post_title != 'Oxi Day and Αgios Georgios'){
					$post_date = date_format(date_create($postdata->post_date), 'd.m.Y');
				}else{
					$post_date = '28.10.2022';
				}
				$post_link = get_post_permalink($postdata->ID);
				?>
					<div class="prfxso_post">
						<div class="prfxso_post_image">
							<a target="_blank" href="<?php echo $post_link; ?>"><img src="<?php echo $post_image_url; ?>"></a>
						</div>
						<div class="prfxso_post_content">
							<div class="prfxso_post_title"><a target="_blank" href="<?php echo $post_link; ?>">"<?php echo $postdata->post_title; ?>" <?php echo $post_date; ?></a></div>
							<div class="prfxso_post_description"><?php echo substr($postdata->post_content, 0, 300).'...'; ?><span class="prfxso_readmore"><a target="_blank" href="<?php echo $post_link; ?>">Read more</a></span></div>
						</div>
					</div>
				<?php
			}
			
		?>
			
		</div>


	</main><!-- #main -->

<?php
get_footer();