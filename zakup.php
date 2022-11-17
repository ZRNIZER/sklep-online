<html>
    <head>
        <meta charset="utf-8">
        <title>Detale</title>
    </head>
    <body>
    <?php
        $con= new mysqli("127.0.0.1","root","","sklep");
            $sql= "INSERT INTO `product_status`( `sale`, `bought`, `exsposed`, `user_id`, `products_id`) VALUES ('yes','no','yes','".$_COOKIE["id"]."','".$_GET["products_id"]."')";
            $con->query($sql);
        
    ?>
    <?php
    ?>
    <form method="POST";>
            <input name="name">
            <input name="price">
            <input type="submit" value="dodaj">
        </form>
    </body>
</html>