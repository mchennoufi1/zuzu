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
            <input type="radio" name="sushi" value="1">
            <br>
            <label>Maki avocado (max = 10)</label><br>
            <input type="radio" name="sushi" value="2">
            <br>
            <label>Nigira zalm (max = 10)</label><br>
            <input type="radio" name="sushi" value="3">
            <br>
            <label>Philadelphia Roll (max = 5)</label><br>
            <input type="radio" name="sushi" value="4">
            <br>
            <label>Spicy Tuna Roll (max = 5)</label><br>
            <input type="radio" name="sushi" value="5">
            <br>
            <label>California Roll (max = 8)</label><br>
            <input type="radio" name="sushi" value="6">
            <br>
            <label>Amount</label><br>
            <input type="text" name="amount">
            <br>
            <btn><input type="submit" name="verzenden" value="Verzenden"></btn>
        </form>
        <?php
            if(isset($_POST['verzenden'])){
                $db = new PDO("mysql:host=localhost;dbname=zuzu"
                    ,"root");
                if($_POST['sushi'] == NULL && $_POST['amount'] == NULL){
                    echo "Er is niet alles ingevuld";
                }else {
                    session_start();
                    $sushi = $_POST['sushi'];
                    $amount = $_POST['amount'];
                    $_SESSION['amount'] = $amount;
                    switch ($sushi){
                        case "1": $_SESSION['sushi'] = "Maki komkommer"; break;
                        case "2": $_SESSION['sushi'] = "Maki avocado"; break;
                        case "3": $_SESSION['sushi'] = "Nigira"; break;
                        case "4": $_SESSION['sushi'] = "Philadelphia Roll"; break;
                        case "5": $_SESSION['sushi'] = "Spicy tuna roll"; break;
                        case "6": $_SESSION['sushi'] = "California roll"; break;
                        default: echo "Er is geen mogelijkheid ingevuld"; break;
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