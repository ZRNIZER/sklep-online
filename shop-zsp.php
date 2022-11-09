<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $con= new mysqli("127.0.0.1","root","","mydb");
            $sql="SELECT id ,name FROM products WHERE 1";
                if($wynik=$con->query($sql)){
                    while ($row=$wynik->fetch_array()){
                        echo 'id' .$row["id"].'name'.$row["name"];
                    }
                      }
            if (isset($_POST["Submit"])){
                if ($_POST["hasło"] == "sekret1"){
                ?>
                tutaj jest chroniona zawartosc...
                <?php
                }
            }
            else{
                echo "Nieprawdiłowe hasło";
            }
        ?>
        <form method="POST">
            <input type="password" name="hasło" placeholder="Podaj hasło">
            <input type="submit" name="submit" value="wyslij">
        </form>
    </body>
</html>