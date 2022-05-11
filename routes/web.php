<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\Responsable_filiereController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect('admin_dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
})->middleware(['auth', 'admin'])->name('admin_dashboard');

Route::get('/resp_dashboard', function () {
    return view('resp_dashboard');
})->middleware(['auth', 'resp'])->name('resp_dashboard');


Route::get('/eleve_dashboard', function () {
    return view('eleve_dashboard');
})->middleware(['auth', 'eleve'])->name('eleve_dashboard');

// Route::redirect('auth\register')->middleware(['auth', 'admin'])->name('admtoreg');
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/student_regi',function(){
        return view('register_eleve');
    })->name('student_reg');

    Route::resource('Eleves',EleveController::class);
    Route::resource('Responsable_filieres',Responsable_filiereController::class);


});

require __DIR__.'/auth.php';
