<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
        ZUZU
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
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
                <li class="nav-item">
                    <a class="nav-link" style="<?php if($page == "sushi"){echo "color: grey";}?>" href="sushi.php">Sushi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="<?php if($page == 'overzicht'){echo "color: grey";}?>" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<span class=""><img src="img/sushi-banner.jpg" alt="code"
width="100%" height="200px" style="object-fit: cover;"></span>