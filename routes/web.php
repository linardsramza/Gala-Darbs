<?php

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
    $galadarbaarticles = \App\galadarbaarticle::get();
    return view('startalapa',[
        "galadarbaarticles" => $galadarbaarticles,
    ]);
   
});
// Route::get('/logged', function () {
//     $galadarbaarticles = \App\galadarbaarticle::get();
//     return view('startalapalogged',[
//         "galadarbaarticles" => $galadarbaarticles,
//     ]);
   
// });

Route::get('/app', function () {
    
    return view('app');
   
});


Route::get('/blogaieraksts/{id}', function ($id) {
    $galadarbaarticles = \App\galadarbaarticle::find($id);


    return view('blogaieraksts',[
        "galadarbaarticles" => $galadarbaarticles,
    ]);
   
});

Route::get('/contact', function () {
    return view('statiskalapa');
   
});

Route::post('/', function () {
    $article = new \App\galadarbaarticle;
    $article->body = \Request("body", "Nothing was written");
    $article->head = \Request("head", "Nothing was written");
    $article->created_at = now();
    $article->updated_at = now();
   
    $article->save();

    $galadarbaarticles = \App\galadarbaarticle::get();
    return view('startalapa',[
        "galadarbaarticles" => $galadarbaarticles,
    ]);
});




















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');