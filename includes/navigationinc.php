<?php
$menuitems = [
    ['home', 'home'], //positie 0 = url, 1 = naam
    ['about', 'about'],
    ['speeltuin', 'speeltuin']
];
echo "<div class='navigation'><ul>";
foreach ($menuitems as $item) { //voor elk item uit de array $menuitems als $item

    if (isset($_GET['page']) && $item[0] == $_GET['page']) {
        echo '<li ><a class="active" href="index.php?page=' . $item[0] . '">' . $item[1] . '</a></li>';
    } else {
        echo '<li ><a class="nav__item" href="index.php?page=' . $item[0] . '">' . $item[1] . '</a></li>';
    }

}   //class="'.$item[0].'"
echo '</ul></div>';