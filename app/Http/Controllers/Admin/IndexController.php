<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function login(){
        session(['admin'=>'123456']);
        return 'login';
    }

    public function index(){
        return 'index';
    }
}
