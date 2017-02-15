<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="page-title text-center">
                            <h1>Confirmar registro</h1>
                        </div><!-- /.page-title -->

                        <form method="post" action="<?=site_url('correos/activarRegistro')?>" id="acepto" autocomplete="off">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="email_user" id="email_user" value="<?=$userdata['correo']?>"/>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <input type="hidden" class="form-control" name="nombres_user" id="nombres_user" value="<?=$userdata['nombres']?>"/>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <input type="hidden" class="form-control" name="apellidos" id="apellidos" value="<?=$userdata['apellidos']?>"/>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <input type="hidden" class="form-control" name="pass_user" id="pass_user" value="<?=$userdata['pass']?>"/>
                            </div><!-- /.form-group -->

                            <button type="submit" class="btn btn-primary btn-lg btn-block">ACEPTAR</button>
                        </form>
                    </div><!-- /.col-sm-4 -->
                </div><!-- /.row -->

            </div><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->