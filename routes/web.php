<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

    Route::get('/absen', function () {
        return view('absen', ['title' => 'Absen']);
});

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/pengajuan', function () {
    return view('pengajuan');
});

Route::get('/analisis', function () {
    return view('analisis');
});