<?php
session_start();    //zet sessie in alle includes
if (isset($_GET["page"])) { //als de GET 'page' niet leeg is
    $page = $_GET['page'];
    if (file_exists("includes/$page.inc.php")) { //check if file exists in dir
        $page = $_GET['page'];
    } else {
        $page = '404';
    }
} else {    //anders ga naar home
    $page = 'start';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $page ?></title>
    <!--    link naar stylesheet-->
    <link rel="stylesheet" href="css/style.css">
    <!--    link naar javascript-->
</head>
<body>
<div class="container">
    <?php
    if ($page != '404' && $page != 'start') {
        include "includes/navigation.inc.php";
    }
    include "includes/$page.inc.php";
    ?>
</div>
</body>
</html>

