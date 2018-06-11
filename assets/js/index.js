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
    // const welcomeContainer = document.querySelector('.container-welcome');
    // const frontEndSkillsSection = document.querySelector('.skills-list-frontend');
    // const frontendItems = document.querySelectorAll('.skills-list__item-front');

    // const backEndSkillsSection = document.querySelector('.skills-list-backend');
    // const backendItems = document.querySelectorAll('.skills-list__item-back');

    // const designSkillsSection = document.querySelector('.skills-list-design');
    // const designItems = document.querySelectorAll('.skills-list__item-design');


    const skillListGroup = document.querySelectorAll('.skills-list__group');
    const skillListItems = document.querySelectorAll('.skills-list__list-item');

    window.addEventListener('scroll', slideIn);

    function slideIn(e) {

        // When skillsListGroup reaches a certain distance from the top, 
        // animate a slide-in to the corresponding list item elements.
        
        for (let i = 0; i < skillListGroup.length; i += 1) {

            const skillListGroupPos = skillListGroup[i].getBoundingClientRect().top - (welcomeHeader.clientHeight + document.documentElement.clientHeight - 100);

            if (skillListGroupPos < 0) {
                for (let j = 0; j < skillListGroup[i].children.length; j += 1) {
                    skillListGroup[i].children[j].classList.remove('hidden');
                    skillListGroup[i].children[j].classList.add('slide');
                }
            }
        }
     }

})();