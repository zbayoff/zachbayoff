function scrollToAnchor(anchor) {
    if (document.body.clientWidth <= 900) {
        $("html, body").animate({
            scrollTop: $(anchor).offset().top - 150
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

// When user scrolls to skills section, logos will successively "bulge"
const welcomeHeader = document.querySelector('.welcome-header');
const frontEndSkillsSection = document.querySelector('.skills-list-frontend');
const frontendItems= document.querySelectorAll('.skills-list__item-front');

const backEndSkillsSection = document.querySelector('.skills-list-backend');
const backendItems= document.querySelectorAll('.skills-list__item-back');

const designSkillsSection = document.querySelector('.skills-list-design');
const designItems= document.querySelectorAll('.skills-list__item-design');

window.addEventListener('scroll', bulgeLogos);

function bulgeLogos () {
    // console.log(window.scrollY)

    const topPosFrontEndSection = frontEndSkillsSection.getBoundingClientRect().top - (welcomeHeader.clientHeight + 300);
    const topPosBackEndSection = backEndSkillsSection.getBoundingClientRect().top - (welcomeHeader.clientHeight + 300);
    const topPosDesignSection = designSkillsSection.getBoundingClientRect().top - (welcomeHeader.clientHeight + 300);

    if (topPosFrontEndSection < 0) {
        for (let i = 0; i < frontendItems.length; i+=1) {
            doSetTimeout(i);
        }
        function doSetTimeout (i) {
            setTimeout(() => {
                frontendItems[i].classList.add('bulge');
            }, i*100);
        }
    }

    if (topPosBackEndSection < 0) {
        for (let i = 0; i < backendItems.length; i+=1) {
            doSetTimeout(i);
        }
        function doSetTimeout (i) {
            setTimeout(() => {
                backendItems[i].classList.add('bulge');
            }, i*100);
        }
    }

    if (topPosDesignSection < 0) {
        for (let i = 0; i < designItems.length; i+=1) {
            doSetTimeout(i);
        }
        function doSetTimeout (i) {
            setTimeout(() => {
                designItems[i].classList.add('bulge');
            }, i*100);
        }
    }





}