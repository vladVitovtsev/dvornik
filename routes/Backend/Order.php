<?php
Route::group([
    'prefix'     => 'order',
    'as'         => 'order.',
    'namespace'  => 'Order',
], function () {

    /*
     * User Management
     */
    Route::group([
        'middleware' => 'access.routeNeedsRole:1',
    ], function () {
        Route::group(['namespace' => 'Order'], function () {

            Route::get('order', 'OrderController@index')->name('order.index');
        });
    });
});