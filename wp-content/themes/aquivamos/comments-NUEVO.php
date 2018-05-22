<?php
/* 	Theme hecho por daniel acevedo
*/

	if ( post_password_required() ) { return; }
?>

<div id="commentsbox">
<?php if ( have_comments() ) : ?>
	<h2 class="comments"><?php comments_number(__('No Hay opiniones','simplify'), __('Una opion','simplify'), __('% Opiones','simplify') );?> de  <a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
	<ul class="comments-list">
		<?php wp_list_comments(); ?>
	</ul>
    
	<div class="comment-nav">
		<div class="floatleft">
			<?php previous_comments_link() ?>
		</div>
		<div class="floatright">
			<?php next_comments_link() ?>
		</div>
	</div>
<?php else : ?>
	<?php if ( ! comments_open() && ! is_page() ) : ?>
		<p class="watermark"><?php echo __('Comments are Closed', 'simplify'); ?></p>
	<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
	<div id="comment-form">
		<?php comment_form(); ?>
	</div>
<?php endif; ?>
</div>