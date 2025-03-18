<?php

use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman produk
Route::get('/Produk', function () {
    return view('Produk'); 
});

// Halaman keranjang
Route::get('/Keranjang', function () {
    return view('Keranjang'); 
});

// Halaman Chekout
Route::get('/Chekout', function () {
    return view('Chekout'); 
});

// Halaman Tambah Keranjang
Route::get('/Tambah-Keranjang', function () {
    return view('Tambah-Keranjang'); 
});