<?php include_once '../sepettransfer.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Dendy Models | Alışveriş sitesi | dendymodels.com</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="parallaxmodel" style="height:388px; height:500px;">
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
        <div class="text3" style="width:100%;height:200px;margin:0 auto;text-align:center;position:absolute;">
            <img src="../img/sapka1.jpg" style="width:526px; image-size:cover; margin-left: 50px;">

            <img src="../img/sapka1_2.jpg" style="width:526px; image-size:cover;">
        </div>
</div>
<div style="width:1550px; margin:0 auto; margin-top:420px;">
    <h1 id="isim" style="font-size:45px; margin-top:110px; float:left; font-family: Poppins, sans-serif; font-weight:400;">Erkek Şapka</h1>
    <p style="float:right; padding:5px; background-color:#A3A3A3; border-radius:20px; color:white; margin-top:125px; margin-left:10px; padding-left:15px; padding-right:15px; font-family: Poppins, sans-serif;">Erkek</p>
    <p style="float:right; padding:5px; background-color:#A3A3A3; border-radius:20px; color:white; margin-top:125px; margin-left:10px; padding-left:15px; padding-right:15px; font-family: Poppins, sans-serif;">Şapka</p>
    <h1 id="price" style="font-size:25px; margin-top:160px; float:left; font-family: Poppins, sans-serif; font-weight:400; position:absolute; color:#4EB5EE;">32</h1>
    <h1 style="font-size:25px; margin-top:160px; margin-left: 35px; float:left; font-family: Poppins, sans-serif; font-weight:400; position:absolute;color:#4EB5EE;">TL</h1>
    <p style="float:left; margin-top:30px; font-size:25px; font-family: Roboto, sans-serif; color:#535353; font-weight:300; margin-right: 1300px">
Marka : Kinetix
<br>Model : SN372 AQUA
<br>Cinsiyet : Erkek
<br>Renk : Beyaz
<br>Malzeme : Tekstil
</p>
    <button style="float: left; margin-top:20px; margin-right:500px; width:250px; height:45px; background-color:#24B0FF; border:0 solid; outline:0; color:white; font-size:20px; border-radius:10px; cursor:pointer;" id="btnAdd" onclick="addToCart()">SEPETE EKLE</button>
</div>
<div class="col" style="width:100%; text-align:center; margin-right: auto; margin-left: auto; clear:both; vertical-align: middle;">
    <h1 style="margin-top:100px;">DİĞER ÜRÜNLER</h1>
    <a>Görmek isteyebileceğin diğer ürünlerimiz.</a></a>
    <div class="colitem" style="width:1580px;height:3px;background-color:rgb(196, 196, 196);margin:0 auto;opacity: 0.4; margin-top:15px;"></div>
    <ul style="vertical-align: middle;" id="myUL">
    <li>
        <div class="itembox" style="background-image:url(../img/ayakkabi2.jpg); background-size: 472px; background-position: center;" onclick="location.href='erkekspor1.php';">
            <a style="float: left; margin-top: 320px; font-size:25px; color:black;">Erkek Spor Ayakkabı</a>
            <a style="float: right; margin-top: 320px; font-size:25px; color:#4EB5EE;">89.90TL</a>
        </div>
    </li>

    <li>
    <div class="itembox" style="background-image:url(../img/ayakkabi4.jpg); background-size: 472px; background-position: center;" onclick="location.href='kadinspor.php';">
        <a style="float: left; margin-top: 320px; font-size:25px; color:black;">Kadın Spor Ayakkabı</a>
        <a style="float: right; margin-top: 320px; font-size:25px; color:#4EB5EE;">80TL</a>
    </div>
    </li>

    <li>
    <div class="itembox" style="background-image:url(../img/ayakkabi3.jpg); background-size: 472px; background-position: center;" onclick="location.href='erkekspor2.php';">
        <a style="float: left; margin-top: 320px; font-size:25px; color:black;">Erkek Spor Ayakkabı</a>
        <a style="float: right; margin-top: 320px; font-size:25px; color:#4EB5EE;">82TL</a>
    </div>
    </li>

    <li>
    <div class="itembox" style="background-image:url(../img/sapka1.jpg); background-size: 272px; background-position: center;" onclick="location.href='erkeksapka.php';">
        <a style="float: left; margin-top: 320px; font-size:25px; color:black;">Erkek Şapka</a>
        <a style="float: right; margin-top: 320px; font-size:25px; color:#4EB5EE;">32TL</a>
    </div>
    </li>

    <li>
    <div class="itembox" style="background-image:url(../img/tisort1.jpg); background-size: 272px; background-position: center;" onclick="location.href='erkektisort.php';">
        <a style="float: left; margin-top: 320px; font-size:25px; color:black;">Lacivert Erkek Tişört</a>
        <a style="float: right; margin-top: 320px; font-size:25px; color:#4EB5EE;">50TL</a>
    </div>
    </li>

    <li>
    <div class="itembox" style="background-image:url(../img/tisort2.jpg); background-size: 272px; background-position: center;" onclick="location.href='kadintisort.php';">
        <a style="float: left; margin-top: 320px; font-size:25px; color:black;">Kadın Kısa Kollu Tişört</a>
        <a style="float: right; margin-top: 320px; font-size:25px; color:#4EB5EE;">70TL</a>
    </div>
    </li>
</ul>
</div>
<div style="width:100%; text-align:center; margin-right: auto; margin-left: auto; margin-top:60px; margin-bottom:60px; clear:both; vertical-align: middle;">
</div>
<div class="col" style="width:100%; height:35px; text-align:center; margin-right: auto; margin-left: auto; clear:both; background-color:#272727;">
<div class="footernav">
        <a class="copyright" style="font-size:18px; color:white; float:left; margin-top:4px; text-decoration:none;" href="index.php">© 2020 Dendy Models. All rights reserved.</a>
        <a class="copyright" style="font-size:18px; color:white; float:right; margin-top:4px; text-decoration:none;" href="#" onclick="contact()">Contact</a>
        <a class="copyright" style="font-size:18px; color:white; float:right; margin-top:4px; text-decoration:none; margin-right:50px;" href="#" onclick="hakkimizda()">About Us</a>

        <script>
            function contact()
            {
                window.alert("Bize 0123 456 78 90 adresinden veya destek@dendymodels.com adresinden ulaşabilirsiniz!");
            }

            function hakkimizda()
            {
                window.alert("Şirketimiz 2011 yılında kuruldu, 20 çalışanımız ile birlikte size en iyi hizmeti sunmayı amaçlıyoruz.");
            }
        </script>
    </div>
</div>
</body>
</html>