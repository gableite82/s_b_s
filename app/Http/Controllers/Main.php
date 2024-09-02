<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller

{
    // ============================================
    //   main page
    // ============================================
    public function index()
    {
        $data = [
            'title' => 'S.B.S'
        ];
        return view('index', $data);
    }

    // ============================================
    //   
    // ============================================

}
