<!DOCTYPE html>
    <html>
    <body>
    <div class="container">
            <?php
            $page = "home";
            include_once('includes/head.php');
            include_once ('includes/header.php');
            ?>
            <br>
            <span class="card header"><img src="img/sushiwallpaper.jpeg" alt="code" 
            width="100%" height="200px"style="object-fit: cover;"></span>
            <h4>Sushirestaurant Zuzu</h4>
            <p>
                Wij zijn Sushirestaurant Zuzu. Een restaurant die heerlijke sushi verkoopt voor een redelijke prijs.
                 Ons assortiment is te vinden in onze <a href="sushi.php">sushi<a> pagina, waar u verschillende soorten sushi kunt kopen.
            </p>
            <hr>
            <?php
                include_once ('includes/footer.php');
            ?>
        </div>
    </body>
</html>
