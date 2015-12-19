<!-- BEGIN FOOTER -->
        <div class="footer">
            <div class="footer-inner">
                2013 &copy; Metronic by keenthemes.
            </div>
            <div class="footer-tools">
                <span class="go-top">
                    <i class="icon-angle-up"></i>
                </span>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="assets/scripts/jquery.supercal.js"></script>
        <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/scripts/app.js" type="text/javascript"></script>
        <script src="assets/scripts/index.js" type="text/javascript"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/scripts/app.js" type="text/javascript"></script>
        <script src="assets/scripts/login.js" type="text/javascript"></script>      
        <!-- END PAGE LEVEL SCRIPTS --> 
        <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
        <script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/date.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/scripts/app.js"></script>
        <script src="assets/scripts/table-managed.js"></script>
        <script src="assets/scripts/form-components.js"></script>  
        <script src="assets/scripts/form-samples.js"></script>
        <!-- END PAGE LEVEL SCRIPTS -->



        <script>
            jQuery(document).ready(function () {
                App.init();
                TableManaged.init();
                FormSamples.init();
                FormComponents.init();
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                App.init();
                Login.init();
            });
        </script>
        <!-- END PAGE LEVEL SCRIPTS -->  
        <script>
            jQuery(document).ready(function () {
                App.init(); // initlayout and core plugins
                Index.init();

            });
            

            $('.example1').supercal({
                transition: 'carousel-vertical'
            });
            

        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>