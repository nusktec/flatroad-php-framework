<?php
$title = $_SESSION['header']['title'];
$desc = $_SESSION['header']['desc'];
?>
    <head>
        <title><?php echo ($title) ? ('W&C | ' . $title) : "W&C | Console" ?></title>
        <meta charset="utf-8">
        <meta content="ie=edge" http-equiv="x-ua-compatible">
        <meta content="<?php echo HTML_META_TAGS ?>" name="keywords">
        <meta content="><?php echo HTML_META_AUTHOR ?>" name="author">
        <meta content="><?php echo HTML_META_TAGS ?>" name="tags">
        <meta content="<?php echo $desc ? $desc : "W&C | Console" ?>" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="bench/files/images/logo_white.png" rel="shortcut icon">
        <link href="bench/files/images/logo_red.png" rel="apple-touch-icon">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
        <link href="bench/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
        <link href="bench/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <link href="bench/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
        <link href="bench/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="bench/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <link href="bench/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
        <link href="bench/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
        <link href="bench/css/main.css?version=4.4.0" rel="stylesheet">
        <link rel="stylesheet" href="bench/css/topBar.css">
        <script src="bench/js/topBar.js"></script>
        <?php
        //switch between dev mode and production mode
        if (APP_TURBO_MODE == true) {
            //add speed mode
            ?>
            <script src="bench/js/turbo.js" type="text/javascript"></script>
        <?php
        }
        ?>
        <meta name="turbolinks-cache-control" content="no-cache">
    </head>

<?php
