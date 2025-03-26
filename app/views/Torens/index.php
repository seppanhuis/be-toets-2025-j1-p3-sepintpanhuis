<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>


   
    <!-- begin tabel smartphones -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">Locatie</th>
                        <th scope="col">Hoogte</th>
                        <th scope="col">AantalVerdiepingen</th>
                        <th scope="col">JaarVoltooid</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['Torens'] as $Torens) : ?>
                        <tr>
                            <td><?= $Torens->Naam; ?></td>
                            <td><?= $Torens->Locatie; ?></td>
                            <td><?= $Torens->Hoogte; ?></td>
                            <td><?= $Torens->AantalVerdiepingen; ?></td>
                            <td><?= $Torens->JaarVoltooid; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index">home</a>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- einde tabel smartphones -->

<?php require_once APPROOT . '/views/includes/footer.php'; ?> 