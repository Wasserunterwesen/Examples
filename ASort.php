<?php

class ASort 
{
    
    public function sort($arr1)
    {
        $indizes = array();                 //    Indizes und                        //
        $sortedValues = array();            //                Values werden getrennt //
        $sortedArray = array();
        
        if(is_array($arr1))
        {
            foreach($arr1 as $key => $value)
            {
                $indizes[] = $key;
                $sortedValues[] = array_pop($arr1);
            }
            
            for($i = 0; $i < count($sortedValues); $i++)
            {
                $sortedArray[array_pop($indizes)] = $sortedValues[$i];
            }
        }
        
        
        return $sortedArray;
    }
    
    
}

$arr1 = array(
    "a" => "Apfel",
    "b" => "Banane",
    "c" => "Birne",
    "d" => "Kirsche"
);

$aSort = new ASort();


foreach($aSort->sort($arr1) as $key => $value)
{
    echo ($key . " => " . $value . "<br />");
}



?>