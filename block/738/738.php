<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/738.less', 'css/738.css');
        ?>
        <link href="css/738.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <footer>
            <div class="type-738">
                <div class="lms_footer_center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="lms_footer_logo">
                                    <img src="images/logo.png" alt=""/>                                  
                                </div>
                                <p>Integer vitae triagna. Praesent
                                    bibendum quam tellus, quis rhoncus
                                    orci cursus vel. Aenean suscipilacerat
                                    elit sit amet lacinia. Phasellus volutt
                                    ligula eget urna egestas vehicula.
                                    Proinpus est sed mauris viverra, eu 
                                    congue tellus tempus. e
                                </p>

                                <div class="lms_social">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook" class="colortooltip"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter" class="colortooltip"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Google+" class="colortooltip"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Pinterest" class="colortooltip"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="lms_footer_popular_course">
                                    <h3>Recent Course</h3>
                                    <div class="lms_footer_course">
                                        <img src="images/h1.jpg" alt=""/>
                                        <a href="#"><h4>Learning Quality Graphic Design</h4></a>
                                        <p>There are many variations of passages</p>
                                    </div>
                                    <div class="lms_footer_course">
                                        <img src="images/h2.jpg" alt=""/>
                                        <a href="#"><h4>JQuery Tutorial</h4></a>
                                        <p>jQuery is a fast and concise JavaScript</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="lms_footer_course_category">
                                    <h3>Course Categories</h3>
                                    <li><a href="#">Health Literacy</a></li>
                                    <li><a href="#">Management</a></li>
                                    <li><a href="#">Marketing</a></li>
                                    <li><a href="#">Mobile Apps</a></li>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="lms_footer_contact">
                                    <h3>Contacts</h3>
                                    <p class="pad">Lorem ipit amet, consectetur adipiscing elit.
                                        Etiam at ma erat laoreet accumsan. Vivamus id dui nulla.
                                    </p>
                                    <p>
                                        <span class="lms_theme_color">Address :  </span>
                                        13/2 Elizabeth Street Melbourne VIC 3000, Australia
                                    </p>
                                    <p>
                                        <span class="lms_theme_color">Phone no : </span>
                                        +61 3 8376 6284
                                    </p>
                                    <p>
                                        <span class="lms_theme_color">Fax no : </span>
                                        +00 1234 56789
                                    </p>
                                    <p>
                                        <span class="lms_theme_color">Email id : </span>
                                        <a href="#" class="color_hover">learning@system.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lms_footer_bottom">
                    <p>Copyright © 2016 LMS Theme All Rights Reserved.</p>
                </div>
                <a href="#" class="scrollToTop">
                    <i class="fa fa-arrow-up"></i>
                    <i class="fa fa-arrow-up down"></i>
                </a>
            </div>
        </footer>
    </body>
</html>