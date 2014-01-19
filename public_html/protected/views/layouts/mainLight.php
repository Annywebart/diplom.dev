<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name=viewport content="initial-scale=1, minimum-scale=1, width=device-width">
        <title>Ebro Admin Login</title>
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleSite']; ?>/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleSite']; ?>/css/todc-bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleSite']; ?>/css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" type="<?php echo Yii::app()->params['styleSite']; ?>/image/x-icon" href="favicon.ico">
        <style>
            body {padding:80px 0 0}
            textarea, input[type="password"], input[type="text"], input[type="submit"] {-webkit-appearance: none}
            .navbar-brand {font:300 15px/18px 'Roboto', sans-serif}
            .login_wrapper {position:relative;width:380px;margin:0 auto}
            .login_panel {background:#f8f8f8;padding:20px;-webkit-box-shadow: 0 0 0 4px #ededed;-moz-box-shadow: 0 0 0 4px #ededed;box-shadow: 0 0 0 4px #ededed;border:1px solid #ddd;position:relative}
            .login_head {margin-bottom:20px}
            .login_head h1 {margin:0;font:300 20px/24px 'Roboto', sans-serif}
            .login_submit {padding:10px 0}
            .login_panel label a {font-size:11px;margin-right:4px}

            @media (max-width: 767px) {
                body {padding-top:40px}
                .navbar {display:none}
                .login_wrapper {width:100%;padding:0 20px}
            }
        </style>
        <!--[if lt IE 9]>
        <script src="<?php echo Yii::app()->params['styleSite']; ?>/js/ie/html5shiv.js"></script>
        <script src="<?php echo Yii::app()->params['styleSite']; ?>/js/ie/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard1.html"></a>
                </div>
            </div>
        </header>

        <?php echo $content; ?>

        <script src="js/jquery.min.js"></script>
        <script src="js/lib/parsley/parsley.min.js"></script>
    </body>
</html>

