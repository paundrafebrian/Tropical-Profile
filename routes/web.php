<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* BLOG LIST */
Route::get('/blog', function () {
    return view('blog.index');
});

/* BLOG DETAIL */
Route::get('/blog/what-importers-should-check', function () {
    return view('blog.blog-1');
});

Route::get('/blog/stable-coconut-sugar-supply', function () {
    return view('blog.blog-2');
});

Route::get('/blog/export-grade-quality-control', function () {
    return view('blog.blog-3');
});