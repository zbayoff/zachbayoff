<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zach Bayoff | Web Developer | Project Description: Travel App</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="shortcut icon" type="image/png" href="../assets/images/logo.png"/>
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

<body id="portfolio-travelapp">
    <header class="header">
        <div class="logo">
            <p class="logo__text"><a href="../index.php">ZachBayoff</a></p>
        </div>
        <nav>
            <ul class="nav">
                <li class="nav__nav-item"><a class="nav__nav-link" href="../index.php">About</a></li>
                <li class="nav__nav-item"><a class="nav__nav-link" href="../portfolio.php">Portfolio</a></li>
                <li class="nav__nav-item"><a class="nav__nav-link" href="../contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="page">
    <main class="container">
        <section class="row">
            <div>
            <nav class="breadcrumbs">
                    <ul>
                        <li>
                            <a href="../portfolio.php">Portfolio</a>
                        </li>
                        <span>/</span>
                        <li>
                            <a href="travel-app.php">Travel App - Description</a>
                        </li>
                    </ul>
                </nav>
                <h1>Project Name: Travel App</h1>
                <p>Client: Anybody</p>
                <p>Tags: Angular 6 (CLI) Single Page Application / Heroku App / Material.io / REST API / CRUD Application / MondoDB</p>
                <h2>Project Background</h2>
                <p>This web application was created for those who like to travel, but may not have an easy way to keep track of all of their desired destinations and associated expenses. With Travel App (pardon the lack of inticing app name), a user can create, update, and delete a 'trip', filling in details such as the trip destination, travel dates, and list of costs one might incur while traveling.</p>
                <p>This app also calls the Unsplash API that allows the user to find high resolution, beautiful photographs of just about anything, and could maybe help remind them of the beauties that their destinations hold.</p>
                <p>A MongoDB database was set up to store the users trips, meaning that anyone can access anyone's trips. This was implemented more on a proof-of-concept basis than an actual user authentication app. I may add this implementation in the future. </p>
                <h2>Link to application</h2>
                <button class="container-project-background__project-btn"><a class ="container-project-background__project-link" href="https://zb-travel-app.herokuapp.com/" target="_blank">Launch Application</a></button>
            </div>
         </section>
 
        <section class="row">
            <div class="column project-desc-container">
                <h3>Trips Page</h3>
                <div class="container-project-screenshot__project-item">
                    <img src="../assets/images/travel-app-screenshot.png" class="container-project-screenshot__project-img">
                </div>
                <h3>Unsplash Image Gallery Modal</h3>
                <div class="container-project-screenshot__project-item">
                    <img src="../assets/images/travel-app-screenshot2.png" class="container-project-screenshot__project-img">
                </div>
                <h3>Trip Detail Page</h3>
                <div class="container-project-screenshot__project-item">
                    <img src="../assets/images/travel-app-screenshot3.png" class="container-project-screenshot__project-img">
                </div>
            </div>
        </section>
  
    </main>


    <?php include '../assets/partials/footer.php' ?>
    </div>
    
    <script src="../assets/js/scripts.js"></script>

</body>

</html>
