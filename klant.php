<!DOCTYPE html>
<html>
<body>

    <?php
    $page = "home";
    include_once('includes/head.php');
    include_once ('includes/header.php');
    ?>
    <div class="container">
        <form class="klant" method="post" action="">
            <h3>Klantgegevens</h3>
            <label>Voornaam: </label><br>
            <input type="text" name="fnaam">
            <br>
            <label>Achternaam: </label><br>
            <input type="text" name="lnaam">
            <br>
            <label>Email: </label><br>
            <input type="text" name="email">
            <br>
            <label>Adres: </label><br>
            <input type="text" name="address">
            <br>
            <label>Postcode: </label><br>
            <input type="text" name="zipcode">
            <br>
            <label>Woonplaats: </label><br>
            <input type="text" name="woonplaats">
            <br>
            <input type="submit" name="verzenden" value="Ga naar sushi's">
        </form>
    </div>
    <br>
    <?php
    include_once ('includes/footer.php');
    ?>

</body>
</html>
