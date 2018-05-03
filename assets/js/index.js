(function () {

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
    const welcomeContainer = document.querySelector('.container-welcome');
    const frontEndSkillsSection = document.querySelector('.skills-list-frontend');
    const frontendItems = document.querySelectorAll('.skills-list__item-front');

    const backEndSkillsSection = document.querySelector('.skills-list-backend');
    const backendItems = document.querySelectorAll('.skills-list__item-back');

    const designSkillsSection = document.querySelector('.skills-list-design');
    const designItems = document.querySelectorAll('.skills-list__item-design');

    window.addEventListener('scroll', bulgeLogos);

    function bulgeLogos() {
        // console.log(window.scrollY)

        let topPosFrontEndSection = 0;
        let topPosBackEndSection = 0;
        let topPosDesignSection = 0;

        console.log(welcomeHeader.clientHeight);

        console.log(document.body.clientWidth);

        if (document.body.clientWidth < 900) {
            topPosFrontEndSection = frontEndSkillsSection.getBoundingClientRect().top - (welcomeHeader.clientHeight + 300);
            topPosBackEndSection = backEndSkillsSection.getBoundingClientRect().top - (welcomeHeader.clientHeight + 300);
            topPosDesignSection = designSkillsSection.getBoundingClientRect().top - (welcomeHeader.clientHeight + 300);
        } else {
            topPosFrontEndSection = frontEndSkillsSection.getBoundingClientRect().top - (welcomeContainer.clientHeight - 200);
            topPosBackEndSection = backEndSkillsSection.getBoundingClientRect().top - (welcomeContainer.clientHeight - 200);
            topPosDesignSection = designSkillsSection.getBoundingClientRect().top - (welcomeContainer.clientHeight - 200);
        }



        console.log("The distance from the bottom of the browser to the top of the front end section is: " + topPosFrontEndSection);





        if (topPosFrontEndSection < 0) {
            for (let i = 0; i < frontendItems.length; i += 1) {
                doSetTimeout(i);
            }

            function doSetTimeout(i) {
                setTimeout(() => {
                    frontendItems[i].classList.add('bulge');
                }, i * 100);
            }
        }

        if (topPosBackEndSection < 0) {
            for (let i = 0; i < backendItems.length; i += 1) {
                doSetTimeout(i);
            }

            function doSetTimeout(i) {
                setTimeout(() => {
                    backendItems[i].classList.add('bulge');
                }, i * 100);
            }
        }

        if (topPosDesignSection < 0) {
            for (let i = 0; i < designItems.length; i += 1) {
                doSetTimeout(i);
            }

            function doSetTimeout(i) {
                setTimeout(() => {
                    designItems[i].classList.add('bulge');
                }, i * 100);
            }
        }
    }

})();