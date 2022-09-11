<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupportGroupController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PeerCounselingController;
use App\Http\Controllers\ProfessionalCounselingController;
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

Route::get('/layanan', [LayananController::class, 'index']);

// LAYANAN
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
Route::get('/layanan/professional-counseling/daftar', [ProfessionalCounselingController::class, 'index']);
Route::post('/layanan/professional-counseling/daftar', [ProfessionalCounselingController::class, 'store']);

// PROGRAM
// Psytalk
Route::get('/program/psytalk/daftar', [PsytalkController::class, 'index']);
Route::post('/program/psytalk/daftar', [PsytalkController::class, 'store']);
// Kelas Berproses
Route::get('/program/kelas-berproses/daftar', [KelasBerprosesController::class, 'index']);
Route::post('/program/kelas-berproses/daftar', [KelasBerprosesController::class, 'store']);