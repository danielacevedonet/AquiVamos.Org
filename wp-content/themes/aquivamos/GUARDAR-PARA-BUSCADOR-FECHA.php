
            
            <div class="search-tabs search-tabs-bg search-tabs-to-top">
                <div class="tabbable">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-building-o"></i> <span >Hoteles</span></a>
                        </li>
                        <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-plane"></i> <span >Morona</span></a>
                        </li>
                        <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-home"></i> <span >Restaurantes</span></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab-1">
                            <?php echo do_shortcode('[acps id="243"]'); ?>
                        </div>
                        <div class="tab-pane fade" id="tab-2">
                            <?php echo do_shortcode('[acps id="243"]'); ?>
                        </div>
                        <div class="tab-pane fade" id="tab-3">
                            <h2>Restaurante</h2>
                            <form>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                            <label>¿En que lugar quieres buscar?</label>
                                            <input class="typeahead form-control" placeholder="Ciudad, Aeropuerto, Lugar de Interes o Codigo postal" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="input-daterange" data-date-format="M d, D">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                        <label>Fecha</label>
                                                        <input class="form-control" name="start" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-group-lg form-group-select-plus">
                                                        <label>Personas</label>
                                                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                            <label class="btn btn-primary active">
                                                                <input type="radio" name="options" />1</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options" />2</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options" />3</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options" />3+</label>
                                                        </div>
                                                        <select class="form-control hidden">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option selected="selected">4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                            <option>13</option>
                                                            <option>14</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-lg" type="submit">Buscar restaurante...</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            

            <!--***************************************

<form role="search" method="post" id="acps_form_243" class="acps_form" action="http://localhost/?page_id=241" >
    <input type="hidden" name="acps_post_type" value="restaurantes" />
    <input type="hidden" name="acps_form_id" value="243" />
    <div class="acps_form_container has_title title_inside" >
        <h3 class="acps_form_title">form title por daniel</h3>
        <p> 
            <span class="acps_form_label">¿Que estas buscando?</span>
            <span class="acps_form_control_wrap">
            <input class="acps_text_input" type="text" placeholder="Buscar" name="keywords"/></span>
        </p>
        <p class="acps_keyword_input">
            <span class="acps_form_label">mis categorias</span>
            <span class="acps_form_control_wrap category">
                <select name="category">
                    <option value="">Select Categorías...</option>
                    <option value="5-estrellas">5 Estrellas</option>
                    <option value="bar">Bar</option>
                    <option value="bar-macas">Bar</option>
                    <option value="ecuador">Ecuador</option>
                    <option value="macas">Macas</option>
                    <option value="morona-santiago">Morona Santiago</option>
                    <option value="restaurante">Restaurante</option>
                    <option value="sin-categoria">Sin categoría</option>
                </select>
            </span>
        </p>
        <p>
            <span class="acps_form_control_wrap submit_wrap">
                <input type="submit" class="acps_submit" value="boton para buscar" />
            </span>
        </p>
    </div>
</form>
-->