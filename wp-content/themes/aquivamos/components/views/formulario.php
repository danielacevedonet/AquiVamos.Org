<script>
function format(input)
{
var num = input.value.replace(/\./g,'');
if(!isNaN(num)){
num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
num = num.split('').reverse().join('').replace(/^[\.]/,'');
input.value = num;
}
  
else{ alert('Solo se permiten numeros');
input.value = input.value.replace(/[^\d\.]*/g,'');
}
}
function validarImagen(obj){
    var uploadFile = obj.files[0];

    if (!window.FileReader) {
        alert('El navegador no soporta la lectura de archivos');
        return;
    }

    if (!(/\.(jpg|png|gif)$/i).test(uploadFile.name)) {
        alert('El archivo a adjuntar no es una imagen');
    }
    else { }                 
}	
</script>
<style>
	.Form.input-field{
		margin-top: 0 !important;
		margin-bottom: .5rem !important;
			
	}
	form.Form-store .row {
		margin-bottom: 10px;
	}
</style>
<form class="Form-store col s12" action="" id="primaryPostForm" method="POST" enctype="multipart/form-data">
	<div class="row">
		<div class="Form input-field col s12">
			<input type="text" name="postTitle" id="postTitle" value="" class="validate" required="" aria-required="true" length="35" pattern=".{10,35}" />
			<label for="postTitle">¿Que vendes?</label>
			<span class="helper-text" data-error="Escribe entre 10 - 35 caracteres" data-success="Correcto">10 - 35 caracteres</span>
		</div>
	</div>
	<div class="row">
		<div class="Form input-field col s6">
			<input name="costo_del_producto" id="costo_del_producto" type="text" class="validate" required="" aria-required="true" value="" onkeyup="format(this)" onchange="format(this)">
			<label for="costo_del_producto">Precio</label>
			<span class="helper-text" data-error="Utiliza números" data-success="Correcto">Solo números</span>
		</div>		  
		<div class="Form input-field col s6">
			<select name="postCategory" id="postCategory" class="validate" required aria-required="true">
				<option value="" disabled selected>¿Que categoria?</option>
				<?php mi_funcion_categoria(); ?>
			</select>
			<label>Seleccion una categoria</label>
		</div>
	</div>	
	<div class="row">
    <div class="Form file-field input-field col s12">
      <div class="btn">
        <span>Subir Imagen</span>
        <input type="file" name="featured" id="featured" size="50" class="validate" required="" aria-required="true" onchange="validarImagen(this);">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>		
	</div>
	<div class="row">
		<div class="Form input-field col s12">
			<textarea name="postContent" id="postContent" value="" class="validate materialize-textarea" required="" aria-required="true" length="2000" pattern=".{30,2000}" ></textarea>
			<label for="postContent">Descripcion del producto</label>
			<span class="helper-text" data-error="Escribe como minimo 30 - 2000 maximo caracteres" data-success="Correcto">30 - 2000 Caracteres</span>
		</div>
	</div>	
<?php wp_nonce_field('post_nonce', 'post_nonce_field'); ?>
<input type="hidden" name="submitted" id="submitted" value="true" />
<input type="hidden" name="numero" id="numero" value="<?php echo get_the_ID(); ?>"  />
<input type="hidden" name="moneda_del_producto" id="moneda_del_producto" value="<?php the_field('moneda_del_producto'); ?> "  />	
<input type="hidden" name="type_page" id="type_page" value="<?php the_field('type_page'); ?>"  />
<input type="hidden" name="page_title_cli" id="page_title_cli" value="<?php the_title(); ?>"  />
<input type="hidden" name="page_link_cli" id="page_link_cli" value="<?php the_permalink(); ?>"  />
<div class="fixed-action-btn">
	<button class="waves-effect waves-light btn-floating btn-large red" type="submit">
		<i class="fa fa-paper-plane" aria-hidden="true"></i>
	</button>
</div>


</form>