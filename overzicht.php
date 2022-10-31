<!DOCTYPE html>
<html>
<body>

<?php
$page = "home";
include_once('includes/head.php');
include_once ('includes/header.php');
?>
<br><br>
<?php
session_start();
echo "Email is: " . $_SESSION['email'];
echo "<br>";
echo "Beste: " . $_SESSION['fname'] . " " . $_SESSION['lname'] .", Uw keuze is: " . $_SESSION['sushi'];
echo "<br>";
echo "Het aantal is: " . $_SESSION['amount'];

try{
    $db = new PDO("mysql:host=localhost;dbname=zuzu"
        ,"root");
    
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
