<?php

class ArrayMaxValue 
{
    private $array;
    
    
    public function __construct($array)
    {
        $this->array = $array;
    }
    
    public function getMaxValue()
    {
        $arr = $this->array;
        
        $höchsterWert = $arr[0];
        
        for($i = 1; $i < count($arr); $i++)
        {
            if($arr[$i] > $höchsterWert)
            {
                $höchsterWert = $arr[$i];
            }
        }
        
        return $höchsterWert;
    }
    
}

$array = new ArrayMaxValue(
                            array(
                                40,
                                40,
                                0,
                                1,
                                2,
                                -1,
                                -5,
                                -34,
                                -4,
                                -3,
                                -6,
                                -899
                            )
);

echo $array->getMaxValue();

