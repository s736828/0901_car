<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('car.index');
})->name('cars.index');

Route::get('/f1', function () {
    return view('car.f1');
})->name('cars.f1');

Route::get('/f2', function () {
    return view('car.f2');
})->name('cars.f2');

Route::get('/f3', function () {
    return view('car.f3');
})->name('cars.f3');


Route::get('/tasks', function () {
    $data = [
        [
            'id' => 1,
            'name' => 'amy'
        ],
        [
            'id' => 2,
            'name' => 'jerry'
        ],
        [
            'id' => 3,
            'name' => 'jackey'
        ],

    ];

    // return view('tasks', ['tasks' => Task::all()]);
    return view('tasks', ['tasks' => $data]);
});


Route::get('/abc', function () {
    $data = [
        [
            'id' => 4,
            'name' => 'aaa'
        ],
        [
            'id' => 5,
            'name' => 'bbb'
        ],
        [
            'id' => 6,
            'name' => 'ccc'
        ],

    ];

    // return view('tasks', ['tasks' => Task::all()]);
    return view('abc', ['abcs' => $data]);
});

// 餐廰
Route::get('/foods', function () {
    return view('food.index');
})->name('foods.index');

Route::get('/foods_h1', function () {
    return view('food.h1');
})->name('foods.h1');

Route::get('/foods_h2', function () {
    return view('food.h2');
})->name('foods.h2');

Route::get('/foods_h3', function () {
    return view('food.h3');
})->name('foods.h3');

Route::get('/foods_h4', function () {
    return view('food.h4');
})->name('foods.h4');


