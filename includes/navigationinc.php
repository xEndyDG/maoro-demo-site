<?php
$menuitems = [
    ["home", "home"], //positie 0 = url, 1 = naam
];



echo "<div class='navigation'><ul>";
foreach ($menuitems as $item) { //voor elk item uit de array $menuitems als $item
//    echo '<li><a href="index.php?page=' . $item[0] . '">' . $item[1] . '</a></li>';
    echo '<li class="'.$item[0].'"><a href="index.php?page=' . $item[0] . '">' . $item[1] . '</a></li>';
}
echo '</ul></div>';