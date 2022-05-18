


<!-- LAB SEVEN LOOK AT IT YOU SHMECKLE GET WITH IT BRO -->


<!-- BACKGROUND IMG WEBSITE -->


<!DOCTYPE HTML>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-grid.css">
        
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">

        <script src="https://kit.fontawesome.com/808c061740.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

        <title>218631 3dapps Assignment</title>
    </head>

    <body>
    
    <!-- Header (Navbar) -->
    <header id="nav-placeholder"></header>
    <script>
        $.get("nav.html", function(data){ $("#nav-placeholder").replaceWith(data); });
    </script>

    <br>    
    <!-- Main Body -->
    <div class="wrapper">
    <main class="container">
        <h1>HOME PAGE</h1>

        <br>

        <div class="col">
            <!-- Coca Cola -->
            <div class="row-xs-12">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top img-fluid img-thumbnail" src="assets/images/coca_cola.jpg">
                    </a>
                    <div class="card-body">
                        <h3 class="card-title">Coca Cola</h3>
                        <p class="card-text">
                            <p>
                            It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!...
                            </p>
                            <a href="#" class="btn btn-primary">Find out more ...</a>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Sprite -->
            <div class="row-xs-12">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top img-fluid img-thumbnail" src="assets/images/sprite.jpg">
                    </a>
                    <div class="card-body">
                        <h3 class="card-title">Sprite</h3>
                        <p class="card-text">
                            <p>
                            First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries.
                            Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.
                            </p>
                            <a href="#" class="btn btn-primary">Find out more ...</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Dr Pepper -->
            <div class="row-xs-12">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top img-fluid img-thumbnail" src="assets/images/dr_pepper.jpg">
                    </a>
                    <div class="card-body">
                        <h3 class="card-title">Dr Pepper</h3>
                        <p class="card-text">
                            <p>
                            Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over a century and it's still the same, with that distinctive flavour you just can't quite put your tongue on.
                            It was created by Texas pharmacist Charles Alderton in 1885.
                            </p>
                            <a href="#" class="btn btn-primary">Find out more ...</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  ></script>
        <!--<script src="js/jquery-3.5.1.js"></script>
        <script src="js/popper.min.js"></script>-->
        <script src="js/bootstrap.js"></script>

    </main>
    </div>

    <br>
    <!-- Footer -->
    <footer  id="footer-placeholder"></footer>
    <script>
        $.get("footer.html", function(foot){ $("#footer-placeholder").replaceWith(foot); });
    </script>


    </body>
</html>