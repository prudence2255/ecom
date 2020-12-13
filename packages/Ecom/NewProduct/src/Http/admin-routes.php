<?php

Route::group(['middleware' => ['web', 'admin']], function () {

    Route::get('/admin/newproduct', 'Ecom\NewProduct\Http\Controllers\Admin\NewProductController@index')->defaults('_config', [
        'view' => 'newproduct::admin.index',
    ])->name('newproduct.admin.index');

});