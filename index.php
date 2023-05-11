<?php
require('layout/header.php');
?>

<!-- Navbar -->
<div class="background w-100 h-100 d-flex flex-column justify-content-between">
    <?php require('layout/navbar.php'); ?>

    <!-- Landing Page -->
    <section id="landing-page">
        <div class="text-landing-page text-center h-100 ">
            <h1 class="text-white fw-bold">Quai Antique</h1>
            <p class="text-white">Restaurant Savoyard à Chambéry</p>
            <a href="#" class="orange-button btn btn-lg">Réserver une table</a>
        </div>
    </section>

    <div class="scroll text-center p-5">
        <a class="scroll-down text-white" href="#"><i class="fa-solid fa-circle-chevron-down fa-2xl"></i></a>
    </div>
</div>


<?php require('layout/footer.php'); ?>