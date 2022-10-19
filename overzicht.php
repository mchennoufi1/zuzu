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
echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';

try{
    $db = new PDO("mysql:host=localhost;dbname=zuzu"
        ,"root");
    $query = $db->prepare("SELECT * FROM klant WHERE id = $_SESSION[id]");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as &$data){
        echo $data["fname"] . " " . $data["lname"];
        echo "<br>";
        echo $data["email"];
        echo "<br>";
        echo $data["address"];
        echo "<br>";
        echo "<br>";

    }
    $query = $db->prepare("SELECT * FROM sushi WHERE id = $_SESSION[id]");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as &$data){
        echo $data["name"];
        echo "<br>";
        echo $data["amount"];
        echo "<br>";
        echo "<br>";
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
