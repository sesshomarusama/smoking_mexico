<!-- loading para cada formulario -->
<div id="before_send"></div>
<div id="spinner">
    <div class="cube1"></div>
    <div class="cube2"></div>
</div>
    
        <footer class="footer">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <h2>About Superlist</h2>

                                <p>Superlist is directory template built upon Bootstrap and SASS to bring great experience in creation of directory.</p>
                            </div><!-- /.col-* -->

                            <div class="col-sm-4">
                                <h2>Contact Information</h2>

                                <p>
                                    Your Street 123, Melbourne, Australia<br>
                                    +1-123-456-789, <a href="#">sample@example.com</a>
                                </p>
                            </div><!-- /.col-* -->

                            <div class="col-sm-4">
                                <h2>Stay Connected</h2>

                                <ul class="social-links nav nav-pills">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul><!-- /.header-nav-social -->
                            </div><!-- /.col-* -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.footer-top -->

                <div class="footer-bottom">
                    <div class="container">
                        <div class="footer-bottom-left">
                            &copy; 2015 All rights reserved. Created by <a href="#">Aviators</a>.
                        </div><!-- /.footer-bottom-left -->

                        <div class="footer-bottom-right">
                            <ul class="nav nav-pills">
                                <li><a href="<?=base_url()?>">Inicio</a></li>
                                <li><a href="<?=base_url('planes-y-precios')?>">Planes y Precios</a></li>
                                <li><a href="<?=base_url('terminos-y-condiciones')?>">Términos y Condiciones</a></li>
                            </ul><!-- /.nav -->
                        </div><!-- /.footer-bottom-right -->
                    </div><!-- /.container -->
                </div>
            </footer><!-- /.footer -->

        </div><!-- /.page-wrapper -->
        
        <script src="<?=base_url('assets/js/jquery.js')?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js')?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/libraries/bootstrap-sass/javascripts/bootstrap/transition.js')?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js')?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js')?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/libraries/colorbox/jquery.colorbox-min.js')?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/libraries/flot/jquery.flot.min.js')?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/libraries/flot/jquery.flot.spline.js')?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/libraries/bootstrap-select/bootstrap-select.min.js')?>" type="text/javascript"></script>
        <script type="text/javascript" src="<?= base_url('assets/libraries/bootstrap-fileinput/fileinput.min.js')?>"></script>
        <script src="<?=base_url('assets/js/superlist.js')?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/js/loader.js')?>" type="text/javascript"></script>
        
        <?php 
            if (isset($js) && !empty($js)):
                foreach ($js as $ruta_js):
                    echo '<script src="'.base_url($ruta_js).'" type="text/javascript"></script>'."\n";
                endforeach;
            endif;
        ?>
    </body>
</html>