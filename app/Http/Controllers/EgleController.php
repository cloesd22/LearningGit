<?php

namespace App\Http\Controllers;

use App\Egle;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EgleController extends Controller
{
    public function start()
    {
        $Egle= Egle::all();

        return view('pages.Egle',compact('Egle'));



    }

    public function starter($id)
    {
        $Egle= Egle::find($id);
        return view('pages.EgleSaying',compact('Egle'));



    }

}
