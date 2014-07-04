<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Bootstrap 3 Template / Theme - Bootable</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .bg { 
            background-image: url("http://farm9.staticflickr.com/8222/8254861601_1fbf969a14_b.jpg");
        }
    </style>
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
                    Вест Хайлен Вайт терьер
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
</body>
</html>
