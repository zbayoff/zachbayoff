<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zach Bayoff | Web Developer | About</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="shortcut icon" type="image/png" href="assets/images/logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<body id="about">
    <section class="container-welcome">
        <header class="welcome-header">
            <div class="logo">
                <p class="logo__text">
                    <a href="index.php">ZachBayoff</a>
                </p>
            </div>
            <nav>
                <ul class="nav">
                    <li class="nav__nav-item">
                        <a class="nav__nav-link" href="index.php">About</a>
                    </li>
                    <li class="nav__nav-item">
                        <a class="nav__nav-link" href="portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav__nav-item">
                        <a class="nav__nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="container-welcome__inner">
            <h1>Hi, I'm Zach.</h1>
            <h2>I'd like to help you build your website.</h2>
        </div>
        <div class="container-welcome__bottom-text">
            <h3>A little about me...</h3>
            <p>
                <a id="bottm-link-to-about" class="fa fa-angle-down" href="#about-me-title"></a>
            </p>
        </div>
    </section>
    <div class="page">
        <main class="container">
            <section class="row">
                <div>
                    <!--<h2 id="about-me-title" class="container-about-me__heading">Me</h2> -->
                    <p class="personal-photo-container">
                        <img id="personal-photo" src="assets/images/photo-me.png">
                    </p>
                    <p>I am a Naval Architect working in New York City. I have a Master's degree in Naval Architecture &amp;
                        Marine Engineering from the University of Michigan, Ann Arbor (also my hometown).</p>
                    <div class="block-mich">
                        <p>Go</p>
                        <img class="mich_logo" src="assets/images/Michigan_Wolverines_Block_M.png">
                        <p>Blue!</p>
                    </div>
                    <div class="clearfix"></div>
                    <p>In addition to my full-time job, I am also a web developer. I have completed courses in Web Development
                        both at NYU and CUNY College of Technology, and am continuing to learn and practice the latest web
                        dev technologies through online resources.</p>

                    <!-- <h3>Web Development Process</h3>
                <p>It is my goal to provide clients with a robust, elegant, and unqiue solution that suits their needs. Before sketching wireframes, creating mockups, or writing any code, I like to sit down and discuss the requirements and specifications for their site.</p>
                <p>Some of the things I look for upon the inital discussion:</p>
                <ul>
                    <li>What type of site do they want (Single Page Application, eCommerce, Landing Page)?</li>
                    <li>What is the budget?</li>
                    <li>What is the time frame?</li>
                </ul>
                <p>Once the details have been hashed out, I will get to work on creating a basic wireframe (if it has not already been provided). After clarifications with the client, I can move on to a mockup, seek approval once for, and then begin the build.</p> -->
                </div>
            </section>

            <section class="row">
                <div>
                    <h2>Skills</h2>
                    <p>In the field of web development, technologies and tools are constantly changing and updating to keep up with users' ever demanding desire for efficient, no hassle online experiences.</p>
                    <p>I make it a priority to dedicate myself to learning and mastering these tools.</p>
                    <h3 class="skills-type">Tech:</h3>
                    <div class="skills-container">
                        <h4>Front End</h4>
                        <ul class="skills-list__group">
                            <li class="hidden skills-list__list-item">HTML5
                                <img class="skills-list__img" src="assets/images/html-logo.png">
                            </li>
                            <li class="hidden skills-list__list-item">CSS3
                                <img class="skills-list__img" src="assets/images/css3-logo.png">
                            </li>
                            <li class="hidden skills-list__list-item">Javascript
                                <img class="skills-list__img" src="assets/images/js-logo.png">
                            </li>
                        </ul>
                        <h4>Back End</h4>
                        <ul class="skills-list__group">
                            <li class="hidden skills-list__list-item">PHP
                                <img class="skills-list__img" src="assets/images/php-logo.png">
                            </li>
                            <li class="hidden skills-list__list-item">NodeJS
                                <img class="skills-list__img" src="assets/images/nodejs-logo.png">
                            </li>
                            <li class="hidden skills-list__list-item">MySQL
                                <img class="skills-list__img" src="assets/images/mysql-logo.png">
                            </li>
                            <li class="hidden skills-list__list-item">MongoDB
                                <img class="skills-list__img" src="assets/images/mongo-logo.png">
                            </li>
                            
                        </ul>
                        <h4>Libraries &amp; Frameworks</h4>
                        <ul class="skills-list__group">
                            <li class="hidden skills-list__list-item">Angular 6
                                <img class="skills-list__img" src="assets/images/angular-logo.png">
                            </li>
                            <li class="hidden skills-list__list-item">jQuery
                                <img class="skills-list__img" src="assets/images/jquery-logo.png">
                            </li>
                            <li class="hidden skills-list__list-item">Bootstrap4
                                <img class="skills-list__img" src="assets/images/bootstrap-logo.png">
                            </li>
                            <li class="hidden skills-list__list-item">ExpressJS
                                <img class="skills-list__img" src="assets/images/express-logo.png">
                            </li>
                        </ul>
                        <h4>Other</h4>
                        <ul class="skills-list__group">
                            <li class="hidden skills-list__list-item">Git
                                <img class="skills-list__img" src="assets/images/git-logo.png">
                            </li>
                            <li class="hidden skills-list__list-item">NPM
                                <img class="skills-list__img" src="assets/images/npm-logo.png">
                            </li>
                            <li class="hidden skills-list__list-item">SASS
                                <img class="skills-list__img" src="assets/images/sass-logo.png">
                            </li>
                            <li class="hidden skills-list__list-item">WordPress
                                <img class="skills-list__img" src="assets/images/wordpress-logo.png">
                            </li>
                        </ul>
                    </div>
                    <h3 class="skills-type">Design:</h3>
                    <div class="skills-container">
                        <ul class="skills-list__group">
                            <li class="hidden skills-list__list-item">AutoCAD
                                <img class="skills-list__img" src="assets/images/autocad-logo.png">
                            </li>
                            <li class="hidden skills-list__list-item">Rhino3D
                                <img class="skills-list__img" src="assets/images/rhino3d-logo.png">
                            </li>
                            <li class="hidden skills-list__list-item">Solidworks
                                <img class="skills-list__img" src="assets/images/solidworks-logo.png">
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="about-bottom">
                    <p>See some of my <a href="portfolio.php">projects</a> or feel free to <a href="contact.php">contact me</a>.</p>
                </div>
            </section>

        </main>

        <?php include 'assets/partials/footer.php' ?>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/index.js"></script>

    </div>

</body>

</html>