<?php
	global $settings;
	
	
	
	foreach( $settings['slider']['slides'] as $slide ) { ?>
		<div class="slide">
			<img src="<?php echo $slide['image']; ?>" alt="slide" />
			<div class="slide-meta">
				<h3><?php echo $slide['title']; ?></h3>
				<div class="desc"><?php echo $slide['description']; ?></div>
				<a class="readmore" href="<?php echo $slide['link']; ?>"><?php _e( 'Read More', 'lizard' ); ?></a>
				
			</div>
		</div>
	<?php }
	
?>