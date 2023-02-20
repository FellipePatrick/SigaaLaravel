<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use PhpParser\Node\Stmt\Return_;

class DashController extends Controller
{
    public function dash(){
        
        return view('dash.dash');
    }

    public function store(Request $request){
        if($request ->title == null and $request -> description){
            $noti = new Notification;
            $noti->title = $request->title;
            $noti->description = $request->description;
            $noti->save();
            return redirect('/');
        } else{
            return redirect('/dash');
        }
    }

}
