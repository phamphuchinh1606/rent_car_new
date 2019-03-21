<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    protected $folderView = "home";

    public function index(){
        return $this->view('home');
    }
}
