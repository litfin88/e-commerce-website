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
<div class="parallax" style="height:388px;">
<div class="wrapper">
        <nav class="navbar">
            <div class="navbaralt">
                <img class="logo", src="img/logo.png">
                <ul>
                    <div class="butonaltdiv"></div>
                    <li><a class="textli" href="index.php">Ana Sayfa</a></li>
                    <li><a class="textli" href="allmodels.php">Tüm Ürünlerimiz</a></li>
                    <li><a class="textli" href="../sepet.php" style="color: #4EB5EE;" target="_blank">Sepet</a></li>
                </ul>
            </div>
        </nav>
        <div style="width:82%;height:3px;background-color:rgb(196, 196, 196);margin:0 auto;opacity: 0.4;"></div>
        <div class="text3" style="width:100%;height:200px;margin:0 auto;text-align:center;position:absolute;">
            <p style="text-align:center;margin-top:70px; font-family:Poppins, sans-serif; color:white; font-weight:300; font-size:48px;">İstediğiniz ürünü arayın.</p>
        </div>
        <form action="" method="post">
        <div class="searchbutton" style="width:100%;margin:0 auto; margin-top:170px; position:relative; text-align:center;">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Ürün Adı">
        </div>
        </form>
        <script>
function myFunction() {

  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');


  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
</div>
<div class="col" style="width:100%; text-align:center; margin-right: auto; margin-left: auto; margin-top:150px; clear:both; vertical-align: middle;">
    <h1>TÜM ÜRÜNLER</h1>
    <a>Buradan tüm ürünlere bakabilirsiniz.</a></a>
    <div class="colitem" style="width:1580px;height:3px;background-color:rgb(196, 196, 196);margin:0 auto;opacity: 0.4; margin-top:15px;"></div>

<ul style="vertical-align: middle;" id="myUL">
    <li>
        <div class="itembox" style="background-image:url(img/ayakkabi2.jpg); background-size: 472px; background-position: center;" onclick="location.href='models/erkekspor1.php';">
            <a style="float: left; margin-top: 320px; font-size:25px; color:black;">Erkek Spor Ayakkabı</a>
            <a style="float: right; margin-top: 320px; font-size:25px; color:#4EB5EE;">89.90TL</a>
        </div>
    </li>

    <li>
    <div class="itembox" style="background-image:url(img/ayakkabi4.jpg); background-size: 472px; background-position: center;" onclick="location.href='models/kadinspor.php';">
        <a style="float: left; margin-top: 320px; font-size:25px; color:black;">Kadın Spor Ayakkabı</a>
        <a style="float: right; margin-top: 320px; font-size:25px; color:#4EB5EE;">80TL</a>
    </div>
    </li>

    <li>
    <div class="itembox" style="background-image:url(img/ayakkabi3.jpg); background-size: 472px; background-position: center;" onclick="location.href='models/erkekspor2.php';">
        <a style="float: left; margin-top: 320px; font-size:25px; color:black;">Erkek Spor Ayakkabı</a>
        <a style="float: right; margin-top: 320px; font-size:25px; color:#4EB5EE;">82TL</a>
    </div>
    </li>

    <li>
    <div class="itembox" style="background-image:url(img/sapka1.jpg); background-size: 272px; background-position: center;" onclick="location.href='models/erkeksapka.php';">
        <a style="float: left; margin-top: 320px; font-size:25px; color:black;">Erkek Şapka</a>
        <a style="float: right; margin-top: 320px; font-size:25px; color:#4EB5EE;">32TL</a>
    </div>
    </li>

    <li>
    <div class="itembox" style="background-image:url(img/tisort1.jpg); background-size: 272px; background-position: center;" onclick="location.href='models/erkektisort.php';">
        <a style="float: left; margin-top: 320px; font-size:25px; color:black;">Lacivert Erkek Tişört</a>
        <a style="float: right; margin-top: 320px; font-size:25px; color:#4EB5EE;">50TL</a>
    </div>
    </li>

    <li>
    <div class="itembox" style="background-image:url(img/tisort2.jpg); background-size: 272px; background-position: center;" onclick="location.href='models/kadintisort.php';">
        <a style="float: left; margin-top: 320px; font-size:25px; color:black;">Kadın Kısa Kollu Tişört</a>
        <a style="float: right; margin-top: 320px; font-size:25px; color:#4EB5EE;">70TL</a>
    </div>
    </li>

    <li>
    <div class="itembox" style="background-image:url(img/pantolon1.jpg); background-size: 272px; background-position: center;" onclick="location.href='models/erkekpantolon.php';">
        <a style="float: left; margin-top: 320px; font-size:25px; color:black;">Erkek Lacivert Pantolon</a>
        <a style="float: right; margin-top: 320px; font-size:25px; color:#4EB5EE;">90TL</a>
    </div>
    </li>

    <li>
    <div class="itembox" style="background-image:url(img/pantolon2.jpg); background-size: 272px; background-position: center;" onclick="location.href='models/kadinpantolon.php';">
        <a style="float: left; margin-top: 320px; font-size:25px; color:black;">Kadın Lacivert Pantolon</a>
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