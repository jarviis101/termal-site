<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => [
        config('backpack.base.web_middleware', 'web'),
        config('backpack.base.middleware_key', 'admin'),
    ],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('news', 'NewsCrudController');
    // Route::crud('page', 'PageCrudController');
    Route::crud('image', 'ImageCrudController');
    Route::crud('certificate', 'CertificateCrudController');
    Route::crud('vacancy', 'VacancyCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('slide', 'SlideCrudController');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('service', 'ServiceCrudController');
    Route::crud('advantage', 'AdvantageCrudController');
    Route::crud('contact', 'ContactCrudController');
    Route::crud('video', 'VideoCrudController');
    Route::crud('partner', 'PartnerCrudController');
    Route::crud('request', 'RequestCrudController');
}); // this should be the absolute last line of this file