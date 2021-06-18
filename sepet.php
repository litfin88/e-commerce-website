<?php include_once 'sepettransfer.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dendy Models | Alışveriş sitesi | dendymodels.com</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper">
        <nav class="navbar" style="background-color:#232128;">
            <div class="navbaralt">
                <img class="logo" src="../img/logo.png">
                <ul>
                    <div class="butonaltdiv"></div>
                    <li><a class="textli" href="../index.php">Ana Sayfa</a></li>
                    <li><a class="textli" href="../allmodels.php">Tüm Ürünlerimiz</a></li>
                    <li><a class="textli" href="../sepet.php" style="color: #4EB5EE;" target="_blank">Sepet</a></li>
                </ul>
            </div>
        </nav> 
</div>

<div class="col" style="text-align:center;">
<h1 id="bos" style="visibility:hidden; width:100%; text-align:center;">SEPETİNİZ BOŞ!</h1>

<div style="width:50%; height:1020px; text-align:center; margin-right: auto; margin-left: auto; clear:both; vertical-align: middle;">
<table class="sepettable" id="cart" style="visibility:hidden; width:100%; text-align:left; margin:0 auto; font-size:20px; font-family:Montserrat, sans-serif;">
              <tr>
                  <th>Ürün</th>
                  <th>Fiyat</th>
                  <th>Adet</th>
                  <th>Toplam</th>
                  <th></th>
             </tr>
         <tbody id="cartBody">
 
         </tbody>
    </table>

    <div id="sepet">
    <button class="classicbtn" style="width:200px; height:40px; font-size:19px; float:left; margin-top:30px; margin-left:0px;">Siparişi Tamamla</button>
    <p id="toplam" style="font-size:30px; float:left; margin-top:27px; color:#4A4A4A; margin-left:20px; font-family:Poppins;">100TL</p>
    </div>
    </div>
</body>
</div>
</html>