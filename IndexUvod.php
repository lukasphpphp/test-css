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
   
  $LukasNevedel1 = 1;      //ukol c. 3.
  $LukasNevedel2 = 2;
  
  if (1<2) {
      echo 'Lukas Nevedel';     //ukol c. 4     
  }
  echo '<br>';
  
  if (10<5) {                   //ukol c. 5
      echo 'neplati';
  }   else if (5<10){
         echo 'Lukas';
  }   if (20<10){
         echo 'neplati';
  }   else {
      echo 'Nevedel';
  }
  echo '<br>';
  
  switch ($LukasNevedel2){          //ukol c. 7
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
  
  $Ovoce = array('ananas', 'avokádo', 'banán', 'datle', 'fík', 'meruňka', 'nektarinka', 'jahody', 'jablko', 'malina' );  //ukol c. 8
  
  $Veci["NaSklade"]["ovoce"]["Bobulové"]= "";
  $Veci["NaSklade"]["ovoce"]["Bobulové"]= "rybíz";
  $Veci["NaSklade"]["ovoce"]["Bobulové"]= "Bobulové";
  
  
  
  
  
  //$Jmeno = 'Lukas';
  //$Prijmeni = 'Nevedel';
  //echo ($Jmeno);
  //echo ($Prijmeni);