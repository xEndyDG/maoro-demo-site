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
                <div id="who_am_I">
                    <img src="https://cdn.discordapp.com/attachments/844968879402385420/914158400257007616/IMG_2304.jpg">
                    <ul>
                        <li>Name: Maoro salfa Flores</li>
                        <li>Age: 18</li>
                        <li>Based: Arnhem, Gelderland</li>
                        <li>Study: Software developer MBO niveau 4</li>
                    </ul>
                </div>
                <div id="what_do_I_do">
                    <div class="what_do_I_do_menu">
                        <div class="menu-arrow center-div-flex filter-red">
                            <img src="svg/play.svg" alt="no img" class="flip-180">
                        </div>
                        <div class="box center-div-flex filter-red">
                            <img src="svg/schoen.svg" alt="no img">
                        </div>
                        <div class="menu-arrow center-div-flex filter-red">
                            <img src="svg/play.svg" alt="no img">
                        </div>
                    </div>
                    <div class="what_do_I_do_content">
                        <span>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem corporis dolor dolores eaque
                        enim ex explicabo fuga fugit impedit possimus praesentium quam recusandae, rem saepe sapiente
                        sit soluta veritatis.
                        </span>
                    </div>
                </div>
                <div id="why_do_I_do" class="show-hide-click-on-id">
                    <div class="why_do_I_do_menu">
                        <img src="svg/schoen.svg" alt="no image found">
                        <img src="svg/schoen.svg" alt="no image found">
                        <img src="svg/schoen.svg" alt="no image found">
                        <img src="svg/schoen.svg" alt="no image found">
                        <img src="svg/schoen.svg" alt="no image found">
                        <img src="svg/schoen.svg" alt="no image found">
                    </div>
                    <div class="why_do_I_do_content">
                        <h3>Title</h3>
                        <span>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Ab accusamus eaque, ipsam nihil numquam quibusdam vero?
                            Animi atque delectus, distinctio dolores earum illum iusto magnam,
                            nisi quas similique tenetur voluptas.
                        </span>
                    </div>
                </div>
            </div>
            <div class="about-me-body-footer">

            </div>
        </div>
    </div>
</section>
