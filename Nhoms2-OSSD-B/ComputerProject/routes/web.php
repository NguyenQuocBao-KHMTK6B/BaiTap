<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route cho người dùng
Route::any('/', [UserController::class, 'index'])->name('/');
Route::post('search', [UserController::class, 'search'])->name('search');
Route::get('categories/{category_id}', [UserController::class, 'categoryProducts'])->name('category.products');
Route::get('band/{band_id}', [UserController::class, 'getbandProduct'])->name('band.products');

Route::prefix('user')->name('user.')->group(function () {

    Route::get('blog', [UserController::class, 'blog'])->name('blog');

    Route::get('About', [UserController::class, 'About'])->name('About');
    Route::get('contact', [UserController::class, 'contact'])->name('contact');

    Route::any('shopcart', [UserController::class, 'shopcart'])->name('shopcart');

    Route::get('categories', [UserController::class, 'categories'])->name('categories');

    Route::get('band', [UserController::class, 'band'])->name('band');

    Route::get('productdetails/{id}', [UserController::class, 'productdetails'])->name('productdetails');

    Route::get('addCart/{id}', [UserController::class, 'addCart'])->name('addCart');
    Route::get('removeCart/{id}', [UserController::class, 'removeCart'])->name('removeCart');
    Route::get('viewCart', [UserController::class, 'viewCart'])->name('viewCart');

    Route::get('checkout', [UserController::class, 'checkout'])->name('checkout');

    Route::get('showsignUpForm', [UserController::class, 'showsignUpForm'])->name('showsignUpForm');
    Route::post('signUp', [UserController::class, 'signUp'])->name('signUp');

    Route::get('login', [UserController::class, 'showLoginForm'])->name('showLoginForm');
    Route::post('login', [UserController::class, 'login'])->name('login.post');

    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});

// Route cho admin
Route::any('adminform', [AdminController::class, 'adminform'])->name('adminform');

Route::group(['prefix' => 'admin'], function() {
    
    Route::get('listProduct', [AdminController::class, 'listProduct'])->name('listProduct');

    Route::get('/editProduct/{id}', 'App\Http\Controllers\AdminController@formeditProduct')->name('admin.editProduct');
    Route::post('/editProduct', 'App\Http\Controllers\AdminController@editProduct')->name('admin.updateProduct');

    Route::get('/deleteProduct/{id}', 'App\Http\Controllers\AdminController@deleteProduct')->name('admin.deleteProduct');

    Route::get('/addProduct', 'App\Http\Controllers\AdminController@formaddProduct')->name('admin.addProduct');
    Route::post('/addProduct', 'App\Http\Controllers\AdminController@addProduct')->name('admin.addloadProduct');
    // user

    Route::get('/addUser', 'App\Http\Controllers\AdminController@formaddUser')->name('admin.addUser');
    Route::post('/addUser', 'App\Http\Controllers\AdminController@addUser')->name('admin.addloadUser');

    Route::get('listUser', [AdminController::class, 'listUser'])->name('listUser');
});



