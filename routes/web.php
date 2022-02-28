<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
});

Route::get('/produtos', [ProdutoController::class, 'listar']);


Route::get('/sobre', function (){
    return "<div>
    <h1>Sobre</h1>
    <p>Este é o projeto <strong>Estoque</strong> do livro <strong><em>PHP e Laravel - Crie Aplicações web como um verdadeiro artesão</em></strong>.<p>
    <img src='https://m.media-amazon.com/images/I/417jR0IdRRL.jpg'></img>
    </div>";
});