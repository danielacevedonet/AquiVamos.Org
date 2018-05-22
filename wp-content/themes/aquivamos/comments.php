<?php
/* 	Theme hecho por daniel acevedo
*/

	if ( post_password_required() ) { return; }
?>

<div class="Comentarios">
<?php if ( have_comments() ) : ?>
	<h3 class="Section-comentarioTitle"><strong><?php comments_number(__('No Hay opiniones','simplify'), __('Una opion','simplify'), __('% Opiones','simplify') );?>:</strong> de  <a href="<?php the_permalink(); ?>" rel="follow"><?php the_title();?></a></h3>
	<ul class="Comentarios-list">
		<?php wp_list_comments(); ?>
	</ul>
    
	<div class="Comentarios-nav">
		<div class="Comentarios-left">
			<?php previous_comments_link() ?>
		</div>
		<div class="Comentarios-right">
			<?php next_comments_link() ?>
		</div>
	</div>
<?php else : ?>
	<?php if ( ! comments_open() && ! is_page() ) : ?>
		<p class="Comentarios-cerrados"><?php echo __('Comments are Closed', 'simplify'); ?></p>
	<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
	<div id="Comentarios-form">
		<?php comment_form(); ?>
	</div>
<?php endif; ?>
</div>
