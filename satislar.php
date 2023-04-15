<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <link rel="icon" type="image/x-icon" href="images\logo_footer.png">
    <title>Karar Destek Ekranı</title>
</head>



<style>
  body{

    margin-left: 2.4cm;
  }
</style>



<body>
<div id="warm">

<div id="warning"></div>
<br>
<div id="warning2"></div>

</div>

<div style="width: 50%; margin-left: 8.6cm;"> 

  <?php
include("db.php");
$sql = "SELECT sube_ad , SUM(satis_ocak + satis_subat + satis_mart + satis_nisan + satis_mayis + satis_haziran + satis_temmuz + satis_agustos + satis_eylul + satis_ekim + satis_kasim + satis_aralik) AS yillik_toplam_satis  FROM satis ,sube WHERE sube.sube_ID = satis.sube_ID GROUP BY sube_ad";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
if (mysqli_num_rows($result) > 0) {
    

$veriler = array(); // Boş bir dizi oluşturulur

  if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_array($result)) {

      $veriler[] = array($row[1]);
      
      

      
    }
    
    }
    
    }
    
  

 

    
   
$js_data = json_encode($veriler);


 






?>






  
  <div>
    <canvas " id="myChart"></canvas>
    
  </div>
  
  
  <script>
    
  const ctx = document.getElementById('myChart').getContext('2d')
  var jsArray = <?php echo $js_data; ?>;
  
  new Chart(ctx, {
    type: 'bar',
    data: {
    labels: ["Optimum","Agora","Balçova","Bornova","Buca","Çankaya","Girne","Hatay","Karşıyaka","Kipa","Mavibahçe","Point","Westpark"],
    datasets: [{
      label: 'ŞUBE YILLIK SATIŞ GRAFİĞİ',
      data: jsArray,
      backgroundColor: [
      "rgba(255, 99, 132, 1)", 
      "rgba(54, 162, 235, 1)",  
      "rgba(255, 206, 86, 1)",  
      "rgba(75, 192, 192, 1)",  
      "rgba(153, 102, 255, 1)",  
      "rgba(255, 159, 64, 1)",  
      "rgba(255, 99, 132, 1)",  
      "rgba(54, 162, 235, 1)",  
      "rgba(255, 206, 86, 1)",  
      "rgba(75, 192, 192, 1)",  
      "rgba(255, 159, 64, 1)" 
    ],
    borderColor: [
      "rgba(255, 99, 132, 1)",  
      "rgba(54, 162, 235, 1)",  
      "rgba(255, 206, 86, 1)",  
      "rgba(75, 192, 192, 1)", 
      "rgba(153, 102, 255, 1)",  
      "rgba(255, 159, 64, 1)", ], 
      borderWidth: 0.3
    }]
  
  
  
},

  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});



</script>  
</div>
    
<script>
  // ...
  var jsArray = <?php echo $js_data; ?>;
  
  // Uyari mesajini yazdiran fonksiyon
  function showWarning(value) {
    console.log("Uyari: Deger 100.000'den buyuk: " + value);
  }
  
  // jsArray dizisinin elemanlari icin dongu
  jsArray.forEach(function(value) {
    if (value > 100000) {
      showWarning(value);
    }
  });

  new Chart(ctx, {
    // ...
  });
  // ...
</script>


<style>

  #warm {

    padding-left: 5.2cm;
    font-size: 19px;
  }
  #warning {
    color: green;
    
   
  }

  #warnig2 {
  color: blue;
  }
</style>

<script>
  // ...
  var jsArray = <?php echo $js_data; ?>;
  
  // Uyari mesajini yazdiran fonksiyon
  function showWarning(value) {
    var warningDiv = document.getElementById("warning");
    warningDiv.innerHTML = "DİKKAT: " + value + "  ŞUBENİZİN YILLIK SATIŞ TOPLAMI 100.000 İN ÜZERİNE ÇIKARAK ŞUBE YOĞUNLUK STANDARTINI AŞMIŞTIR.";
  }
  
  // Sınırı gecen degerlerin sayisi
  var x = 0;
  
  // jsArray dizisinin elemanlari icin dongu
  jsArray.forEach(function(value) {
    if (value > 100000) {
      x++;
      showWarning(x);
    }
  });

  new Chart(ctx, {
    // ...
  });
  // ...
  
</script>


<script>
  // ...
  var jsArray = <?php echo $js_data; ?>;
  

  function showWarning(value) {
    var warningDiv = document.getElementById("warning2");
    warningDiv.innerHTML = "DİKKAT: " + value + "  ŞUBENİZİN YILLIK SATIŞ TOPLAMI 66.000 ALTINDA BU ŞUBE STANDARTLARIMIZIN ALTINDA KALMIŞTIR.";
  }
  

  var x = 0;
  
  
  jsArray.forEach(function(value) {
    if (value < 66000) {
      x++;
      showWarning(x);
    }
  });

  new Chart(ctx, {
    // ...
  });
  // ...
</script>
<br>
<br>
<div id="uyarı1">
    <div>
        <img src="https://png.vector.me/files/images/3/3/335164/check_mark_preview" height="50px" width="50px" alt="">
        
            <p>SATIŞ SAYILARI STANDART ŞUBE YOĞUNLUK ORANININ ÜZERİNE ÇIKAN ŞUBELERİN YAKINLARINA YENİ BİR ŞUBE AÇMAYI DÜŞÜNEBİLİRSİNİZ!</p>
    </div>

</div>
<div id="uyarı1">
    <div>
        <img src="https://png.vector.me/files/images/3/3/335164/check_mark_preview" height="50px" width="50px" alt="">
        
            <p>SATIŞ SAYILARI STANDARTLARIMIZIN ALTINDA KALAN ŞUBELER İÇİN OPERASYONEL KARARLAR ALINMALIDIR!</p>
    </div>

</div>
 
<style>

    #uyarı1 div{

        display: flex;
        align-items: center;
        margin-left: 5cm;
        }
</style>

<div id="sube_ekle">
<button onclick="displayForm()">YENİ BİR ŞUBE AÇMAK İSTİYORUM</button>
<br>
<br>


<form action="" method="post" id="form" style="display:none;">
  <label for="sube_ad">Şube Adı:</label><br>
  <input type="text" id="sube_ad" name="sube_ad"><br>
  <br>
  <input type="submit" value="Gönder">
  <br>
  <br>
  <?php
ini_set('display_errors', 0);
include("db.php");

$result = mysqli_query($conn, "SELECT MAX(sube_ID) +1 as max_sube_ID FROM sube");
$row = mysqli_fetch_assoc($result);
$max_sube_ID = $row['max_sube_ID'];

$sube_ID = $max_sube_ID;
$sube_ad = $_POST['sube_ad'];



if (empty($sube_ad) || !is_string($sube_ad)) {

    //

  
  } else {
  
    $sube_ad = ucfirst($sube_ad);
    
  $sql = "INSERT INTO sube (sube_ID, sube_ad) VALUES ('$sube_ID', '$sube_ad')";


  if (mysqli_query($conn, $sql)) {

    echo "<script>
		alert('Yeni Şube Başarılı Bir Şekilde Kaydedilmiştir!');
		window.location.href='subeler.php';
	</script>";

  }
}
?>
</form>

<script>
function displayForm() {
  document.getElementById("form").style.display = "block";
}
</script>

</div>
<style>
  #sube_ekle{

    text-align: center;
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
  

     
     .sidenav a {
       padding: 6px 8px 6px 16px;
       text-decoration: none;
       font-size: 30px;
       font-family: 'Chivo Mono', monospace;;
       color: #ffffff;
       display: block;
     }
     

     
     .sidenav a:hover {
       color: #DA291C;
     }
     
 
     
     @media screen and (max-height: 450px) {
       .sidenav {padding-top: 15px;}
       .sidenav a {font-size: 18px;}
     }
     <style>
</body>
</html>
