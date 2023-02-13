<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupportGroupController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PeerCounselingController;
use App\Http\Controllers\ProfessionalCounselingController;
use App\Http\Controllers\RegistrationProCounselingController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\PsytalkController;
use App\Http\Controllers\RegistrationPsytalkController;
use App\Http\Controllers\KelasBerprosesController;
use App\Http\Controllers\RegistrationPeerCounselingController;
use App\Http\Controllers\ScreeningController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/storage', function () {
    Artisan::call('storage:link');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/profile', [UserController::class, 'index'])->middleware('token');
Route::put('/profile/{users:username}', [UserController::class, 'update']);

// ADMINISTRASI
Route::get('/admin', [AdminController::class, 'index']);

// SCREENING
Route::get('/screening', [ScreeningController::class, 'create'])->middleware('token');
Route::post('/screening', [ScreeningController::class, 'store']);
Route::get('/admin/screening/{screenings:id}', [ScreeningController::class, 'show']);
Route::get('/admin/screening/{screenings:id}/edit', [ScreeningController::class, 'edit']);
Route::put('/admin/screening/{screenings:id}', [ScreeningController::class, 'update']);
Route::delete('/admin/screening/{screenings:id}', [ScreeningController::class, 'destroy']);

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
// Route::get('/layanan/peer-counseling/daftar', [PeerCounselingController::class, 'create'])->middleware('token');
// Route::post('/layanan/peer-counseling/daftar', [PeerCounselingController::class, 'store']);
// Route::get('/layanan/peer-counseling/{peer_counselings:id}', [PeerCounselingController::class, 'show']);
// Route::get('/layanan/peer-counseling/{peer_counselings:id}/edit', [PeerCounselingController::class, 'edit']);
// Route::put('/layanan/peer-counseling/{peer_counselings:id}', [PeerCounselingController::class, 'update']);
// Route::delete('/layanan/peer-counseling/{peer_counselings:id}', [PeerCounselingController::class, 'destroy']);
// Peer Counseling Registration Data
Route::get('/layanan/peer-counseling/daftar', [RegistrationPeerCounselingController::class, 'create'])->middleware('token');
Route::post('/layanan/peer-counseling/daftar', [RegistrationPeerCounselingController::class, 'store']);
Route::get('/layanan/peer-counseling/daftar/success', [RegistrationPeerCounselingController::class, 'regSuccess']);
Route::get('/layanan/peer-counseling', [PeerCounselingController::class, 'index']);
Route::get('/layanan/peer-counseling/{peer_counselings:id}', [RegistrationPeerCounselingController::class, 'show']);
Route::get('/admin/layanan/peer-counseling/{peer_counselings:id}/edit', [RegistrationPeerCounselingController::class, 'edit']);
Route::put('/admin/layanan/peer-counseling/{peer_counselings:id}', [RegistrationPeerCounselingController::class, 'update']);
Route::delete('/admin/layanan/peer-counseling/{peer_counselings:id}', [RegistrationPeerCounselingController::class, 'destroy']);
// Professional Counseling
Route::get('/admin/layanan/procounseling-list/tambah', [ProfessionalCounselingController::class, 'create'])->middleware('token');
Route::post('/admin/layanan/procounseling-list/tambah', [ProfessionalCounselingController::class, 'store']);
Route::get('/admin/layanan/procounseling-list/{id}', [ProfessionalCounselingController::class, 'show']);
Route::get('/admin/layanan/procounseling-list/{id}/edit', [ProfessionalCounselingController::class, 'edit']);
Route::put('/admin/layanan/procounseling-list/{id}', [ProfessionalCounselingController::class, 'update']);
Route::delete('/admin/layanan/procounseling-list/{id}', [ProfessionalCounselingController::class, 'destroy']);
// Professional Counseling Registration Data
Route::get('/layanan/professional-counseling/daftar', [RegistrationProCounselingController::class, 'create'])->middleware('token');
Route::post('/layanan/professional-counseling/daftar', [RegistrationProCounselingController::class, 'store']);
Route::get('/layanan/professional-counseling/daftar/success', [RegistrationProCounselingController::class, 'regSuccess']);
Route::get('/layanan/professional-counseling', [ProfessionalCounselingController::class, 'index']);
Route::get('/layanan/professional-counseling/{professional_counselings:id}', [RegistrationProCounselingController::class, 'show']);
Route::get('/admin/layanan/professional-counseling/{professional_counselings:id}/edit', [RegistrationProCounselingController::class, 'edit']);
Route::put('/admin/layanan/professional-counseling/{professional_counselings:id}', [RegistrationProCounselingController::class, 'update']);
Route::delete('/admin/layanan/professional-counseling/{professional_counselings:id}', [RegistrationProCounselingController::class, 'destroy']);

// PROGRAM
Route::get('/program', [ProgramController::class, 'index']);
// Psytalk
Route::get('/program/psytalk', [PsytalkController::class, 'index']);
Route::get('/admin/program/psytalk-list/tambah', [PsytalkController::class, 'create']);
Route::post('/admin/program/psytalk-list/tambah', [PsytalkController::class, 'store'])->middleware('token');
Route::get('/program/psytalk/daftar/success', [RegistrationPsytalkController::class, 'regSuccess']);
Route::get('/admin/program/psytalk-list', [PsytalkController::class, 'all']);
Route::get('/admin/program/psytalk-list/{id}', [PsytalkController::class, 'show']);
Route::get('/admin/program/psytalk-list/{id}/edit', [PsytalkController::class, 'edit']);
Route::put('/admin/program/psytalk-list/{id}', [PsytalkController::class, 'update']);
Route::delete('/admin/program/psytalk-list/{id}', [PsytalkController::class, 'destroy']);
// Psytalk Registration Data
Route::get('/program/psytalk/{id}/daftar', [RegistrationPsytalkController::class, 'create'])->middleware('token');
Route::post('/program/psytalk/{id}/daftar', [RegistrationPsytalkController::class, 'store']);
Route::get('/program/psytalk/{id}', [RegistrationPsytalkController::class, 'show']);
Route::get('/admin/program/psytalk/{id}/edit', [RegistrationPsytalkController::class, 'edit']);
Route::put('/admin/program/psytalk/{id}', [RegistrationPsytalkController::class, 'update']);
Route::delete('/admin/program/psytalk/{id}', [RegistrationPsytalkController::class, 'destroy']);
// Kelas Berproses
Route::get('/program/kelas-berproses/daftar', [KelasBerprosesController::class, 'create'])->middleware('token');
Route::post('/program/kelas-berproses/daftar', [KelasBerprosesController::class, 'store']);
Route::get('/program/kelas-berproses', [KelasBerprosesController::class, 'index']);
Route::get('/program/kelas-berproses/{kelas_berproses:id}', [KelasBerprosesController::class, 'show']);
Route::get('/program/kelas-berproses/{kelas_berproses:id}/edit', [KelasBerprosesController::class, 'edit']);
Route::put('/program/kelas-berproses/{kelas_berproses:id}', [KelasBerprosesController::class, 'update']);
Route::delete('/program/kelas-berproses/{kelas_berproses:id}', [KelasBerprosesController::class, 'destroy']);

// ARTIKEL BERPROSES
Route::get('/artikel-berproses', [ArtikelController::class, 'index']);
Route::get('/artikel-berproses/getLatest', [ArtikelController::class, 'getLatest']);
Route::get('/artikel-berproses/{artikel:id}', [ArtikelController::class, 'show']);
Route::get('/admin/artikel-berproses/tambah', [ArtikelController::class, 'create']);
Route::post('/admin/artikel-berproses/tambah', [ArtikelController::class, 'store']);
Route::get('/admin/artikel-berproses/{id}/edit', [ArtikelController::class, 'edit']);
Route::put('/admin/artikel-berproses/{id}', [ArtikelController::class, 'update']);
Route::delete('/admin/artikel-berproses/{id}', [ArtikelController::class, 'destroy']);

// TENTANG
Route::get('/tentang/ruang-berproses', [TentangController::class, 'index']);
Route::get('/tentang/associate-psychologist', [TentangController::class, 'viewPsychologist']);
Route::get('/tentang/tim-rb', [TentangController::class, 'viewTeam']);
