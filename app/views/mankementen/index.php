<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/public/css/style.css">
    <title>Document</title>
</head>

<body>

    <?php $autoData = $data['kenteken'] . " - " . $data['type'] ?>

    <div class="row">
        <h3>
            <?= $data['title'] ?>
        </h3>
        <div class="info">
            <h2>naam van instructeur</h2>
            <h2>:
                <?= $data['naam'] ?>
            </h2>
        </div>
        <div class="info">
            <h2>E-mailadres</h2>
            <h2>:
                <?= $data['email'] ?>
            </h2>
        </div>
        <div class="info">
            <h2>Kenteken auto</h2>
            <h2>:
                <?= $data['kenteken'] ?> -
                <?= $data['type'] ?>
            </h2>
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

</body>
</html>