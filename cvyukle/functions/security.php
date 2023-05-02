<?php
   //---güvenlik işlemleri---
   function security($text){
    $text=trim($text);//boşluk bırakmadan yazmak için
    $text=stripslashes($text);//eğik slaşları"/" kaldırıyor
    $text=htmlspecialchars($text);//html'e özel karakterleri kaldırır
    return $text;
}
?>