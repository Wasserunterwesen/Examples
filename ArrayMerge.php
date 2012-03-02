<?php

class ArrayMerge
{
    public function merge()
    {
        $allParameterArrays = func_get_args();
        
        $mergedArray = array();
        
        if(is_array($allParameterArrays))
        {
            foreach($allParameterArrays as $allParameterArray)
            {
                foreach($allParameterArray as $key => $value) 
                {
                    $mergedArray[] = $value;
                }
            }
        }
        
            
        return $mergedArray;
    }
}


$arr1 = array();
//Array1 mit Zahlen füllen
$arr1[] = 0;
$arr1[] = 4;
$arr1[] = 20;
$arr1[] = 344;
$arr1[] = 45;

$arr2 = array();
//Array2 mit Strings füllen
$arr2[] = "Mein";
$arr2[] = "name";
$arr2[] = "ist";
$arr2[] = "Konstantin";
$arr2[] = "Paul";
    
$arr3 = array();
//Array4 wird mit Strings und Zahlen gefüllt
$arr3[] = "Hello";
$arr3[] = "World";
$arr3[] = 7;

$arr4 = array();
$arr4[] = "Hund";
$arr4[] = 12;
$arr4[] = "Katze";
$arr4[] = 58552225;


$arrayMerge = new ArrayMerge();

$merge = $arrayMerge->merge($arr1, $arr2, $arr3, $arr4);

foreach($merge as $key => $value)
{
    echo ($key . " => " . $value . "<br />");
}


?>
