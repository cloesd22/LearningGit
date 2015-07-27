<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Controlfreak extends Controller
{



    public function register()
    {

        return view('pages.register');



    }

    public function account()
    {

        return view('pages.account');


    }

    public function login()
    {

        return view('pages.login');


    }



    public function about()
    {

        return view('pages.about')->with([
            'word1' => 'testing',
            'word2' => 'since 2014'


        ]);
    }

    public function mainpage()
    {

        return view('pages.mainpage');
    }


}
