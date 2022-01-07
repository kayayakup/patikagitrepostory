<?php

$kullaniciAdi = "root";
$sifre = "";
$host = "localhost";
$veritabani = "Test";

#baglanti işlemi

$baglanti = mysqli_connect($host,$kullaniciAdi,$sifre,$veritabani);
mysqli_set_charset($baglanti, "utf8");
if($baglanti -> connect_error) die ($baglanti -> connect_error);

else{echo "Baglanti kuruldu!";}

$num=$_POST['id'];
$isim=$_POST['name'];
$mail = $_POST['email'];
$sifre = $_POST['password'];

$sorgu="INSERT INTO users(id,name,email,password)
VALUES('$num','$isim','$mail','$sifre')";
$gonder = mysqli_query($baglanti,$sorgu);
if($gonder){echo "Basarili";}
        else{echo "Basarisiz";}
?>