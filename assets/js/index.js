function scrollToAnchor(anchor) {
    $("html, body").animate({
        scrollTop: $(anchor).offset().top - 200
    }, 1000);
}

const titleDownArrow = document.getElementById("bottm-link-to-about");

titleDownArrow.addEventListener("click", function () {
    scrollToAnchor("#about-me-title");
});

// window.addEventListener('load', changeHeaderClass);
// window.addEventListener('resize', changeHeaderClass);

// function changeHeaderClass() {
//     let browserWidth = document.body.clientWidth;
//     const headerAbout = document.querySelector('#about header');

//     if (browserWidth <= 900) {
//         headerAbout.classList.add('header-top');
//         headerAbout.classList.remove('header-side');
//     } else {
//         headerAbout.classList.remove('header-top');
//         headerAbout.classList.add('header-side');
//     }
// }