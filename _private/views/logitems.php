<?php $this->layout('layouts::login');?>

<?php $this->start('log-items')?>
    <div class="items">
        <form action="" method="POST">
            <input type="text" name="voornaam">
            <input type="text" name="achternaam">
        </form>
    </div>

<?php $this->stop()?>