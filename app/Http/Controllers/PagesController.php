<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home() {
        return view('pages.index');
    }
    function about() {
        return view('pages.about');
    }
    function contact() {
        return view('pages.contact');
    }
    function store(Request $request) {
        //    dd(request());
        //$data = request()->all();
        //    dd($data);

        $name = $request->name;
        //dd($request);
        return redirect()->route('thanks', ['name' => $name]);

    }
    function thanks($name, Request $request) {
        //dd($name);
        return view('pages.thankyou')->with(compact('name'));
    }
}
