<?php

Route::get('/', function()
{
	return View::make('kennel.hello');
});

Route::get('/news', function()
{
	return View::make('kennel.news');
});

Route::get('/photogallery', function()
{
	return View::make('kennel.photogallery');
});

Route::get('/map', function()
{
	return View::make('kennel.map');
});

Route::get('/west-highland-white-terrier/dogs', function()
{
	$dogs = Dog::whereRaw('breed = ? and is_active = 1', ['whwt'])->get();
    $params = [
        'dogs' => $dogs,
        'header' => 'Вестики из питомника "Майн Дримс"',
        'centerTitle' => 'Вест Хайленд Вайт терьер',
        
    ];
	return View::make('kennel.dogs', $params);
});

Route::get('/west-highland-white-terrier/foto', function()
{
	return View::make('whwt.foto');
});

Route::get('/west-highland-white-terrier/puppies', function()
{
	return View::make('whwt.puppies');
});

Route::get('/kern-terrier/dogs', function()
{
    $dogs = Dog::whereRaw('breed = ? and is_active = 1', ['kern'])->get();
	$params = [
        'dogs' => $dogs,
        'header' => 'Керны из питомника "Майн Дримс"',
        'centerTitle' => 'Керн терьер',
    ];
	return View::make('kennel.dogs', $params);
});

Route::get('/kern-terrier/foto', function()
{
	return View::make('kern.foto');
});

Route::get('/kern-terrier/puppies', function()
{
	return View::make('kern.puppies');
});

Route::get('/yorkshire-terrier/dogs', function()
{
	$dogs = Dog::whereRaw('breed = ? and is_active = 1', ['york'])->get();
	$params = [
        'dogs' => $dogs,
        'header' => 'Йорки из питомника "Майн Дримс"',
        'centerTitle' => 'Йоркширский терьер',
        
    ];
	return View::make('kennel.dogs', $params);
});

Route::get('/yorkshire-terrier/foto', function()
{
	return View::make('hello');
});

Route::get('/yorkshire-terrier/puppies', function()
{
	return View::make('hello');
});
