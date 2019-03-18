<style>
div#modal1.modal-overlay .Store-modal .modal-content
 {
  opacity: 1 !important;
	height: 100% !important;
	top: 0% !important;
	padding: 20px;
	/* border-left: 1px solid rgba(0,0,0,0.13);
	 border-right: 1px solid rgba(0,0,0,0.13);
	 border-bottom: 1px solid rgba(0,0,0,0.13);
	 border-bottom-left-radius: 20px;
	 border-bottom-right-radius: 20px;*/
}
	div#modal1.modal-overlay .Store-modal .modal-footer {
	/*	border-left: 1px solid #12A641;
	 border-right: 1px solid #12A641;
	 border-top: 1px solid #12A641;*/
	}	
	div#modal1.modal-overlay .Store-modal .modal-footer,
	div#modal1.modal-overlay .Store-modal .modal-content {
		width: 100% !important;
	}
div#modal1.modal-overlay {
  transform: scaleX(1);
  top: 0% !important;
  bottom: 0% !important;
  background-color: white !important;
  height: 100% !important;
  width: 100% !important;
  
}
	.Store-modal {
		display: flex;
		align-items: center;
    justify-content: center;
		flex-direction: column;
		height: 100% !important;
  width: 100% !important;
		
	}
	.Store-modal .modal-footer {
		background: #12A641;
		color: white;
	}
	.Store-modal .modal-footer a i,
	.Store-modal .modal-footer a span{
		color: white;
	}
	@media only screen and (max-width:768px){
		.Store-modal {
			padding:0; 
		}
		.Store-show {
			width: 100% !important;
			
			height:100%;
		}		
	}	
	@media only screen and (min-width:769px) and (max-width:900px){
		.Store-show {
			width: 55% !important;
			
		}		
	}
	@media only screen and (min-width:901px)and (max-width:1199px){
		.Store-show {
			width: 40% !important;
			
		}		
	}
	@media only screen and (min-width:1200px){
		.Store-show {
			width: 35% !important;
			
		}		
	}		
	

</style>  

<!-- Modal Trigger -->
<style>
	.Modal-btn {
		box-shadow: none ;
	}
</style>
  <a class="Modal-btn waves-effect waves-light btn modal-trigger blue" href="#modal1">Vender algo</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal-overlay">
	  <div class="Store-modal">
		  <div class="z-depth-1 Store-show">
		  <div class="modal-footer">
			  <a href="#!" class="modal-close waves-effect waves-green btn-flat"><i class="fa fa-arrow-left"></i> <span><?php the_title(); ?></span></a>
		  </div>		  
		  <div class="modal-content">
<!-- Empieza el formulario -->
 <div class="row">
	<?php frontendPost(); ?>
  </div>			  
<!-- Termina el formulario -->		  
		  </div>
		  </div>
	  </div>
  </div>
         