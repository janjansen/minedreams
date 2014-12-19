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

Route::get('/contact', function()
{
	return View::make('kennel.map');
});

Route::get('/puppies', function()
{
	return View::make('kennel.map');
});

Route::get('/west-highland-white-terrier', function()
{
	$dogs = Dog::whereRaw('breed = ? and is_active = 1', ['whwt'])->get();
    $params = [
        'dogs' => $dogs,
        'header' => 'Вестики из питомника "Майн Дримс"',
        
    ];
	return View::make('kennel.dogs', $params);
});

Route::get('/kern-terrier', function()
{
    $dogs = Dog::whereRaw('breed = ? and is_active = 1', ['kern'])->get();
	$params = [
        'dogs' => $dogs,
        'header' => 'Керны из питомника "Майн Дримс"',
    ];
	return View::make('kennel.dogs', $params);
});

Route::get('/yorkshire-terrier', function()
{
	$dogs = Dog::whereRaw('breed = ? and is_active = 1', ['york'])->get();
	$params = [
        'dogs' => $dogs,
        'header' => 'Йорки из питомника "Майн Дримс"',
    ];
	return View::make('kennel.dogs', $params);
});

Route::post('/send_feedback', 'ServiceController@sendFeedback');