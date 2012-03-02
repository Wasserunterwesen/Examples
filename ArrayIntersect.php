<?php

class ArrayIntersect 
{
    
    public function intersect($array1, $array2)
    {
        $arrayIntersect = array();

        foreach($array1 as $key1 => $value1)
        {
            $found = false; 
            
            foreach($array2 as $key2 => $value2)
            {
                if($value1 === $value2)
                {
                    //ist in beiden drin
                    $found = true;
                    break;
                }
            }

            if($found == true)
            {
                $arrayIntersect[$key1] = $value1;
            }
            
        }
        
        
        return $arrayIntersect;
    }
    
}

$array1 = array("a" => "grün", "rot", "blau");

$array2 = array("b" => "grün", "gelb", "rot");

$intersect = new ArrayIntersect();
$iS1 = $intersect->intersect($array1, $array2);

if(is_array($iS1))
{
    foreach($iS1 as $key => $value)
    {
        echo ($key . " => " . $value . "<br />");
    }
}

?>
