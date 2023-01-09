<?php $autoData = $data['kenteken'] . " - " . $data['type'] ?>

<div class="row">
    <h3><?= $data['title'] ?></h3>
    <div>
        <h2>naam van instructeur</h2>
        <h2>: <?= $data['naam'] ?></h2>
    </div>
    <div>
        <h2>E-mailadres</h2>
        <h2>: <?= $data['email'] ?></h2>
    </div>
    <div>
        <h2>Kenteken auto</h2>
        <h2>: <?= $data['kenteken'] ?> - <?= $data['type'] ?></h2>
    </div>
    
    <table>
        <thead>
            <th>Datum</th>
            <th>Mankement</th>
        </thead>
        <tbody>
            <?= $data['rows'] ?>
        </tbody>
    </table>
    <a href="<?= URLROOT; ?>/lessen/addMankement/<?= $autoData ?>">
        <input type="button" value="Onderwerp toevoegen">
    </a>
</div>
