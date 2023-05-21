<?php require "./vue/template.view.php";?>

<div class="container" id="formO">
    <h2>Créer un ordinateur</h2>
    <form method="POST" action="index.php?action=valid-creer" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label" for="denomination">Denomination : </label>
        <input class="form-control" type="text" id="denomination" name="denomination">
      </div>
      <div class="mb-3">
        <label class="form-label" for="prix">Prix : </label>
        <input class="form-control" type="number" step=0.01 id="prix" name="prix">
      </div>
      <div class="mb-3">
        <label class="form-label" for="processeur">Processeur : </label>
        <input class="form-control" type="text" id="processeur" name="processeur">
      </div>
      <div class="mb-3">
        <label class="form-label" for="ecran">Ecran : </label>
        <input class="form-control" type="text" id="ecran" name="ecran">
      </div>
      <div class="mb-3">
        <label class="form-label" for="vive">Mémoire vive : </label>
        <input class="form-control" type="text" id="vive" name="vive">
      </div>
      <div class="mb-3">
        <label class="form-label" for="image">Image : </label>
        <input class="form-control" type="file" id="image" name="image">
      </div>
      <div class="mb-3">
        <label class="form-label" for="lien">Lien : </label>
        <input class="form-control" type="text" id="lien" name="lien">
      </div>
      <input class="btn btn-primary" type="submit" value="ajouter" name="form_ajouter"/> 
    </form>
</div>
