<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class BoutiqueController extends Controller
{
    public function index(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase.json');
        $firebase 		  = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://aeroporttuniscarthage.firebaseio.com')
            ->create();
        $database 		= $firebase->getDatabase();
        $ref=$database->getReference('boutiques');
        $boutiques=$ref->getValue();

        foreach($boutiques as $boutique){
            $all_boutiques[]=$boutique;
        }
        return view('boutique-list')->with('all_boutiques',$all_boutiques);
    }
}
