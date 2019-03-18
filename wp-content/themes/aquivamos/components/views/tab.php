    <div id="home">
<div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#inicio" class="waves-effect waves-light"><i class="hide-on-large-only fa fa-home"></i><span class="hide-on-small-only">Inicio</span></a></li>
		  <li class="tab col s3"><a href="#nosotros" class="waves-effect waves-light"><i class="hide-on-large-only fa fa-group"></i><span class="hide-on-small-only">Nosotros</span></a></li>
		  <li class="tab col s3"><a href="#contacto" class="waves-effect waves-light"><i class="hide-on-large-only fa fa-envelope"></i><span class="hide-on-small-only">Contacto</span></a></li>
      </ul>
    </div>
    <div id="inicio" class="col s12">
  	 <div class="row">
	  <div class="col s12">
			<figure class="Container-img"><?php the_post_thumbnail('full'); ?></figure>
	  </div>
	 </div>
		<div class="row">
			<div class="col s12">
				<?php permission_to_publish(); ?>
			</div>
		</div>
	 <?php titleHeader(); ?>
    </div>
    <div id="nosotros" class="Tab-store col s12"><?php the_field('nosotros'); ?></div>
    <div id="contacto" class="Tab-store col s12"><?php the_field('contacto'); ?></div>
    	  
		</div>	 