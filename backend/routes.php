<?php
use Illuminate\Support\Facades\Route;

require_once $pluginPath . '/controller.php';

Route::prefix('/api')->middleware(['api', 'auth.central'])->group(function () {
    Route::get('/plugins/emoticons/emotes',              [EmoticonController::class, 'index']);
    Route::post('/admin/plugins/emoticons/emotes',       [EmoticonController::class, 'store']);
    Route::delete('/admin/plugins/emoticons/emotes/{name}', [EmoticonController::class, 'destroy']);
});
