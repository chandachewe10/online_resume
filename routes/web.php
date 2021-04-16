<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\resume;

/*--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function(){
    return view('personal'); 
})->middleware('auth');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Resume Routes
Route::get('/intro', function () {
    return view('intro');
})->name('intro');



Route::post('welcome/{id}',[resume::class, 'downloads'])
->middleware('auth');



 //personal route submit   
Route::post('personal/{id}', [resume::class, 'personal'])
                ->middleware('auth');
                //profile route get
 Route::get('/profileroute', function(){
                    return view('profile'); 
                })->name('profileroute');             
//profile route submit
Route::post('profile/{id}', [resume::class, 'profile'])
                ->middleware('auth');

                  //employment route get
 Route::get('/employment', function(){
    return view('employment'); 
})->name('employment'); 

 //employment route get
 Route::get('/employment1', function(){
    return view('employment1'); 
})->name('employment1'); 


//employment route get
Route::get('/employment2', function(){
    return view('employment2'); 
})->name('employment2'); 

 //employment route submit
 Route::post('employment/{id}', [resume::class, 'employment'])
                ->middleware('auth'); 

                //employment1 route submit
 Route::post('employment1/{id}', [resume::class, 'employment1'])
 ->middleware('auth'); 


 //employment1 route submit
 Route::post('employment2/{id}', [resume::class, 'employment2'])
 ->middleware('auth'); 

 //education route 
 Route::get('/education', function(){
    return view('education'); 
})->name('education'); 

//education route submit
Route::post('education/{id}', [resume::class, 'education'])
->middleware('auth');

//skills route 
Route::get('/skills', function(){
    return view('skills'); 
})->name('skills');



//skills route submit
Route::post('skills/{id}', [resume::class, 'skills'])
->middleware('auth');

//Hobbies route 
Route::get('/hobbies', function(){
    return view('hobbies'); 
})->name('hobbies');

//Hobbies route submit
Route::post('hobbies/{id}', [resume::class, 'hobbies'])
->middleware('auth');

//Languages route 
Route::get('/languages', function(){
    return view('languages'); 
})->middleware('auth')->name('languages');


//Languages route 


//Languages route submit
Route::post('languages/{id}', [resume::class, 'languages'])
->middleware('auth');







  
             

