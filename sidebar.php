<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
    <aside id="a-left" role="complementary">
        <?php dynamic_sidebar('left-sidebar'); ?>
    </aside>
<?php endif; ?>

<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
   <aside id="a-right" role="complementary">
        <?php dynamic_sidebar('right-sidebar'); ?>
    </aside>
<?php endif; ?>