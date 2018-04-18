<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zach Bayoff | Web Developer | The Bayground</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alef|Reem+Kufi" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115178608-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-115178608-1');

    </script>

</head>

<body id="portfolio-bayground">
    <header class="header">
        <div class="logo">
            <p class="logo__text"><a href="../index.php">ZachBayoff</a></p>
        </div>
        <nav>
            <ul class="nav">
                <li class="nav__nav-item"><a class="nav__nav-link" href="../../index.php">About</a></li>
                <li class="nav__nav-item"><a class="nav__nav-link" href="../../portfolio.php">Portfolio</a></li>
                <li class="nav__nav-item"><a class="nav__nav-link" href="../../contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="page">
    <main class="container">
        <nav class="breadcrumbs">
            <ul>
                <li>
                    <a href="../../portfolio.php">Portfolio</a>
                </li>
                <span>/</span>
                <li>
                    <a href="../thebayground.php">The Bayground - Description</a>
                </li>
                <span>/</span>
                <li>
                    <a href="thebayground.php">The Bayground</a>
                </li>
            </ul>
        </nav>
        <section class="row">
            <div class="bayground-container">
                <h1 class="container-bayground-projects__header">The Bayground</h1>
                <p class="container-bayground-projects__info">Click on a module to try it out.</p>
                <div class="container-modules">
                    <div id="modal-btn__project-prime" class="module-item">
                        <h3 class="module-title">Find Prime Numbers from Range</h3>
                    </div>
                    <div id="modal-container__project-prime" class="modal">
                        <div class="modal-column">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <span id="project-prime__span-close" class="close">&times;</span>
                                    <h2>Find Prime Numbers Between Two Numbers</h2>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="form-label" for="prime__input-first-num">Enter First Number</label>
                                        <input class="form-input" id="prime__input-first-num" type="number">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="prime__input-second-num">Enter Second Number</label>
                                        <input class="form-input" id="prime__input-second-num" type="number">
                                    </div>
                                    <div>
                                        <button type="button" id="prime__calc-button">Calculate</button>
                                    </div>
                                    <div>
                                        <p>Result:</p>
                                        <div class="prime__result-area" id="prime__result-area">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a class="what-i-learned__link">What I learned from this project</a>
                                    <ul class="what-i-learned__body">
                                        <li>HTML input elements with a type 'number' pass their values as strings and must still be converted into type number using <em>parseInt</em></li>
                                        <li>addEventListener can be passed a second argument as an anonymous function or a function call, but not a function call that passes a value.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module-item">
                        <h3 class="module-title">Speed Typing Test</h3>
                    </div>
                    <div id="modal-container__project-speedType" class="modal">
                        <div class="modal-column">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <span id="project-speedTest__span-close" class="close">&times;</span>
                                    <h2>Speed Typing Test</h2>
                                </div>
                                <div class="modal-body project-speedTest__body">
                                    <p class="project-speedTest__instruct">Here you are given a prompt and must type it correctly in the text box below. Once typed correctly, your results will display below.</p>
                                    <p>Prompt:</p>
                                    <blockquote id="project-speedTest__prompt"></blockquote>
                                    <div class="form-group">
                                        <textarea id="project-speedType__textarea" class="form-text-area"></textarea>
                                    </div>
                                    <p id="project-speedType__timer">00:00:00</p>
                                    <div id="project-speedType__results">
                                        <p id="project-speedType__result-WPM"></p>
                                        <p id="project-speedType__result-blurb"></p>
                                        <p>Try again to improve your speed or get a different prompt!</p>
                                    </div>
                                    <button id="project-speedType__tryagain-btn" type="button">Try Again</button>
                                    <button id="project-speedType__diffprompt-btn" type="button">Different Prompt</button>
                                </div>
                                <div class="modal-footer">
                                    <a class="what-i-learned__link">What I learned from this project</a>
                                    <ul class="what-i-learned__body">
                                        <li>To make an asynchronous call to a text file that stores the list of prompts.</li>
                                        <li>To randomly select an index of an array using the Math.random function.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="module-item">
                        <h3 class="module-title">Coming Soon</h3>
                    </div>
                    <div id="modal-container__project-poker" class="modal">
                        <div class="modal-column">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <span id="project-poker__span-close" class="close">&times;</span>
                                    <h2>2 Hand Poker Game</h2>
                                </div>
                                <div class="modal-body project-poker__body">
                                    <p class="project-poker__instruct">This game features two players. Both players are dealt five cards. Find out who the winner is!</p>
                                    <div class = "project-poker__hand-container">
                                        <div>
                                        
                                        </div>
                                    </div>
                                    <div id="project-poker__results">
                                        <p id="project-poker__result-blurb"></p>
                                        <p>Results</p>
                                    </div>
                                    <button id="project-poker__tryagain-btn" type="button">Play Again</button>
                                    <button id="project-poker__diffprompt-btn" type="button">Start Over</button>
                                </div>
                                <div class="modal-footer">
                                    <a class="what-i-learned__link">What I learned from this project</a>
                                    <ul class="what-i-learned__body">
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="module-item">
                        <h3 class="module-title">Concentrate Yo!</h3>
                    </div>
                    <div id="modal-container__project-concentrateYo" class="modal">
                        <div class="modal-column">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <span id="project-concentrateYo__span-close" class="close">&times;</span>
                                    <h2>Concentrate Yo!</h2>
                                </div>
                                <div class="modal-body project-concentrateYo__body">
                                    <p class="project-concentrateYo__instruct">We all know this game...Test your memory!</p>
                                    <div class = "project-concentrateYo__container">
                                        <div>
                                           <label value="Create Grid Size">Grid Size</label>
                                           <input type="number" id="project-concentrateYo__gridSizeInput">
                                        </div>
                                        <div>
                                            <button id="project-concentrateYo__createGrid-btn">Create Grid</button>
                                        </div>
                                        <div class="project-concentrateYo__grid-container">

                                        </div>
                                    </div>
                                    <div id="project-concentrateYo__results">
                                        <p id="project-concentrateYo__result-blurb"></p>
                                        <p id="project-concentrateYo__timer">00:00:00</p>
                                        <p>Results</p>
                                    </div>
                                    <button id="project-concentrateYo__tryagain-btn" type="button">Play Again</button>
                                    <button id="project-concentrateYo__diffprompt-btn" type="button">Start Over</button>
                                </div>
                                <div class="modal-footer">
                                    <a class="what-i-learned__link">What I learned from this project</a>
                                    <ul class="what-i-learned__body">
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="module-item">
                        <h3 class="module-title">Coming Soon</h3>
                    </div>
                    <div class="module-item">
                        <h3 class="module-title">Coming Soon</h3>
                    </div>
                    <div class="module-item">
                        <h3 class="module-title">Coming Soon</h3>
                    </div>
                    <div class="module-item">
                        <h3 class="module-title">Coming Soon</h3>
                    </div>
                    <div class="module-item">
                        <h3 class="module-title">Coming Soon</h3>
                    </div>
                    <div class="module-item">
                        <h3 class="module-title">Coming Soon</h3>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '../../assets/partials/footer.php' ?>

    </div>

  
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/primeNumbers.js"></script>
    <script src="assets/js/speedTyping.js"></script>
    <script src="assets/js/concentrateYo.js"></script>
    <script src="../../assets/js/scripts.js"></script>


</body>

</html>
