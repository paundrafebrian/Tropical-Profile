<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES (NO AUTH)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

/* BLOG LIST */
Route::get('/blog', function () {
    return view('blog.index');
})->name('blog.index');

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

/* CONTACT FORM */
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');


/*
|--------------------------------------------------------------------------
| AUTHENTICATED ROUTES (ADMIN)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // nanti: contact inbox admin
    // Route::get('/admin/contacts', ...);
});

/*
|--------------------------------------------------------------------------
| AUTH ROUTES (BREEZE)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
