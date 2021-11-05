<?php $this->layout('layouts::website');?>


<!-- Dit is de navigatie -->
<?php $this->start('nav')?>
<img class="logo" src="/foto/logo_small.png" alt=""><input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
        <ul class="menu">
            <li> <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h2>Home</h2></a> </li>
            <li> <a href="<?php echo url( 'con' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h2>contact</h2></a> </li>
            <li> <a href="<?php echo url( 'over' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h2>Over-ons</h2></a> </li>
            <li> <a href="<?php echo url( 'trans' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h2>Word Transformer!</h2></a> </li>
        </ul>
<?php $this->stop()?>



<!-- Dit zijn de login buttons -->
<?php $this->start('logbutt')?>
    <button>aanmelden</button>
    <button>login</button>
<?php $this->stop()?>




<?php $this->start('section')?>
<!-- Door sections toe te voegen aan je layout kun je deze per pagina aanpassen -->
<div class="slogun" data-aos="fade-right" data-aos-duration="3000">
            <h1 >"life <section id="trans">sucks</section> sometimes,</h1><h4> "maar je staat er niet alleen voor"</h4>
            <p>De Transformers Community is er voor jongeren die zelfverzekerd willen zijn en tegenslagen omzetten in kracht. We doen dit samen: zo leren we meer en helpen we elkaar om te groeien.</p>
            <a class="lid" href="./html/contact.html">yes</a>
        </div>

        <div class="fotoslider">
            <div class="autofill">
                <img src="./logo/ehe.gif" alt="yes" class="fill">
            </div>
        </div>
<?php $this->stop()?>



<!-- dit is de informatie sectie van iris -->
<?php $this->start('info') ?>
<h3 class="titel">hoe het begon</h3>
        <h4 class="sub-titel">het verhaal achter het ontstaan van de Transformers Community</h4>
        <img src="/images/iris.png" alt="">
        <h4 class="oprichter">oprichter <br><br> Iris Workum</h4>
        <p class="about-iris">"We struggelen allemaal. Het probleem is dat we er niet over praten."
            Jarenlang worstelde ik met negatieve gedachten en het gevoel niet goed genoeg te zijn. 
            Ik sprak hier nooit met iemand over, uit angst dat anderen mij raar of zwak zouden vinden. 
            Ik zette een masker op en probeerde in mijn eentje mijn gevoelens op te lossen. Ik heb hier 
            een hoge prijs voor betaald: op mijn 23e belandde ik in een depressie. 
            
            Ik weet dat mijn ervaring niet uniek is. We worstelen allemaal met de vraag 'Ben ik goed 
            genoeg? Doe ik er toe?' Het probleem is dat we er niet over praten en niet weten wat kunnen 
            doen om onze mentale gezondheid te verbeteren. Dat terwijl onze mentale gezondheid steeds 
            meer onder druk komt te staan, de wachtlijsten van de GGZ alsmaar langer worden, en de 
            nadruk nog steeds ligt op genezen in plaats van voorkomen.
            
            Vanuit deze frustratie richtte ik de Transformers Community op: een plek waar het oke 
            is om niet oke te zijn en we samen leren hoe je die momenten omzet naar kracht.</p>
<?php $this->stop()?>



<!-- Dit is de footer -->
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









