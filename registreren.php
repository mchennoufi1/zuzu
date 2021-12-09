<!DOCTYPE html>
<html>

<body>

    <div class="container">
        <?php
            $page = "registreren";

            include_once('../Templates/defaults/header.php');
            include_once('../Templates/defaults/head.php');
            include_once ('../Templates/defaults/menu.php');
        ?>
<br>
        <form method="post" action="">
            <label>Username</label>
            <input type="text" name="username"><br>
            <label>Password</label>
            <input type="password" name="password"><br>
            <br>
            <input type="submit" name="registreren" value="Registreren">
        </form>
        <?php
            try{
                $db = new PDO("mysql:host=localhost;dbname=healthone"
                ,"root");
                if(isset($_POST['registreren'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                $query = $db->prepare("INSERT INTO gebruikers (username, password)
                 VALUES('$username', '" .  sha1($password) . "')");
                if($query->execute()){
                    echo "<br>";
                    echo "De nieuwe gegevens zijn toegevoegd.";
                    echo "<br>";
                } else{
                    echo "Er is een fout opgetreden.";
                }
            }
            } catch(PDOException $e) {
                die("Error!: " . $e->getmessage());
            }
        ?>
        <br>
        <?php
        include_once ('../Templates/defaults/footer.php');
        ?>
    </div>

</body>
</html>