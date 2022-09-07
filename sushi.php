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
            <input type="text" name="fnaam">
            <br>
            <label>Maki avocado (max = 10)</label><br>
            <input type="text" name="lnaam">
            <br>
            <label>Nigira zalm (max = 10)</label><br>
            <input type="text" name="address">
            <br>
            <label>Philadelphia Roll (max = 5)</label><br>
            <input type="text" name="city">
            <br>
            <label>Spicy Tuna Roll (max = 5)</label><br>
            <input type="text" name="zipcode">
            <br>
            <label>California Roll (max = 8)</label><br>
            <input type="text" name="zipcode">
            <br>
            <btn><input type="submit" name="verzenden" value="Verzenden"></btn>
        </form>
        <?php
        $db = new PDO("mysql:host=localhost;dbname=zuzu"
        ,"root"); 
            if(isset($_POST['verzenden'])){
                $fnaam = $_POST['fnaam'];
                $lnaam = $_POST['lnaam'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $zipcode = $_POST['zipcode'];
                $query = $db->prepare("INSERT INTO customer(fnaam,lnaam, 
                address, city, zipcode)
                VALUES('$fnaam', '$lnaam'. '$address', '$city', '$zipcode')");
                $query->bindParam("fnaam", $fnaam);
                $query->bindParam("lnaam", $lnaam);
                $query->bindParam("address", $address);
                $query->bindParam("city", $city);
                $query->bindParam("zipcode", $zipcode);
                if($query->execute()){
                    echo "goed";
                } else{
                    echo "Er is iets misgegaan";
                }
            }
            
            ?>
        <br>
            <?php
                include_once('includes/footer.php');
            ?>

    </body>
</html>