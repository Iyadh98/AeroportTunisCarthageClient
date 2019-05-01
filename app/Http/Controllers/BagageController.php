<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BagageController extends Controller
{
    public function getPost(){
       $type= Input::get('type');
        $couleur=Input::get('couleur');
        $poids=Input::get('poids');

return view('QRCODE')->with('type',$type)->with('couleur',$couleur)->with('poids',$poids);
    }
}
