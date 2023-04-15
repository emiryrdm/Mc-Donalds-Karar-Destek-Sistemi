<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="subeler.css">
    <link rel="icon" type="image/x-icon" href="images\logo_footer.png">
    <title>ŞUBELER</title>
</head>
<body>

        <h1 style="padding-left: 12cm; margin-top: 2cmk; background-color: white;" >GÖRÜNTÜLEMEK İSTEDİĞİNİZ ŞUBEYİ SEÇİNİZ</h1>
   

<div class="sidenav">
<?php echo '<img src="https://siparis.mcdonalds.com.tr/Assets/images/logo.png">'; ?>
        <a href="homepage.php">ANA EKRAN</a>
        <a href="#">ŞUBELER</a>
        <a target="_blank" href="personel_list.php">PERSONELLER</a>
        <a target="_blank" href="satislar.php">KDS-EKRANI</a>
        
       
</div>

    
<?php
include("db.php");

$sql = "CALL `sube_list`()";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0 )
    
    echo "<table>";
    echo "<tr>";
    echo "<th>ŞUBE ADI</th>";
    echo "</tr>";
    $x = 0;
while ($row = mysqli_fetch_assoc($result)) {
    if ($x < 13) {
        $degisken = $row["sube_ad"];
        strval($degisken);
        $degisken = trim($degisken, '%');

        echo "<tr>";
        echo "<td><a target=top_ href= '$degisken.php'>" . $row["sube_ad"] . "</a></td>";

        echo "</tr>";
        $x++;
    }

    else {

        $degisken = $row["sube_ad"];
        strval($degisken);
        $degisken = trim($degisken, '%');

        echo "<tr>";
        echo "<td><a target=top_ href= 'yenisube.php'>" . $row["sube_ad"] . "</a></td>";

        echo "</tr>";
        $x++;

    

    }
}
  mysqli_close($conn);
  
  
  ?>        
   

<

    
    

    <style>
        table {
            border-collapse: collapse;
            width: 20%;
            margin-left: 45% ;
            margin-top: 2% ;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            background-color: #e6e6e6;
            cursor: pointer;
            
            
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        th {
            background-color: #DA291C;
            color: white;
            
        }

        a {
            
            text-decoration: none;
            color :#27251F
            
        }

        a:hover {


            color:red
        }
        
    </style>

    
   
   
</body>
</html>


