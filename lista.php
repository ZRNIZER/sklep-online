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
        $q="SELECT p.id, p.name, p.price FROM `products` AS p";
        $res=$con->query($q);
        $max = $res->fetch_all(MYSQLI_ASSOC);

        print_r($max);
        for($i=0; $i<count($max); $i++){
            echo $max[$i]["name"]." <a href='details.php?products_id=".$max[$i]["id"]."'>szczegóły</a><a href='zakup.php?products_id=".$max[$i]["id"]."'>zakup</a></br>";
        }
    ?>
    
    </body>
</html>