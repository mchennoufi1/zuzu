<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
        <img src="img/zuzu.jpeg" width="50px" height="50px"></img>
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="<?php if($page == 'home'){echo "color: black";}?>" href="index.php">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="<?php if($page == "sushi"){echo "color: black";}?>" href="sushi.php">sushi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="<?php if($page == 'contact'){echo "color: black";}?>" href="contact.php">contact</a> 
                </li>
            </ul>
        </div>
    </div>
</nav>