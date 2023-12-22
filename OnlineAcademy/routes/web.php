<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Post;

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

Route::get('/', function () {
    return redirect('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/index',function(){
    return view('display.index');
})->name('index');
Route::get('/about',function(){
    return view('display.about');
})->name('about');

Route::get('/blog',function(){
    $categories=Category::all();
    $posts=Post::paginate(4);
    return view('display.blog',['categories'=>$categories,'posts'=>$posts]);
})->name('blog');

Route::get('/post',function(){
    return view('display.post');
})->name('post');
Route::get('/course',function(){
    return view('display.course');
})->name('course');
Route::get('/course-inner',function(){
    return view('display.course-inner');
})->name('course-inner');
Route::get('/contact',function(){
    return view('display.contact');
})->name('contact');


Route::resource('/posts',PostController::class);

Route::get('/posts/category/{category}',[PostController::class,'postPerCategory'])->name('postPerCategory');
Route::resource('/categories',CategoryController::class);

require __DIR__.'/auth.php';
