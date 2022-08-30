<?php

namespace App\Http\Controllers;

class HomeController extends Controller{


    function showberanda(){
        return view('beranda');
    }

    function showproduk(){
        return view('produk');
    }

    function showkategori(){
        return view('kategori');
    }
       
    }
        