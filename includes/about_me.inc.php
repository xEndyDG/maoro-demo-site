<?php
$file = "json/navigation.json";
$json = json_decode(file_get_contents($file), true);
$key = array_search($page, array_column($json, 'url'));
//array_values($json[$key]['children'])
//var_dump(array_values($json[$key]['children']));
//die('<br>end of code<br>');
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
                            <img src="svg/schoen.svg" alt="no img" class="menu-icon active">
                            <img src="svg/book.svg" alt="no img" class="menu-icon">
                            <img src="svg/social.svg" alt="no img" class="menu-icon">
                        </div>
                        <div class="menu-arrow center-div-flex filter-red">
                            <img src="svg/play.svg" alt="no img">
                        </div>
                    </div>
                    <div class="what_do_I_do_content">
                        <div class="menu-content-item active">
                            <span>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem corporis dolor dolores eaque
                                enim ex explicabo fuga fugit impedit possimus praesentium quam recusandae, rem saepe sapiente
                                sit soluta veritatis.
                            </span>
                        </div>
                        <div class="menu-content-item">
                            <span>
                                dit is item nummer 2
                            </span>
                        </div>
                        <div class="menu-content-item">
                            <span>
                                dit is item nummer 3
                            </span>
                        </div>
                    </div>
                </div>
                <div id="why_do_I_do" class="show-hide-click-on-id">
                    <div class="why_do_I_do_menu">
                        <div class="menu3-icon-container active">
                            <img src="svg/social.svg" alt="no image found" class="menu3-icon">
                        </div>
                        <div class="menu3-icon-container">
                            <img src="svg/schoen.svg" alt="no image found" class="menu3-icon">
                        </div>
                        <div class="menu3-icon-container">
                            <img src="svg/arcade-joystick.svg" alt="no image found" class="menu3-icon">
                        </div>
                        <div class="menu3-icon-container">
                            <img src="svg/book.svg" alt="no image found" class="menu3-icon">
                        </div>
                        <div class="menu3-icon-container">
                            <img src="svg/clipboard.svg" alt="no image found" class="menu3-icon">
                        </div>
                        <div class="menu3-icon-container">
                            <img src="svg/play.svg" alt="no image found" class="menu3-icon">
                        </div>
                    </div>
                    <div class="why_do_I_do_content">
                        <div class="menu3-item active">
                            <h3>Title</h3>
                            <span>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Ab accusamus eaque, ipsam nihil numquam quibusdam vero?
                                Animi atque delectus, distinctio dolores earum illum iusto magnam,
                                nisi quas similique tenetur voluptas.
                            </span>
                        </div>
                        <div class="menu3-item">
                            <h3>Title 2</h3>
                            <span>
                                dit is item nummer 2
                            </span>
                        </div>
                        <div class="menu3-item">
                            <h3>Title 3</h3>
                            <span>
                                dit is item nummer 3
                            </span>
                        </div>
                        <div class="menu3-item">
                            <h3>Title 4</h3>
                            <span>
                                dit is item nummer 4
                            </span>
                        </div>
                        <div class="menu3-item">
                            <h3>Title 5</h3>
                            <span>
                                dit is item nummer 5
                            </span>
                        </div>
                        <div class="menu3-item">
                            <h3>Title 6</h3>
                            <span>
                                dit is item nummer 6
                            </span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="about-me-body-footer">

            </div>
        </div>
    </div>
</section>
<script>
    //menu
    const menuButtons = document.getElementsByClassName('menu-arrow')
    const arrowLeft = menuButtons[0]
    const arrowRight = menuButtons[1]

    //content
    const menuItems = [...document.getElementsByClassName('menu-content-item')]
    const menuIcons = [...document.getElementsByClassName('menu-icon')]

    //give arrows function
    arrowLeft.addEventListener('click', () => {
        let active = document.querySelector('.menu-content-item.active')
        let position = menuItems.indexOf(active)
        active.classList.remove('active')
        menuIcons[position].classList.remove('active')
        let newPos = position !== 0 ? position - 1 : menuItems.length - 1;
        menuItems[newPos].classList.add('active')
        menuIcons[newPos].classList.add('active')
    })
    arrowRight.addEventListener('click', () => {
        let active = document.querySelector('.menu-content-item.active')
        let position = menuItems.indexOf(active)
        active.classList.remove('active')
        menuIcons[position].classList.remove('active')
        let newPos = (position + 1) < menuItems.length ? position + 1 : 0;
        menuItems[newPos].classList.add('active')
        menuIcons[newPos].classList.add('active')
    })

    //why_do_I_do?
    const menuIcon3 = [...document.getElementsByClassName('menu3-icon-container')]
    const menuItems3 = [...document.getElementsByClassName('menu3-item')]


    menuIcon3.forEach(item => {
        item.addEventListener('click', function handleClick(event) {
            for (let i = 0; i < menuIcon3.length; i++) {
                menuItems3[i].classList.remove('active')
                menuIcon3[i].classList.remove('active')
            }
            item.classList.add('active')
            menuItems3[menuIcon3.indexOf(item)].classList.add('active')
        });
    });
</script>
