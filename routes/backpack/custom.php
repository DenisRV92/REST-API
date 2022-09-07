<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Admin Routes
// --------------------------
// This route file is loaded automatically by Admin\Base.
// Routes you generate using Admin\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
}); // this should be the absolute last line of this file