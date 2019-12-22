<?php
if (!function_exists('sexME')) {
    function sexME()
    {
  
      return "SEXME";
    }
  }

  if (!function_exists('getBoardingTypeIdById')) {
    function getBoardingTypeIdById($id)
    {
  
  
      $house = DB::table('houses')->where('boarding_id', $id)->get();
  
      if ($house->count() == 1) {
  
      return 'house';

      } else {
  
        $anex = DB::table('anexes')->where('boarding_id', $id)->get();
  
        if ($anex->count() == 1){
          
          return 'anex';
  
        } else {
  
          $singleroom = DB::table('single_rooms')->where('boarding_id', $id)->get();
  
          if ($singleroom->count() == 1) {
            
            
            return 'singleroom';
  
          }else{
            return 0;
          }
        }
      }
    }
  }

  if (!function_exists('getPropertyTypeIdById')) {
    function getPropertyTypeIdById($id)
    {
  
  
      $house = DB::table('houses')->where('boarding_id', $id)->get();
  
      if ($house->count() == 1) {
  
        return $house[0]->id;
      } else {
  
        $anex = DB::table('anexes')->where('boarding_id', $id)->get();
  
        if ($anex->count() == 1){
  
          return $anex[0]->id;
  
        } else {
  
          $singleroom = DB::table('single_rooms')->where('boarding_id', $id)->get();
  
          if ($singleroom->count() == 1) {
  
            return $singleroom[0]->id;
  
          }else{
                return 0;
              }
            }
          }
          }
        }
