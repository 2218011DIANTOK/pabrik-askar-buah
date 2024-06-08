<?php
<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GagasanController;
use App\Http\Controllers\PetisiController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterController;
=======

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

>>>>>>> 8198bda (Initial commit)
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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('login.actionlogin');
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
Route::get('/loginuser', [LoginUserController::class, 'loginuser'])->name('loginuser');
Route::post('actionlogin1', [LoginUserController::class, 'actionlogin1'])->name('actionlogin1');
Route::post('actionlogout1', [LoginUserController::class, 'actionlogout1'])->name('actionlogout1');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/process1', [RegisterController::class, 'process1'])->name('register.process1');


// Show registration form

Route::get('/gagasan', [GagasanController::class, 'index'])->name('gagasan');
Route::get('/tambahgagasan', [GagasanController::class, 'tambahgagasan'])->name('tambahgagasan');
Route::post('/insertdata', [GagasanController::class, 'insertdata'])->name('insertdata');
Route::get('/ubahgagasan/{id_gagasan}', [GagasanController::class, 'ubahgagasan'])->name('ubahgagasan');
Route::post('/updatedata/{id_gagasan}', [GagasanController::class, 'updatedata'])->name('updatedata');
Route::get('/deletegagasan/{id_gagasan}', [GagasanController::class, 'deletegagasan'])->name('deletegagasan');

Route::get('/input', [InputController::class, 'index'])->name('input');
Route::get('/tambahinput', [InputController::class, 'tambahinput'])->name('tambahinput');
Route::post('/insertdata1', [InputController::class, 'insertdata1'])->name('insertdata1');
Route::get('/ubahinput/{id_input}', [InputController::class, 'ubahinput'])->name('ubahinput');
Route::post('/updatedata1/{id_input}', [InputController::class, 'updatedata1'])->name('updatedata1');
Route::get('/deleteinput/{id_input}', [InputController::class, 'deleteinput'])->name('deleteinput');

Route::get('/petisi', [PetisiController::class, 'index'])->name('petisi');
Route::get('/tambahpetisi', [PetisiController::class, 'tambahpetisi'])->name('tambahpetisi');
Route::post('/insertdata2', [PetisiController::class, 'insertdata2'])->name('insertdata2');
Route::get('/ubahpetisi/{id_petisi}', [PetisiController::class, 'ubahpetisi'])->name('ubahpetisi');
Route::post('/updatedata2/{id_petisi}', [PetisiController::class, 'updatedata2'])->name('updatedata2');
Route::get('/deletepetisi/{id_petisi}', [PetisiController::class, 'deletepetisi'])->name('deletepetisi');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/tambahadmin', [AdminController::class, 'tambahadmin'])->name('tambahadmin');
Route::post('/insertdata3', [AdminController::class, 'insertdata3'])->name('insertdata3');
Route::get('/ubahadmin/{id_admin}', [AdminController::class, 'ubahadmin'])->name('ubahadmin');
Route::post('/updatedata3/{id_admin}', [AdminController::class, 'updatedata3'])->name('updatedata3');
Route::get('/deleteadmin/{id_admin}', [AdminController::class, 'deleteadmin'])->name('deleteadmin');


Route::get('/gagasan/data', [App\Http\Controllers\GagasanController::class, 'getData'])->name('gagasan.data');
=======
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');


Route::get('/home', [HomeController::class, 'home']);

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

    Route::resource('/users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

>>>>>>> 8198bda (Initial commit)
