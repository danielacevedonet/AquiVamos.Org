<div>	
  <div class="card Card">
	  <a href="<?php the_permalink(); ?> " class="waves-effect waves-lighten-2"> 
      <div class="card-image CardImage">
		<figure>
        	<?php the_post_thumbnail('thumbnail'); ?>
		</figure>
      </div>
      <div class="card-content CardConten">
        <p class="CardTitle"><?php echo mb_strimwidth( get_the_title(), 0, 22, '...' ); ?></p>
        <span class="CardTitleSpan">$<?php the_field('costo_del_producto'); ?> <?php the_field('moneda_del_producto'); ?></span>
      </div>
		</a>  
  </div>	
</div>