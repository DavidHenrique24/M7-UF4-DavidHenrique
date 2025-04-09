<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//Estas son funciones anonimas

Route::post('/students',[StudentController::class,'store']);

//Para agregar un estudiante nuevo
Route::post('/students',[StudentController::class,'store']);

//Para actualizar un estudiante ya existente, {id} es un parámetro dinámico: cuando llamamos a /api/students/3, Laravel
//captura ese 3 y lo pasa como argumento.


Route::put('/students/{id}',[StudentController::class,'update']);
//Para actualizar parcialmente un estudiante});

//Para borrar un unico estudiante
Route::delete('/students/{id}', function () { return 'Deleti student'; });

//Para obtener un unico estudiante es Get, Devuelve los datos del estudiante
Route::get('/students/{id}', function () {return 'Getting one student'; });

