<?php $this->layout('layouts::blog');?>

<?php $this->start('logbutt')?>
    <button>aanmelden</button>
    <button>login</button>
<?php $this->stop()?>


<?php $this->start('title')?>
<h1>Nieuw topic</h1>

<form action="<?php echo url('blog.save')?>" method="POST">
    
    <div class="form-group">
        <label for="Titel">Titel</label>
        <br>
        <input type="text" name="Titel" value="<?php echo input('Titel')?>" class="form-control" id="titel"> 
        <?php if ( isset( $error['Titel'] ) ): ?>
            <br><span class="error"><?php echo $error['Titel'] ?></span>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="Subtitel">Subtitel</label>
        <br>
        <input type="text" name="Subtitel" value="<?php echo input('Subtitel')?>" class="form-control" id="subtitel"> 
        <?php if ( isset( $error['Subtitel'] ) ): ?>
            <br><span class="error"><?php echo $error['Subtitel'] ?></span>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="Tekst">Tekst</label>
        <br>
        <textarea name="Tekst" class="form-control" id="tekst"> <?php echo input('Tekst') ?> </textarea> 
        <?php if ( isset( $error['Tekst'] ) ): ?>
            <br><span class="error"><?php echo $error['Tekst'] ?></span>
        <?php endif; ?>
    </div>

    <button type="submit">Opslaan</button>
</form>
 
<hr>

<p>
    <a href="<?php echo url( 'blog-index' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h2>terug naar overzicht</h2></a>
</p>
<?php $this->stop()?>


<?php $this->start('footer') ?>
        <div class="slogun-footer">
            <h1>Transformer</h1><h1>Community</h1><br>
            <h3>Wij empoweren jongeren</h3><h3>om mentaal gezond te zijn</h3>
        </div>
        <div class="social">
            <h2>Volg ons op
            <a href="https://www.facebook.com/transformers.community" target="_new"><img src="/images/facebook.png" alt="" class=""></a>
            <a href="https://www.instagram.com/transformer.community/" target="_new"><img src="/images/instagram.png" alt="" class=""></a>
            <a href="https://www.linkedin.com/company/transformerscommunity" target="_new"><img src="/images/linkedin.png" alt="" class=""></a>
            <a href="https://www.youtube.com/channel/UCvN0_IYGVy6s1jFj2enGIsw" target="_new"><img src="/images/youtube.png" alt="" class=""></a>
            <h5>(klik de icon!)</h5>
        </div>
        <div class="footer-navigatie">
            <ul class="footer-menu">
                <li><a href="index.html"><h3 class="current">Home</h3></a></li>
                <li><a href="html/over-ons.html"><h3>Over ons</h3></a></li>
                <li><a href="html/word-transformer.html"><h3>Word Transformer!</h3></a></li>
                <li><a href="html/contact.html"><h3>Contact</h3></a></li>
            </ul> 
        </div>
<?php $this->stop() ?>



