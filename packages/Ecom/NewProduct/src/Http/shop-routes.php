<?php

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency']], function () {

    Route::get('/', 'Ecom\NewProduct\Http\Controllers\Shop\NewProductController@index')->defaults('_config', [
        'view' => 'newproduct::shop.index',
    ])->name('shop.home.index');

});