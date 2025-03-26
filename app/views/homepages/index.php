<?php require_once APPROOT . '/views/includes/header.php'; ?>

<!-- Voor het centreren van de container gebruiken we het bootstrap grid -->
<div class="container">
    <div class="row mt-3">

        <div class="col-2"></div>

        <div class="col-8">

            <h3><?php echo $data['title']; ?></h3>

            <a href="<?= URLROOT; ?>/smartphones/index">Overzicht smartphones</a> |
            <a href="<?= URLROOT; ?>/sneakers/index">Overzicht sneakers</a> |
            <a href="<?= URLROOT; ?>/horloge/index">Overzicht Horloge</a> |
            <a href="<?= URLROOT; ?>/Torens/index">Overzicht Torens</a> | 
            <a href="<?= URLROOT; ?>/Speakers/index">Overzicht Speakers</a> |
            <a href="<?= URLROOT; ?>/Zangeres/index">Overzicht Zangeres</a> |
            <a href="<?= URLROOT; ?>/UFC/index">UFC men's pound for found</a> 

        </div>
        
        <div class="col-2"></div>
        
    </div>
 
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>