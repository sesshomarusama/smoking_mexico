
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="green">
                                    <i class="material-icons">recent_actors</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Mi perfil público -
                                        <small class="category">Recuerda que con esta información seras encontrado</small>
                                    </h4>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nombre de la empresa, compania o negocio</label>
                                                    <input type="text" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Slogan</label>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Just do it!</label>
                                                        <textarea class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Correo Electrónico</label>
                                                    <input type="email" class="form-control" value="al221411717@gmail.com" disabled/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Teléfono</label>
                                                    <input type="tel" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success pull-right"><i class="material-icons">cloud_upload</i>&nbsp;&nbsp; Guardar Información</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="card text-center">
                                <div class="card-content">
                                    <legend>Imagen de cabecera</legend>
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
                                            <button class="btn btn-warning btn-round fileinput-exists" type="submit"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp; Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="green">
                                    <i class="material-icons">av_timer</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Horario de atención
                                    </h4>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label-control">Lunes de</label>
                                                    <input type="text" class="form-control timepicker" value="00:00" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label-control">a</label>
                                                    <input type="text" class="form-control timepicker" value="00:00" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label-control">Martes de</label>
                                                    <input type="text" class="form-control timepicker" value="00:00" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label-control">a</label>
                                                    <input type="text" class="form-control timepicker" value="00:00" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label-control">Miércoles de</label>
                                                    <input type="text" class="form-control timepicker" value="00:00" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label-control">a</label>
                                                    <input type="text" class="form-control timepicker" value="00:00" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label-control">Jueves de</label>
                                                    <input type="text" class="form-control timepicker" value="00:00" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label-control">a</label>
                                                    <input type="text" class="form-control timepicker" value="00:00" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label-control">Viernes de</label>
                                                    <input type="text" class="form-control timepicker" value="00:00" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label-control">a</label>
                                                    <input type="text" class="form-control timepicker" value="00:00" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label-control">Sábado de</label>
                                                    <input type="text" class="form-control timepicker" value="00:00" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label-control">a</label>
                                                    <input type="text" class="form-control timepicker" value="00:00" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label-control">Domingo de</label>
                                                    <input type="text" class="form-control timepicker" value="00:00" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label-control">a</label>
                                                    <input type="text" class="form-control timepicker" value="00:00" />
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success pull-right"><i class="material-icons">cloud_upload</i>&nbsp;&nbsp; Guardar horario</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="card text-center">
                                <div class="card-content">
                                    <legend>Logotipo</legend>
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail img-circle">
                                            <img src="<?= base_url('assetsadmin/img/placeholder.jpg') ?>" alt="...">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                        <div>
                                            <span class="btn btn-round btn-success btn-file">
                                                <span class="fileinput-new"><i class="material-icons">wallpaper</i>&nbsp;&nbsp; Elegir Imagen</span>
                                                <span class="fileinput-exists">Cambiar</span>
                                                <input type="file" name="..." />
                                            </span>
                                            <br />
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i>&nbsp;&nbsp; Eliminar</a>
                                            <button class="btn btn-warning btn-round fileinput-exists" type="submit"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp; Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>