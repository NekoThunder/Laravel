<<<<<<< Updated upstream
<?php

=======
<!--
Author      : Phurphat Khumsuan[Netkung]
ID          : 65160096
Workshop    : #6
-->

<?php

use App\Http\Controllers\C_titles;
use App\Http\Controllers\MyAuth;
use App\Http\Controllers\MyController;
>>>>>>> Stashed changes
use Illuminate\Http\Request;
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

<<<<<<< Updated upstream
=======
// MyAuth

Route::get('/login', [MyAuth::class, 'login_view'])->name('login');
Route::get('/register', [MyAuth::class, 'register_view']);
Route::get('/logout', [MyAuth::class, 'logout_process']);

Route::post('/login', [MyAuth::class, 'login_process']);
Route::post('/register', [MyAuth::class, 'register_process']);

Route::resource('titles', C_titles::class)->middleware('auth');
Route::middleware('auth')->group(function(){});

//


Route::resource('titles', C_titles::class);

Route::get('/my-controller', [MyController::class, 'index']);

Route::get('/my-controller2', 'App\Http\Controllers\MyController@index');
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller3', 'MyController@index');
    Route::post('/my-controller3-post', 'MyController@store');
});

Route::resource('/my-controller4', MyController::class);


>>>>>>> Stashed changes
Route::get('/', function () {

    return view('welcome');

});

Route::get('/my-route',function() {

    $data = ['val_a' => 'Hello World!'];
    $data['val_b'] = "Laravel";
    
    return view('myfolder.mypage',$data);

});

Route::post('/my-route', function(Request $req) {

    $data['myinput'] = $req->input('myinput');

    return view('myroute', $data);

});
