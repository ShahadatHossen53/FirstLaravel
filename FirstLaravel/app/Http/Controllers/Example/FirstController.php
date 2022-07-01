<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function contact_us()
    {
        return view('contact');
    }

    public function about_us()
    {
        return view('about');
    }

    //--Country Method
    public function country()
    {
        return view('country');
    }


    //--Show data Method
    public function show_data()
    {
        return view('myData');
    }


    public function myform()
    {
        return view('myform');
    }
    public function myformvalid(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'password' => 'required|min:3|max:25',
        ]);

        \Log::channel('mycustomlog')->info('This is user: '.rand(1,20));
        return redirect()->back();

        //dd($request->all());
        // return view('myform');
    }


    //--Student Store
    public function studentStore(Request $request)
    {
        

        echo "Hello ".$request->name;
    }
}
