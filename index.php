<!DOCUMENT html>

<html>

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Ratatouille - Restaurant</title>
</head>

<body>

    <!-- Entête du site -->
    <header>
        <div class="row">
            <div class="page-header">
                <h1 id="title">RATATOUILLE<br/><small>-3 B-</small></h1>
            </div>
        </div>

        <!-- Menu de navigation -->
        <ul class="nav nav-pills nav-justified">
            <li class="active"><a data-toggle="pill" href="#home">Accueil</a></li>
            <li><a data-toggle="pill" href="#menu1">Qui Sommes-nous</a></li>
            <li><a data-toggle="pill" href="#menu2">Franchise</a></li>
        </ul>
        <!-- Contenu des pages -->
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <?php include('contenus/accueil.php'); ?>
            </div>
            <div id="menu1" class="tab-pane fade">
                <?php include('contenus/qui_sommes_nous.php'); ?>
            </div>
            <div id="menu2" class="tab-pane fade">
                <?php include('contenus/franchise.php'); ?>
            </div>
        </div>
    </header>
    <div id="map">
       <h2>Où nous trouver</h2>
        <iframe width="100%" height="300px" frameBorder="0" src="http://umap.openstreetmap.fr/en/map/map-ratatouille_102612?scaleControl=false&miniMap=true&scrollWheelZoom=true&zoomControl=true&allowEdit=false&moreControl=false&datalayersControl=true&onLoadPanel=undefined&captionBar=false&datalayers=244714#6/46.687/5.801"></iframe>
    </div>
    <!-- Pied de page -->
    <footer class="container-fluid">
        <div class="row">
            <div class="col-xs-4" id="bdpleft">
                <address>
                      <strong>SARL Ratatouille au capital 70.000€</strong><br>
                      Siège social : 17, rue Delandine, 69002 LYON<br>
                      RCS LYON 042 007 069<br>
                      <abbr title="Phone">Tel:</abbr> 01-23-45-67-89
                      <a href="mailto:#">Contact</a>
                    </address>
            </div>
            <div class="col-xs-4" id="bdpcenter">
                <p>© 2016 WildCodeSchool Tous droits réservés.</br>
                    Ceci n'est pas un site présentant un vrai restaurant</br>
                    Mais un travail fait par des étudiant en projet initial</br>
                </p>
            </div>
            <div class="col-xs-4" id="bdpright">
                <p>Powered by : Damien Beauseigneur
                    <br />Kevin Javazzo</p>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
