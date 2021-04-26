document.addEventListener('scroll', function(e) {
    let stickyTop = document.getElementsByClassName('sticky-top')[0];

    if(window.scrollY > 0) {
        stickyTop.classList.add("shadow");
    } else {
        stickyTop.classList.remove("shadow");
    }
});

