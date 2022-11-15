<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        if(!empty($_COOKIE["id"])){
            header('Location: '.'stronaglowna.php');
            
        }

            $con= new mysqli("127.0.0.1","root","","sklep");
            print_r($_POST);
            if(isset($_POST["login"]) && isset($_POST["password"])){
                $q = 'SELECT id FROM user WHERE login="'.$_POST['login'].'" AND password="'.$_POST['password'].'"';
                $res = $con->query($q);
                $res2 = $res->fetch_array();
                if(!empty($res2["id"])){
                    setcookie("id",$res2["id"]);
                }
            }
        ?>
        <form method="POST";>
            <input name="login">
            <input type="password" name="password">
            <input type="submit">
        </form>
        
    </body>
</html>