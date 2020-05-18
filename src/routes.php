<?php

use Illuminate\Support\Facades\Route;

$rickroll = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ?rel=0&amp;autoplay=1';

Route::redirect('.env', $rickroll);
Route::redirect('.htacess', $rickroll);
Route::redirect('phpinfo.php', $rickroll);

Route::redirect('wp-login', $rickroll);
Route::redirect('wp-login.php', $rickroll);

Route::prefix('wp-admin')->group(function () {
    Route::get('{any?}', function ($any = null) {
        return redirect('https://www.youtube.com/watch?v=dQw4w9WgXcQ?rel=0&amp;autoplay=1');
    })->where('any', '.*');
});

// Future memes
// Route::get('', function () {
//     return view('mitchazj::rickroll');
// });
