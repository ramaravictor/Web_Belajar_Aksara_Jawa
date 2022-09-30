<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SignaturePadController;
use App\Http\Controllers\DashboardMateriController;
use App\Http\Controllers\DashboardSoalController;
use App\Http\Controllers\DashboardSantriController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardNilaiController;
use App\Models\kategori;
use App\Models\materi;

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
    return view('home', [
        "title" => "Home",
        "active" => 'home',
    ]);
})->middleware('auth');

//halaman materi
Route::get('/materi', function () {
    return view('materi', [
        'title' => 'Materi',
        "active" => 'materi',
        'materi' => materi::all(),

    ]);
})->middleware('auth');

Route::get('/materi/{materi:slug}', function () {
    return view('materi', [
        'title' => 'materi',
        "active" => 'materi',
        'materi' => materi::all(),
    ]);
})->middleware('auth');


//halaman single materi
Route::get('/materi/{materi:slug}', [MateriController::class, 'show']);


//halaman ujian

Route::get('/subjekujian', function () {
    return view('subjekujian', [
        "title" => "Ujian",
        "active" => 'ujian',
        'ujian' => kategori::all(),
    ]);
})->middleware('auth');


Route::get('/ujian/{kategori:slug}', function (kategori $kategori) {
    return view('daftarsoal', [
        'title' => $kategori->kategori,
        "active" => 'ujian',
        'soal' => $kategori->soal,
        'kategori' => $kategori->kategori,

    ]);
    // $kategori = Soal::latest()->when(request()->q, function($kategori) {
    //     $kategori = $kategori->where('detail', 'like', '%'. request()->q . '%');
    // })->paginate(10);
    // return view('kategoriujian', compact('kategori'));

})->middleware('auth');


//halaman soal
//Route::get('/soal', [SoalController ::class, 'index']);
Route::get('/soalujian/{soal:id}', [SoalController::class, 'show'])->middleware('auth');

//halaman nilai
Route::get('/nilai', [NilaiController::class, 'index'])->middleware('auth');

//jawaban nulis
Route::post('soal', [SoalController::class, 'upload'])->name('jawab.upl');





Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('admin');

Route::resource('/dashboard/materi', DashboardMateriController::class)
    ->middleware('admin');

Route::resource('/dashboard/soal', DashboardSoalController::class)
    ->middleware('admin');
    
Route::resource('/dashboard/user', DashboardUserController::class)
    ->middleware('admin');

Route::resource('/dashboard/nilai', DashboardNilaiController::class)
    ->middleware('admin');


Route::get('/signature-pad', [SignaturePadController::class, 'index']);
Route::post('/signature-pad', [SignaturePadController::class, 'save'])->name('signpad.save');
