 <?php require "./vue/template.view.php"; ?>
<div class="container">
    <table class="table table-striped">
      <thead>
          <tr style="text-align: -webkit-center">
           
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Denomination</th>
            <th scope="col">Processeur</th>
            <th scope="col">Vive</th>
            <th scope="col">Ecran</th>
            <th scope="col">Lien</th>
            <th scope="col">Prix</th>
            <th scope="col" colspan="3">Actions</th>
            
        </tr>
      </thead>
      <tbody>
          
        <?php foreach($tabOrdis as $ordi) { ?>
          
            <tr class="align-middle">

                  <td scope="row"><?php echo $ordi->getId() ?></td>
                  <td><img width="80" src="public/images/<?php echo $ordi->getImage(); ?>"></td>
                  <td><?php echo $ordi->getDenomination(); ?></td>
                  <td><?php echo $ordi->getProcesseur(); ?></td>
                  <td><?php echo $ordi->getVive(); ?></td>
                  <td><?php echo $ordi->getEcran(); ?></td>
                  <td><?php echo $ordi->getLien(); ?></td>
                  <td><?php echo $ordi->getPrix(); ?></td>
                
                  <td><a href="index.php?action=lire&id=<?= $ordi->getId(); ?>" class="btn btn-info" style="background-color: #3A9D23; border-color: transparent; color: white">Lire</a></td>
                  <td><a href="index.php?action=modifier&id=<?= $ordi->getId(); ?>" class="btn btn-warning" style="background-color: #2C75FF; border-color: transparent; color: white">Modifier</a></td>
                  <td><a href="index.php?action=suppr&id=<?= $ordi->getId(); ?>" class="btn btn-info" style="background-color: #BB0B0B; border-color: transparent; color: white">Supprimer</a></td>

              </tr>
        <?php } ?>
      </tbody>
    </table> 
</div> 



