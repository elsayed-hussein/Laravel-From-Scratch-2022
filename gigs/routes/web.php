<?php

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'listing One',
                'description' => 'this is bla bla bla'
            ],
            [
                'id' => 2,
                'title' => 'listing Two',
                'description' => 'this is bla bla bla Two'
            ]
        ]
    ]);
});
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return response('<h1>welcome Hello World</h1>', 200)
//         ->header('foo', "bar");
// });

// Route::get('/posts/{id}', function ($id) {
//     // dd($id); // Dump, Die
//     // ddd($id);  // Dump, Die, Debug
//     return response('post' . " : " . $id);
// })->where('id', '[0-9]+'); //only if id is a number


// Route::get('/search', function (Request $request) {
//     // dd($request);
//     // dd($request->query());
//     return $request->query();
// });
