<?php
$PromennaBoleen = true;                   //ukol c. 4.
    echo $PromennaBoleen;
    echo '<br>';
    print $PromennaBoleen;
    echo '<p>';
    
 $PromennaString = 'neco';
    echo $PromennaString;
    echo '<br>';
    print $PromennaString;
    echo '<p>';
    
 $PromennaFloat = 20.1; 
   echo $PromennaFloat;
   echo '<br>';
   print $PromennaFloat;
   echo '<p>';
   
 $PromennaInteger = 10;
   echo $PromennaInteger;
   echo '<br>';
   print $PromennaInteger;
   echo '<p>';
   

  $PromennaSpojeni = $PromennaInteger . $PromennaFloat . 'czk';  //ukol c. 5.
   echo $PromennaSpojeni;
   echo '<br>';
   
   
   echo '<img src="Crosby.jpg" alt="crosby">';    //ukol c. 6.
   echo '<br>';
   echo '<br>';
   
   
   echo '\\';  //ukol c. 7.

   
  $a = 10;          //ukol c. 8.
  $b = 20;
  
  var_dump($a+$b);
  var_dump($a-$b);
  var_dump($a/$b);
  var_dump($a*$b);
  
  var_dump ($a++);    //tady tech 7 radku si dela nejak co chce nechapu 
  var_dump ($a--);
  var_dump ($a += $b);
  var_dump ($a -= $b);
  var_dump ($a *= $b);
  var_dump ($a /= $b);
  
  var_dump ($a==$b);
  var_dump ($a != $b);
  var_dump ($a>$b);
  var_dump ($a<$b);
  
  var_dump ($a && $b);
  var_dump (!$a);
  
  echo '<br>';
  
  //pokračování test
   
  $LukasNevedel1 = 1;                     //ukol c. 3.
  $LukasNevedel2 = 1;
  
  
  if (1<2) {                             //ukol c. 4
      echo 'Lukas Nevedel';         
  }
  echo '<br>';
  
  
  if (10<5) {                             //ukol c. 5
      echo 'neplati';
  }   else if (5<10){
         echo 'Lukas ';
  }   if (20<10){
         echo 'neplati';
  }   else {
      echo 'Nevedel';
  }
  echo '<br>';
  
  
  
  
  if (1 <2) {                             //ukol c. 6
     echo 'Lukas ';
	if (5 != 10) { 
		echo 'Nevedel'; 
	} else { 
		echo 'nic'; 
	} 
 
} else { 
    echo 'nic'; 
}
echo '<br>';
  



  switch ($LukasNevedel2){                 //ukol c. 7
     case 1:
        echo '1';
        break;
     case 2:
         echo'2';
         break;
     case 3:
         echo'3';
         break;
     case 4:
         echo'4';
         break;
     case 5;
         echo'5';
         break;
     case 6:
         echo '6';
         break;
  }
  echo '<br<';
  
  $Ovoce = array(1 =>'ananas', 'avokádo', 'banán', 'datle', 'fík', 'meruňka', 'nektarinka', 'jahody', 'jablko', 'malina' );  //ukol c. 8
  echo '<br<';
  
  
  
  $Veci["NaSklade"]["ovoce"]["Bobulové"]= "Maliny";        //ukol c. 9
  $Veci["NaSklade"]["ovoce"]["Bobulové"]= "Rybíz";
  $Veci["NaSklade"]["ovoce"]["Bobulové"]= "angrešt";
  $Veci["NaSklade"]["ovoce"]["Bobulové"]= "borůvky";
  $Veci["NaSklade"]["ovoce"]["Bobulové"]= "ostružiny";
  $Veci["NaSklade"]["ovoce"]["Bobulové"]= "Jahody";
  $Veci["NaSklade"]["ovoce"]["Bobulové"]= "Hrozny";
  $Veci["NaSklade"]["ovoce"]["Bobulové"]= "šípky";
  $Veci["NaSklade"]["ovoce"]["Bobulové"]= "Jeřabiny";
  $Veci["NaSklade"]["ovoce"]["Bobulové"]= "Moruše";
  
  
  var_dump($Veci);
  echo '<br>';
  echo '<br>';
  
  
  
  
  //pokračování test php cyklus
  
  
  $radekJmenoPrijmeni= 'Září';
  $sloupecJmenoPrijmeni = 17;    


  for ($radekJmenoPrijmeni = 0; $radekJmenoPrijmeni < 10; $radekJmenoPrijmeni++){
      echo '<table>';
      echo '<tr>';
      echo '<td> </td>';
      echo '</tr>';
      
    for ($sloupecJmenoPrijmeni = 0; $sloupecJmenoPrijmeni< 10; $sloupecJmenoPrijmeni++){
   }
   }
   
   echo '<br>';
  
          
   $cislo = 25.988;          //ukol c 4 matematické funkce
     echo ceil ($cislo);
     echo '<br>';
     echo floor($cislo);
     echo '<br>';
   
   $Spojit = array (1 => 'šípky', 'ananas', 'banán');     //ukol c 4 řetězcové funkce
   $Slovo = 'nazdar';  
     echo join ($Spojit);     
     echo '<br>';
     echo md5 ($Slovo);
     echo '<br>';
     echo ucfirst ($Slovo);
     echo '<br>';
     
     
     echo sizeof ($Spojit);       //ukol c 4 funkce pro práci s poli
     echo '<br>';
     echo end ($Spojit);
     echo '<br>';
     
     
     foreach ($Ovoce as $key => $value){             //ukol c 5
         echo $key . ". " . $value. "<br>";
     }
     

     function JakyMasDen (){                     //ukol c 6
         echo ('Jak se dneska máš');
         echo '<br>';
     }
     
     JakyMasDen();
     
     

     