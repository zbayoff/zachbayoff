// Add an underline to the nav link that is currently active (the user is on that page)

const body = document.body;

if (body.getAttribute("id") == "about") {
    document.getElementsByClassName("nav__nav-link")[0].style.textDecoration = "underline";
} else if (body.getAttribute("id").slice(0, 9) == "portfolio") {
    document.getElementsByClassName("nav__nav-link")[1].style.textDecoration = "underline";
} else if (body.getAttribute("id") == "contact") {
    document.getElementsByClassName("nav__nav-link")[2].style.textDecoration = "underline";
}


