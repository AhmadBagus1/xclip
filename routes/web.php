<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.home');
});

Route::get('/about', function () {
    return view('public.about.about');
});

Route::get('/services', function () {
    return view('public.services.services');
});

Route::get('/projects', function () {
    return view('public.projects.projects');
});

Route::get('/news', function () {
    return view('public.news.news');
});

Route::get('/downloads', function () {
    return view('public.downloads.downloads');
});

Route::get('/contact', function () {
    return view('public.contact.contact');
});

Route::get('/rfq', function () {
    return view('public.rfq.rfq');
});
