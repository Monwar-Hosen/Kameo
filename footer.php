<?php
	$mail		=	get_field('mail', 'option');
	$phone		=	get_field('phone', 'option');
	$address	=	get_field('address', 'option');
	$city		=	get_field('city', 'option');
	$book_button_text			=	get_field('book_button_text', 'option');
	$book_button_link			=	get_field('book_button_link', 'option');
?>
<footer>
	<div class="left-content">
		<p><a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></p>
		<p><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
	</div>
	<div class="right-content">
		<p><?php echo $address; ?></p>
		<p><?php echo $city; ?></p>
	</div>
</footer>
<div class="footer-book-btn">
	<a href="<?php echo $book_button_link; ?>"><?php echo $book_button_text; ?></a>
</div>
<?php wp_footer(); ?>
	</body>
</html>