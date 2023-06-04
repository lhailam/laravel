<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[HomeController::class, 'index'])->name('home');


// Client Routes
Route::prefix('categories')->group(function(){
    //get
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');

    // get by id
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');

    // update by id
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory']);

    // get form add
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');

    // handle add
    Route::post('/add', [CategoriesController::class, 'handleCategory']);

    // delete by id
    Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');

    // Route::post('/add', [CategoriesController::class, 'httpRequest']);

    Route::get('/upload', [CategoriesController::class, 'showFormUpload'])->name('categories.upload');

    
    // handle add
    Route::post('/upload', [CategoriesController::class, 'uploadfile']);

});

Route::get('/san-pham/{id}', [HomeController::class, 'getDetailProduct']);

// Client Routes
Route::prefix('admin')->middleware('checkloginadmin')->group(function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('products', ProductsController::class);
});