<?php
session_start();    //zet sessie in alle pagina's
if (isset($_GET["page"])) { //als de GET 'page' niet leeg is
    if ($_GET['page'] == 'logout') {    //als de GET 'page' gelijk is aan uitloggen
        header('Location: php/logout.php'); //ga naar
        exit();
    } else {    //anders ga naar $page
        $page = $_GET['page'];
    }
} else {    //anders ga naar home
    $page = 'home';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <!--    link naar stylesheet-->
    <link rel="stylesheet" href="css/style.css">
    <!--    link naar javascript-->
</head>


<body>
<div class="container">
    <div class="content">
        <?php include "includes/navigation.inc.php"; ?>
        <?php include "includes/$page.inc.php"; ?>
    </div>
    <div class="footer">
        <?php include "includes/footer.inc.php"; ?>
    </div>
</div>
</body>
</html>

