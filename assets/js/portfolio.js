(function (){
    // document.body.classList.add('js-loading');

    window.addEventListener('load', loadImages, false);

    function loadImages (){
        document.body.classList.remove('js-loading');
    }

})();


