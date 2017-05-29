<?php if (!is_single()): ?>
<nav id="navigation" role="navigation">
	<?php Revista_pagination(); ?>
</nav>
<?php endif; ?>
<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
	<a href="#" id="m-left" class="menuopenclose" title="Enlaces" role="menuitem">
		<i class="material-icons">menu</i>
	</a>
<?php endif; ?>
<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
	<a href="#" id="m-right" class="menuopenclose" title="Enlaces" role="menuitem">
		<i class="material-icons">menu</i>
	</a>
<?php endif; ?>