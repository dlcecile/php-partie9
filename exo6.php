<?php
$page = 'exo6';
include 'header.php';
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR.utf-8']);
$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
?>
<div class=" jumbotron d-flex  flex-column align-items-center ">
    <p>Le mois de Février 2016 compte <?php echo $number ?> jours.</p>
</div>
<?php
include 'footer.php';
?>