<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataAgendaController;
use App\Http\Controllers\DataJadwalController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\DataPegawaiController;

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
    return view('dashboard.index');
});

// Route::get('/dashboard/DataJadwal', function () {
//     return view('dashboard.DataJadwal.index');
// });

// Route::get('/dashboard/DataPegawai', function () {
//     return view('dashboard.DataPegawai.index');
// });

// Route::get('/dashboard/DataAgenda', function () {
//     return view('dashboard.DataAgenda.index');
// });
// Route::get('/dashboard/DataLaporan', function () {
//     return view('dashboard.DataLaporan.index');
// });
//user
Route::get('/user', [DatauserController::class,'index'])->name('user');
Route::get('/user/create',[DatauserController::class, 'create'])->name( 'user.create');
Route::post('/user/store',[DatauserController::class, 'store'])->name( 'user.store');
Route::delete('/user/destroy/{id}',[DatauserController::class, 'destroy'])->name('user.destroy');
Route::get('/user/Edit/{id}',[DatauserController::class, 'edit'])->name( 'user.edit');
Route::put('/user/update/{id}',[DatauserController::class, 'update'])->name( 'user.update');
// Route::get('/reportpdf',[JadwalController::class, 'reportpdf'])-> name('jadwal.report');

//pegawai
Route::get('/pegawai', [DataPegawaiController::class,'index'])->name('pegawai');
Route::get('/pegawai/create',[DataPegawaiController::class, 'create'])->name( 'pegawai.create');
Route::post('/pegawai/store',[DataPegawaiController::class, 'store'])->name( 'pegawai.store');
Route::delete('/pegawai/destroy/{id}',[DataPegawaiController::class, 'destroy'])->name('pegawai.destroy');
Route::get('/pegawai/Edit/{id}',[DataPegawaiController::class, 'edit'])->name( 'pegawai.edit');
Route::put('/pegawai/update/{id}',[DataPegawaiController::class, 'update'])->name( 'pegawai.update');
Route::get('/pegawaireport',[DataPegawaiController::class, 'exportpdf'])-> name('pegawai.exportpdf');

//agenda
Route::get('/agenda', [DataAgendaController::class,'index'])->name('agenda');
Route::get('/agenda/create',[DataAgendaController::class, 'create'])->name( 'agenda.create');
Route::post('/agenda/store',[DataAgendaController::class, 'store'])->name( 'agenda.store');
Route::delete('/agenda/destroy/{id}',[DataAgendaController::class, 'destroy'])->name('agenda.destroy');
Route::get('/agenda/Edit/{id}',[DataAgendaController::class, 'edit'])->name( 'agenda.edit');
Route::put('/agenda/update/{id}',[DataAgendaController::class, 'update'])->name( 'agenda.update');

// jadwal
Route::get('/jadwal', [DataJadwalController::class,'index'])->name('jadwal');
Route::get('/jadwal/create',[DataJadwalController::class, 'create'])->name( 'jadwal.create');
Route::post('/jadwal/store',[DataJadwalController::class, 'store'])->name( 'jadwal.store');
Route::delete('/jadwal/destroy/{id}',[DataJadwalController::class, 'destroy'])->name('jadwal.destroy');
Route::get('/jadwal/Edit/{id}',[DataJadwalController::class, 'edit'])->name( 'jadwal.edit');
Route::put('/jadwal/update/{id}',[DataJadwalController::class, 'update'])->name( 'jadwal.update');

// Route::get('/register',[UserController::class, 'register'])->name('register');
// Route::post('/register',[UserController::class, 'register_action'])->name('register.action');
// Route::get('/login',[UserController::class, 'login'])->name('login');
// Route::post('/login',[UserController::class, 'login_action'])->name('login.action');



