<?php
$menuitems = [
    ['home', 'home'], //positie 0 = url, 1 = naam
    ['introduction', 'introduction'],
    ['portfolio', 'portfolio'],
    ['projects', 'projects'],
];


echo "<div class='navigation' id='navigation'><ul>";
foreach ($menuitems as $item) { //voor elk item uit de array $menuitems als $item

    if (isset($_GET['page']) && $item[0] == $_GET['page']) {
        echo '<a class="active" href="index.php?page=' . $item[0] . '"><li class="stagger" >' . $item[1] . '</li></a>';
    } else {
        echo '<a href="index.php?page=' . $item[0] . '"><li class="stagger" >' . $item[1] . '</li></a>';
    }

}   //class="'.$item[0].'"
echo '</ul>';
?>

<div class="navigation-icon">
    <div class="menu-bar-container" onclick="toggleMenuIconState(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

</div>
</div>


<script>
    function toggleMenuIconState(x) {
        var y = document.getElementById('navigation');
        y.classList.toggle('navigation--active');

        var stagElements = document.getElementsByClassName('stagger');

        for (let index = 0; index < stagElements.length; index++) {
            (function (ind) {
                setTimeout(function () {

                    stagElements[index].classList.toggle('stagger--active');

                }, 0 + (75 * ind));
            })(index);
        }
    }
</script>