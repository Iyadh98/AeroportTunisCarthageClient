<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
class HotelController extends Controller
{
    public function index(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase.json');
        $firebase 		  = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://aeroporttuniscarthage.firebaseio.com')
            ->create();
        $database 		= $firebase->getDatabase();
        $ref=$database->getReference('hotels');
        $hotels=$ref->getValue();

        foreach($hotels as $hotel){
            $all_hotels[]=$hotel;
        }
        Log::info($all_hotels);
        return view('hotel-listing')->with('all_hotels',$all_hotels);
    }
}
