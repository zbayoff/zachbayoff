function scrollToAnchor(anchor) {
    $("html, body").animate({
        scrollTop: $(anchor).offset().top
    }, 1000);
}

const titleDownArrow = document.getElementById("bottm-link-to-about");

titleDownArrow.addEventListener("click", function () {
    scrollToAnchor("#about-me-title");
});
