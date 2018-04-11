function scrollToAnchor(anchor) {
    if (document.body.clientWidth <= 900) {
        $("html, body").animate({
            scrollTop: $(anchor).offset().top - 200
        }, 1000);
    } else if (document.body.clientWidth > 900) {
        $("html, body").animate({
            scrollTop: $(anchor).offset().top - 30
        }, 1000);
    }
}

const titleDownArrow = document.getElementById("bottm-link-to-about");

titleDownArrow.addEventListener("click", function () {
    scrollToAnchor("#personal-photo");
});