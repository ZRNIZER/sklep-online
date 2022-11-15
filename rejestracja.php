<html>
    <head>
        <title>Sklep</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $con= new mysqli("127.0.0.1","root","","sklep");
        if (isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["name"])){
            $sql="INSERT INTO `user`(`id`, `Name`, `Login`, `password`) VALUES ('NULL','".$_POST["name"]."','".$_POST["login"]."','".$_POST["password"]."')";
            $con->query($sql);
            header('Location: '.'shop-zsp.php');
        }
        ?>
        <form method="POST">
            <p>nazwa użytkownika:</p>
            <input name="name">
            <p>login:</p>
            <input name="login">
            <p>hasło:</p>
            <input name="password">
            <input type="submit" value="register">
        </form>
    </body>
</html>