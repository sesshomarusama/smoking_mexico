
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="green">
                                    <i class="material-icons">library_books</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Hacer una publicacion
                                    </h4>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Título</label>
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Precio</label>
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Fecha</label>
                                                    <input type="email" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Descripción <small>(Máximo 200 caracteres)</small> <small id="palabras"></small></label>
                                                    <div class="form-group label-floating">
                                                        <textarea name="publicar" id="publicar" class="form-control" rows="5" maxlength="200"></textarea>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <legend>Imagen de la publicación</legend>
                                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail">
                                                        <img src="<?= base_url('assetsadmin/img/image_placeholder.jpg') ?>" alt="...">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                    <div>
                                                        <span class="btn btn-success btn-round btn-file">
                                                            <span class="fileinput-new"><i class="material-icons">wallpaper</i>&nbsp;&nbsp; Elegir imagen</span>
                                                            <span class="fileinput-exists">Cambiar</span>
                                                            <input type="file" name="..." />
                                                        </span>
                                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i>&nbsp;&nbsp; Eliminar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success pull-right"><i class="material-icons">cloud_upload</i>&nbsp;&nbsp; Publicar</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>