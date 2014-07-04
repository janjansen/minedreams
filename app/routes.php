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
//
//Route::get('/news', function()
//{
//	return View::make('hello');
//});
//
//Route::get('/news', function()
//{
//	return View::make('hello');
//});
//
//Route::get('/news', function()
//{
//	return View::make('hello');
//});
//
//Route::get('/news', function()
//{
//	return View::make('hello');
//});
