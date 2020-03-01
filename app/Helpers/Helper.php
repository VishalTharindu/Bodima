<?php

  use App\Boarding;

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

    if (!function_exists('getBoardingrequestTypeIdById')) {
      function getBoardingrequestTypeIdById($id)
      {
    
    
        $houserequest = DB::table('house_requests')->where('boardingrequest_id', $id)->get();
    
        if ($houserequest->count() == 1) {
    
        return 'houserequest';
  
        } else {
    
          $anexrequest = DB::table('anex_requsts')->where('boardingrequest_id', $id)->get();
    
          if ($anexrequest->count() == 1){
            
            return 'anexrequest';
    
          } else {
    
            $singleroomrequest = DB::table('single_room_requests')->where('boardingrequest_id', $id)->get();
    
            if ($singleroomrequest->count() == 1) {
              
              
              return 'singleroomrequest';
    
            }else{
              return 0;
            }
          }
        }
      }
    }
      
  if (!function_exists('getPropertyrequestTypeIdById')) {
    function getPropertyrequestTypeIdById($id)
    {       
      $houserequest = DB::table('house_requests')->where('boardingrequest_id', $id)->get();
  
      if ($houserequest->count() == 1) {
  
        return $houserequest[0]->id;
      } else {
  
        $anexrequest = DB::table('anex_requsts')->where('boardingrequest_id', $id)->get();
  
        if ($anexrequest->count() == 1){
  
          return $anexrequest[0]->id;
  
        } else {
  
          $singleroomrequest = DB::table('single_room_requests')->where('boardingrequest_id', $id)->get();
  
          if ($singleroomrequest->count() == 1) {
  
            return $singleroomrequest[0]->id;
  
          }else{
                return 0;
              }
            }
          }
        }
      }

    if (!function_exists('getRatingOverallById')) {
      function getRatingOverallById($id)
      {       
        $boardingrating = DB::table('boarding_ratings')->where('boarding_id', $id)->get();
        $alltotal = 0;
        $overall = 0;
        foreach ($boardingrating as $key => $rating) {
          $overall += $rating->rating;
          $alltotal = $overall / $boardingrating->count();
        }
        
        $boardings = DB::table('boardings')->where('id', $id)->get();
        $boarding = Boarding::find($boardings[0]->id);
        $boarding->overallrating  = $alltotal;
        $boarding->save();

        return $alltotal;
          }
        }