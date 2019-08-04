<script src="bench/bower_components/jquery/dist/jquery.min.js"></script>
<script src="bench/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="bench/bower_components/moment/moment.js"></script>
<script src="bench/bower_components/chart.js/dist/Chart.min.js"></script>
<script src="bench/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="bench/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script src="bench/bower_components/ckeditor/ckeditor.js"></script>
<script src="bench/bower_components/bootstrap-validator/dist/validator.min.js"></script>
<script src="bench/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bench/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<script src="bench/bower_components/dropzone/dist/dropzone.js"></script>
<script src="bench/bower_components/editable-table/mindmup-editabletable.js"></script>
<script src="bench/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bench/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bench/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="bench/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="bench/bower_components/tether/dist/js/tether.min.js"></script>
<script src="bench/bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="bench/bower_components/bootstrap/js/dist/util.js"></script>
<script src="bench/bower_components/bootstrap/js/dist/alert.js"></script>
<script src="bench/bower_components/bootstrap/js/dist/button.js"></script>
<script src="bench/bower_components/bootstrap/js/dist/carousel.js"></script>
<script src="bench/bower_components/bootstrap/js/dist/collapse.js"></script>
<script src="bench/bower_components/bootstrap/js/dist/dropdown.js"></script>
<script src="bench/bower_components/bootstrap/js/dist/modal.js"></script>
<script src="bench/bower_components/bootstrap/js/dist/tab.js"></script>
<script src="bench/bower_components/bootstrap/js/dist/tooltip.js"></script>
<script src="bench/bower_components/bootstrap/js/dist/popover.js"></script>
<script src="bench/js/demo_customizer.js?version=4.4.0"></script>
<script src="bench/js/main.js?version=4.4.0"></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-XXXXXXX-9', 'auto');
    ga('send', 'pageview');
</script>
<?php
//switch between dev mode and production mode
if (APP_DEV_MODE == true) {
    //add dev mode vue js
    ?>
    <script src="bench/js/vue.dev.js" type="text/javascript"></script>
    <?php
} else {
    ?>
    <script src="bench/js/vue.min.js" type="text/javascript"></script>
    <?php
}
//add axios
if (APP_USE_AXIOS == true) {
    //add dev mode vue js
    ?>
    <script src="bench/js/axios.js" type="text/javascript"></script>
    <?php
}
?>
<script>
    NProgress.start();
    NProgress.done();
    var api_base_name = '<?php echo APP_BASE_NAME ?>'; //ddeclar global api path
    var cssk = "73050f3f22f18a7174b691b07f394d00eb661221"; //server side key

    //general logout btn
    function btnout() {
        axios.post(api_base_name + 'api/auth/logout/', {token: localStorage.getItem('token'), ssk: cssk})
            .then(function (res) {
                console.log(res);
                NProgress.done();
                //make use of data
                if (!res.data.status) {
                    //something went wrong
                    data.info = res.data.msg;
                    return;
                }
                //success login
                window.localStorage.clear();
                window.location.href = api_base_name + "";
            });
    }
</script>
