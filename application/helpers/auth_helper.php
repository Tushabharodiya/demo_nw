<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    if ( ! function_exists('todayDate')){
        function todayDate(){
            date_default_timezone_set('Asia/Kolkata');
            $todayDate = date("d/m/Y");
            return $todayDate;
        }
    }
    
    if ( ! function_exists('urlEncodes')){
        function urlEncodes($dataID = 0){
            date_default_timezone_set("Asia/Kolkata");
            if($dataID != null){
                $uniqKey = 0710;
                $dateString = $uniqKey.''.date('iH').''.$dataID;
                $dataLength = strlen($dateString);
                $encodeArray = array();
                $arrayKey = array('0'=>'5846ca', '1'=>'c56da5', '2'=>'69adc4', '3'=>'a56f49', '4'=>'6adc26', '5'=>'5a89db', '6'=>'d5487c', '7'=>'ac56df', '8'=>'ac658c', '9'=>'75dca8');
                for($i = 0; $i < $dataLength; $i++){   
                    array_push($encodeArray, $arrayKey[$dateString[$i]]);
                }
                $encodeURL = implode("xe", $encodeArray); 
            } else {
                $encodeURL = null;
            }
            return $encodeURL;
        }
    }
    
    if ( ! function_exists('urlDecodes')){
        function urlDecodes($dataURL = 0){
            date_default_timezone_set("Asia/Kolkata");
            if($dataURL != null or !empty($dataURL)){
                $dataArray = explode("xe", $dataURL);
                $dataLength = count($dataArray);
                $decodeArray = array();
                $arrayKey = array('0'=>'5846ca', '1'=>'c56da5', '2'=>'69adc4', '3'=>'a56f49', '4'=>'6adc26', '5'=>'5a89db', '6'=>'d5487c', '7'=>'ac56df', '8'=>'ac658c', '9'=>'75dca8');
                for($i = 0; $i < $dataLength; $i++){   
                    $dataKey = array_search($dataArray[$i], $arrayKey);
                    array_push($decodeArray, $dataKey);
                }
                $decodeURL = substr(implode("", $decodeArray), 7);
            } else {
                $decodeURL = null;
            }
            return $decodeURL;
        }
    }