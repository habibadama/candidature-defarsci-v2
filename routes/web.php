<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\WelcomeController;





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

// Route::get('/', function () {
//     return view('welcome');
// });


//Route pour les candidats

// Route::get('/', [CandidatController::class, 'index']);

    Route::get('/liste/candidat', [CandidatController::class, 'liste'])->middleware(['auth'])->name('liste.candidat');
    Route::post('/enregistrer/candidat', [CandidatController::class, 'store'])->name('store.candidat');
    Route::get('/montrer/candidat/{id}', [CandidatController::class, 'show'])->middleware(['auth'])->name('show.candidat');
    Route::get('/supprimer-candidat/{id}', [CandidatController::class, 'destroy'])->middleware(['auth', 'admin'])->name('delete-candidat');
    Route::get('/editer-candidat/{id}', [CandidatController::class, 'edit'])->middleware(['auth', 'admin'])->name('edit-candidat');
    Route::post('/modifier/candidat/{id}', [CandidatController::class, 'update'])->name('update.candidat');





//Route pour les modules

    Route::get('/liste/module', [ModuleController::class, 'liste'])->middleware(['auth'])->name('liste.module');
    Route::get('/ajouter/module', [ModuleController::class, 'index'])->middleware(['auth', 'admin'])->name('index');
    Route::post('/enregistrer/module', [ModuleController::class, 'store'])->name('store.module');
    Route::get('/supprimer-module/{id}', [ModuleController::class, 'destroy'])->middleware(['auth', 'admin'])->name('delete-module');
    Route::get('/editer-module/{id}', [ModuleController::class, 'edit'])->middleware(['auth', 'admin'])->name('edit-module');
    Route::post('/modifier/module/{id}', [ModuleController::class, 'update'])->middleware(['auth'])->name('update.module');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//Route pour les users
Route::get('/users', [UsersController::class, 'index'])->middleware(['auth', 'admin'])->name('users');
Route::get('/users/profile/{user}', [UsersController::class, 'show'])->name('users.show');
Route::get('/users/{user}', [UsersController::class, 'edit'])->middleware(['auth'])->name('users.edit');
Route::put('/users/{user}', [UsersController::class, 'update'])->middleware(['auth'])->name('users.update');
Route::delete('/users/{user}', [UsersController::class, 'destroy'])->middleware(['auth', 'admin'])->name('users.destroy');
Route::get('/test', [UsersController::class, 'create'])->name('users.create');
Route::post('users', [UsersController::class, 'store'])->name('users.store');

Route::get('/', [WelcomeController::class, 'welcome']);


require __DIR__.'/auth.php';
