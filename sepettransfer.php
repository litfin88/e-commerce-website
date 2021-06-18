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

    <script>
         var cart = [];
        $(function () {
            if (localStorage.cart)
            {
                cart = JSON.parse(localStorage.cart);
                showCart();
            }
        });
 
        function addToCart() {
            var name = $("#isim").text();
            var price = $("#price").text();
            var qty = ("1");
 
            for (var i in cart) {
                if(cart[i].Product == name)
                {
                    cart[i].Qty = qty;
                    showCart();
                    saveCart();
                    return;
                }
            }
            var item = { Product: name,  Price: price, Qty: qty }; 
            cart.push(item);
            saveCart();
            showCart();
        }
 
        function deleteItem(index){
            cart.splice(index,1);
            showCart();
            saveCart();
        }
 
        function saveCart() {
            if ( window.localStorage)
            {
                localStorage.cart = JSON.stringify(cart);
            }
        }
 
        function showCart() {
            if (cart.length == 0) {
                $("#cart").css("visibility", "hidden");
                $("#sepet").css("visibility", "hidden");
                $("#bos").css("visibility", "visible");
                return;
            }
            else
            {
                $("#sepet").css("visibility", "visible");
                $("#bos").css("visibility", "hidden");
            }
 
            $("#cart").css("visibility", "visible");
            $("#cartBody").empty();
            var toplam = 0;
            for (var i in cart) {
                var item = cart[i];
                var row = "<tr><td>" + item.Product + "</td><td>" +
                             item.Price + " TL" + "</td><td>" + item.Qty + "</td><td>"
                             + item.Qty * item.Price + " TL" + "</td><td>"
                             + "<button style='border:0; background-color:orange; width:25px; height:25px; font-size:15px; font-family:Montserrat; border-radius:20px; color:white;' onclick='deleteItem(" + i + ")'>X</button></td></tr>";
                $("#cartBody").append(row);

                toplam += Number(item.Price);
            }

            $("#toplam").text(toplam + "TL");
        }
</script>
</head>
<body>
</body>
</html>