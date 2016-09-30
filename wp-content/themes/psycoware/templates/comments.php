<?php
if (post_password_required()) {
  return;
}
?>

<section id="comments" class="comments">
  <?php if (have_comments()) : ?>
    <h2><?php printf(_nx('One comentarios para &ldquo;%2$s&rdquo;', '%1$s comentarios para &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>'); ?></h2>

    <ol class="comment-list">
      <?php wp_list_comments(['style' => 'ol', 'short_ping' => true]); ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav>
        <ul class="pager">
          <?php if (get_previous_comments_link()) : ?>
            <li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'sage')); ?></li>
          <?php endif; ?>
          <?php if (get_next_comments_link()) : ?>
            <li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'sage')); ?></li>
          <?php endif; ?>
        </ul>
      </nav>
    <?php endif; ?>
  <?php endif; // have_comments() ?>

  <?php if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')) : ?>
    <div class="alert alert-warning">
      <?php _e('Comments are closed.', 'sage'); ?>
    </div>
  <?php endif; ?>

  <?php comment_form(array(
  'title_reply' => __('¿Y tú qué opinas?', 'apk'), //Cambiar título
  'label_submit' => __('Publicar opinión', 'apk'), //Cambiar texto de botón
  'comment_field' => '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' . __('Escribe tu opinión...', 'apk') . '"></textarea>', //Borrar párrafo y label del textarea
  'comment_notes_before' => '', //Borrar las notas antes del formulario
  'comment_notes_after' => '<p class="comment-notes">' . __( 'Por si acaso, tu email no se mostrará ;)', 'apk' ) . '</p>' //Editar las notas después del formulario


)); 

?>
</section>
