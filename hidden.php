<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anders Rosenvinge Lassen</title>
    <?php
        $dir = "libs/css";

        // Sort in descending order
        $a = array_diff(scandir($dir), array('..', '.', '.DS_Store'));

        foreach ($a as &$folder) {
            // echo 'true';
            echo ('<link rel="stylesheet" href="libs/css/' . $folder . '">');
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
<div class="container" id="home">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="img/icon-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Anders Rosenvinge Lassen
    </a>
    </nav>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#profil">Profil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#projekter">Projekter</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#kontakt">Kontakt</a>
        </li>
        </ul>
    </div>
    </nav>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="row">
                <div class="col">
                    <img src="img/Anders_2.jpg" class="portrait" />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3 class="text-uppercase text-left">Anders Rosenvinge Lassen</h3>
                    <h6 class="text-uppercase text-left">Erfaren Full-stack udvikler</h6>
<br>
                    <div class="text-uppercase text-left small">
                        <p class="p-3 mb-2 bg-info text-white font-weight-bold">Kontakt</p>
                        <p>+45 3031 3408</p>
                        <p>ANDERS-LASSEN@OUTLOOK.DK</p>
                        <p>JULSØVEJ 228, 8240 RISSKOV</p>
                        <a href="linkedin.com/in/anders-rosenvinge-lassen/"><p>linkedin.com/in/anders-rosenvinge-lassen/</p></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-6 col-sm-12 ">
            <div class="row">
                <div class="col text-lg-left text-md-left text-sm-center">
                    <h1 class="pt-5">Velkommen til min portfolio!</h1>
                    <h3 class="text-muted">Jeg hedder Anders.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 text-justify">
                    <p>Jeg er en erfaren & kreativ Fullstack udvikler med sans for produkt- og forretningsudvikling, der trives med udfordringer, stort ansvar og plads til at leverer udover det sædvanlige. Jeg programmer flydende i en del sprog, og har nemt ved at sætte mig ind i nye.</p>
                    <p>Igennem mit arbejde og min bacheloruddannelse har jeg lært at skabe godt it-arkitektur, struktureret programmering og forretning. En kombination jeg har kunne omsætte i mine egne projekter, hvor alle delene af projekterne har skulle hænge sammen.</p>
                    <p>Mine projekter har lært mig at designe et lækkert produkt, skabe produktet, analysere det og forbedre det, selvom det er godt, så kan det blive endnu bedre. </p>
                    <p>Stor interesse for teknologier, samt erfaringer fra konsulentarbejde gør at jeg hurtigt kan sætte mig ind i dens virkemåder.</p>
                    <p>Jeg er vild med at udvikle, jo mere kompleks det er, jo sjovere er det.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>