@extends('layout.main')

@section('page_header')
@stop

@section('meta_description')
@stop

@section('meta_keywords')
@stop

@section('content')
<h1 class="title">Фотографии собак из питомника Майн Дримс</h1>
<div class="line"></div>
<!-- Begin Portfolio -->
<div id="portfolio">
    <ul id="filtering-nav">
        <li class="show">Фильтр:</li>
        <li><a class="all" href="#all">Все</a></li>
        <li><a class="web" href="#whwt">Вест Хайленд Вайт терьер</a></li>
        <li><a class="photo" href="#york">Йоркширские терьеры</a></li>
        <li><a class="video" href="#kern">Керн терьер</a></li>
    </ul>
    <div class="clear"></div>
    <div class="items">
        <div class="box col4 video">
            <div class="image">
                <a href="http://vimeo.com/2370018" rel="prettyPhoto[portfolio1]" title="Caption">
                    <span class="overlay play"></span>
                    <img src="style/images/art/p13.jpg" alt="" />
                </a>
            </div>
        </div>
        <div class="box col4 web">
            <div class="image">
                <a href="style/images/art/p1-full.jpg" rel="prettyPhoto[portfolio]" title="Caption">
                    <span class="overlay zoom"></span>
                    <img src="style/images/art/p12.jpg" alt="" />
                </a>
            </div>
        </div>
    </div>
    <!-- .wrap --> 
</div>
<!-- End Portfolio -->
@stop
