<?php
 

function getHoroscope($birthday) {
  // $birthday = $date;
   // echo $birthday;
   $sign = '';     
   $dates = explode('-', $birthday); 
   $month = (int)$dates[1];
   $day = (int)$dates[2];        
   

   if ( ( $month == 3 && $day > 20 ) || ( $month == 4 && $day < 20 ) ) { $sign = "Väduren"; } 
   elseif ( ( $month == 4 && $day > 19 ) || ( $month == 5 && $day < 21 ) ) { $sign = "Oxen"; } 
   elseif ( ( $month == 5 && $day > 20 ) || ( $month == 6 && $day < 21 ) ) { $sign = "Tvillingarna"; } 
   elseif ( ( $month == 6 && $day > 20 ) || ( $month == 7 && $day < 23 ) ) { $sign = "Kräftan"; } 
   elseif ( ( $month == 7 && $day > 22 ) || ( $month == 8 && $day < 23 ) ) { $sign = "Lejonet"; } 
   elseif ( ( $month == 8 && $day > 22 ) || ( $month == 9 && $day < 23 ) ) { $sign = "Jungfrun"; } 
   elseif ( ( $month == 9 && $day > 22 ) || ( $month == 10 && $day < 23 ) ) { $sign = "Vågen"; } 
   elseif ( ( $month == 10 && $day > 22 ) || ( $month == 11 && $day < 22 ) ) { $sign = "Skorpionen"; } 
   elseif ( ( $month == 11 && $day > 21 ) || ( $month == 12 && $day < 22 ) ) { $sign = "Skytten"; } 
   elseif ( ( $month == 12 && $day > 21 ) || ( $month == 1 && $day < 20 ) ) { $sign = "Stenbocken"; } 
   elseif ( ( $month == 1 && $day > 19 ) || ( $month == 2 && $day < 19 ) ) { $sign = "Vattumannen"; } 
   elseif ( ( $month == 2 && $day > 18 ) || ( $month == 3 && $day < 21 ) ) { $sign = "Fiskarna"; }
   else { $sign = "Select your birthdate to calculate your sign!"; } 
 
   
  return $sign;
  

}




?>