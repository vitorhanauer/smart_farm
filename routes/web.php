<?php

use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Requests\SignUpRequest;
use App\Models\Sensor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/entrar', function () {
    if(Auth::check()){
        return to_route('dashboard');
    }
    return Inertia::render('SignIn');
})->name('auth.signin');

Route::post('/entrar', function (Request $request) {
    if(Auth::attempt($request->all())){
        return to_route('dashboard');
    }
    return redirect()->back();
});

Route::get('/cadastrar', function () {
    return Inertia::render('SignUp');
})->name('auth.signup');

Route::post('/cadastrar', function (SignUpRequest $request) {
    $user = User::create($request->all());
    Auth::login($user);
    return to_route('dashboard');
});

Route::post('/sair', function() {
    Auth::logout();
    return redirect()->route('auth.signin');
});

Route::middleware(AuthMiddleware::class)->group(function () {
    Route::get('/', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::middleware(RoleMiddleware::class)->group(function () {
        Route::get('/sensores', function () {
            return Inertia::render('Sensor')->with('datas', Sensor::orderBy('created_at','desc')->get());
        })->name('sensors');;
    
        Route::get('/atuadores', function () {
            return Inertia::render('Actuator');
        })->name('actuators');;
    
        Route::get('/historico', function () {
            return Inertia::render('History');
        })->name('historic');;
    
        Route::get('/equipe', function () {
            return Inertia::render('Team');
        })->name('team');;
    });

});

Route::get('/sensors', function () {
    return response()->json([
        "temperature" => rand(10, 80),
        "humidity" => rand(10, 80),
        "steam" => rand(10, 80),
        "light" => rand(10, 80),
        "soil" => rand(10, 80),
        "water" => rand(10, 80)
    ]);
});

Route::get('/actuator', function (Request $request) {
    return response()->json([
        "status" => true,
        "cmd" => $request->get('cmd')
    ]);
});
