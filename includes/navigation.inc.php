<?php

$menuitems = [
    ['home', 'home'],
    ['introduction', 'Introduction'],
    ['about_me', 'About_me'],
    ['portfolio', 'Portfolio'],
    ['activity', 'Activity']
];
$file = "json/navigation.json";
$json = json_decode(file_get_contents($file), true);
//json first key is iteration
//second key is key
//third key (children only) iteration of children
//var_dump($json);
//die();

?>

<section class="section-navigation">
    <div class="content-navigation">
        <div class="navigation-title">
            <h3>Folders</h3>
        </div>
        <div class="navigation-content">
            <?php
            foreach ($json as $item) {
                echo '<div class="navigation-content-item">';
                echo '<a href="index.php?page=' . $item['url'] . '"> ' . $item['label'] . ' </a>';
                echo '</div>';
                if ($item['url'] === $page) {
                    echo '<ul>';
                    if (array_key_exists('children', $item)) {
                        foreach ($item["children"] as $child) {
                            echo '<div class="nav-child-item">';
                            echo '<li>';
                            echo $child['label'];
                            echo '</li>';
                            echo '</div>';
                        }
                    }
                    echo '</ul>';
                }
            }
            ?>
        </div>
    </div>
</section>
