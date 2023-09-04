<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return 'AULA DE PW III - Gabriela';
//});

//Route::get('/quem somos', function () {
    //return view('welcome');
//    return 'Quem somos';
//});

//Route::get('/contato', function () {
    //return view('welcome');
 //   return 'Contato';
//});

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/dashboard', function () {
//   return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

// Slide 27 - Depois de criar o controller principal
// Comenta o route acima
Route::get('/', 'App\Http\Controllers\PrincipalController@principal'); 
Route::get('/sobrenos', 'App\Http\Controllers\SobreNosController@principal'); 
Route::get('/contato', 'App\Http\Controllers\ContatoController@principal'); 

// Passagem de parametros no browser
Route::get('/contato/{nome?}/{mensagem?}'. 
           function (string $nome, string $mensagem = 'sem texto') 
           {echo "passagem de parametros via browser: $nome - $mensagem";}
);


 Route::get('/dashboard', function () {
    return view('dashboard');
 })->middleware(['auth', 'verified'])->name('dashboard');

 Route::get('/dashboard', function () {
    return view('dashboard');
 })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
