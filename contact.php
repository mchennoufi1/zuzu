<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <?php
            $page = "contact";
            include_once('includes/header.php');
            include_once('includes/head.php');
        ?>
        <br>
        <h4 class="card-title">Contactgegevens</h4>
        <br>
        <p class="card-header">Naam: Restaurant Zuzu</p>
        <p class="card-header">Locatie: Den Haag</p>
        <p class="card-header">Openingstijden: </p>
<p class="card-header bg-white">Maandag t/m vrijdag: 08:00 uur tot 20:00 uur </p>
<p class="card-header bg-white">Zaterdag en Zondag: 10:00 uur tot 18:00 uur </p>
        <p class="card-header">Telefoonnummer: </p>
        <p class="card-header">E-Mail: </p>
        <br>
        <?php
        include_once ('includes/footer.php');
        ?>
    </div>
</body>
</html>