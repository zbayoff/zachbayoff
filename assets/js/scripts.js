// Add an underline to the nav link that is currently active (the user is on that page)

const body = document.body;

if (body.getAttribute("id") == "about") {
    document.getElementsByClassName("nav__nav-link")[0].classList.add('active-nav');
} else if (body.getAttribute("id").slice(0, 9) == "portfolio") {
    document.getElementsByClassName("nav__nav-link")[1].classList.add('active-nav');
} else if (body.getAttribute("id") == "contact") {
    document.getElementsByClassName("nav__nav-link")[2].classList.add('active-nav');
}


