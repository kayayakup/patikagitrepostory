<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veritabani</title></head>
<body><?php 
         $kullaniciAdi = "root";
         $sifre = "";
         $host = "localhost";
         $veritabani = "btbs";
        #baglanti işlemi
        $baglanti = mysqli_connect($host,$kullaniciAdi,$sifre,$veritabani);
        mysqli_set_charset($baglanti, "utf8");
        if($baglanti -> connect_error) die ($baglanti -> connect_error);
        else{echo "Baglanti kuruldu!";}
        #Listeleme işlemi
        $sorgu="SELECT * FROM bilgiler";
        $gonder = mysqli_query($baglanti, $sorgu); 
        mysqli_close($baglanti);
/*      #Ekleme işlemi
         $baglanti = mysqli_connect($host,$kullaniciAdi,$sifre,$veritabani);
         mysqli_set_charset($baglanti, "utf8");
          $sorgu="INSERT INTO bilgiler(id,ad,soyad,mail)
         VALUES('4','Yakup','Kaya','ykp@gmail.com')";
         $gonder = mysqli_query($baglanti, $sorgu);
         *//*#Silme işlemi    
        $baglanti = mysqli_connect($host,$kullaniciAdi,$sifre,$veritabani);
        mysqli_set_charset($baglanti, "utf8");
        $sorgu="DELETE FROM bilgiler WHERE id = ('sdfds')";
        $gonder = mysqli_query($baglanti, $sorgu);
        if($gonder){echo "Basarili";}
        else {echo "Basarisiz";} *//* 
       #Güncelleme işlemi    
        $sorgu1 = "UPDATE bilgiler SET id = '5123', ad ='Yakup',soyad = 'Kaya', mail = 'ykp@gmail.com' WHERE ad = 'Yakup'";
        $gonder1 = mysqli_query($baglanti, $sorgu1); 
        if($gonder1){echo "Basarili";}
        else{echo "Basarisiz";} */
    ?><table border = "50"><tr><td>Id</td><td>Ad</td><td>Soyad</td><td>Mail</td><td>Operasyon</td></tr><?php while($satir = mysqli_fetch_array($gonder)){?>
        <tr><td><?php echo $satir['id']; ?></td><td><?php echo $satir['ad']; ?></td><td><?php echo $satir['soyad']; ?></td><td><?php echo $satir['mail']; ?></td><td><a href="">Sil</a> <a href="">Guncelle</a></td></tr><?php}?>
</table></body></html>