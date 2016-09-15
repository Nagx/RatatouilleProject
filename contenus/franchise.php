<ul class="nav nav-tabs nav-justified">
    <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
    <li><a data-toggle="tab" href="#tab2">Formulaire</a></li>
</ul>

<div class="tab-content" id="form_content">
    <div id="tab1" class="tab-pane fade in active">
        <div id="franchise_b">
            <h2>Nos franchisés</h2>
			<p class="descriptif">Nos franchisés sont les représentants de notre marque de fabrique et par conséquent un standing de base est nécessaire.
			Ils doivent donc proposer un menu avec des produits bio et frais et issue d'une fillière locale.
			Pour cela les premiers temps la qualité des menus sera vérifié ainsi que la propreté des cuisines.
			Enfin un petit rappel de notre devise chez ratatouille vous aurez les 3 B, du Bio, du Beau et du Bon.</p>

			<H2>Emplacement Souhaité</H2>

            <p class="descriptif">Nous souherons un restaurant de 40 places minimum, dans une zone d'activité avec parking, centre commerciaux et centre ville</p>

            <H2>Formation et assistance</H2>
            <p class="descriptif">Une formation d'un mois sera mise en place à la formation aux bonnes pratiques et à l'utilisation des outils de gestion interne et externe propre à notre franchise</p>
        </div>
    </div>
    <div id="tab2" class="row tab-pane fade">
        <form>
        <div class="col-md-6">
			<div class="form-group">
				<label for="InputNom">Nom <span class="require">*</span></label>
				<input type="text" class="form-control" id="InputNom" placeholder="Nom" required>
			</div>
			<div class="form-group">
				<label for="InputPrenom">Prénom <span class="require">*</span></label>
				<input type="text" class="form-control" id="Prenom" placeholder="Prénom" required>
			</div>
			<div class="form-group">
				<label for="Adresse">Adresse</label>
				<input type="text" class="form-control" id="Adresse" placeholder="Adresse">
			</div>
			<div class="form-group">
				<label for="CodePostal">Code Postal</label>
				<input type="text" class="form-control" id="CodePostal" placeholder="Code Postal">
			</div>
			<div class="form-group">
				<label for="Ville">Ville</label>
				<input type="text" class="form-control" id="Ville" placeholder="Ville">
			</div>
			<div class="form-group">
				<label for="InputEmail1">adresse email</label>
				<input type="email" class="form-control" id="InputEmail1" placeholder="Email">
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label for="InputTelephone">Téléphone <span class="require">*</span></label>
				<input type="telephone" class="form-control" id="InputTelephone" placeholder="Téléphone" required>
			</div>
			<div class="form-group">
				<label for="InputNbPlaces">Nombre de places du futur restaurant</label>
				<input type="number" class="form-control" id="InputNbPlace" placeholder="Nombre de places">
			</div>
			<div class="form-group">
				<label for="InputSurface">Surface du futur restaurant</label>
				<input type="number" class="form-control" id="InputSurface" placeholder="Surface en m²">
			</div>
			<div class="form-group">
				<label for="InputAdresseResto">Adresse du futur restaurant</label>
				<input type="number" class="form-control" id="InputAdressResto" placeholder="Adresse du futur restaurant">
			</div>
			<div class="form-group">
				<label for="InputCodePostalResto">Code postal du futur restaurant</label>
				<input type="text" class="form-control" id="InputCodePostalResto" placeholder="Code postal du futur restaurant">
			</div>
			<div class="form-group">
				<label for="InputVilleResto">Ville du futur restaurant <span class="require">*</span></label>
				<input type="text" class="form-control" id="InputVilleResto" placeholder="Ville du futur restaurant" required>
			</div>
            </div>
            <div class="col-md-offset-2 col-md-8 col-md-offset-2">
			<div class="form-group">
				<label for="InputCommentaires">Commentaires</label>
				<textarea class="form-control" id="InputCommentaires" name="InputCommentaires"></textarea>
			</div>
			</div>
			<div class="col-md-12">
			<button type="submit" class="btn btn-primary">Envoyer</button>
			</div>
		</form>
    </div>
</div>
