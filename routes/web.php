<?php

use App\Http\Controllers\cursosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatosCursoController;
use App\Http\Controllers\CarritoController;


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

Route::redirect('/', '/home');


Route::get('/home', function () {
    return view('home');
});


// Ruta para pantalla contacto
Route::get('/contacto', function () {
    return view('contacto');
});

// Ruta para pantalla nosotros
route::get('/nosotros', function () {
    return view('nosotros');
});

// Ruta para la pantalla menbresia 
route::get('/membresia', function () {
    return view('membresia');
});

//Grupo para mostrar  los cursos de la membresia
Route::controller(cursosController::class)->group(function () {
    //ruta para mostrar los cursos
    Route::get('cursosMembresia/Iso', 'Iso')->name('Iso');
    Route::get('cursosMembresia/Sap', 'Sap')->name('Sap');
    Route::get('cursosMembresia/HSE', 'HSE')->name('HSE');
    Route::get('cursosMembresia/Excel', 'Excel')->name('Excel');
    Route::get('cursosMembresia/Office', 'Office')->name('Office');
    Route::get('cursosMembresia/Calidad', 'Calidad')->name('Calidad');
    Route::get('cursosMembresia/Logistica', 'Logistica')->name('Logistica');
    Route::get('cursosMembresia/Ingeneria', 'Ingeneria')->name('Ingeneria');
    Route::get('cursosMembresia/Ambiental', 'Ambiental')->name('Ambiental');
    Route::get('cursosMembresia/Six_Sigma', 'Six_sigma')->name('Six_sigma');
    Route::get('cursosMembresia/Administracion', 'Administracion')->name('Administracion');
    Route::get('cursosMembresia/inocuidad', 'inocuidad')->name('Inocuidad');
});

// Ruta pra el login y registro
route::get('/login&Registro', function () {
    return view('login');
})->name('vistalogin');


Route::get('/index', function () {
    return view('index');
});

Route::get('/login2', function () {
    return view('login');
})->name('vistalogin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/obtener-cursos', [DatosCursoController::class, 'obtenerCursos']);

Route::post('/add-to-cart', [CarritoController::class, 'addToCart'])->name('add.to.cart');
Route::post('/remove-from-cart', [CarritoController::class, 'removeFromCart'])->name('remove.from.cart');
Route::get('/cursos', [CarritoController::class, 'index'])->name('cursos.index');
Route::post('/checkout', [CarritoController::class, 'checkout'])->name('checkout');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
