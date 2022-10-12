<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/zuzu.jpeg" alt="Logo" width="50px" height="50px" style="object-fit: cover;"></a>
        <br>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link-light" aria-current="page" href="index.php"
                   style="<?php if($page == "home"){echo "color: grey";}?>">Home</a>
                <a class="nav-link-light"  aria-current="page" href="klant.php"
                   style="<?php if($page == "klant"){echo "color: grey";}?>">Klantgegevens</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<span class=""><img src="img/sushi-banner.jpg" alt="code"
width="100%" height="200px" style="object-fit: cover;"></span>
<?php
date_default_timezone_set('Europe/Amsterdam');
$date = date('h') + 1;
$normalDate = $date - 1;
$date2 = date(':i');
echo "Bezorgtijd is $date$date2 uur";
if($normalDate < 12 && $normalDate > 6){
    echo "<br>";
    echo "Welkom! Goedemorgen!";
} else if($normalDate > 12 && $normalDate < 18){
    echo "<br>";
    echo "Welkom! Goedemiddag!";
} else if($normalDate < 24 && $normalDate > 18){
    echo "<br>";
    echo "Welkom! Goedenavond!";
} else if($normalDate > 00 && $normalDate < 6){
    echo "<br>";
    echo "Welkom! Goedenacht!";
}else{
    echo "<br>";
    echo "Er is iets foutgegaan.";
}
?>