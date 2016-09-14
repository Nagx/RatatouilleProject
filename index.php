<!DOCUMENT html>

<html>

<head>
    <meta charset="utf-8">
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

    </br>

    <!-- Pied de page -->
    <footer>
		<div id="BasDePageGauche">
			<p>© 2016 WildCodeSchool Tous droits réservés.</br>
			Ceci n'est pas un site présentant un vrai restaurant</br>
			Mais un travail fait par des étudiant en projet initial</br>
			<a href="mailto:fake@faux.com">contact</a></br>
			tel : 01 23 45 67 89</p>
		</div>
		<div id="BasDePageCentral">
			<p>SARL Ratatouille au capital 7000€</br>
			Siège social : 17, rue Delandine, 69002 LYON</br>
			RCS LYON 042 007 069</br>
		</div>
		<div id="BasDePageCentral">
			<p>Site hébergé par ?</br>
			Directeur de publication: Damien Beauseigneur</p>
		</div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
