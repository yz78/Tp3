<?php include "header.php";
include "connexionPdo.php";

// list de nationalité
$libelle="";

// construction de la requete
$texteReq="select * from genre ";
if(!empty($_GET)){
    $libelle=$_GET['libelle'];
    if($libelle !="") {$texteReq.=" where libelle like '%" .$libelle."%'";}
}
$texteReq.= " order by genre.libelle ";



$req=$monPdo->prepare($texteReq);
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesGenres=$req->fetchALL();

// $req=$monPdo->prepare("select * from genre");
// $req->setFetchMode(PDO::FETCH_OBJ);
// $req->execute();
// $lesGenres=$req->fetchALL();

// if(!empty($_SESSION['message'])){
//     $mesMessages=$_SESSION['message'];
//     foreach($mesMessages as $key=>$message){
//      echo ' <div class="container pt-5">
//                 <div class="alert alert-'.$key.' alert-dismissible fade show" role="alert">'.$message.'
//                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//                             <span aria-hidden="true">&times;</span>
//                         </button>
//                 </div>
//             </div>';
//     }
//     $_SESSION['message']=[];
// }
?>

<div class="container mt-5">

    <div class="row pt-3">    
    <div class="col-9"><h2>Liste des genres</h2></div>
    <div class="col-3"><a href="formGenre.php?action=Ajouter" class='btn btn-sucess'><i class="fas fa-plus-circle"></i> Ajouté un genre </a></div>
    </div>

    <form action="" method="get" class="border border-primary rounded p-3 mt-3 mb-3">
            <div class="row">
                <div class="col">
                <input type="text" class='form-control' id='libelle' placeholder='Saisir le libellé' name='libelle' value="<?php if ($libelle != "") {echo $libelle;} ?>">
                </div>
                <div class="col">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-sucess btn-block"> Rechercher </button>
                </div>
            </div>
    </form>


    <table class="table table-hover table-striped">
    <thead>
        <tr class="d-flex">
        <th scope="col" class="col-md-2">Numéro</th>
        <th scope="col" class="col-md-8">Genre</th>
        <th scope="col" class="col-md-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($lesGenres as $genre){
                echo"<tr class='d-flex'>";
                echo"<td class='col-md-2' >$genre->num</td>";
                echo"<td class='col-md-8' >$genre->libelle</td>";
                echo"<td class='col-md-2' >
                    <a href='formGenre.php?action=Modifier&num=$genre->num' class='btn btn-primary'><i class='fas fa-pen'></i> </a>
                    <a href='#modalSuppression' data-toggle='modal' data-message='Voulez vous supprimmer ce genre.' data-suppression='supprimerGenre.php?num=$genre->num'' class='btn btn-danger'><i class='far fa-trash-alt'></i> </a>
                </td>";
                echo"</tr>";
            }
        ?>
    </tbody>
    </table>

</div>
  

<?php include "footer.php";

?>