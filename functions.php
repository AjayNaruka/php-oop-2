<?php 
/* FUNZIONI */
function getRandom($arr){
  return $arr[array_rand($arr)];
}
function getRandomDate()
  {
      $timestamp = mt_rand(1592561475, 1655633475);
      $randomDate = date("y-m-d", $timestamp);
      return $randomDate;
  }

function genCreditCardNumb(){
  return mt_rand(111111,99999999);
}  

function getCardLogo($str){
  $url='';
  if($str==='Visa'){
    $url= "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/2560px-Visa_Inc._logo.svg.png";
  }else if($str==='Mastercard'){
    $url =  "https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mastercard-logo.svg/1000px-Mastercard-logo.svg.png";
  }else if($str==='Maestro'){
    $url = "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Maestro_logo.png/1200px-Maestro_logo.png";
  }
  else{
    $url = "https://seeklogo.com/images/P/Pago_Bancomat-logo-DC2706D40C-seeklogo.com.png";
  }
  return $url;
}
?>