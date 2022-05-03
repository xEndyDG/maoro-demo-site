

function onLoad() {
    const contentTriggers = document.querySelectorAll('.introduction-trigger');  //pakt alle items met class
    const contentBlocks = document.querySelectorAll('.introduction__section');

    console.log(contentTriggers);

    //zet de eerste altijd op actief op pagina load
    contentBlocks[0].classList.add('active');

    for (let i = 0; i < contentTriggers.length; i++) {
        contentTriggers[i].addEventListener('click', function () {
            //remove all blue and active classes
            for (let x = 0; x < contentTriggers.length; x++) {
                contentBlocks[x].classList.remove('active')
            }
            contentBlocks[i].classList.add('active')
        });
    }
}

