document.addEventListener("DOMContentLoaded", function() {
    var links = document.querySelectorAll('.nav-link');
    
    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            // Menghapus kelas "active" dari semua elemen navbar
            links.forEach(function(item) {
                item.classList.remove('active');
            });

            // Menambahkan kelas "active" ke elemen yang diklik
            this.classList.add('active');
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

let typedRunningText = new Typed(".running-text", {
    strings: [
        "<span class='red-text'>System Administrator</span>",
        "<span class='blue-text'>Web Developer</span>",
        "<span class='purple-text'>Cyber Security Enthusiast</span>",
        "<span class='yellow-text'>IBM Cloud Practitioner</span>"
    ],
    typeSpeed: 50,
    backSpeed: 50,
    backDelay: 1000,
    loop: true,
});

let typedAboutName = new Typed(".about-name", {
    strings: ["Prayoga Sungkowo"],
    typeSpeed: 50,
    backSpeed: 50,
    backDelay: 1000,
    loop: false,
});

let typedAboutCountry = new Typed(".about-country", {
    strings: ["Indonesia"],
    typeSpeed: 50,
    backSpeed: 50,
    backDelay: 1000,
    loop: false,
});

let typedAboutEmail = new Typed(".about-email", {
    strings: ["prayogasungkowo12@gmail.com"],
    typeSpeed: 50,
    backSpeed: 50,
    backDelay: 1000,
    loop: false,
});

let typedAboutPhone = new Typed(".about-phone", {
    strings: ["+6289525760626"],
    typeSpeed: 50,
    backSpeed: 50,
    backDelay: 1000,
    loop: false,
});