<html>
    <head>
        <meta charset="utf-8">
        <title>Detale</title>
    </head>
    <body>
    <?php
        $con= new mysqli("127.0.0.1","root","","sklep");
        if (isset($_POST["name"]) && isset($_POST["price"])){
            $sql= "INSERT INTO products ( name ,price) VALUES (".$_POST["name"].",".$_POST["name"].")";
            $con->query($sql);
        }
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