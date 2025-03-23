<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('web.homepage');
   });
   
   Route::get('/Produk', function(){
    return view('Produk');
   });
   Route::get('product/{slug}', function($slug){
    return "halaman single product - ".$slug;
   });
   Route::get('/', function(){
    return view('web.categories');
   });
   Route::get('category/{slug}', function($slug){
    return "halaman single category - ".$slug;
   });
   Route::get('cart', function(){
    return "halaman cart";
   });
   Route::get('checkout', function(){
    return "halaman checkout";
   }); 