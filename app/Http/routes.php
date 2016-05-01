<?php

Route::pattern('id', '[0-9]+');

Route::get('/', function () {
    return view('app');
});

/*
 |------------------------------------------------
 | Rotas Estaticas
 |------------------------------------------------
 */
Route::get('/{viewName}', [
    'uses'      => 'StaticController@index'
]);

///*
// |------------------------------------------------
// | Rotas
// |------------------------------------------------
// */
//Route::group([
//    'namespace' => 'MyNamespace',
//    'prefix'    => 'mynamespace'
//],
//function () {
//
//    Route::get('/', [
//        'uses' => 'MyNamespaceController@index'
//    ]);
//
//});
