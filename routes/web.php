<?php

use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminDestinasiController;
use App\Http\Controllers\AdminKategoriController;

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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.administrator');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::get('/',[HomeController::class,'index']);

Route::resource('/destinasi',DestinasiController::class);

Route::get('/destinasi/{destinasi:slug}', [DestinasiController::class,'show']);

Route::get('/category', function() {
    return view ('category',[
        'title'=>'category',
        'category'=>Kategori::all()
    ]);
});

Route::resource('/blog',Blogcontroller::class);

Route::get('/blog/{blog:slug}', [BlogController::class,'show']);

Route::Resource('/dashboard/destinasi', AdminDestinasiController::class)
->middleware(['auth']);

Route::Resource('/dashboard/kategori', AdminKategoriController::class)
->middleware(['auth']);

Route::Resource('/dashboard/blog', AdminBlogController::class)
->middleware(['auth']);
