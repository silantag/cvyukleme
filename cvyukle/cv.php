<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stil.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>
   
      <?php require "functions/security.php" ?>
    <div class="column" style="background-color:#2b0b72;color:white; margin:25px; padding:45px;">
    <form action="cvim.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Ad Soyad</label>
<input type="text" class="form-control" name="adsoyad" placeholder="Adınızı Soyadınızı Giriniz">
   </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Doğum Tarihi</label>
<input type="date" class="form-control" name="dogum">
  </div>  
  <div class="form-group">
    <label for="exampleFormControlFile1">Resim Yükle</label>
    <input type="file" class="form-control-file" name="resim">
  </div>
  <br>
  <label style="font-size:25px;">Öğrenim Durumu</label>
  <br>
  <input type="radio" name="durum" <?php if (isset($ogrenim) && $text=="mezun") echo "checked";?> value="Mezun">Mezun
  <br>
  <input type="radio" name="durum" <?php if (isset($ogrenim) && $text=="ogrenci") echo "checked";?> value="Öğrenci">Öğrenci
   <br>
   <br>
  <label style="font-size:25px;">Bölüm Seçiniz</label>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="defaultCheckbox1" value="Bilişim"
    name="bolum[]">
    <label class="form-check-label" for="defaultCheckbox1">Bilisim</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" id="defaultCheckbox1" value="Elektrik"
    name="bolum[]">
    <label class="form-check-label" for="defaultCheckbox1">Elektrik</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" id="defaultCheckbox1" value="Motor"
    name="bolum[]">
    <label class="form-check-label" for="defaultCheckbox1">Motor</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" id="defaultCheckbox1" value="Makine"
    name="bolum[]">
    <label class="form-check-label" for="defaultCheckbox1">Makine</label>
</div>
<br>

<div class="form-group">
    <label style="font-size:25px;">Arka Plan Rengi : </label>
    <input type="color" name="renk" >
</div>
<button type="submit" name="control" class="btn btn-danger">Submit</button>

</form>
 
</div>
</body>
</html>