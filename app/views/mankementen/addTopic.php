<div class="row">
    <h3><?= $data['title']; ?></h3>
    <h2><?= $data['autoData'] ?></h2>
    
    <form action="<?= URLROOT ?>/lessen/addMankement" method="post">
        <label for="mankement">Onderwerp</label><br>
        <input type="text" name="mankement" id="mankement"><br>
        <input type="submit" value="Voer in">
    </form>
</div>