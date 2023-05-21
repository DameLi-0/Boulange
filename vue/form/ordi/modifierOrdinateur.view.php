<?php ob_start(); ?>

<div class="container" style="margin-top: 7rem">
    <h3>Modification d'un ordinateur</h3>
    <form method="POST" action="index.php?page=ordi&action=valid-modifier" enctype="multipart/form-data">
        
        <div class="mb-3">
          <label class="form-label" for="denomination">Denomination : </label>
          <input class="form-control" type="text" id="denomination" name="denomination" value="<?= $ordi->getDenomination() ?>">
        </div>

        <div class="mb-3">
          <label class="form-label" for="prix">Prix : </label>
          <input class="form-control" type="number" step=0.01 id="prix" name="prix" value="<?= $ordi->getPrix() ?>">
        </div>

        <div class="mb-3">
          <label class="form-label" for="processeur">Processeur : </label>
          <input class="form-control" type="text" id="processeur" name="processeur" value="<?= $ordi->getProcesseur() ?>">
        </div>

        <div class="mb-3">
          <label class="form-label" for="ecran">Ecran : </label>
          <input class="form-control" type="text" id="ecran" name="ecran" value="<?= $ordi->getEcran() ?>">
        </div>

        <div class="mb-3">
          <label class="form-label" for="vive">Mémoire vive : </label>
          <input class="form-control" type="text" id="vive" name="vive" value="<?= $ordi->getVive() ?>">
        </div>

          <div class="mb-3">
            <label class="form-label" for="image">Image : </label>
            <input class="form-control" type="file" id="image" name="image" value="<?= $ordi->getImage() ?>">
          </div>  

        <div class="mb-3">
          <label class="form-label" for="lien">Lien : </label>
          <input class="form-control" type="text" id="lien" name="lien" value="<?= $ordi->getLien() ?>">
        </div>
        
        
        
        
      <input type="hidden" name="id" value="<?= $ordi->getId() ?>">
      <input type="hidden" name="image" value="<?= $ordi->getImage() ?>">
      <input class="btn btn-primary" type="submit" value="modifier" name="form_ajouter"/> 
</form>
<?php
$content = ob_get_clean();
$titre = "Modifier l'Ordinateur";
require "template.view.php";
?>