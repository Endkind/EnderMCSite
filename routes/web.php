<?php

use App\Http\Controllers\CommandController;
use App\Http\Controllers\GameModeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RuleController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class, 'viewIndex'])->name('index');

#region Legal Pages
Route::get('/imprint', [IndexController::class, 'viewImprint'])->name('imprint');

Route::get('/privacy-policy', [IndexController::class, 'viewPrivacyPolicy'])->name('privacy-policy');

Route::get('/licences', [IndexController::class, 'viewLicences'])->name('licences');
#endregion

#region GameMode
Route::prefix('/gamemode')->group(function () {
    Route::get('/', [GameModeController::class, 'viewIndex'])->name('gamemode');

    Route::get('/communitycraft', [GameModeController::class, 'viewCommunityCraft'])->name('gamemode.communitycraft');

    Route::get('/tnt_tag', [GameModeController::class, 'viewTNTTag'])->name('gamemode.tnt_tag');

    Route::get('/all_agains_all', [GameModeController::class, 'viewAllAgainstAll'])->name('gamemode.all_against_all');
});
#endregion

#region Rules
Route::prefix('/rule')->group(function () {
    Route::get('/', [RuleController::class, 'viewIndex'])->name('rule');

    Route::get('/general', [RuleController::class, 'viewGeneral'])->name('rule.general');

    Route::get('/communitycraft', [RuleController::class, 'viewCommunityCraft'])->name('rule.communitycraft');
});
#endregion

#region Command
Route::prefix('/command')->group(function () {
    Route::get('/', [CommandController::class, 'viewIndex'])->name('command');

    Route::prefix('/general')->group(function () {
        Route::get('/', [CommandController::class, 'viewGeneral'])->name('command.general');

        Route::get('/lobby', [CommandController::class, 'viewGeneralLobby'])->name('command.general.lobby');
    });

    Route::prefix('/communitycraft')->group(function () {
        Route::get('/1.20.1', [CommandController::class, 'viewCommunityCraft1_20_1'])->name('command.communitycraft.1_20_1');
        
        Route::get('/1.21.4', [CommandController::class, 'viewCommunityCraft1_21_4'])->name('command.communitycraft.1_21_4');
    });
});
#endregion

#region Links
Route::get('/discord', [IndexController::class, 'viewDiscord'])->name('discord');

Route::get('/github', [IndexController::class, 'viewGitHub'])->name('github');

Route::get('/dockerhub', [IndexController::class, 'viewDockerHub'])->name('dockerhub');

Route::get('/papermc-hangar', [IndexController::class, 'viewPaperMCHangar'])->name('papermc-hangar');

Route::get('/uptime', [IndexController::class, 'viewUptime'])->name('uptime');

Route::get('/shop', [IndexController::class, 'viewShop'])->name('shop');
#endregion

#region FAQ
Route::get('/faq', [IndexController::class, 'viewFAQ'])->name('faq');
#endregion

#region DEV-Mode only
if (app()->environment('local')) {
    Route::get('/test', function () {
        return view('test');
    })->name('login');

    Route::get('/test4', function () {
        return view('test4');
    });
}
#endregion
