<!DOCTYPE html>
<html>
    <body>
        <div class="container">
        <?php
            $page = "sushi";
            include_once('includes/header.php');
            include_once('includes/head.php');
        ?>
        <br>
        <form method="post" action="sushi.php">
            <label>Voornaam: </label>
            <input type="text" name="fnaam">
            <br>
            <label>Achternaam: </label>
            <input type="text" name="lnaam">
            <br>
            <label>Adres: </label>
            <input type="text" name="address">
            <br>
            <label>Stad: </label>
            <input type="text" name="city">
            <br>
            <label>Postcode: </label>
            <input type="text" name="zipcode">
            <br><br>
            <input type="submit" name="verzenden" value="Opslaan">
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
            <hr>
            <?php
                include_once('includes/footer.php');
            ?>
        </div>
    </body>
</html>