(function () {

    const createGridBtn = document.getElementById('project-concentrateYo__createGrid-btn');
    const gridSizeInput = document.getElementById('project-concentrateYo__gridSizeInput');

    createGridBtn.addEventListener('click', function () {

        // error input handling type number
        if (gridSizeInput.value) {
            createGrid(parseInt(gridSizeInput.value));
        }
    })

    function createGrid(gridSize) {

        if (gridSize) {


            const gridArray = [{

            }];

            const gridMarkup = `
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        `;

            const gridContainer = document.querySelector('.project-concentrateYo__grid-container');
            gridContainer.innerHTML = gridMarkup;
        }

    }

    function startTimer() {}

    function stopTimer() {}

    function resetTimer() {}

    function checkCard() {}


})();