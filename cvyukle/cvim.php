
<?php 

require "functions/security.php";
if(isset($_POST)){
   $ad=$_POST["adsoyad"];
   $dogumgunu=$_POST["dogum"];
  // $fotograf=$_POST["resim"];
   $ogrenim=$_POST["durum"];
   $brans=$_POST["bolum"];

   $message='';
   foreach($brans as $text){
   $message.=$text;}

   //$dosya_cv=$_POST["cvyukle"];
   $arka_plan_rengi=$_POST["renk"];
   


  /* echo $ad."<br>";
   echo $dogumgunu."<br>";
   echo $ogrenim."<br>";
   echo $message."<br>";
   */


   

   
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body>
    <div class="yuzey" style="background-color:<?php echo $arka_plan_rengi ?>;">
    <?php
    
    if(isset($_FILES['resim']) && isset($_POST['control'])){
        $takeFiler=$_FILES['resim'];
        $fileName=$takeFiler['name'];
        $fileName=uniqid()."_".$fileName;
        $fileType=$takeFiler['type'];
        $fileSize=$takeFiler['size'];
        $fileTempName=$takeFiler['tmp_name'];
        $fileError=$takeFiler['error'];
        $filePath="uploads/".$fileName;
    
    
        
    
    if($fileError == 4){
                    echo "Bir Dosya Seçiniz <br>";
                    exit();
                }else{
                    if($fileError!=0 && $fileError!=4){
                        echo "Yüklediğiniz dosyada bir hatsa bulunmaktadır. <br>";
                        exit();
                    }
                    else{
                        if(file_exists($filePath)){
                            echo "Bu isimde dosya mevcut, değiştirerek tekrar yükleme yapın.";
                            exit();
                        }
                        else{
                            if($fileSize > 3000000){
                                echo "dosya boyutunuz 300KB'dan fazla olamaz!!";
                                exit();
                            }
                            else{
                                $look=getimagesize($fileTempName);
                                if($look === false){
                                    echo "Yüklemeye çalıştığınız dosya resim formatında değil.";
                                    exit();
                                }
                                else{
                                $fileExtension=strtolower(pathinfo($filePath,PATHINFO_EXTENSION));
                                $allowed=array("png","bmp","jpg", "jpeg");
                                if(!in_array($fileExtension, $allowed)){
                                    echo "Yalnızca PNG, BMP, JPG ve JPEG dosyaları yükleyebilirsiniz.";
                                    exit();
                                }
                                else{
                   if(move_uploaded_file($fileTempName, $filePath)){
                    echo "<img style='float:left; padding-left:25px; padding-top:25px;' src='$filePath'>";
                } 
                else{
                 echo "Dosya Yüklenirken Hata Oluştu <br>";
                }
            }
        }
        }
        }
        }
        }
    }
                   ?>                 
                   <div class="bilgi">
    <label>İsim-Soyisim : </label><?php echo $ad."<br>"; ?>
    <label>Doğum Tarihi : </label><?php echo $dogumgunu."<br>"; ?>
    <label>Öğrenim Durumu : </label><?php echo $ogrenim."<br>"; ?>
    <label>Alanı/Bölümü: </label><?php echo $message."<br>"; ?>
   



</label>

    </div>
    
    </div>
</body>
</html>
