document.addEventListener("DOMContentLoaded", () => {

    var home = document.getElementById('home-content');
    console.log(home)
    home.addEventListener('onclick', () => {
       console.log('temp')
    });
});