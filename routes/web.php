<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/**
 * Route::get('/cron', function () {
 *     //Optionally secure this route with a token to prevent unauthorized access
 *     if (request()->get('token') !== ('CRON_JOB_TOKEN')) {
 *         abort(403, 'Unauthorized');
 *     }
 *     //Run the queue worker with --stop-when-empty
 *     Artisan::call('queue:work --stop-when-empty');
 *     return response('Queue processed successfully!');
 * });
 */

/**
 * FRONTEND ROUTES
 */
Route::get('/form', function () {
    return view('test');
});
Route::get('/', [BlogController::class, 'welcome'])->name('index');
Route::get('/posts', [BlogController::class, 'index'])->name('posts');
Route::get('/post/{slug}', [BlogController::class, 'readPost'])->name('read_post');
Route::get('/posts/category/{slug}', [BlogController::class, 'categoryPosts'])->name('category_posts');
Route::get('/posts/author/{username}', [BlogController::class, 'authorPosts'])->name('author_posts');
Route::get('/posts/tag/{any}', [BlogController::class, 'tagPosts'])->name('tag_posts');
Route::get('/search', [BlogController::class, 'searchPosts'])->name('search_posts');
Route::get('/contact', [BlogController::class, 'contactPage'])->name('contact');
Route::post('/contact', [BlogController::class, 'sendEmail'])->name('send_email');

Route::get('/login', function () {
    return view('frontend.pages.auth.login');
});
Route::get('/about', function () {
    return view('frontend.pages.about');
});
Route::get('/products', function () {
    return view('frontend.pages.product.products');
});
Route::get('/category-products', function () {
    return view('frontend.pages.product.category-products');
});
Route::get('/search-products', function () {
    return view('frontend.pages.product.search-products');
});
Route::get('/single-product', function () {
    return view('frontend.pages.product.single-product');
});
Route::get('/cart', function () {
    return view('frontend.pages.e-commerce.cart');
});
Route::get('/checkout', function () {
    return view('frontend.pages.e-commerce.checkout');
});

/**
 * ADMIN ROUTES
 */
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest', 'preventBackHistory'])->group(function () {
        Route::controller(AuthController::class)->group(function () {
            Route::get('/login', 'loginForm')->name('login');
            Route::post('/login', 'loginHandler')->name('login_handler');
            Route::get('forgot-password', 'forgotForm')->name('forgot');
            Route::post('send-password-reset-link', 'sendPassWordResetLink')->name('send_password_reset_link');
            Route::get('/password/reset/{token}', 'resetForm')->name('reset_password_form');
            Route::post('/reset-password-handler', 'resetPasswordHandler')->name('reset_password_handler');
        });
    });

    Route::middleware(['auth', 'preventBackHistory'])->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/dashboard', 'adminDashboard')->name('dashboard');
            Route::post('/logout', 'logoutHandler')->name('logout');
            Route::get('/profile', 'profileView')->name('profile');
            Route::post('/update-profile-picture', 'updateProfilePicture')->name('update_profile_picture');

            Route::middleware(['onlySuperAdmin'])->group(function () {
                Route::get('settings', 'generalSettings')->name('settings');
                Route::post('update-logo', 'updateLogo')->name('update_logo');
                Route::post('update-favicon', 'updateFavicon')->name('update_favicon');
                Route::get('/categories', 'categoriesPage')->name('categories');
                Route::get('/slider', 'manageSlider')->name('slider');
            });
        });

        Route::controller(PostController::class)->group(function () {
            Route::get('/post/new', 'addPost')->name('add_post');
            Route::post('/post/create', 'createPost')->name('create_post');
            Route::get('/posts', 'allPosts')->name('posts');
            Route::get('/post/{id}/edit', 'editPost')->name('edit_post');
            Route::post('/post/update', 'updatePost')->name('update_post');
        });
    });
});
