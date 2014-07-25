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
	return View::make('whwt.dogs');
});

Route::get('/west-highland-white-terrier/foto', function()
{
	return View::make('whwt.foto');
});

Route::get('/west-highland-white-terrier/puppies', function()
{
	return View::make('whwt.puppies');
});
//
//Route::get('/news', function()
//{
//	return View::make('hello');
//});
