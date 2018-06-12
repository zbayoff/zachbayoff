<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zach Bayoff | Web Developer | Project Description: Weather App</title>
    <link rel="stylesheet" href="../assets/css/main.css">
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

<body id="portfolio-weatherapp">
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
                            <a href="travel-app.php">Weather App - Description</a>
                        </li>
                    </ul>
                </nav>
                <h1>Project Name: Weather App</h1>
                <p>Client: Anybody</p>
                <p>Tags: AngularJS Single Page Application / Heroku App / Consuming REST API</p>
                <h2>Project Background</h2>
                <p>This application was my first exposure to building an application using the AngularJS framework. A simple, single page application that makes call to the OpenWeatherMap API via a city/zip code and country combination. The weather data is retrieved via JSON and displayed with a high resolution background image to indicate the type of weather at the current time and place. The user can switch between Farenheit and Celcius. A Google Map is also embedded to indicate the latitude and longitude of the location the user has requested.</p>
                <h2>Link to application</h2>
                <button class="container-project-background__project-btn"><a class ="container-project-background__project-link" href="https://zb-weather-app.herokuapp.com/" target="_blank">Launch Application</a></button>
            </div>
         </section>
 
        <section class="row">
            <div class="column project-desc-container">
                <h3>Example 1</h3>
                <div class="container-project-screenshot__project-item">
                    <img src="../assets/images/weather-app-screenshot.png" class="container-project-screenshot__project-img">
                </div>
                <h3>Example 2</h3>
                <div class="container-project-screenshot__project-item">
                    <img src="../assets/images/weather-app-screenshot2.png" class="container-project-screenshot__project-img">
                </div>
                <h3>Example 3</h3>
                <div class="container-project-screenshot__project-item">
                    <img src="../assets/images/weather-app-screenshot3.png" class="container-project-screenshot__project-img">
                </div>
            </div>
        </section>
  
    </main>


    <?php include '../assets/partials/footer.php' ?>
    </div>
    
    <script src="../assets/js/scripts.js"></script>

</body>

</html>
