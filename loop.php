<div class="box bottom-0 left-0 width-24 z-index-10 border-top border-black padding">
	<div class="frame darkgray opacity-70 nomobile z-index--10"></div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="width-4 float-left padding-left padding text-white">
		<?php if(!empty($post->post_excerpt)): ?>
		<a class="relative width-24 clear waves-effect z-index-100" href="<?php the_permalink(); ?>"><h4 class="condensed"><?php the_title(); ?></h4></a>
		<?php the_excerpt(); ?>
		<?php else: ?>
		<a class="relative width-24 clear waves-effect z-index-100" href="<?php the_permalink(); ?>"><h4 class="condensed font-size-200 line-height-100"><?php the_title(); ?></h4></a>
		<?php endif; ?>
	</div>
	<?php endwhile; ?>
	<?php else: ?>
	<div class="box top-10 left-1 width-22">
		<h3 class="text-center">No hay ningún resultado, lo siento.</h3>
	</div>
	<?php endif; ?>
	<div class="clear width-24 padding nomobile">&nbsp;</div>
</div>