<?php

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/eventos', function () {
    return view('eventos');
})->name('eventos');

Route::get('/voluntario', function () {
    return redirect('https://docs.google.com/forms/d/e/1FAIpQLSc7kjTMSbwaod6VyqiukX7DIMdfYBDFACehWDqePnmLMzdNpg/viewform');
})->name('voluntario');

Route::get('/conheca', function () {
    return view('conheca');
})->name('conheca');

Route::group(['prefix' => 'projetos'], function(){
    Route::get('/aprendizjr', function () {
        return view('projetos.aprendizJr.index');
    })->name('aprendiz-jr');
    
    
    Route::group(['prefix' => 'coral'], function () {
        Route::get('/preciosasemente', function () {
            return view('projetos.coral.preciosaSemente.index');
        })->name('preciosa-semente');
        
        Route::get('/jovens', function () {
            return view('projetos.coral.jovens.index');
        })->name('coral-jovens');
    });
});

Auth::routes();

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::get('dashboard', function() {
        return "dashboard";
    });
});

Route::get('/home', 'HomeController@index')->name('home');
