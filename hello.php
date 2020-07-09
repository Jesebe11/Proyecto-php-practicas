<?php
  //$jobs[0]['title']

//var_dump($jobs[0]);

//Condicionales y Ciclos


/* $var1 = 5;
if ($var1 > 2){
  echo 'Es mayor que 2';
}else{
  echo 'No es mayor que 2';
} */

/* ciclos */

 //Practicas ejercicios con arreglos ejercicio1
 /* $arreglo = [

  'keyStr1' => 'lado',
  0 => 'ledo',

  'keyStr2' => 'lido',
  1 => 'lodo',
  2 => 'ludo'
];

$rima = 5;

  if ($rima < 2) {
    echo $arreglo['keyStr1'].' '.$arreglo[0].' '.$arreglo['keyStr2'].' '.$arreglo[1].' '.$arreglo[2];
  }else{
    echo $arreglo[2].' '.$arreglo[1].' '.$arreglo['keyStr2'].' '.$arreglo[0].' '.$arreglo['keyStr1'];
  }


  //Practicas con arreglos ejercicio2

  $arreglo2 = [
    'Venezuela' => 'Caracas',
    'Colombia'  => 'Bogotá',
    'Brasil'    => 'Brasilia',
    'Ecuador'   => 'Quito',
    'Argentina' => 'Buenos Aires'
  ];
    foreach($arreglo2 as $indice => $valor){
      echo $indice.' '.'y su capital: '.$valor .'   ';
    };
  //Practicas con arreglos ejercicio 3
 
  $valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

  $sorted = sort($valores, SORT_NUMERIC);
       $sorted_reverse = array_reverse($valores);

      for($i=0; $i<3; $i++){
      $bajos .= $valores[$i].", ";
      }
      for($i=0; $i<3; $i++){
      $altos .= $sorted_reverse[$i].", ";
      }
      echo "Los 3 valores más altos: {$altos}\n";

      echo "Los 3 valores más bajos: {$bajos}\n";
  
    */
    //Otros ejercicios operadores
 /*    $num1 = 32;
    $num2 = 3;
    $result = $num1 +$num2;
    echo 'El resultado de la suma de 32 + 5 es:  '.$result."\n";

    $num3 = 3;
    $num4 = (2+3);
    $result2 = $num3 + $num4;
    echo 'El resultado de la suma de 3(2+3) es:  '. $result2;

    $valor = 20;

if ($valor>5 and $valor<10){
    echo '$valor = '.$valor.', es mayor que 5 pero menor que 10<br>';
}

if ($valor>=0 && $valor<=20) {
    echo '$valor = '.$valor.', es mayor o igual a 0 pero menor o igual a 20<br>';
}

if ($valor==='10') {
    echo '$valor = '.$valor.', es igual a “10” asegurando que el tipo de dato sea cadena<br>';
}

if ($valor>0 and $valor<5 or $valor>10 and $valor<15) {
    echo '$valor = '.$valor.', es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15<br>';
} */

  //Ciclo do while
       /*  $idx = 0;
          do{
          echo  '<li class="work-position">';
          echo '<h5>'.$jobs[$idx] ['title'].'</h5>';
          echo '<p>' .$jobs[$idx] ['description'].'</p>';
          echo '<strong>Achievements:</strong>';
          echo '<ul>';
          echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
          echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
          echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
          echo '</ul>';
        echo '</li>';
          
            
               $idx = $idx +1;

            }while($idx < 3); */
?>

