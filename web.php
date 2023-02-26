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

Route::get('/', function () {

    $nome = "Guilherme de Paula";
    $idade = 29;
    $job = "Desenvolvedor FullStack";

    $arr = [1,2,3,4,5,6,7,8,9];

    $nomes = ["Marieta", "Dorzelina","Pangeia","Criciúma","Gertrudes"];

    //Devemos rotear a variável para o Return, assim a variável pode ser INTERPOLADA
    return view('welcome',
        ['nome' => $nome,
        'idade' => $idade,
        'job' => $job,
        'arr' => $arr,
        'nomes' => $nomes
    ]);
});

Route::get('/protudos', function () {
    return view('produtos');
});