<?php require "./vue/template.view.php"; ?>
<br>
<div class="row" id="affO">
    <div class="col-4">
        <img  style="width:80%; height:auto" src="public/images/<?= $ordi->getImage(); ?>">
    </div>
    <div class="col-8">
        <br>
        <h3>Processeur : <?= $ordi->getProcesseur(); ?></h3>
        <br>
        <h3>Ecran : <?= $ordi->getEcran(); ?></h3>
        <br>
        <h3>Mémoire vive : <?= $ordi->getVive(); ?></h3>
        <br>
        <h3>Prix : <?= $ordi->getPrix(); ?> €</h3>
        <br>
        <h3>Lien : <a href="<?= $ordi->getLien(); ?>"><?= $ordi->getLien(); ?></a></h3> 
        
    </div>
</div>