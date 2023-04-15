<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images\logo_footer.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 

    <title>ANA SAYFA</title>
</head>
<body>
<div class="cards">
<?php

include("db.php");
$sql = "SELECT COUNT(sube_ad) FROM sube";
$sql2 = "SELECT COUNT(personel_ad) FROM personel";
$sql3 = "SELECT SUM(satis_ocak) + SUM(satis_subat) + SUM(satis_mart) + SUM(satis_nisan) + SUM(satis_mayis) + SUM(satis_haziran) + SUM(satis_temmuz) + SUM(satis_agustos) + SUM(satis_eylul) + SUM(satis_ekim) + SUM(satis_kasim) + SUM(satis_aralik) FROM satis";
$result1 = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);


$sube_count = $result1->fetch_array()[0];
$personel_count = $result2->fetch_array()[0];
$satis_sum = $result3->fetch_array()[0];
$conn->close();

?>  



    <div class="card">
       
        
        <div class="card-content">
            <div class="number"><?php echo $sube_count; ?></div>
            <div class="card-name">Toplam Şube</div>
        </div>
        <div class="icon-box">
            <i class="fas fa-building"></i>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <div class="number"><?php echo $personel_count; ?></div>
            <div class="card-name">Toplam Personel</div>
        </div>
        <div class="icon-box">
            <i  class="fas fa-users"></i>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <div class="number"><?php echo $satis_sum; ?></div>
            <div class="card-name">Toplam Satış</div>
        </div>
        <div class="icon-box">
        <i class="fas fa-calculator"></i>
        </div>
    </div>
</div>
<div><img style="margin-left: 8cm; width: 1000px; height: 500px;"  src="images\harita.JPG" alt=""></div>


    <style>.cards {
    height: 100%;
    margin-left: 8cm;
    width: 100%;
    padding: 25px 10px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 200px;
    
}

.cards .card {
    padding: 5px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #fff;
    border-radius: 30px;
    box-shadow: 0 35px 65px rgba(0, 0, 0, 0.08);
    border: 15px;
    border-style: outset;
    background-color:#ffffff ;
    
}

.number {
    font-size: 35px;
    font-weight: 500;
    color: #000033;
}

.card-name {
  color:#27251F;
    font-weight: 600;
}

.icon-box i {
    font-size: 45px;
    color:#000080;
    
}
body {
 background-image: url("https://www.mcdonalds.com/content/dam/sites/uk/promo/desktopnfl/white-virtual-download.jpg");

}

</style>

</div>
</div>
</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
    <div class="sidenav">
        <?php echo '<img src="https://siparis.mcdonalds.com.tr/Assets/images/logo.png">'; ?>
                <a href="homepage.php">ANA EKRAN</a>
                <a  href="subeler.php">ŞUBELER</a>
                <a target="_blank" href="personel_list.php">PERSONELLER</a>
                <a target="_blank" href="satislar.php">KDS-EKRANI</a>
                
             
        
        </div>
       
<style>

.sidenav img{
    margin-left: 17px;
  }
  
  .sidenav {
      height:100%;/*Tam yükseklik: 'otomatik' yükseklik istiyorsanız bunu kaldırın*/
      width: 210px; /* Kenar çubuğunun genişliğini ayarlama */
      position: fixed; /* Sabit Kenar Çubuğu (kaydırmada, yerinde kal) */
      z-index: 1; /* Üst Katmanda kalmak */
      top: 0; /* En üstten menü oluştur */
      left: 0;/* Soldan menü oluştur */
      background-color: #27251F; /* Menü siyah renk olsun */
      overflow-x: hidden; /* Yatay kaydırmayı devre dışı bırak */
      padding-top: 20px;
     }
     
     /* Gezinme menu linkleri */
     
     .sidenav a {
       padding: 6px 8px 6px 16px;
       text-decoration: none;
       font-size: 30px;
       font-family: 'Chivo Mono', monospace;;
       color: #ffffff;
       display: block;
     }
     
     /* Gezinme bağlantılarının üzerine geldiğinizde renklerini değiştirin */
     
     .sidenav a:hover {
       color: #DA291C;
     }
     
     /* Stil sayfasi iceriği */
   /* Yüksekliğin 450 pikselden az olduğu daha küçük ekranlarda 
     kenar çubuğunun stilini değiştirin 
     (daha az dolgu ve daha küçük yazı tipi boyutu) */
     
     @media screen and (max-height: 450px) {
       .sidenav {padding-top: 15px;}
       .sidenav a {font-size: 18px;}
     }





</style>
</body>
</html>