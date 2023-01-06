<?php 
get_header();
$postdata = get_post();
$post_image_url = get_the_post_thumbnail_url($postdata->ID);
$post_date = date_format(date_create($postdata->post_date), 'd.m.Y');
$post_year = date_format(date_create($postdata->post_date), 'Y');
if( $postdata->post_title != 'Oxi Day and Αgios Georgios'){	
?>
<style type="text/css">
	.prfxso_post_head{
		width: 100%;
	}
	.prfxso_post_head img{
		width: 100%;
		bottom: 500px;
	    position: inherit;
	}
	.prfxso_poststamp{
		text-align: right;
	    padding-right: 5px;
	    font-size: 14px;
	}
	.prfxso_post_content{
		width: 80%;
		margin: 0 auto;
		max-width: 1150px;

	}
	.prfxso_post_title{
		text-align: center;
		margin-top: 30px;
		margin-bottom: 30px;
	}
	.prfxso_post_headimage{
		max-height: 582px;
	    overflow: hidden;
	    position: relative;
	}
	@media screen and (max-width: 480px) {
		.prfxso_post_content{
			margin-top: 10px;
			padding-left: 10px;
			padding-right: 10px;
			width: 100%;
		}
		.prfxso_post_head img{
			width: 100%;
		    bottom: 0px;
		    position: inherit;
		}
	}
</style>
<div class="prfxso_post_head">
	<div class="prfxso_post_headimage">
		<img src="<?php echo $post_image_url; ?>">
	</div>
	<div class="prfxso_poststamp">
		<?php echo get_the_author().', '.$post_year; ?>
	</div>
</div>
<div class="prfxso_post_content">
	<div class="prfxso_post_title"><?php echo $postdata->post_title.'--'.$post_date; ?></div>
	<div class="prfxso_post_detail"><?php echo $postdata->post_content; ?></div>
</div>
<?php 
}else{
?>
	<style type="text/css">
		.prfxso_hero_parent {
			width: 100%;
		    height: 600px;
		    overflow: hidden;
		}
		.prfxso_hero_image {
		    width: 100%;
		    height: 100%;
		    background-image: url(https://www.kameohotel.com/wp-content/uploads/2022/10/oxi-day-post-DJI_0594fin-final-edit-by-iou-F-scaled.jpg);
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
		.prfxso_post_content{
			width: 80%;
			margin: 0 auto;
			max-width: 1150px;
		}
		.prfxso_post_head{
			width: 100%;
		}
		.prfxso_poststamp{
			text-align: right;
		    padding-right: 5px;
		    font-size: 14px;
		}
		.prfxso_post_title{
			text-align: center;
			margin-top: 30px;
			margin-bottom: 30px;
		}
		.prfxso_bold{
			font-weight: bold;
    		font-family: 'Circular-Loom';
		}
		

		@media screen and (max-width: 480px) {
			.prfxso_post_image, .prfxso_post_content{
				width: 100%;
			}
			.prfxso_post_content{
				margin-top: 10px;
				padding-left: 10px;
				padding-right: 10px;
			}
			.prfxso_post_title{
				font-size: 16px;
				font-weight: bold;
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
	<div class="prfxso_post_head">
		<div class="prfxso_poststamp">
			Agios Georgios Bay, 2022
		</div>
	</div>
	<div class="prfxso_post_content">
		<div class="prfxso_post_title">Oxi Day and Αgios Georgios—28.10.2022</div>
		<div>
			<p>While driving towards Agios Georgios an amazing site is revealed: With the beautiful bay of Agios Georgios and Despotiko right across, the Island of Tsimintiri in between and Serifos and Sifnos far behind, with many little boats and amazing yachts in the middle of all this - it is truly magic.</p> 
			<p>There are always tourists (and me…) stopping to take pictures of this breathtaking piece of heaven. Like others, I am hypnotized by this bay. It’s different than just a beautiful island view, it’s something that I feel but cannot explain in words. However, thanks to Oxi Day, which is celebrated today, I finally realised what makes it so special. I will try to explain…</p>
			<p>In short, Oxi Day (meaning “no” day) is named after the famous <span class="prfxso_bold">“OXI”</span>. Oxi was the reply Mr. Metaxas, the Greek Prime minister, gave to Mussolini’s ultimatum exactly 82 years ago on October 28, 1940 when he demanded Italian troops be stationed on Greek soil. Three hours later, the Italian army invaded Greece.</p>
			<p>A lot is known about the brave and heroic fight of the Greeks—they were invincible and defeated the Italians. It was in April 1941, when joint forces of Germans, Bulgarians and Romanians invaded northern Greece and with British forces leaving the Greeks to fend for themselves, that the Greek army had no other choice but to surrender. However, the Greek resistance continued, waiting for the opportunity to free Greece from the Axis forces.</p> 
			<p>What does all this have to do with Antiparos? Apparently, a lot!</p> 
			<p>Thanks to Betty and Dimitris Patelis, who lent me Katherine Clark’s book <span class="prfxso_bold">The Part That is Great</span> (2021)
 			I was amazed to learn what an important role the brave men and women of Agios Georgios had in the nation’s unwavering resistance. What does this have to do with the remote island of Antiparos?</p>
			<p>Well, the story goes like this. When the Germans took over Greece in 1941, they split it between the Axis forces. The Aegean Islands were given to the Italians, but unlike in Paros, Naxos and Syros, no Italian officers were stationed in Antiparos. This was probably because they didn’t think this small island had any strategic significance. At that time, the population of Antiparos was six hundred people, and only sixty of them were in Agios Georgios and they were all part of the four families living there—the <span class="prfxso_bold">Patelis</span> (I am honoured to rent their house, which was built about one hundred years ago!!!), <span class="prfxso_bold">Tzavellas, Marianos</span> and <span class="prfxso_bold">Kapoutsos.</span></p>
			<p>The families were approached by Haris Grammatikakis, a resourceful Cretan who knew Agios Georgios well and presented them his plan. Far from enemy eyes, Agios Georgios was the perfect place for escaped resistance men to recover and get their strength back before they continued to fight.</p>
			<p>Between August 1941 and January 6, 1942, hundreds of Allied resistance fighters (Cretan, British and New Zealanders) were transferred by what was perceived to be innocent fishing boats from Attica to Crete with a few days stop in Agios Georgios. <span class="prfxso_bold">The brave families of Agios Georgios,</span> with the <span class="prfxso_bold">Tzavellas</span> family house, <span class="prfxso_bold">“Cassa Rosa”,</span> acting as the base HQ, welcomed the men and took care of their needs until they were strong enough to go back to active resistance. They shared their food and homes and split their already limited resources during difficult times of poverty, war and winter.</p>
			<p>These families kept this complicated operation a secret right under Italy’s nose. Many brave Parians and Antiparians supported it and stayed discreet while knowingly risking their lives.</p>
			<p>On January 6, 1942, the Italians discovered the Agios Georgios base, and the Antiparos operation ended. The base was destroyed, and six hundred Italian troops from Syros invaded Paros and Antiparos. The Antiparos and hundreds of islanders were arrested and interrogated to find out who had intel about the secret base. They were all heroes, and although many were beaten and tortured, they never betrayed their fellow islanders.</p> 
			<p>As for the families of Agios Georgios, they were brutally interrogated, executed and some of their houses were burned. They paid a very dear price but never broke until the very end of execution.</p>
			<p>Winston Churchill once said, <span class="prfxso_bold">“Until now we used to say that the Greeks fight like heroes. Now we shall say: heroes fight like Greeks.”</span> There is no doubt that he had the brave people of Agios Georgios in mind when he said this.</p>
			<p>Telling this story so briefly is really a sin, as there is so much more to share and learn. My little contribution to this astonishing legacy is to teach all my guests what I know. I will advise them to visit the <span class="prfxso_bold">Agios Georgios church</span> marble memorial dedicated to those brave people, which is engraved with the last words Spyro Tzavella wrote to his wife while he waited for his execution; introduce them to <span class="prfxso_bold">Sargos</span>,  the great always smailing guy that takes them to Despotiko, whose real name is <span class="prfxso_bold">Yioryo, the grandson of Petro Mariano; advise them to go to Mpakas for an amazimg food and meet there the owner - the great granonson of Petro Mariano and much more…</span> I will do everything I can to teach them what happened right here just 82 years ago.</p>
			<p>Now I know what hypnotised me about this unbelievable and quiet bay. It’s the holiness of this place and the memorial of the brave people. I will never look at it the same way as I feel very lucky to have learned all this, and I feel even more connected to heavenly Agios Georgios. I truly hope you will too.</p>
			<p>Happy Oxi Day!</p>
			<p>See you soon,</p>
			<p>OK</p>

		</div>
	</div>

<?php
}
	get_footer();

?>