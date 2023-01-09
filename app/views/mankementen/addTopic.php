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


<div class="row">
    <h3><?= $data['title']; ?></h3>
    <h2><?= $data['autoData'] ?></h2>
    
    <form action="<?= URLROOT ?>/lessen/addMankement" method="post">
        <label for="mankement">Mankement</label><br>
        <input type="text" name="mankement" id="mankement"><br>
        <input type="submit" value="Voer in">
    </form>
</div>