<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zach Bayoff | Web Developer | The Bayground</title>
    <link rel="stylesheet" href="../../assets/css/normalize.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alef|Reem+Kufi" rel="stylesheet">
</head>

<body id="portfolio-bayground">
    <section class="page">
        <section class="container">
            <header class="header header-top header-top-md">
                <div class="logo">
                    <p class="logo__text"><a href="index.php">ZachBayoff</a></p>
                </div>
                <nav>
                    <ul class="nav">
                        <li class="nav__nav-item"><a class="nav__nav-link" href="../../index.php">About</a></li>
                        <li class="nav__nav-item"><a class="nav__nav-link" href="../../portfolio.php">Portfolio</a></li>
                        <li class="nav__nav-item"><a class="nav__nav-link" href="../../contact.php">Contact</a></li>
                    </ul>
                </nav>
            </header>
        </section>

        <main>

            <div class="container container-bayground-projects">
                <div class="row">
                    <div class="column-md-6">
                        <h1 class="container-bayground-projects__header">The Bayground</h1>
                        <p class="container-bayground-projects__info">Click on a project to try it out.</p>
                          <!--                      <span>Simple</span><input type="range" min="1" max="10"><span>Complex</span>-->
                        <div class="container-modules">
                            <div id="modal-btn__project-prime" class="module-item">
                                <h3 class="module-title">Find Prime Numbers from Range</h3>
                            </div>
                            <div id="modal-container__project-prime" class="modal">
                                <div class="column-lg-6">
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
                                <div class="column-lg-6">
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
                                            <div id="project-speedType__results"><p id="project-speedType__result-WPM"></p>
                                            <p id="project-speedType__result-blurb"></p>
                                             <p>Try again to improve your speed or get a different prompt!</p></div>
                                            <button id="project-speedType__tryagain-btn" type="button">Try Again</button>
                                            <button id="project-speedType__diffprompt-btn" type="button">Different Prompt</button>
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
                            <div class="module-item">
                                <h3 class="module-title">Coming Soon</h3>
                            </div>
                            <div class="module-item">
                                <h3 class="module-title">Coming Soon</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <?php include '../../assets/partials/footer.php' ?>

    </section>
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/primeNumbers.js"></script>
    <script src="assets/js/speedTyping.js"></script>
    <script src="../../assets/js/scripts.js"></script>


</body>

</html>
