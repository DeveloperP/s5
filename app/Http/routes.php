<?php

Route::auth();
Route::model('calls','App\Models\PslCall');
Route::resource('calls','PslNewCallController');

Route::model('branches', 'App\Models\PslBranch');
Route::resource('branches','PslBranchController');

Route::model('jetties', 'App\Models\PslJetty');
Route::resource('jetties','PslJettyController');

Route::model('ports', 'App\Models\PslPort');
Route::resource('ports','PslPortController');

Route::model('principals', 'App\Models\PslPrincipal');
Route::resource('principals','PslPrincipalController');