<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example\FirstController;
use App\Http\Controllers\Shahadat;

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


// Route::get('/hi', function(){
//     return view('testabout')->name('testabout.us');
// });

Route::get('/country', function(){
    return view('country');
})->middleware('country');

// Route::get(md5('/aboutlskjfldkjflskj'), function(){
//     return view('about');
// })->name('about.us');

// Route::get('/contact', function(){
//     return view('contact');
// });

Route::get('/About-Us', [FirstController::class, 'about_us'])->name('about.us');
Route::get('/Contact-Us', [FirstController::class, 'contact_us'])->name('contact.us');


Route::post('/Student', [FirstController::class, 'studentStore'])->name('student.store');
Route::post('/Form validation', [FirstController::class, 'myformvalid'])->name('myform.valid');

Route::get('/Form', [FirstController::class, 'myform'])->name('myform.us');

Route::get('/Show Data', [FirstController::class, 'show_data'])->name('mydata.us');


Route::get('/country', [FirstController::class, 'country'])->name('country')->middleware('country');


Route::get('/Test-about', Shahadat::class)->name('testabout.us');


require __DIR__.'/auth.php';
