<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupportGroupController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PeerCounselingController;
use App\Http\Controllers\ProfessionalCounselingController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\PsytalkController;
use App\Http\Controllers\KelasBerprosesController;

use App\Models\User;

use App\Http\Middleware\AuthCustom;

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
    return view('index');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/profile', UserController::class)->middleware('token');
Route::get('/profile/{username}', function ($username) {
    $title = "My Profile";
    $username = User::where('username', $username)->first()->username;
    $id = User::where('username', $username)->first()->id;
    return view('/user/profile', compact(['title']));
});

// LAYANAN
Route::get('/layanan', [LayananController::class, 'index']);
// Virtual Support Group
Route::get('/layanan/support-group/daftar', [SupportGroupController::class, 'create'])->middleware('token');
Route::post('/layanan/support-group/daftar', [SupportGroupController::class, 'store']);
Route::get('/layanan/support-group', [SupportGroupController::class, 'index']);
Route::get('/layanan/support-group/{support_groups:id}', [SupportGroupController::class, 'show']);
Route::get('/layanan/support-group/{support_groups:id}/edit', [SupportGroupController::class, 'edit']);
Route::put('/layanan/support-group/{support_groups:id}', [SupportGroupController::class, 'update']);
Route::delete('/layanan/support-group/{support_groups:id}', [SupportGroupController::class, 'destroy']);
// Virtual Peer Counseling
Route::get('/layanan/peer-counseling/daftar', [PeerCounselingController::class, 'create'])->middleware('token');
Route::post('/layanan/peer-counseling/daftar', [PeerCounselingController::class, 'store']);
Route::get('/layanan/peer-counseling', [PeerCounselingController::class, 'index']);
Route::get('/layanan/peer-counseling/{peer_counselings:id}', [PeerCounselingController::class, 'show']);
Route::get('/layanan/peer-counseling/{peer_counselings:id}/edit', [PeerCounselingController::class, 'edit']);
Route::put('/layanan/peer-counseling/{peer_counselings:id}', [PeerCounselingController::class, 'update']);
Route::delete('/layanan/peer-counseling/{peer_counselings:id}', [PeerCounselingController::class, 'destroy']);
// Professional Counseling
Route::get('/layanan/professional-counseling/daftar', [ProfessionalCounselingController::class, 'create'])->middleware('token');
Route::post('/layanan/professional-counseling/daftar', [ProfessionalCounselingController::class, 'store']);
Route::get('/layanan/professional-counseling', [ProfessionalCounselingController::class, 'index']);
Route::get('/layanan/professional-counseling/{peer_counselings:id}', [ProfessionalCounselingController::class, 'show']);
Route::get('/layanan/professional-counseling/{peer_counselings:id}/edit', [ProfessionalCounselingController::class, 'edit']);
Route::put('/layanan/professional-counseling/{peer_counselings:id}', [ProfessionalCounselingController::class, 'update']);
Route::delete('/layanan/professional-counseling/{peer_counselings:id}', [ProfessionalCounselingController::class, 'destroy']);

// PROGRAM
Route::get('/program', [ProgramController::class, 'index']);
// Psytalk
Route::get('/program/psytalk/daftar', [PsytalkController::class, 'create'])->middleware('token');
Route::post('/program/psytalk/daftar', [PsytalkController::class, 'store']);
Route::get('/program/psytalk', [PsytalkController::class, 'index']);
Route::get('/program/psytalk/{psytalks:id}', [PsytalkController::class, 'show']);
Route::get('/program/psytalk/{psytalks:id}/edit', [PsytalkController::class, 'edit']);
Route::put('/program/psytalk/{psytalks:id}', [PsytalkController::class, 'update']);
Route::delete('/program/psytalk/{psytalks:id}', [PsytalkController::class, 'destroy']);
// Kelas Berproses
Route::get('/program/kelas-berproses/daftar', [KelasBerprosesController::class, 'create'])->middleware('token');
Route::post('/program/kelas-berproses/daftar', [KelasBerprosesController::class, 'store']);
Route::get('/program/kelas-berproses/{kelas_berproses:id}', [KelasBerprosesController::class, 'show']);
Route::get('/program/kelas-berproses/{kelas_berproses:id}/edit', [KelasBerprosesController::class, 'edit']);
Route::put('/program/kelas-berproses/{kelas_berproses:id}', [KelasBerprosesController::class, 'update']);
Route::delete('/program/kelas-berproses/{kelas_berproses:id}', [KelasBerprosesController::class, 'destroy']);

// Artikel Berproses
Route::get('/artikel-berproses', [ArtikelController::class, 'index']);