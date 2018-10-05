<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anders Rosenvinge Lassen</title>
    <?php
include_once "content.php";
$dir = "libs/css";

// Sort in descending order
$a = array_diff(scandir($dir), array('..', '.', '.DS_Store'));

foreach ($a as &$folder) {
    // echo 'true';
    echo ('<link rel="stylesheet" href="libs/css/' . $folder . '">');
}
?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</head>

<body>
    <div class="firstRow bg-darker text-light" id="home">
        <div id="particles-js"></div>
        <div class="center">
            <h1 class="ml11">Hej, Jeg hedder <span class="text-wrapper text-primary"><span class="line line1"></span><span class="letters">Anders Rosenvinge Lassen</span></span>.<br>
            Jeg er en full-stack udvikler.<br/>
            <!-- <a href="#navbar" class="btn btn-outline-success animated heartBeat delay-2s">Mit arbejde <i class="fas fa-arrow-alt-circle-right animated"></i></a></h1> -->
        </div>
    </div>
        <nav class="navbar sticky-top navbar-expand-lg navbar-expand-sm navbar-dark bg-dark pl-md-20 pl-lg-20 pl-xl-20 border-bottom border-primary" id="navbar-navigation">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav" role="tablist">
                    <li class="nav-item" id="nav-home">
                        <a class="nav-link" onclick="pageScroll('home')">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="nav-profil">
                        <a class="nav-link" onclick="pageScroll('profil')">Profil</a>
                    </li>
                    <li class="nav-item" id="nav-projekter">
                        <a class="nav-link" onclick="pageScroll('projekter')">Projekter</a>
                    </li>
                    <li class="nav-item" id="nav-kontakt">
                        <a class="nav-link" onclick="pageScroll('kontakt')">Kontakt</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="pt-5" id="profil"></div>
    <div class="secondRow container">
        <div class="row pt-5">
            <div class="col">
                <h1 class="text-center wow fadeInLeft slow">Profil<br>
                <div class="h1-hr wow fadeInLeft delay-0.5s slow"></div></h1>
            </div>
        </div>
        <div class="row pt-5 text-center">
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeIn slow">
                <div class="card border-0">
                    <div class="card-img-top"><i class="fas fa-adjust fa-spin display-2"></i></div>
                    <div class="card-body">
                        <h4 class="car-title">Dynamisk</h4>
                        <p class="card-text">Evner at håndtere forandring og udvikling, gennem handlekraft, energi og omstillingsparathed.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeIn slow">
                <div class="card border-0">
                    <div class="card-img-top"><i class="fas fa-golf-ball display-2"></i></div>
                    <div class="card-body">
                        <h4 class="car-title">Resultatorienteret</h4>
                        <p class="card-text">Søger hele tiden den mest optimale løsning, med målet for øje.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeIn slow">
                <div class="card border-0">
                    <div class="card-img-top"><i class="fas fa-fast-forward display-2"></i></div>
                    <div class="card-body">
                        <h4 class="car-title">Igangsætter</h4>
                        <p class="card-text">Der er krudt i min røv, hvilket viser sig ved min selvstændige tilgang til projekter og udfordringer.</p>
                    </div>
                </div>            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeIn slow">
                <div class="card border-0">
                    <div class="card-img-top"><i class="fab fa-angellist display-2"></i></div>
                    <div class="card-body">
                        <h4 class="car-title">Humoristisk</h4>
                        <p class="card-text">Jeg er udadvendt, nyskabende og energisk, som trives i et inspirerende arbejdsmiljø.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-5 col-sm-12 pt-3 px-5 mx-5 text-center">
                <img src="img/Anders_2.jpg" class="rounded-circle w-75 wow slideInLeft slow" />
                <h3 class="pt-3 text-uppercase wow slideInLeft slow">Anders Rosenvinge Lassen</h3>
                <p class="w-md-75 w-sm-100 mx-auto wow slideInLeft slow">Jeg er en erfaren & kreativ Fullstack udvikler med sans for produkt- og forretningsudvikling, der trives med udfordringer, stort ansvar og plads til at leverer udover det sædvanlige. Jeg programmere flydende i en del sprog, og har nemt ved at sætte mig ind i nye.</p>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="row p-1">
                    <div class="card-columns">
                        <?php
foreach ($kompetencer as $kompetence) {
    echo '<div class="card w-100">';
    echo '<p class="p-2 bg-primary text-white w-100 rounded-top">' . $kompetence['h1'] . "<br>";
    echo '<small class="w-100">' . $kompetence['h2'] . "</small></p>";
    echo "<ul>";
    foreach ($kompetence['p'] as $evne) {
        echo "<li class='px-2'>" . $evne . "</li>";
    }
    echo "</ul>";
    if (array_key_exists("h3", $kompetence)) {
        echo '<p class="px-1 bg-primary text-white w-100"><small class="w-100">' . $kompetence['h3'] . "</small></p>";
        echo "<ul>";
        foreach ($kompetence['p2'] as $evne) {
            echo "<li class='px-2'>" . $evne . "</li>";
        }
        echo "</ul>";
    }
    echo "</div>";
}
?>
                        <!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse1"  aria-expanded="false" aria-controls="collapse1">
                            Button with data-target
                        </button> -->
                    </div>
                </div>
                <div class="collapse p-1" id="collapse1">
                    <div class="card card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
                <div class="collapse p-1" id="collapse2">
                    <div class="card card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="pt-5" id="projekter"></div>
    <div class="jumbotron jumbotron-fluid wow fadeIn slow">
  <div class="container text-center">
    <h1 class="display-4">Interesseret i mit CV?</h1>
    <p class="lead">Hent eller se en pdf af hele mit cv her.</p>
    <a class="btn btn-primary btn-lg" href="CV.pdf" target="_blank">Se CV</a>
  </div>
</div>
    <div class="pt-5" id="projekter"></div>
    <div class="secondRow container" id="">
        <div class="row pt-5">
            <div class="col">
                <h1 class="text-center wow fadeInLeft slow">Projekter<br>
                <div class="h1-hr wow fadeInLeft delay-0.5s slow"></div></h1>
            </div>
        </div>
        <div class="row pt-5 wow fadeIn slow">
            <?php
$i = 0;
foreach ($projekter as $projekt) {
    echo '<div class="col-lg-4 col-md-4 col-sm-12 project-item p-0" data-toggle="modal" data-target=".modl' . $i . '">';
    echo '<img src=' . $projekt['img'] . ' alt="" class="project-image" style="overflow:hidden;">';
    echo '<div class="project-content">';
    echo '<h2>' . $projekt['h1'] . "</h2>";
    echo '<h4 class="text-black-50">' . $projekt['h2'] . "</h4>";
    echo "<br>";
    echo '<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".modl' . $i . '">Læs mere</button>';
    echo "</div></div>";

    // Modal
    echo '<div class="modal fade modl' . $i . '" tabindex="-1" role="dialog" aria-labelledby="ModalLabel' . $i . '" aria-hidden="true">';
    echo '<div class="modal-dialog modal-dialog-centered modal-lg">';
    echo '<div class="modal-content">';
    if (count($projekt['modal']['modal-image']) > 1) {
        ?>
                                <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                    <?php
$j = 0;
        foreach ($projekt['modal']['modal-image'] as $modalimg) {
            ?>
                                        <li data-target="#carouselIndicators" data-slide-to="<?php echo $j; ?>" <?php if ($j == 0) {echo ' class="active"';}?>></li>
                                    <?php
$j++;
        }
        ?>
                                    </ol>
                                    <div class="carousel-inner">
                                    <?php
$k = 0;
        foreach ($projekt['modal']['modal-image'] as $modalimg) {
            ?>
                                        <div class="carousel-item <?php if ($k == 0) {echo 'active';}?>">
                                        <img class="d-block w-100" src="<?php echo $modalimg; ?>">
                                        </div>
                                    <?php
$k++;
        }
        ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <?php
} else {
        echo '<img src=' . $projekt['modal']['modal-image'] . ' alt="" class="modal-img rounded-top" style="overflow:hidden;" />';
    }
    echo '<div class="modal-header">';
    echo '<h5 class="modal-title" id="ModalLabel' . $i . '">' . $projekt['modal']['modal-title'] . '</h5>';
    echo '</div>';
    echo '<div class="modal-body">' . $projekt['modal']['modal-body'] . '</div>';
    echo '<div class="modal-footer">';
    echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
    echo '<span aria-hidden="true">&times;</span>';
    echo '</button>';
    echo '</div></div></div></div>';
    if ($i == 2 || $i == 5) {
        echo '</div><div class="row pt-0 wow fadeIn slow">';
    }
    $i++;
}
?>
        </div>
    </div>
    <div class="pt-5 pb-5"></div>
    <div class="pt-5" id="kontakt"></div>
    <div class="third">
        <h1 class="text-center wow fadeInLeft slow">Gi' mig et kald<br>
        <div class="h1-hr wow fadeInLeft delay-0.5s slow"></div></h1>
        <div class="container">
            <div class="row pt-5 wow slideInLeft slow">
                <div class="col">
                    <h5 class="text-center text-secondary">Har du spørgsmål eller interesseret i arbejde sammen?</h5>
                </div>
            </div>
            <div class="row pt-5 pb-5">
                <div class="col">
                    <div class="row justify-content-md-center wow slideInLeft slow">
                        <div class="col-md-3 col-sm-12 text-bold text-md-right text-center"><i class="fas fa-phone pr-2"></i>&nbsp;<strong>Telefon</strong></div>
                        <div class="col-md-4 col-sm-12 text-md-left text-center"><a href="tel:004530313408">+45 30 31 34 08</a></div>
                    </div>
                    <div class="row justify-content-md-center wow slideInLeft slow">
                        <div class="col-md-3 col-sm-12 text-bold text-md-right text-center pt-md-0 pt-sm-3"><i class="fas fa-at"></i>&nbsp;<strong>Mail</strong></div>
                        <div class="col-md-4 col-sm-12 text-md-left text-center"><a href="mailto:anders-lassen@outlook.dk">Anders-Lassen@outlook.dk</a></div>
                    </div>
                    <div class="row justify-content-md-center wow slideInLeft slow">
                        <div class="col-md-3 col-sm-12 text-bold text-md-right text-center pt-md-0 pt-sm-3"><i class="fab fa-linkedin-in"></i>&nbsp;</div>
                        <div class="col-md-4 col-sm-12 text-md-left text-center"><a href="https://www.linkedin.com/in/anders-rosenvinge-lassen/">@Anders Rosenvinge Lassen</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5"></div>
        <div id="particles-js2"></div>
    </div>

</body>
<script src="libs/js/moving-text.js"></script>
<script src="libs/js/particlesjs.js"></script>

<!-- WOW -->
<script src="https://mynameismatthieu.com/WOW/dist/wow.min.js"></script>
    <script>
        new WOW().init();
        $('body').scrollspy({ target: '#navbar' })
        function pageScroll(id){
            $("li.nav-item.active").removeClass("active");
            $("#nav-"+id).addClass("active");
            // Scroll to a certain element
            document.getElementById(id).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
        var done = false;

        setTimeout(function() {
        done = true;
        }, 2546);

        $('.fa-spin').on('animationiteration', function(event) {
        if (done) {
            $(event.target).removeClass('fa-spin');
        }
        });
    </script>

</html>