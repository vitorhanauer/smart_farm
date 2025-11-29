<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/entrar', function(){
    return Inertia::render('SignIn');
});

Route::get('/cadastrar', function(){
    return Inertia::render('SignUp');
});

Route::get('/', function(){
    return Inertia::render('Dashboard');
});

Route::get('/sensores', function(){
    return Inertia::render('Sensor');
});

Route::get('/atuadores', function(){
    return Inertia::render('Actuator');
});

Route::get('/historico', function(){
    return Inertia::render('History');
});

Route::get('/equipe', function(){
    return Inertia::render('Team');
});

Route::get('/sensors', function(){
    return response()->json([
        "temperature" => rand(10,80),
        "humidity" => rand(10,80),
        "steam" => rand(10,80),
        "light" => rand(10,80),
        "soil" => rand(10,80),
        "water" => rand(10,80)
    ]);
});

Route::get('/actuator', function (Request $request){
    return response()->json([
        "status" => true,
        "cmd" => $request->get('cmd')
    ]);
});