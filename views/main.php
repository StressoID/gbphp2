<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$title?></title>

    <!-- Bootstrap core CSS -->
    <link href="../app/bsp/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../app/bsp/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../app/bsp/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/theme.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../app/bsp/docs/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../app/bsp/docs/assets/js/ie-emulation-modes-warning.js"></script>
</head>

<body role="document">

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Главная</a></li>
                <li><a href="?act=editor">Консоль администратора</a></li>
                <li><a href="?act=new">Добавить статью</a></li>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container theme-showcase" role="main">
    <h1><?=$title?></h1>

    <?=$content?>
    
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../app/bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../app/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../app/bootstrap/docs/assets/js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../app/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
