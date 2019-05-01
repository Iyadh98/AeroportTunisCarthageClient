<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Support\Facades\Log;
use Unirest\Request\Test\UnirestRequestTest;
use Illuminate\Support\Facades\Input;
use GuzzleHttp;
use GuzzleHttp\Exception\GuzzleException;


class ScrapperController extends Controller
{

    public function scrap(){
        Log::info("IM IN");
        include(__DIR__.'/simple_html_dom.php');
        $websiteUrl="https://www.aeroport-tunis-carthage.com/horaires-departs-aeroport-tunis-carthage.php";
        $html=file_get_html($websiteUrl);

        $web=$html->find('tbody>tr');
        $websiteUrl1="https://light.etaxi.tn/#/home";
        $html1=file_get_html($websiteUrl);
        foreach($html1->find('.v-content') as $web){

        }
        $response = \Unirest\Request::get("https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/browsequotes/v1.0/US/TND/en-US/SFO-sky/JFK-sky/2019-04-09?inboundpartialdate=2019-01-01",
            array(
                "X-RapidAPI-Host" => "skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
                "X-RapidAPI-Key" => "66fb48be63msh9b59c66853889d2p17878fjsn5eac4557c2a1"
            )
        );
        $response1 = \Unirest\Request::get("https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/autosuggest/v1.0/UK/GBP/en-GB/?query=Stockholm",
            array(
                "X-RapidAPI-Host" => "skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
                "X-RapidAPI-Key" => "66fb48be63msh9b59c66853889d2p17878fjsn5eac4557c2a1"
            )
        );
        $arr2 = json_encode($response1,true);
        $arr3= json_decode($arr2,true);
        Log::info($arr3);

        return view('flight-listing')->with('web',$web);
    }
    public function autocomplete(Request $request){
        Log::info("HELLO");
        if($request->get('query'))
        {
            $query = $request->get('query');
            Log::info($query);
            $response1 = \Unirest\Request::get("https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/autosuggest/v1.0/UK/GBP/en-GB/?query=".$query,
                array(
                    "X-RapidAPI-Host" => "skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
                    "X-RapidAPI-Key" => "66fb48be63msh9b59c66853889d2p17878fjsn5eac4557c2a1"
                )
            );
            $arr2 = json_encode($response1,true);
            $data= json_decode($arr2,true);
            Log::info("HELLO");
            Log::info($data);
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data['body']['Places'] as $row)
            {
                $output .= '
       <li class="abcd"><a href="#">'.$row['PlaceName'].'('.$row['PlaceId'].')'.'</a></li>
       ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }


    public function autocompleteTo(Request $request){
        Log::info("HELLO1");
        if($request->get('query'))
        {Log::info("HELLO2");
            $query1 = $request->get('query');
            Log::info($query1);
            $responsea = \Unirest\Request::get("https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/autosuggest/v1.0/UK/GBP/en-GB/?query=".$query1,
                array(
                    "X-RapidAPI-Host" => "skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
                    "X-RapidAPI-Key" => "66fb48be63msh9b59c66853889d2p17878fjsn5eac4557c2a1"
                )
            );
            $arr21 = json_encode($responsea,true);
            $dataa= json_decode($arr21,true);
            Log::info("HELLO");
            Log::info($dataa);
            $output1 = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($dataa['body']['Places'] as $row)
            {
                $output1 .= '
       <li class="bcda"><a href="#">'.$row['PlaceName'].'('.$row['PlaceId'].')'.'</a></li>
       ';
            }
            $output1 .= '</ul>';
            echo $output1;
        }

    }

    public function searchFlights(){
        $from1=Input::get('from');
        $from2=explode("(",$from1);
        $from3=explode(")",$from2[1]);
        $from=$from3[0];
        $to1=Input::get('to');
        $to2=explode("(",$to1);
        $to3=explode(")",$to2[1]);
        $to=$to3[0];
        $dateAllee=Input::get('checkin');
        $dateRetour=Input::get('checkout');
        if(Input::get('classe')=="Economique"){
            $classe="economy";
        }
        else if(Input::get('classe')=="Affaires"){
            $classe="business";
        }
        else{
            $classe="first";
        }
        Log::info($from);
        Log::info($to);
        Log::info($dateAllee);
        Log::info($dateRetour);
        Log::info($classe);
        $params=http_build_query(array(
                "inboundDate" => $dateRetour,
                "cabinClass" => $classe,
                "children" => 0,
                "infants" => 0,
                "country" => "TN",
                "currency" => "TND",
                "locale" => "fr-FR",
                "originPlace" => $from,
                "destinationPlace" => $to,
                "outboundDate" => $dateAllee,
                "adults" => 1
            )

        );

        $cSession = curl_init();
        //step2
        curl_setopt($cSession,CURLOPT_URL,"https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/pricing/v1.0");
        curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($cSession, CURLOPT_POST, true);
        curl_setopt($cSession,CURLOPT_HEADER, true);
        curl_setopt($cSession, CURLOPT_VERBOSE, 1);
        curl_setopt($cSession, CURLOPT_POSTFIELDS, $params);

        curl_setopt($cSession,CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded', 'Accept: application/json',
            "X-RapidAPI-Key: 66fb48be63msh9b59c66853889d2p17878fjsn5eac4557c2a1","X-RapidAPI-Host: skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
        ));
        //step3
        $result = curl_exec($cSession);
        if(!$result)
        {
            die('Error: "' . curl_error($cSession) . '" - Code: ' . curl_errno($cSession));
        }
        else
        {
            Log::info($result);
            $st=explode('/',$result);
            $sessionkey= substr($st[9],0,74);
            $_SESSION['sessionkey']=$sessionkey;
            $session_key=$_SESSION['sessionkey'];
        }


        $header_size = curl_getinfo($cSession, CURLINFO_HEADER_SIZE);
        $header = substr($result, 0, $header_size);
        //echo $body = substr($response, $header_size);
        $a=array();
        foreach(preg_split("/((\r?\n)|(\r\n?))/", $result) as $line){
            array_push($a,$line);
        }
        $b=explode("/",$a[4]);
        $sessKey=$b[7];
        Log::info($sessKey);


        $response = \Unirest\Request::get("https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/pricing/uk2/v1.0/$sessKey?pageIndex=0&pageSize=10",
            array(
                "X-RapidAPI-Host" => "skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
                "X-RapidAPI-Key" => "66fb48be63msh9b59c66853889d2p17878fjsn5eac4557c2a1"
            )
        );


        Log::info($from);
        $arr1=json_encode($response,true);
        $arr2=json_decode($arr1,true);


        return view('flightsearch')->with('arr2',$arr2);

    }


}
