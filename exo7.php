<?php
$page = 'exo7';
include 'header.php';
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR.utf-8']);
$date_Futur = date('d-m-Y', strtotime('+20 days'));
?>
<div class=" jumbotron d-flex  flex-column align-items-center ">
    <p>Nous serons en : <?php echo $date_Futur; ?></p>
</div>
<?php
include 'footer.php';
?>