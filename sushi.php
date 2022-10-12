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
                    }
                    if ($makiA == !NULL) {
                        $_SESSION['makiA'] = $makiA;
                    }
                    if ($nigira == !NULL) {
                        $_SESSION['nigira'] = $nigira;
                    }
                    if ($phil == !NULL) {
                        $_SESSION['phil'] = $phil;
                    }
                    if ($tuna == !NULL) {
                        $_SESSION['tuna'] = $tuna;
                    }
                    if ($cal == !NULL) {
                        $_SESSION['cal'] = $cal;
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