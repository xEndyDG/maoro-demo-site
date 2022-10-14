<?php
$file = "json/navigation.json";
$json = json_decode(file_get_contents($file), true);
//var_dump($json);
//var_dump($json[0]['']);
//var_dump($json['about_me']['children']);
//array_search('#about_me', $json['about_me']);
//die('end of code');
?>

<section class="section-about-me">
    <div class="about-me-content">
        <div class="about-me-title">
            <div class="box"></div>
            <h3>
                /<?= $page ?>
            </h3>
            <div class="box"></div>
        </div>
        <div class="about-me-body">
            <div class="about-me-body-content">
                coding is fun lol.
            </div>
            <div class="about-me-body-footer">
                <div id="">

                </div>
            </div>
        </div>
    </div>
</section>
