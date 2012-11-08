<?php
class Controller_UpdateScreenShot extends Controller_Base
{
   public function index()
   {
      $subdomain = "holzundeisen";
      $domain = "rakuten-shop";
      $tld = "de";
      
      $merchantId = 65025;
      $url = $domain . "." . $subdomain . "." . $tld;
      $uid = "1d1f4f372f05de2ecf77acd262abf839";
      
      $updateScreenShot = loadApp("setup/updateScreenShot");
      $result = $updateScreenShot->queueUpdate($merchantId, $url, $uid);
      
      if ($result) {
         echo "Update was successfull";
      } else {
         echo "Udpate was not successfull";
      }
   }
}