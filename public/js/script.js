document.addEventListener("DOMContentLoaded", function() {
    var navbarHeight = document.getElementById('about').offsetHeight;
    var links = document.querySelectorAll('#navbar a.nav-link');

    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            var targetId = this.getAttribute('data-scroll');
            var targetElement = document.getElementById(targetId);
            if (targetElement) {
                var offsetTop = targetElement.offsetTop;
                window.scrollTo({
                    top: offsetTop - navbarHeight, // Adjusted for navbar height
                    behavior: 'smooth'
                });
            }
        });
    });
});

window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('blur');
    } else {
        navbar.classList.remove('blur');
    }
});

document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll(".nav-link");

    function removeActiveClass() {
        navLinks.forEach(link => {
            link.classList.remove("active");
        });
    }

    navLinks.forEach(link => {
        link.addEventListener("click", function() {
            removeActiveClass();
            this.classList.add("active");
        });
    });
});