<?php

class ArrayDiff 
{
    
    public function getDiff($array1, $array2)
    {
      $diff = array();
      
      foreach($array1 as $value1) {
          
          $found = false;
          
          foreach($array2 as $value2) {
              
              if($value1 == $value2) {
                  
                  // ist ein beiden drin
                  $found = true;
              }
          }
          
          if(!$found) {
              $diff[] = $value1;
          }
      }
      
      
      return $diff;
    }
}

$array1 = array(
    1,
    5,
    12,
    3,
    'test',
    'foo'
);

$array2 = array(
    'test',
    1,
    'drei',
    13,
    5,
    'foo'
);


$arrayDiff = new ArrayDiff();

$result1 = $arrayDiff->getDiff($array1, $array2);
$result2 = $arrayDiff->getDiff($array2, $array1);

$result3 = array_merge($result1, $result2);

//Ausgabe der 2 Arrays und des ArrayDiff
foreach($array1 as $key => $value)
{
    echo ("$key => $value" . "<br />");
}
echo "-------------------" . "<br />";
foreach($array2 as $key => $value)
{
    echo ("$key => $value" . "<br />");    
}
echo "-------------------" . "<br />";
foreach($result3 as $key => $value)
{
    echo ("$key => $value" . "<br />");
}
