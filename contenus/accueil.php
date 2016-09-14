<?php include('actualités.php'); ?>
    <H1 id="devise">BIO BEAU BON</H1>
    <div class="descriptif">
        <p>Nos restaurant sont tous basés sur de la nouriture BIO de première fraicheur. Avec des menus propres à chaque restaurant permettant d'adapter le cuisine locale au concept. Le client se retrouve gagnant avec une nourriture saine et de tradition.</p>
    </div>

    <!-- Actualité 1 -->
    <div class="visible-xs">

        <div class=" panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
       <!-- Titre de l'actualité 1 -->
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <?php titre1() ?></a>
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
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        <?php titre2() ?></a>
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
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        <?php titre3() ?></a>
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



    <div class="hidden-xs" id="tabulle">

                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-justified" id="nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#dustin" aria-controls="dustin" role="tab" data-toggle="tab">
                                <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dustinlamont/128.jpg" />
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#daksh" aria-controls="daksh" role="tab" data-toggle="tab">
                                <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dakshbhagya/128.jpg" />
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#anna" aria-controls="anna" role="tab" data-toggle="tab">
                                <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/annapickard/128.jpg" />
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content" id="tabs-collapse">
                        <div role="tabpanel" class="tab-pane fade in active" id="dustin">
                            <div class="tab-inner">
                                <p class="lead">Etiam tincidunt enim et pretium efficitur. Donec auctor leo sollicitudin eros iaculis sollicitudin.</p>
                                <hr>
                                <p><strong class="text-uppercase">Dustin Lamont</strong></p>
                                <p><em class="text-capitalize"> Senior web developer</em> at <a href="#">Apple</a></p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="daksh">
                            <div class="tab-inner">
                                <p class="lead">Suspendisse dictum gravida est, nec consequat tortor venenatis a. Suspendisse vitae venenatis sapien.</p>
                                <hr>
                                <p><strong class="text-uppercase">Daksh Bhagya</strong></p>
                                <p><em class="text-capitalize"> UX designer</em> at <a href="#">Google</a></p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="anna">
                            <div class="tab-inner">
                                <p class="lead">Nullam suscipit ante ac arcu placerat, nec sagittis quam volutpat. Vestibulum aliquam facilisis velit ut ultrices.</p>
                                <hr>
                                <p><strong class="text-uppercase">Anna Pickard</strong></p>
                                <p><em class="text-capitalize"> Master web developer</em> at <a href="#">Intel</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
