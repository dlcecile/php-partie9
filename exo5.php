<?php
$page = 'exo5';
include 'header.php';
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR.utf-8']);
//Je renseigne mes deux dates.
$date1 = '16-05-2016';
$date2 = '18-12-2019';
//Je transforme les 2 dates en timestamp
$date3 = strtotime($date1);
$date4 = strtotime($date2);
//Je fais la différence des deux timestamps
$nbJT = $date4 - $date3;
//Je divise par 86400 pour avoir le nombre de jours que j'arrondi avec round
$nbJours = round($nbJT / 86400);
?>
<div class=" jumbotron d-flex  flex-column align-items-center ">
    <p>Le nombre de jours est de <?php echo $nbJours; ?></p>
</div>
<?php
include 'footer.php';
?>
