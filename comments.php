<section id="comentarios" tabindex="0" class="white overflow-y">
 <div id="coments" class="relative top-1 left-6 width-12">
 <div class="box top-1 left-2 width-20">
 <h2 class="condensed"><?php the_title(); ?></h2>
 <div class="relative width-24">

  <?php the_excerpt(); ?><span class="br"></span>
 <div class="hr-white">&nbsp;</div>
 <div class="br">&nbsp;</div>
 <div class="relative width-24">

<?php

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Por favor, no cargue esta página directamente, gracias');

if ( post_password_required() ) { ?>
Este artículo está protegido con clave. Introdúcela para ver los comentarios.
<?php
return;
}
?>

<?php if ( have_comments() ) : ?>

<h3 id="comments"><?php comments_number('Sin comentarios', 'Un comentario', '% comentarios' );?></h3>

<div class="navigation">
<div class="next-posts"><?php previous_comments_link() ?></div>
<div class="prev-posts"><?php next_comments_link() ?></div>
</div>

<ol class="commentlist">
<?php wp_list_comments(); ?>
</ol>

<div class="navigation">
<div class="next-posts"><?php previous_comments_link() ?></div>
<div class="prev-posts"><?php next_comments_link() ?></div>
</div>

<?php else : // this is displayed if there are no comments so far ?>

<?php if ( comments_open() ) : ?>
<!-- If comments are open, but there are no comments. -->

 <?php else : // comments are closed ?>
<p>Ya no se admiten más comentarios.</p>

<?php endif; ?>

<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond">

<h4><?php comment_form_title( 'Dinos que te parece', 'Responde a %s' ); ?></h4>

<div class="cancel-comment-reply">
<?php cancel_comment_reply_link(); ?>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>Debes estar <a href="<?php echo wp_login_url( get_permalink() ); ?>">conectado</a> para comentar</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="padding">

<?php if ( is_user_logged_in() ) : ?>

<p>Comentas como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="salir">salir &raquo;</a></p>

<?php else : ?>

<div class="input-field">
<i class="material-icons prefix">person</i>
<input type="text" required="required" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="44"  tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author" class="">Nombre <?php if ($req) echo "(obligatorio)"; ?>:</label>
</div>

<div class="input-field">
<i class="material-icons prefix">email</i>
<input type="text" required="required" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email">Correo (no se publicará <?php if ($req) echo "y es obligatorio"; ?> ):</label>
</div>

<div class="input-field">
<i class="material-icons prefix">web</i>
<input type="text" required="required" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" tabindex="3" />
<label for="url">Página:</label>
</div>

<?php endif; ?>

<div class="input-field">
<i class="material-icons prefix">mode_edit</i>
<textarea id="comment" name="comment" cols="45" rows="8" aria-describedby="form-allowed-tags" aria-required="true" required="required"></textarea>
    <label for="comment">Comentario:</label>
</div>
<button class="relative left-6 width-12 waves-effect blue font-size-150 line-height-150 condensed text-white" type="submit" name="action">Enviar&nbsp;&nbsp;
    <i class="material-icons right">send</i>
</button>
<br />

<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>

</form>
<div class="br nomobile">&nbsp;</div>
<?php endif; // If registration required and not logged in ?>

</div>

<?php endif; ?>

</div>
</div>
	<div class="br text-center">
		<a title="Artículo anterior" class="cprev" href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" role="prev"><i class="material-icons">chevron_left</i> Siguiente</a>&nbsp;
		<a title="Siguiente artículo" class="cnext" href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>" role="next">Anterior <i class="material-icons">chevron_right</i></a>
		<div class="padding br"></div>
	</div>
</div>
</div>
</section>