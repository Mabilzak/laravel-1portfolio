<?php

use App\Models\project;
use App\Models\Category;
use App\Models\Writer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Xml\Project as XmlProject;

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

Route::get('/', [ProjectController::class, 'index']);

Route::get('/work', function () {
    return view('work', [
        'title_head' => "Work"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title_head' => "About"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title_head' => "Contact"
    ]);
});

//Halaman Single Work : adalah halaman melihat work dengan detail satu per satu 

Route::get('/detail_work/{project:slug}', [ProjectController::class, 'find']);

Route::get('/work_category', function () {
    return view('categories', [
        'title_head' => 'Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/work_category/{category:slug}', function (Category $category) {
    return view('work_category', [
        'title_head' => 'Work Category',
        'title' => "Category Of : $category->name",
        'projects' => $category->project->load('category', 'writer')
    ]);
});

Route::get('/author/{writer:username}', function (Writer $writer) {
    return view('work_category', [
        'title_head' => 'Author',
        'title' => "Writer By : $writer->username",
        'username' => $writer->username,
        'description' => $writer->description,
        'projects' => $writer->project->load('category', 'writer')
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);