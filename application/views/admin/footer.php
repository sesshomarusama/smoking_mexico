<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Company
                    </a>
                </li>
                <li>
                    <a href="#">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        Blog
                    </a>
                </li>
            </ul>
        </nav>
        <p class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com/">Creative Tim</a>, made with love for a better web
        </p>
    </div>
</footer>
</div>
</div>

<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Filters</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <div class="text-center">
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                        <span class="badge filter badge-blue" data-color="blue"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Images</li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-2.jpg">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-4.jpg">
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="https://github.com/creativetimofficial/material-dashboard" target="_blank" class="btn btn-primary btn-block">Download on Github</a>
                </div>
            </li>

            <!-- <li class="header-title">Want more components?</li>

            <li class="button-container">
                    <div class="">
                            <a href="http://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">Get The PRO Version</a>
                    </div>
            </li> -->

            <li class="button-container">
                <div class="">
                    <a href="http://demos.creative-tim.com/material-dashboard/documentation/tutorial-components.html" target="_blank" class="btn btn-default btn-block">View Documentation</a>
                </div>
            </li>

            <li class="header-title">Thank you for 52 shares!</li>

            <li class="button-container">
                <button id="twitter" class="btn btn-social btn-twitter btn-round"><i class="fa fa-twitter"></i> &middot; 12</button>
                <button id="facebook" class="btn btn-social btn-facebook btn-round"><i class="fa fa-facebook-square"> &middot; 40</i></button>
            </li>

        </ul>
    </div>
</div>

</body>

<!--   Core JS Files   -->
<script src="<?= base_url('assetsadmin/js/jquery-3.1.0.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assetsadmin/js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assetsadmin/js/material.min.js') ?>" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="<?= base_url('assetsadmin/js/chartist.min.js') ?>"></script>

<!--  Notifications Plugin    -->
<script src="<?= base_url('assetsadmin/js/bootstrap-notify.js') ?>"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="<?= base_url('assetsadmin/js/material-dashboard.js') ?>"></script>

<!--   Sharrre Library    -->
<script src="<?= base_url('assetsadmin/js/jquery.sharrre.js') ?>"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= base_url('assetsadmin/js/demo.js') ?>"></script>

<script type="text/javascript">
                $(document).ready(function () {

                    // Javascript method's body can be found in assets/js/demos.js
                    demo.initDashboardPageCharts();

                });
</script>
<!-- Mirrored from demos.creative-tim.com/material-dashboard/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Feb 2017 22:29:43 GMT -->
</html>