<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="page-title">
                            <h1>Crear una cuenta</h1>
                        </div><!-- /.page-title -->

                        <form method="post" action="<?=site_url('correos/enviarEmail')?>" id="acepto" autocomplete="off">
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

                            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                        </form>
                    </div><!-- /.col-sm-4 -->
                </div><!-- /.row -->

            </div><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->