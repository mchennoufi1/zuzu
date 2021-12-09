<!DOCTYPE html>
<html>
<div class="container">
        <?php
            $page = "inloggen";

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
            <input type="submit" name="inloggen" value="Inloggen">
        </form>
            <br>
        <?php
            try{
                $db = new PDO("mysql:host=localhost;dbname=healthone"
                ,"root");
                if(isset($_POST['inloggen'])) {
                    session_start();
                    $username = $_POST['username'];
                    $password = sha1($_POST['password']);
                    $query = $db->prepare("SELECT * FROM gebruikers WHERE 
                    username = :user AND password = :pass");
                    $query->bindParam("user", $username);
                    $query->bindParam("pass", $password);
                    $query->execute();
                    if($query->rowCount() == 1) {
                        echo "Juiste gegevens!";
                        $_SESSION['login'] = true;
                        if($_SESSION['login'] == true){
                            header('Location: index.php');
                        }
                    } else {
                        echo "Onjuiste gegevens!";
                        $_SESSION['login'] = false;
                    }
                }
                    echo "<br>";
            } catch(PDOException $e) {
                die("Error!: " . $e->getmessage());
            }
        ?>
        <?php
            include_once ('../Templates/defaults/footer.php');
        ?>
        </div>
        </body>
<html>