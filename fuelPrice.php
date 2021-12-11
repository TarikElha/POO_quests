<?php

function fuel_price($litres, $price_per_litre) {
  
  if(is_numeric($litres) && $litres >= 0){

    $reduc = 0.00;

    for($i = 0; $i < $litres; $i++){
        echo $i%2;
        echo "Pas dans boucle".$i."\n";
        
        if($i != 0 && $i%2 == 0 && number_format($reduc,2) < 0.25){
            echo "dans boucle".$i."\n";
            $reduc += 0.5;}
    }
  }
  echo $reduc."\n";
  echo $price_per_litre * $litres."\n";
  echo $reduc * $litres."\n";

  return number_format($price_per_litre * $litres - $reduc * $litres, 2, '.', ' ');
}

echo fuel_price(5, 1.23)."\n";