<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeUnit\FunctionUnit;
use App\Http\Controllers\AuthController;

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

// Route::get('/me', function(){
//     return "Pamungkas";
// });

// Route::get('/me', function(){
//     return ["Pamungkas", "kk4", "12rpl1"];
// });

// Route::get('/me', function(){
//     return[
//         'nama' => 'Pamungkas',
//         'nis' => 3103119010,
//         'kelas' => 'XII RPL 1',
//         'Nomor HP' => 1112222333
//     ];
// });



// Route::get('/me', function(){
//     return response()->json(
//         [
//         'nama' => 'Pamungkas',
//         'nis' => 3103119010,
//         'kelas' => 'XII RPL 1',
//         'Nomor HP' => 1112222333
//         ],
//     );
// });

Route::get('/back', function(){
    return redirect('/');
});

// Route::get('/me', [AuthController::class, 'me']);
Route::get('/me', 'App\Http\Controllers\AuthController@me');
