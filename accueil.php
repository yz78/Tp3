<?php include "header.php";

?>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">La bibliothèque Gutenberg</h1>
      <p>Vous retrouverez toutes les informations que vous avez besoin.</p>
      <p><a class="btn btn-danger btn-lg" href="#" role="button">En travaux </a></p>
    </div>
  </div>

  <div class="container mt-2">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Genre</h2>
        <p>Allez à la catégorie de gestion de genre</p>
        <p><a class="btn btn-primary" href="listeDesGenres.php" role="button">Allez voir </a></p>
      </div>
      <div class="col-md-4">
        <h2>Auteurs (EN TRAVAUX)</h2>
        <p>Allez à la catégorie de gestion des auteurs</p>
        <p><a class="btn btn-danger" href="#" role="button">Alte passez votre chemin </a></p>
      </div>
      <div class="col-md-4">
        <h2>Nationalité</h2>
        <p>Allez à la catégorie de gestion des nationalités</p>
        <p><a class="btn btn-primary" href="listeNationalites.php" role="button">Allez voir </a></p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->

 <div class="container">
    <div class="row">
        <div class="col-md-4">
                <div class="card border-primary mb-3" style="max-width: 20rem;">
            <div class="card-header"><font style="vertical-align: hériter;"><font style="vertical-align: hériter;">Genres</font></font></div>
            <div class="card-body">
                <h4 class="card-title"><font style="vertical-align:herit;"><font style="vertical-align:herit;">Découvrir les genres de vos auteurs préférés</font></font>
                <p class="card-text"><font style="vertical-align:herit;"><font style="vertical-align:herit;">Allez sur le lien en haut </font></font></p>
            </div>
            </div>
                </div>
        <div class="col-md-4">
                <div class="card border-primary mb-3" style="max-width: 20rem;">
            <div class="card-header"><font style="vertical-align: hériter;"><font style="vertical-align: hériter;">Auteurs</font></font></div>
            <div class="card-body">
                <h4 class="card-title"><font style="vertical-align:herit;"><font style="vertical-align:herit;">Découvrir vos auteurs préférés</font></font>
                <p class="card-text"><font style="vertical-align:herit;"><font style="vertical-align:herit;">Allez sur le lien en haut</font></font></p>
            </div>
            </div>
                </div>
        <div class="col-md-4">
                <div class="card border-primary mb-3" style="max-width: 20rem;">
            <div class="card-header"><font style="vertical-align: hériter;"><font style="vertical-align: hériter;">Nationalité</font></font></div>
            <div class="card-body">
                <h4 class="card-title"><font style="vertical-align:herit;"><font style="vertical-align:herit;">Découvrir les nationlités de vos auteurs préférés</font></font>
                <p class="card-text"><font style="vertical-align:herit;"><font style="vertical-align:herit;"></font>Allez sur le lien en haut</font></p>
            </div>
            </div>
                </div>
            </div> 
    </div>          
 </div>


</main>

<?php include "footer.php";

?>
