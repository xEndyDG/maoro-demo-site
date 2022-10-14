<?php
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
                if ($item['url'] === $page) {
                    echo '<div class="navigation-content-item active">';
                } else {
                    echo '<div class="navigation-content-item">';

                }
                echo '<a href="index.php?page=' . $item['url'] . '"> ' . $item['label'] . ' </a>';
                echo '</div>';
                if ($item['url'] === $page) {
                    echo '<ul>';
                    if (array_key_exists('children', $item)) {
                        foreach ($item["children"] as $child) {
                            echo '<div class="nav-child-item">';
                            echo '<li>';
                            echo '- ';
                            echo  '<div class="nav-child-item-label"><a href="' . $child['url'] .'">' . $child['label'] . '</a></div>';
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
<script>

    const items = Array.from(document.getElementsByClassName('nav-child-item-label'));

    items.forEach(item => {
        item.addEventListener('click', function handleClick(event) {
            // console.log('box clicked', events;
            for (let i = 0; i < items.length; i++) {
                items[i].classList.remove('active-red')
            }
            item.classList.add('active-red')
        });
    });
</script>
