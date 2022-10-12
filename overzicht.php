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
?>
<br>
<?php
include_once ('includes/footer.php');
?>

</body>
</html>
