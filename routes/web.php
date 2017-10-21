<?php

Route::get('/', 'HomeController@index');
Route::group(['prefix' => '/plan'], function(){
    Route::get('/manage', 'PlanController@index')->name('manage.plan');
    Route::group(['prefix' => '/{id}/todo'], function(){
        Route::get('/add', 'TodoController@create')->name('add.todo');
        Route::post('/', 'TodoController@store')->name('insert.todo');
        Route::get('/', 'PlanController@show')->name('manage.todo');
        Route::get('/move_{todo}_to_progress', 'TodoController@move')->name('move.todo');
    });

    Route::resource('/','PlanController', 
    ['names' => [
        'index' => 'index.plan',
        'create' => 'create.plan',
        'store' => 'store.plan',
    ], 
    'parameters' => [
        '' => 'id'   
        ]
    ]);
});
