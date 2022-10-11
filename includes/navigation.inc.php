<?php

$menuitems = [
    'home' => 'home',
    'introduction' => 'Introduction',
    'about-me' => 'About me',
    'portfolio' => 'Portfolio',
    'activity' => 'Activity'

]

?>

<section class="section-navigation">
    <div class="content-navigation">
        <div class="navigation-title">
            <h3>Folders</h3>
        </div>
        <div class="navigation-content">
            <?php
            foreach ($menuitems as $menuitem) {

            if ($menuitem === $page){
            ?>
            <div class="navigation-content-item active-nav-item">

                <?php
                } else {
                ?>
                <div class="navigation-content-item">
                    <?php
                    }
                    ?>
                    <a href="index.php?page=<?= $menuitem?>">
                        <p>
                            /<?= $menuitem ?>
                        </p>
                    </a>
                </div>
                <?php } ?>

            </div>
        </div>
</section>
