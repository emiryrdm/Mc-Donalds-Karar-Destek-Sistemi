<?php include 'db.php';

$sql = "SELECT personel_ad , personel_soyad , personel_gorev , sube_ad FROM sube
INNER JOIN personel ON sube.sube_ID = personel.sube_ID";
$result = mysqli_query($conn, $sql);



mysqli_close($conn);
?>
    
    
    
<html>
<link rel="icon" type="image/x-icon" href="images\logo_footer.png">
<head>
  <title>PERSONELLER</title>
<body>
<form  id="forum" style="padding-left: 45%;"     action="search.php" method="get">
  <input style="width: 240px;"  type="text" name="query" placeholder="">
  <br>
  <br>
  <input id="submit"  type="submit" value="Ara">
  <br>
  
</form>
<style>
#forum {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 1rem;
  padding-right: 36%;
}

#forum input[type="text"] {
  width: 240px;
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
}

#forum input[type="submit"] {
  margin-left: 0.5rem;
  padding: 0.5rem 1rem;
  background-color: #4caf50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

#forum button[type="submit"] {
  margin-left: 0.5rem;
  padding: 0.5rem 1rem;
  background-color: #f44336;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}

#forum button[type="submit"] a {
  color: #fff;
  text-decoration: none;
}

</style>


    <table>
  <tr>
    <th>Ad</th>
    <th>Soyad</th>
    <th>Görev</th>
    <th>Şube</th>
  </tr>
  <?php
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row["personel_ad"]. "</td>";
          echo "<td>" . $row["personel_soyad"]. "</td>";
          echo "<td>" . $row["personel_gorev"]. "</td>";
          echo "<td>" . $row["sube_ad"]. "</td>";
          echo "</tr>";
      }
  } else {
      echo "0 results";
  }
  ?>
</table>


<style>
    th, td {
  border: 1px solid #ddd;
  padding: 10px;
  background-color: #e6e6e6;

  
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}
th {
  background-color: #DA291C;
  color: white;
  
}

table{
  
  border-collapse: collapse;
  width: 80%;
  margin-left: 18%;
  align-items: center;
}

body {
 background-image: url("https://www.mcdonalds.com/content/dam/sites/uk/promo/desktopnfl/white-virtual-download.jpg");

}

</style>

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
     <style>


</body>
</head>
</html>
