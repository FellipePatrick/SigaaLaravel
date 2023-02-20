<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Novidade;
use PhpParser\Node\Stmt\Return_;

class DashController extends Controller
{
    public function dash(){
        return view('dash.dash');
    }

    public function store(Request $request){
        if($request ->title == null and $request -> description == null){
            return redirect('/dash')->with('msgr', 'Por favor preencha todos os campos de forma válida!');
        } else{
            $noti = new Notification;
            $noti->title = $request->title;
            $noti->description = $request->description;
            $noti->save();
            return redirect('/dash')->with('msgs', 'Mais uma noticia adicionada!');
        }
    }

    public function setNew(Request $request){
        $novo = new Novidade;
        if($request->title == '' or $request->description == '' or $request->image == ''){
            return redirect('/dash')->with('msgr', 'Por favor preencha todos os campos de forma válida!');
        }else{
            $novo->title = $request->title;
            $novo->description = $request->description;
            if($request->hasFile('image') && $request->file('image')->isValid()) {
                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                $requestImage->move(public_path('img/images'), $imageName);
                $novo->path = $imageName;
            }
            $novo->save();
            return redirect('/dash')->with('msgs', 'Mais uma novidade adicionada!');
        }
    }

}
