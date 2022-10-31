$.get("navbarWhite.html", function(data){
    $(".navbar").replaceWith(data);
});


function scrollValue() {
    var navbar = document.getElementById('navbar');
    var scroll = window.scrollY;
    if (scroll < 200) {
        navbar.classList.remove('darkNav');
    } else {
        navbar.classList.add('darkNav');
    }
}

window.addEventListener('scroll', scrollValue);