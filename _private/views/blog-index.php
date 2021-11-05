<?php $this->layout('layouts::blog-index');?>

<?php $this->start('logbutt')?>
    <button>aanmelden</button>
    <button>login</button>
<?php $this->stop()?>

<?php $this->start('create') ?>
    <p>
        <a href="<?php echo url( 'blog' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h2>voeg toe</h2></a>
    </p>
<?php $this->stop() ?>

<?php $this->start('blogs') ?>
    <?php foreach($blogs as $blog): ?>
        <div class="blog">
            <?php echo $blog['Titel'] ?> <a href="">Edit</a>
        </div>
            
    <?php endforeach; ?>
<?php $this->stop() ?>


