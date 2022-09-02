<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\PersonnelsController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TasksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ====================== ROUTAGE AUTHENTIFICATION =====================
Route::get('/', function () {
    return view('auth/auth');
});

Route::get('/section-auth', function () {
    return view('auth/section');
});
// =====================================================================

Route::resource('clients', ClientsController::class);

/**Route pour les vues */
Route::get("/", [DashboardController::class, "index"])->name('dashboard');

/**Vue postes */
Route::get("/liste-poste", [PostesController::class, "index"])->name('liste-poste');
Route::get("/create-poste", [PostesController::class, "createView"])->name('create-poste');


Route::get("display-post", [PostsController::class, "index"])->name(
    "posts.index"
);

Route::get("create-post", [PostsController::class, "create"])->name(
    "posts.create"
);

Route::post("save-post", [PostsController::class, "save"])->name("posts.save");


Route::resource('postes', PostesController::class);


Route::get('display-post', [PostsController::class, 'index'])->name('posts.index');

Route::get('create-post', [PostsController::class, 'create'])->name('posts.create');

Route::post('save-post', [PostsController::class, 'save'])->name('posts.save');



Route::get('/dash', function () {
    return view('dashboard');
});
Route::resource("clients", ClientsController::class);

Route::resource("personnels", PersonnelsController::class);

Route::resource("postes", PostesController::class);

Route::resource("conge", CongeController::class);

Route::resource("tasks", TasksController::class);

