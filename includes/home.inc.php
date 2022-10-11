<section class="section-home">
    <form action="index.php?page=home">
        <div class="home-content">
            <div class="home-title">
                <div class="box"></div>
                <h1 class="title">
                    /<?= $page ?>
                </h1>
                <div class="box"></div>
            </div>
            <div class="home-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusantium autem corporis dicta dolor ea
                    iusto nihil omnis repellendus saepe suscipit ullam,
                    veniam voluptatibus! A accusamus cumque dolorem hic
                    libero suscipit?
                </p>
            </div>
        </div>
    </form>

</section>
<script>
    document.getElementById("home-content").addEventListener("click", pressPlay);

    function pressPlay() {
        console.log('test');
    }
</script>