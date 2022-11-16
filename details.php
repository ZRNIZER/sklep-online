<html>
    <head>
        <meta charset="utf-8">
        <title>Detale</title>
    </head>
    <body>
    <?php
        $con= new mysqli("127.0.0.1","root","","sklep");
        if (isset($_POST["name"]) && isset($_POST["price"])){
            $sql= "UPDATE products set name = '".$_POST["name"]."',price = '".$_POST["price"]."'";
            $con->query($sql);
        }
        print_r($_GET);
        $q="SELECT id, name, price FROM products WHERE id=".$_GET["products_id"];
        $res=$con->query($q);
        $max = $res->fetch_array(MYSQLI_ASSOC);
    ?>

    <form method="POST">
        <input name="name" value="<?php echo $max["name"];?>">
        <input name="price" value="<?php echo $max["price"];?>">
        <input type="submit" value="dodaj">
    </form>
    </body>
</html>