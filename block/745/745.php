<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/sliderShow.js" type="text/javascript"></script>
        <script src="js/newjavascript.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/745.less', 'css/745.css');
        ?>
        <link href="css/745.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="Dan">
            <div class="container">
                <div class="row">
                    <div class="col-md12">
                        <div class="hinh col-md-2">
                            <a href="#">
                                <img src="images/home.png">
                            </a>
                        </div>
                        <div class="hinh col-md-2">
                            <a href="">
                                <img src="images/hom2.png">
                            </a>
                        </div>
                        <div class="hinh col-md-2">
                            <a href="">
                                <img src="images/home3.png">
                            </a>
                        </div>
                        <div class="hinh col-md-2">
                            <a href="">
                                <img src="images/hom34.png">
                            </a>
                        </div>
                        <div class="hinh col-md-2">
                            <a href="">
                                <img src="images/home5.png">
                            </a>
                        </div>
                        <div class="hinh col-md-2">
                            <a href="">
                                <img src="images/home6.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>