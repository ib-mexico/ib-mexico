<?php

Route::get('/', function () {
    return view('Index');
})->name('inicio');

Route::get('nosotros', function () {
    return view('About');
})->name('nosotros');

Route::get('servicios', function () {
    return view('Services');
})->name('servicios');

Route::get('sucursales', function () {
    return view('Offices');
})->name('sucursales');

Route::get('contacto', function () {
    return view('Contact');
})->name('contacto');

Route::post('contacto/mensaje', 'ContactController@sendMessaje')->name('form.menssaje');