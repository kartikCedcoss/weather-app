<?php

namespace App\Component;


class Helper 
{
    public function currentweather($location){
        $url = "https://api.weatherapi.com/v1/current.json?key=0bab7dd1bacc418689b143833220304&q=$location&aqi=yes";
        $response = $this->getResponse($url);
        return $response;
         
    }

    public function History($dt,$loc){
        $url = "http://api.weatherapi.com/v1/history.json?key=0bab7dd1bacc418689b143833220304&q=$loc&dt=2010-01-01";
        $response = $this->getResponse($url);
        
        return $response;
    }
    public function Sports($loc){
        $url = "http://api.weatherapi.com/v1/sports.json?key=0bab7dd1bacc418689b143833220304&q=$loc";
       
        $response = $this->getResponse($url);
        
        return $response;
    }
    public function Astronomy($dt,$loc){
        $url = "http://api.weatherapi.com/v1/astronomy.json?key=0bab7dd1bacc418689b143833220304&q=$loc&dt=$dt";
        $response = $this->getResponse($url);
        
        return $response;
    }

    public function Forecast($loc){
        $url = "http://api.weatherapi.com/v1/forecast.json?key=0bab7dd1bacc418689b143833220304&q=$loc&days=1&aqi=no&alerts=yes";
        $response = $this->getResponse($url);
        
        return $response;
    }

    public function Timezone($location){
        $url = "http://api.weatherapi.com/v1/timezone.json?key=0bab7dd1bacc418689b143833220304&q=$location";
        $response = $this->getResponse($url);
        return $response;
         
    }
    public function getResponse($url){
        $ch = curl_init();
     curl_setopt($ch,CURLOPT_URL,$url);
     curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
      $result = curl_exec($ch);
     $book_arr = json_decode($result,true);
     
    return $book_arr;
    
   }
}