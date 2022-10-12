<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/zuzu.jpeg" alt="Logo" width="50px" height="50px" style="object-fit: cover;"></a>
        <br>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="<?php if($page == 'home'){echo "color: grey";}?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="<?php if($page == 'klant'){echo "color: grey";}?>" href="klant.php">Klantgegevens</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<span class=""><img src="img/sushi-banner.jpg" alt="code"
width="100%" height="200px" style="object-fit: cover;"></span>
<?php
date_default_timezone_set('Europe/Amsterdam');
$date = date('h') + 1;
$date2 = date(':i');
echo "Bezorgtijd is $date$date2 uur";
if(date('h') < 12 && date('h') > 6){
    echo "<br>";
    echo "Welkom! Goedemorgen!";
} else if(date('h') > 12 && date('h') < 18){
    echo "<br>";
    echo "Welkom! Goedemiddag!";
} else if(date('h') < 24 && date('h') > 18){
    echo "<br>";
    echo "Welkom! Goedenavond!";
} else{
    echo "<br>";
    echo "Welkom! Goedenacht!";
}
?>