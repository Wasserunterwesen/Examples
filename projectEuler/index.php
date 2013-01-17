<?php
require_once 'Numbers/Number.php';
require_once 'Numbers/UpToTen.php';
require_once 'Numbers/TenToTwenty.php';
require_once 'Numbers/Zehner.php';

$searchNumber = 60;
$decade = 0;
$unitPosition = 0;
$betweenTenAndTwenty = 0;
$completeName = "";

$partsOfNumber = setPartsOfNumber($searchNumber);

foreach ($partsOfNumber as $key => $value) {
   if ($key == "decade") {
      $decade = getDecade($value);
   } else if ($key == "unitPosition") {
      $unitPosition = getUnitPosition($value);
   } else {
      $betweenTenAndTwenty = $value;
   }
}

if ($betweenTenAndTwenty->getName() !== null && $decade->getName() !== null)
{
   $completeName = $decade->getName() . "-" . $betweenTenAndTwenty->getName();
} 
else if ($unitPosition->getName() !== null && $decade->getName() !== null)
{
   $completeName = $decade->getName() . "-" . $unitPosition->getName();
}
else if ($decade->getName() !== null)
{
   $completeName = $decade->getName();
}
else if ($betweenTenAndTwenty->getName() !== null)
{
   $completeName = $betweenTenAndTwenty->getName();
}
else if ($unitPosition->getName() !== null)
{
   $completeName = $unitPosition->getName();
} else {
   $completeName = "null";
}

echo $completeName;

function setPartsOfNumber($searchNumber)
{
   $unitPosition = "";
   $decade = "";
   $betweenTenAndTwenty = "";
   
//   if ($searchNumber > 100 && $searchNumber < 1000) {
//      for ($i = 0; $i < 1000; $i+=100)
//      {
//         $currentNumber = $i;
//         if ($i > 0) {
//            $lastNumber = (int)($i - 100);
//         } else {
//            $lastNumber = 0;
//         }
//   
//         if ($currentNumber > $searchNumber && $searchNumber > $lastNumber) {
//            $searchNumber = ($searchNumber - $lastNumber);
//            $decade = get($lastNumber);
//            break;
//         }
//      }
//   }
   if ($searchNumber > 20 && $searchNumber < 100 || $searchNumber == 10) {
      for ($i = 0; $i < 100; $i+=10)
      {
         $currentNumber = $i;
         $nextNumber = (int) $i + 10;
         
         if ($nextNumber > $searchNumber && $searchNumber > $currentNumber) {
            $searchNumber = ($searchNumber - $currentNumber);
            $decade = $currentNumber;
            break;
         } else if ($currentNumber == $searchNumber) {
            $searchNumber = $searchNumber - $currentNumber;
            $decade = $currentNumber;
            break;
         }
      }
   }
   if ($searchNumber > 10 && $searchNumber < 20) {
      $betweenTenAndTwenty = getBetweenTenAndTwenty($searchNumber);
   } else {
      $betweenTenAndTwenty = new \Numbers\Number();
   }
   if ($searchNumber > 0 && $searchNumber < 10) {
      for ($i = 0; $i < 10; $i++)
      {
         if ($searchNumber == $i) {
            $searchNumber = ($searchNumber - $i);
            $unitPosition = $i;
            break;
         }
      }
   }
   if (!isset($decade) && !isset($unitPosition) || !isset($betweenTenAndTwenty)) {
      
      setPartsOfNumber($searchNumber);
   } else {
      $allPartsOfNumber = array();
      $allPartsOfNumber["decade"] = $decade;
      $allPartsOfNumber["unitPosition"] = $unitPosition;
      $allPartsOfNumber["betweenTenAndTwenty"] = $betweenTenAndTwenty;
      return $allPartsOfNumber;
   }
}

function getDecade($searchZehner)
{
   switch ($searchZehner) {
      case 10:
         $decade = new Numbers\Number();
         $decade->setValue(10);
         $decade->setName("ten");
      break;

      case 20:
         $decade = new Numbers\Number();
         $decade->setValue(20);
         $decade->setName("twenty");
      break;

      case 30:
         $decade = new Numbers\Number();
         $decade->setValue(30);
         $decade->setName("thirty");
      break;

      case 40:
         $decade = new Numbers\Number();
         $decade->setValue(40);
         $decade->setName("fourty");
      break;

      case 50:
         $decade = new Numbers\Number();
         $decade->setValue(50);
         $decade->setName("fifty");
      break;
      
      case 60:
         $decade = new Numbers\Number();
         $decade->setValue(60);
         $decade->setName("sixty");
      break;
   
      case 70:
         $decade = new Numbers\Number();
         $decade->setValue(70);
         $decade->setName("seventy");
      break;
      
      case 80:
         $decade = new Numbers\Number();
         $decade->setValue(80);
         $decade->setName("eighty");
      break;
      
      case 90:
         $decade = new Numbers\Number();
         $decade->setValue(90);
         $decade->setName("ninety");
      break;
   
      default:
         $decade = new Numbers\Number();
      break;
   }
   return $decade;
}

function getUnitPosition($searchUnitPosition)
{
   switch ($searchUnitPosition) {
      case 1:
         $unitPosition = new Numbers\Number();
         $unitPosition->setValue(1);
         $unitPosition->setName("one");
      break;

      case 2:
         $unitPosition = new Numbers\Number();
         $unitPosition->setValue(2);
         $unitPosition->setName("two");
      break;

      case 3:
         $unitPosition = new Numbers\Number();
         $unitPosition->setValue(3);
         $unitPosition->setName("three");
      break;

      case 4:
         $unitPosition = new Numbers\Number();
         $unitPosition->setValue(4);
         $unitPosition->setName("four");
      break;

      case 5:
         $unitPosition = new Numbers\Number();
         $unitPosition->setValue(5);
         $unitPosition->setName("five");
      break;
      
      case 6:
         $unitPosition = new Numbers\Number();
         $unitPosition->setValue(6);
         $unitPosition->setName("six");
      break;
   
      case 7:
         $unitPosition = new Numbers\Number();
         $unitPosition->setValue(7);
         $unitPosition->setName("seven");
      break;
      
      case 8:
         $unitPosition = new Numbers\Number();
         $unitPosition->setValue(8);
         $unitPosition->setName("eight");
      break;
      
      case 9:
         $unitPosition = new Numbers\Number();
         $unitPosition->setValue(9);
         $unitPosition->setName("nine");
      break;
   
      default:
         $unitPosition = new Numbers\Number();
      break;
   }
   return $unitPosition;
}

function getBetweenTenAndTwenty($searchNumber)
{
   switch ($searchNumber)
   {
      case 11:
         $betweenTenAndTwenty = new Numbers\Number();
         $betweenTenAndTwenty->setValue(11);
         $betweenTenAndTwenty->setName("eleven");
      break;
      
      case 12:
         $betweenTenAndTwenty = new Numbers\Number();
         $betweenTenAndTwenty->setValue(12);
         $betweenTenAndTwenty->setName("twelve");
      break;
      
      case 13:
         $betweenTenAndTwenty = new Numbers\Number();
         $betweenTenAndTwenty->setValue(13);
         $betweenTenAndTwenty->setName("thirdteen");
      break;

      case 14:
         $betweenTenAndTwenty = new Numbers\Number();
         $betweenTenAndTwenty->setValue(14);
         $betweenTenAndTwenty->setName("fourteen");
      break;
   
      case 15:
         $betweenTenAndTwenty = new Numbers\Number();
         $betweenTenAndTwenty->setValue(15);
         $betweenTenAndTwenty->setName("fifteen");
      break;

      case 16:
         $betweenTenAndTwenty = new Numbers\Number();
         $betweenTenAndTwenty->setValue(16);
         $betweenTenAndTwenty->setName("sixteen");
      break;
      
      case 17:
         $betweenTenAndTwenty = new Numbers\Number();
         $betweenTenAndTwenty->setValue(17);
         $betweenTenAndTwenty->setName("seventeen");
      break;
   
      case 18:
         $betweenTenAndTwenty = new Numbers\Number();
         $betweenTenAndTwenty->setValue(18);
         $betweenTenAndTwenty->setName("eighteen");
      break;
   
      case 19:
         $betweenTenAndTwenty = new Numbers\Number();
         $betweenTenAndTwenty->setValue(19);
         $betweenTenAndTwenty->setName("nineteen");
      break;
   
      default:
         $betweenTenAndTwenty = new Numbers\Number();
      break;
   }
   return $betweenTenAndTwenty;
}