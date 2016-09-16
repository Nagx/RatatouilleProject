<?php include('actualités.php'); ?>
    <H1 id="devise">Bio Beau Bon</H1>
    <div class="descriptif">
        <p>Nos restaurant sont tous basés sur de la nouriture BIO de première fraicheur. Avec des menus propres à chaque restaurant permettant d'adapter le cuisine locale au concept. Le client se retrouve gagnant avec une nourriture saine et de tradition.</p>
    </div>
    <!-- Actualités Mobile -->
    <!-- Actualité 1 -->
    <div class="visible-xs">

        <div class=" panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
       <!-- Titre de l'actualité 1 -->
        <a data-toggle="collapse" id="picture1" data-parent="#accordion" href="#collapse1">
        <h2><?php include titre1() ?></h2></a>
      </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <!-- Contenu de l'actualité 1 -->
                    <div class="panel-body">
                        <?php content1() ?>
                    </div>
                </div>
            </div>

            <!-- Actualité 2 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
       <!-- Titre de l'actualité 2 -->
        <a data-toggle="collapse" id="picture2" data-parent="#accordion" href="#collapse2">
        <h2><?php include titre2() ?></h2></a>
      </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <!-- Contenu de l'actualité 2 -->
                    <div class="panel-body">
                        <?php content2() ?>
                    </div>
                </div>
            </div>

            <!-- Actualité 3 -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
       <!-- Titre de l'actualité 3 -->
        <a data-toggle="collapse" id="picture3" data-parent="#accordion" href="#collapse3">
        <h2><?php include titre3() ?></h2></a>
      </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <!-- Contenu de l'actualité 3 -->
                    <div class="panel-body">
                        <?php content3() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin actualités Mobile -->


    <!-- Actualités Web -->
    <div class="hidden-xs" id="tabulle">

        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-justified" id="nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#actu1" role="tab" data-toggle="tab">
                        <img class="img-circle" src="images/actu1.jpg" />
                    </a>
                </li>
                <li role="presentation">
                    <a href="#actu2" role="tab" data-toggle="tab">
                        <img class="img-circle" src="images/actu2.jpg" />
                    </a>
                </li>
                <li role="presentation">
                    <a href="#actu3" role="tab" data-toggle="tab">
                        <img class="img-circle" src="images/actu3.jpg" />
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content" id="tabs-collapse">
                <div role="tabpanel" class="tab-pane fade in active" id="actu1">
                    <div class="tab-inner">
                        <p class="lead"><strong><h2><?php include titre1() ?></h2></strong></p>
                        <p>
                            <?php include content1() ?>
                        </p>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="actu2">
                    <div class="tab-inner">
                        <p class="lead"><strong><h2><?php include titre2() ?></h2></strong></p>
                        <p>
                            <?php include content2() ?>
                        </p>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="actu3">
                    <div class="tab-inner">
                        <p class="lead"><strong><h2><?php include titre3() ?></h2></strong></p>
                        <p>
                            <?php include content3() ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Fin actualités Web -->
