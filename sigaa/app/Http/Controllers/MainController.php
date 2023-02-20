<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class MainController extends Controller
{
    public function index()
    {
        $noti = Notification::all();
        return view('index',['notification' => $noti]);
    }

    public function calendario(){
        return view('pages.calendario');
    }

    public function departamentos(){
        return view('pages.departamentos');
    }

    public function acervo(){
        return view('pages.acervo');
    }

    public function extensao(){
        return view('pages.extensao');
    }

    public function cursos(){
        return view('pages.cursos');
    }
}
