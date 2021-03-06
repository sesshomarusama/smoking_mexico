<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="page-title text-center">
                            <h1>Crear una cuenta</h1>
                        </div><!-- /.page-title -->

                        <form method="post" action="<?=site_url('correos/enviarEmail')?>" id="registrar" autocomplete="off">
                            <div class="form-group">
                                <label for="email_user">Correo Electrónico <span class="required">*</span></label>
                                <input type="email" class="form-control" name="email_user" id="email_user">
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="nombres_user">Nombre(s) <span class="required">*</span></label>
                                <input type="text" class="form-control" name="nombres_user" id="nombres_user">
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="apellidos">Apellidos <span class="required">*</span></label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos">
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="pass_user">Contraseña <span class="required">*</span></label>
                                <input type="password" class="form-control" name="pass_user" id="pass_user">
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="pass2_user">Confirmar Contraseña <span class="required">*</span></label>
                                <input type="password" class="form-control" name="pass2_user" id="pass2_user">
                            </div><!-- /.form-group -->
                            
                            <div class="checkbox">
                                <input type="checkbox" name="aceptar" id="aceptar" checked disabled><label for="aceptar">Al hacer click en la opción Crear cuenta, aceptas los <a href="<?= base_url('terminos-y-condiciones')?>" target="_blank">Términos y Condiciones</a> de <b>Smoking México</b></label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Crear cuenta</button>
                        </form>
                    </div><!-- /.col-sm-4 -->
                </div><!-- /.row -->

            </div><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->