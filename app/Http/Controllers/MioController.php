<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MioController extends Controller
{
    public function index(){
        return "<h1>Controller richiamato correttamente</h1>";
    }
}
