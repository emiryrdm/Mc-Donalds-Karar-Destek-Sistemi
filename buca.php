<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <link rel="icon" type="image/x-icon" href="images\logo_footer.png">
  <title>BUCA ŞUBESİ</title>
</head>
<body>
<div></div>


<div id="notdiff">
<?php
include("db.php");
$sql = "SELECT * FROM sube INNER JOIN personel ON sube.sube_ID = personel.sube_ID WHERE sube.sube_ID =2 ORDER BY personel_gorev";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>



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
  margin-left: 4cm;
  align-items: center;
}
body {
  
}


</style>



</div>
<div> <?php
include("db.php");
$sql = "SELECT * FROM sube INNER JOIN satis ON satis.sube_ID = sube.sube_ID WHERE sube.sube_ID = 2";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);



$x = 3;


$row_data = array();
while($row = mysqli_fetch_array($result)) {
    
    $x = 3;
    while ($x < 15 ) {if (is_int($x)) {
      $row_data[] = $row[$x];
      
      $x++;
      
      
    }
   
       
    }
    
}


$js_data = json_encode($row_data);

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
    labels: ["Ocak", "Şubat", "Mart","Nisan", "Mayıs","Haziran", "Temmuz","Ağustos","Eylül","Ekim","Kasım" ,"Aralık"],
    datasets: [{
      label: 'AYLARA GÖRE SATIŞ ADETLERİ',
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
</div>  <br>
<br>
<br>



<div>

<?php
include("db.php");
$sql = "SELECT * FROM sube INNER JOIN yemek_sepeti_puan ON yemek_sepeti_puan.sube_ID = sube.sube_ID WHERE sube.sube_ID = 2";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);



$x = 3;


$row_data = array();
while($row = mysqli_fetch_array($result)) {
    
    $x = 3;
    while ($x < 38 ) {if (is_int($x)) {
      $row_data[] = $row[$x];
      
      $x++;
      
      
    }
   
       
    }
    
}


$js_data = json_encode($row_data);

?>


  
  <div>
    <canvas style="background-image: url(";" id="myChart1"></canvas>
  </div>
  
  
  <script>
  const ctx1 = document.getElementById('myChart1').getContext('2d')
  var jsArray = <?php echo $js_data; ?>;
  
  new Chart(ctx1, {
    type: 'bar',
    data: {
    labels: 

[
    "Ocak Hız", "Ocak Lezzet", "Ocak Servis","Şubat Hız" ,"Şubat Lezzet" , "Şubat Servis" , "Mart Hız" ,"Mart Lezzet",  "Mart Servis", 
    "Nisan Hız" , "Nisan Lezzet" , "Nisan Servis","Mayıs Hız", "Mayıs Lezzet", "Mayıs Servis" , "Haziran Hız" ,"Haziran Lezzet", "Haziran Servis",
    "Temmuz Hız","Temuz Lezzet","Temmuz Servis","Ağustos Hız","Ağustos Lezzet","Ağustos Servis","Eylül Hız","Eylül Lezzet", "Eylül Servis",
     "Ekim Hız", "Ekim Lezzet", "Ekim Servis","Kasım Hız","Kasım Lezzet","Kasım Serivs","Aralık Hız","Aralık Lezzet","Aralık Servis"






]
,






    datasets: [{
      label: 'AYLARA GÖRE YEMEK SEPETİ HIZ LEZZET VE SERVİS PUANLARI',
      data: jsArray,
      backgroundColor: [
       
      "rgba(54, 162, 235, 1)",  
       
      "rgba(255, 159, 64, 1)",  
       
        
      "rgba(255, 206, 86, 1)"
       
      
    ],
    borderColor: [
      "rgba(255, 99, 132, 1)"
       ], 
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

</body>
</html>    

