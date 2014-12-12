<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('page_header')
    </title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <link rel="shortcut icon" type="image/x-icon" href="style/images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/css/prettyPhoto.css"  />
    <link href='http://fonts.googleapis.com/css?family=Philosopher:700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
    <![endif]-->
    <!--[if IE 8]>
    <link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
    <![endif]-->
    <!--[if IE 9]>
    <link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
    <![endif]-->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="style/js/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="style/js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="style/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="style/js/carousel.js"></script>
    <script type="text/javascript" src="style/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="style/js/jquery.masonry.min.js"></script>
    <script type="text/javascript" src="style/js/jquery.slickforms.js"></script>
</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper">
	<!-- Begin Sidebar -->
	<div id="sidebar">
        <div id="logo"><a href="/"><img src="style/images/logo.png" alt="Mine Dreams" /></a></div>
        
        <!-- Begin Menu -->
        <div id="menu" class="menu-v">
            <ul>
                <li><a href="/">О питомнике</a></li>
                <li><a href="/west-highland-white-terrier">Вест Хайленд Вайт терьер</a></li>
                <li><a href="/kern-terrier">Керн терьер</a></li>
                <li><a href="/yorkshire-terrier">Йоркширский терьер</a></li>
                <li><a href="/photogallery">Фотогаллерея</a></li>
                <li><a href="/puppies">Щенки на продажу</a></li>
                <li><a href="/contact">Контакты</a></li>
            </ul>
        </div>
        <!-- End Menu -->
        
        <div class="sidebox">
            <ul class="share">
                <li><a href="#"><img src="style/images/icon-facebook.png" alt="Facebook" /></a></li>
            </ul>
        </div>
	</div>
	<!-- End Sidebar -->
	
	<!-- Begin Content -->
	<div id="content">
        @yield('content')
        
        <!-- Begin Footer -->
        <div id="footer">
            <h4>Как с нами связаться</h4>
            <div class="footer-box one-half">
                <ul class="popular-posts">
                    <li>
                        <img src="style/images/art/s1.jpg" alt="" />
                        <h5><a href="#">Сомкина Ирина</a></h5>
                        <span class="lite1">Tel:</span>+7(903)540-98-13<br>
                        <span class="lite1">E-mail:</span> mini-dog@yandex.ru
                    </li>
                </ul>
            </div>
            <div class="footer-box one-half">
                <ul class="popular-posts">
                    <li>
                        <img src="style/images/art/s2.jpg" alt="" />
                        <h5><a href="#">Барабадзе Елена</a></h5>
                        <span class="lite1">Tel:</span>+7(903)540-98-13<br>
                        <span class="lite1">E-mail:</span> mini-dog@yandex.ru
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Footer -->
</div>
<!-- End Content -->
</div>
<!-- End Wrapper -->
<div class="clear"></div>
<script type="text/javascript" src="style/js/scripts.js"></script>
<!--[if !IE]> -->
<script type="text/javascript" src="style/js/jquery.corner.js"></script>
<!-- <![endif]-->
</body>
</html>