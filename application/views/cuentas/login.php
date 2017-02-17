<div class="main">
                <div class="main-inner">
                    <div class="container">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <div class="page-title text-center">
                                        <h1>Iniciar sesión</h1>
                                    </div><!-- /.page-title -->

                                    <form method="post" action="<?=site_url('usuario/login')?>" id="login" autocomplete="off">
                                        <div class="form-group">
                                            <label for="email_user">Correo electrónico <span class="required">*</span></label>
                                            <input type="email" class="form-control" name="email_user" id="email_user" required/>
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="password_user">Contraseña <span class="required">*</span></label>
                                            <input type="password" class="form-control" name="password_user" id="password_user" required/>
                                        </div><!-- /.form-group -->

                                        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                                    </form>
                                </div><!-- /.col-sm-4 -->
                            </div><!-- /.row -->

                        </div><!-- /.content -->
                    </div><!-- /.container -->
                </div><!-- /.main-inner -->
            </div><!-- /.main -->