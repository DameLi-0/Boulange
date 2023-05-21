 <?php require "./vue/template.view.php"; ?>

<div id="comO">
    <a href="index.php?action=supprpanier">Supprimer/payer commande</a><br><br>
    <?php $prixTotal = 0 ?>
    <?php foreach($ordi as $ordi) { ?>
    
        <p><?= $ordi->getDenomination(); ?> X 1 = <?= $ordi->getPrix(); ?> €</p>
        <hr>
        <?php $prixTotal += $ordi->getPrix(); ?>
        <?php } ?>   
        <?php echo "<b>prix total=".$prixTotal." €<b>"; ?>
</div>    
