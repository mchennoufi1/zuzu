<!DOCTYPE html>
<html>
<body>

    <?php
    $page = "klant";
    include_once('includes/head.php');
    include_once ('includes/header.php');
    ?>
    <div class="container">
        <br>
        <form class="klant" method="post" action="">
            <h3>Klantgegevens</h3>
            <label>Voornaam: </label><br>
            <input type="text" name="fname" placeholder="Enter your first name:">
            <br>
            <label>Achternaam: </label><br>
            <input type="text" name="lname" placeholder="Enter your last name:">
            <br>
            <label>Email: </label><br>
            <input type="text" name="email" placeholder="Enter your email:">
            <br>
            <label>Adres: </label><br>
            <input type="text" name="address" placeholder="Enter your address:">
            <br>
            <label>Postcode: </label><br>
            <input type="text" name="zipcode" placeholder="Enter your zipcode:">
            <br>
            <label>Woonplaats: </label><br>
            <input type="text" name="woonplaats" placeholder="Enter your place of living:">
            <br>
            <input type="submit" name="verzenden" value="Ga naar sushi's">
        </form>
    </div>
    <?php
    try{
        $db = new PDO("mysql:host=localhost;dbname=zuzu"
            ,"root");
        if(isset($_POST['verzenden'])) {
            function validate_input($input) {
                $input = trim($input);
                $input = stripslashes($input);
                $input = htmlspecialchars($input);
                return $input;
            }
            session_start();
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            if (empty($_POST["fname"])) {
                $fnameError = "first name is required";
                echo "$fnameError";

            } else {
                $fname = validate_input($_POST["fname"]);
                $_SESSION['fname'] = $fname;

                if (empty($_POST["lname"])) {
                    $lnameError = "last name is required";
                    echo "$lnameError";
                } else {
                    $lname = validate_input($_POST["lname"]);
                    $_SESSION['lname'] = $lname;

                    if (empty($_POST["email"])) {
                        $emailError = "last name is required";
                        echo "$emailError";
                    } else {
                        $email = validate_input($_POST["email"]);
                        $_SESSION['email'] = $email;

                        if (empty($_POST["address"])) {
                            $addressError = "address is required";
                            echo "$addressError";
                        } else {
                            $address = validate_input($_POST["address"]);
                            $_SESSION['address'] = $address;
                            $query = $db->prepare("INSERT INTO klant (fname, lname, email, address)
                            VALUES('$_POST[fname]','$_POST[lname]','$_POST[email]', '$_POST[address]')");
                            if($query->execute()){
                                echo "<br>";
                                $last_id = $db->insert_id;
                                echo "New record created successfully. Last inserted ID is: " . $last_id;
                                echo "De nieuwe gegevens zijn toegevoegd.";
                                echo "<br>";
                            } else{
                                echo "Er is een fout opgetreden.";
                            }
                        }
                    }
                }
            }
            header("Location: http://localhost/zuzu/sushi.php");
        }
    } catch(PDOException $e) {
        die("Error!: " . $e->getmessage());
    }
    ?>

    <br>
    <?php
    include_once ('includes/footer.php');
    ?>

</body>
</html>
