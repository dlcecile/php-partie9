<?php
$page = 'exo8';
include 'header.php';
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR.utf-8']);
$date_Past = date('d-m-Y', strtotime(' - 15 days'));
?>
<div class=" jumbotron d-flex  flex-column align-items-center ">
    <p>Nous étions le : <?php echo $date_Past; ?></p>
</div>
<?php
include 'footer.php';
?>