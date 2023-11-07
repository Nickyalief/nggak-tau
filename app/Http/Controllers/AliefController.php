<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;

class AliefController extends Controller
{
    public function home(){
        return view ('home');
    }
    public function tentang(){
        return view ('tentang');
    }
    public function kontak(){
        return view ('kontak');
    }
    public function index(){
        return view ('posts.index');
    }

    public function formsubmit(PostRequest $request){
        $mangalif = $request->validate(PostRequest::rules());

        return back()->with("alif",$mangalif);
    }

}


