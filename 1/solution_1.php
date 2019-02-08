<?php
  function accum($s) {
      $q=str_split($s);
    $kata="";
    
    for($i=0; $i<count($q); $i++)
    {
      if($i==0){
        $kata .= strtoupper($q[$i]);
        $kata .= "-";
      } else {
        for($j=0; $j<=$i; $j++)
        {
          if($j==0) {
            $kata .= strtoupper($q[$i]);
          } elseif($j==$i) {
            $kata .= strtolower($q[$i]);
            if($i != count($q) -1){
              $kata .= "-";
            }       
          } else {
            $kata .= strtolower($q[$i]);
          }
        }
      } 
    }
    
    return $kata;
  }
