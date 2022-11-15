<html>
    <head>
        <title>Strona Główna</title>
        <meta charset="utf-8">
    </head>
    <body>
    <?php
        if(empty($_COOKIE["id"])){
            header('Location: '.'shop-zsp.php');
        }
        $con= new mysqli("127.0.0.1","root","","sklep");
        $sql="SELECT p.id, p.name, p.price FROM `products` AS p JOIN product_status as pr ON pr.products_id = p.id JOIN user as u ON u.id = pr.user_id WHERE u.id = 2";

        $zap=$con->query
        
    ?>
    </body>
</html>