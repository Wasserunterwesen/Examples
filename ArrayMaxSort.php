<?php

class ArrayMaxSort 
{
    
    public function sort($arr1)
    {
        $maxValue = null;
        if(is_array($arr1))
        {
            $maxValue = $arr1[0];
            
            for($i = 0; $i < count($arr1); $i++)
            {
                if($maxValue < $arr1[$i])
                {
                    $maxValue = $arr1[$i];
                }
            }
        }
        
        
        return $maxValue;
    }
    
}


$arr1 = array();
$arr1[] = -0;
$arr1[] = -45;
$arr1[] = 0;
$arr1[] = 45;
$arr1[] = -5148;


$arrayMaxSort = new ArrayMaxSort;

$maxValue = $arrayMaxSort->sort($arr1);

echo $maxValue;





?>
