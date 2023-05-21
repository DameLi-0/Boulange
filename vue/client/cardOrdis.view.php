<?php require "./vue/template.view.php"; ?>

<div class="row" id="cardO">
    <?php foreach($bddOrdis as $ordi) { ?>
      <div class="col">
        <div class="card p-1 m-1" style="width: 18rem;">
          <img height="300px" src="public/images/<?php echo $ordi->getImage(); ?>" class="card-img-top" alt="image">
          <div class="card-body">
            <h5 class="card-tiStle"><?php echo sousChaineTaille($ordi->getDenomination(), 18); ?></h5>
            <p class="card-text"><?php echo sousChaineTaille($ordi->getPrix(),50); ?> €</p>
            <a href="index.php?action=lire&id=<?php echo $ordi->getId(); ?>" class="btn btn-primary">Détail</a>
            <a href="index.php?action=addpanier&id=<?php echo $ordi->getId(); ?>" class="btn btn-success">Panier</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div> 