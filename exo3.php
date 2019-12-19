<?php
$page = "exercice3";
include 'header.php';
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR.utf-8']);      
?>
<div class=" jumbotron d-flex  flex-column align-items-center">
     <p>La date du jour est : <?php  echo strftime('%A %e %B %Y');?></p>
</div>
<?php
include 'footer.php';
?>

