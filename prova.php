

<?php

  function teste(){
    $array = array();

    for ($i=1;$i<=100;$i++){
      $array[$i] = $i;
    }

    for ($i=3;$i<=100; $i = $i + 3){
      $array[$i] = 'Three';

       //função verifica se é divisivel por 3 e 5
       multiplos3e5($i, $array);
     
    }

    for ($i=5;$i<=100; $i = $i + 5){
      $array[$i] = 'Five';

      //função verifica se é divisivel por 3 e 5
      multiplos3e5($i, $array);
    
    }
    return $array;
  }


  function multiplos3e5($i, &$array){
      if ($i%15==0) {
        $array[$i] ='ThreeAndFive';
      }
        
      
  }


$arrayImpressao = teste();

foreach ($arrayImpressao as $t){
      echo $t.', ';
    }

?>
