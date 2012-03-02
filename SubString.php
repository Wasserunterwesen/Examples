<?php

class SubString
{
     private $result = "";

     public function subStr($string, $startPosition, $length = false)
     {
         
         #$length = $length ? $length : strlen($string);
         
         
         if($length != false && $length < strlen($string))
         {
             for($i = 0; $i < $length; $i++)
             {
                 $this->result .= $string[$startPosition + $i];
             }
         }
         else
         {
             $j = 0;
             while((strlen($string)-$startPosition) != $j)
             {
                 $this->result .= $string[$startPosition + $j];
                 
                 $j++;
             }
         }

         return $this->result;
     }
     

}

$subString = new SubString();

$string = "Konstantin Paul";
$startPosition = 8;
$length = 4;

#echo ($subString->subStr($string, $startPosition, $length));
var_dump($subString->substr1($string, $startPositions));


?>
