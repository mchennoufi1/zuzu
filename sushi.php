<!DOCTYPE html>
<html>
    <body>
        <?php
            $page = "sushi";
            include_once('includes/header.php');
            include_once('includes/head.php');
        ?>
        <br><br>
        <form class="klant" method="post" action="">
            <h3>Sushi's bestellen</h3>
            <label>Maki komkommer (max = 5)</label><br>
            <input type="text" name="maki">
            <br>
            <label>Maki avocado (max = 10)</label><br>
            <input type="text" name="makiA">
            <br>
            <label>Nigira zalm (max = 10)</label><br>
            <input type="text" name="nigira">
            <br>
            <label>Philadelphia Roll (max = 5)</label><br>
            <input type="text" name="phil">
            <br>
            <label>Spicy Tuna Roll (max = 5)</label><br>
            <input type="text" name="tuna">
            <br>
            <label>California Roll (max = 8)</label><br>
            <input type="text" name="cal">
            <br>
            <btn><input type="submit" name="verzenden" value="Verzenden"></btn>
        </form>
        <?php
            if(isset($_POST['verzenden'])){
                $db = new PDO("mysql:host=localhost;dbname=zuzu"
                    ,"root");
                if($_POST['maki'] == NULL && $_POST['makiA'] == NULL &&
                    $_POST['nigira'] == NULL && $_POST['phil'] == NULL &&
                    $_POST['tuna'] == NULL && $_POST['cal'] == NULL){
                    echo "Er is niet alles ingevuld";
                }else {
                    session_start();
                    $maki = $_POST['maki'];
                    $makiA = $_POST['makiA'];
                    $nigira = $_POST['nigira'];
                    $phil = $_POST['phil'];
                    $tuna = $_POST['tuna'];
                    $cal = $_POST['cal'];
                    if ($maki == !NULL) {
                        $_SESSION['maki'] = $maki;
                        $_SESSION['name'] = "maki";
                        $query = $db->prepare("INSERT INTO sushi (name, amount)
                    VALUES('$_SESSION[name]','$_SESSION[maki]')");
                        if($query->execute()){
                            echo "<br>";
                            echo "De nieuwe gegevens zijn toegevoegd.";
                            echo "<br>";
                            $_SESSION['id'] = $last_id;
                        } else{
                            echo "Er is een fout opgetreden.";
                        }
                    }
                    if ($makiA == !NULL) {
                        $_SESSION['makiA'] = $makiA;
                        $_SESSION['name'] = "makiA";
                        $query = $db->prepare("INSERT INTO sushi (name, amount)
                    VALUES('$_SESSION[name]','$_SESSION[makiA]')");
                        if($query->execute()){
                            echo "<br>";
                            echo "De nieuwe gegevens zijn toegevoegd.";
                            echo "<br>";
                            $_SESSION['id'] = $last_id;
                        } else{
                            echo "Er is een fout opgetreden.";
                        }
                    }
                    if ($nigira == !NULL) {
                        $_SESSION['nigira'] = $nigira;
                        $_SESSION['name'] = "nigira";
                        $query = $db->prepare("INSERT INTO sushi (name, amount)
                    VALUES('$_SESSION[name]','$_SESSION[nigira]')");
                        if($query->execute()){
                            echo "<br>";
                            echo "De nieuwe gegevens zijn toegevoegd.";
                            echo "<br>";
                            $_SESSION['id'] = $last_id;
                        } else{
                            echo "Er is een fout opgetreden.";
                        }

                    }
                    if ($phil == !NULL) {
                        $_SESSION['phil'] = $phil;
                        $_SESSION['name'] = "phil";
                        $query = $db->prepare("INSERT INTO sushi (name, amount)
                    VALUES('$_SESSION[name]','$_SESSION[phil]')");
                        if($query->execute()){
                            echo "<br>";
                            echo "De nieuwe gegevens zijn toegevoegd.";
                            echo "<br>";
                            $_SESSION['id'] = $last_id;
                        } else{
                            echo "Er is een fout opgetreden.";
                        }

                    }
                    if ($tuna == !NULL) {
                        $_SESSION['tuna'] = $tuna;
                        $_SESSION['name'] = "tuna";
                        $query = $db->prepare("INSERT INTO sushi (name, amount)
                    VALUES('$_SESSION[name]','$_SESSION[tuna]')");
                        if($query->execute()){
                            echo "<br>";
                            echo "De nieuwe gegevens zijn toegevoegd.";
                            echo "<br>";
                            $_SESSION['id'] = $last_id;
                        } else{
                            echo "Er is een fout opgetreden.";
                        }

                    }
                    if ($cal == !NULL) {
                        $_SESSION['cal'] = $cal;
                        $_SESSION['name'] = "cal";
                        $query = $db->prepare("INSERT INTO sushi (name, amount)
                    VALUES('$_SESSION[name]','$_SESSION[cal]')");
                        if($query->execute()){
                            echo "<br>";
                            $last_id = $db->insert_id;
                            echo "New record created successfully. Last inserted ID is: " . $last_id;
                            echo "De nieuwe gegevens zijn toegevoegd.";
                            echo "<br>";
                            $_SESSION['id'] = $last_id;
                        } else{
                            echo "Er is een fout opgetreden.";
                        }

                    }
                    header("Location: http://localhost/zuzu/overzicht.php");

                }
            }
            
            ?>
        <br>
            <?php
                include_once('includes/footer.php');
            ?>

    </body>
</html>