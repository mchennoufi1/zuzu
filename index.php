<!DOCTYPE html>
    <html>
    <body>

            <?php
            $page = "home";
            include_once('includes/head.php');
            include_once ('includes/header.php');
            ?>
            <br><br>
            <div class="beginstuk">
            <h4>Welkom bij Zuzu</h4>
            <p>
                Wij zijn gespecialieerd in de Japanse keuken. Het woord sushi is afkomstig van "su", wat azijn betekend
                , en "shi" -- rijst.
            </p>
                <p class="fw-bold">
                    Vandaag dinsdag 23 augustus 2022
                </p>
            </div>
            <div class="row">
            <div class="card col-md-6">
                <a href="klant.php">
                <div class="card-body">
                    <img src="img/sushi.jpeg" alt="code"
                         width="100%" height="200px" style="object-fit: cover;">
                </div>
                <div class="card-footer">
                    Bestel bij ons je sushi's
                </div>
                </a>
            </div>
            <div class="card col-md-6">
                <a href="klant.php">
                <div class="card-body">
                    <img src="img/sushi2.jpg" alt="code"
                         width="100%" height="200px" style="object-fit: cover;">
                </div>
                <div class="card-footer">
                    Keuze uit verschillende soorten sushi's
                </div>
                </a>
            </div>
            </div>
            <br>
            <?php
                include_once ('includes/footer.php');
            ?>

    </body>
</html>
