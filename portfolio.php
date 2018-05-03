<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zach Bayoff | Web Developer | Portfolio</title>
    <link rel="stylesheet" href="assets/css/main.css">
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

<body id="portfolio" class="js-loading">
    <header class="header">
        <div class="logo">
            <p class="logo__text"><a href="index.php">ZachBayoff</a></p>
        </div>
        <nav>
            <ul class="nav">
                <li class="nav__nav-item"><a class="nav__nav-link" href="index.php">About</a></li>
                <li class="nav__nav-item"><a class="nav__nav-link" href="portfolio.php">Portfolio</a></li>
                <li class="nav__nav-item"><a class="nav__nav-link" href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="page">
        <main class="container">
            <section class="row">
                <div class="project-container">
                    <h2>Projects</h2>
                    <p>To improve my craft, I continue to learn and practice new programming concepts by applying them to real-world projects.</p>
                    <p>Whether for a client, personal use, or good 'ol fun, each project gives me more insight and experience into the field of web development.</p>
                    <p>Here is a list of my recent projects with links to a more detailed description.</p>
                    <div class="container-project-desc">
                        <div class="container-project-desc__project-item">
                            <a class="container-project-desc__project-link" href="portfolio/roomies.php"><img class="container-project-desc__project-img" src="portfolio/roomies/assets/img/screenshots/dashboard-page.png"><h4 class="container-project-desc__project-title">Roomies: A Roommate Management App</h4></a>
                        </div>
                        <div class="container-project-desc__project-item">
                            <a class="container-project-desc__project-link" href="portfolio/thebayground.php"><img class="container-project-desc__project-img" src="portfolio/bayground/assets/img/screenshots/thebayground-screenshot.png"><h4 class="container-project-desc__project-title">The Bayground: A Collection of Mini Apps</h4></a>
                        </div>
                        <div class="container-project-desc__project-item">
                            <a class="container-project-desc__project-link" href="/"><img class="container-project-desc__project-img" src="portfolio/bayground/assets/img/screenshots/thebayground-screenshot.png"><h4 class="container-project-desc__project-title">zachbayoff.com</h4></a>
                        </div>
                        <div class="container-project-desc__project-item">
                            <a class="container-project-desc__project-link" href="/"><img class="container-project-desc__project-img" src="portfolio/bayground/assets/img/screenshots/thebayground-screenshot.png"><h4 class="container-project-desc__project-title">Weather App</h4></a>
                        </div>
                        <div class="container-project-desc__project-item">
                            <a class="container-project-desc__project-link" href="/"><img class="container-project-desc__project-img" src="portfolio/bayground/assets/img/screenshots/thebayground-screenshot.png"><h4 class="container-project-desc__project-title">NYJTL Mockup</h4></a>
                        </div>
                        <div class="container-project-desc__project-item">
                            <a class="container-project-desc__project-link" href="/"><img class="container-project-desc__project-img" src="portfolio/bayground/assets/img/screenshots/thebayground-screenshot.png"><h4 class="container-project-desc__project-title">The Commentor</h4></a>
                        </div>
                    </div
                </div>
            </section>
        </main>

        <?php include 'assets/partials/footer.php' ?>

    </div>

    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/portfolio.js"></script>

</body>

</html>
