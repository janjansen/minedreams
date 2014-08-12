<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/lightbox.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <style>
        .bg { 
            background-image: url("http://farm9.staticflickr.com/8222/8254861601_1fbf969a14_b.jpg");
        }
    </style>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="/js/lightbox.min.js"></script>
</head>

<body>
    <div class="bg"></div>
    
    <div class="container">
        
        <div id="content-header" class="row">
            <div class="col-md-3 col-sm-3 col-xs-4">
                <h3 class="h5">
                    Mine Dreams
                </h3>
            </div>
            <div class="col-md-7 col-sm-7  col-xs-5">
                <h3 class="h5">
                    @yield('center_title')
                </h3>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-3">
                <h3 class="h5">
                    Контакты
                </h3>
            </div>
        </div>
        
        <div class="no-gutter row">
            
            <div class="col-md-3 col-sm-3  col-xs-4 left-col">
                @include('parts.left_sidebar')
            </div>
            
            <div class="col-md-7 col-sm-7  col-xs-5 center-col">
                <div id="main-content">
                    @yield('content')
                </div>
            </div>
            
            <div class="col-md-2 col-sm-2  col-xs-3 right-col">
                @include('parts.right_sidebar')
            </div>
        </div>
        
    </div>
<!--    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    ajdasdakls
                </div>
            </div>
        </div>
    </div>-->
</body>
</html>
