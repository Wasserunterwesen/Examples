<?php
namespace Numbers;

class Number
{
   private $value;
   private $name;
   
   public function setValue($value)
   {
      $this->value = $value;
   }
   
   public function getValue()
   {
      return $this->value;
   }
   
   public function setName($name)
   {
      $this->name = $name;
   }
   
   public function getName()
   {
      return $this->name;
   }
}