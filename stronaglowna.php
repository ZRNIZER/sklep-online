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
        $user_id = $_COOKIE['id'];
        $q="SELECT p.id, p.name, p.price FROM `products` AS p JOIN product_status as pr ON pr.products_id = p.id JOIN user as u ON u.id = pr.user_id WHERE u.id = $user_id";
        $res=$con->query($q);
        $max = $res->fetch_all(MYSQLI_ASSOC);

        print_r($max);
        for($i=0; $i<count($max); $i++){
            echo $max[$i]["name"]." <a href='details.php?products_id=".$max[$i]["id"]."'>szczegóły</a></br>";
        }
    ?>
    
    </body>
</html>