<?php
$page = "exercice4";
include 'header.php';
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR.utf-8']);
$t1 = mktime(15, 00, 0, 2, 07, 2016);
?>
<div class=" jumbotron d-flex  flex-column align-items-center ">
    <p>Voici la date ainsi que le timestamp : <?php echo strftime('%A %e %B %Y:') . time() . '!!'; ?></p>
    <p>Le timestamps du mardi 2 août 2016 à 15h00:<?php echo $t1; ?></p>
</div>
<?php
include 'footer.php';
?>
