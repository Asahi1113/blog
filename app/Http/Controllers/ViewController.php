<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Andy',
            'age' => 25
        ];
        $str = 'I miss you';
        return view('my_laravel',compact('data','str'));
    }
}
