<?php

namespace Lisennk\LaravelSlackEvents\Http;

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => __NAMESPACE__], function() {
    Route::post(config('slack-events.route'), 'EventController@fire');
});
