<?php $this->layout('layouts::over-ons'); ?>


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



<?php $this->start('over-ons')?>
        <h3>
            Weet jij wat je moet doen om mentaal gezond te zijn?
            Nee? Dan ben jij niet de enige.
        </h3>

        <p>
            Terwijl de meesten van ons wel weten wat je moet doen om fysiek gezond te zijn, leert niemand ons wat ervoor nodig om mentaal gezond te zijn. Op school niet, thuis niet, op het werk niet. Terwijl je mentale gezondheid essentieel is!<br>
            <br>
            Tegelijkertijd vormen jongeren de meest kwetsbare doelgroep voor de ontwikkeling van mentale problemen. Maar liefst 80 (!) procent van de mentale aandoeningen zoals depressie of angst start tussen de 15 en 25 jaar.<br>
            <br>    
            Bij de Transformers Community creëren wij samen met jongeren meer kennis, bewustzijn en openheid rondom mentale gezondheid. Door te focussen op herkenning, erkenning en verbinding willen wij mentale problemen voorkomen in plaats van genezen. <br>
            <br>
             We werken er naar toe om uit te groeien tot een sociale beweging van jongeren die elkaar helpt om mentaal weerbaar en veerkrachtig te zijn.
        </p>
<?php $this->stop()?>


<!-- Dit is de info slider -->
<?php $this->start('slider')?>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="profiel-div">
                    <img src="../foto's/Andrea.png" alt="">
                    <h4>Andrea</h4>
                    <p>Ambassadeur en initiatiefnemer<br> van 'Andrea Asks'</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profiel-div">
                    <img src="../foto's/iris.png" alt="">
                    <h4>Iris</h4> 
                    <p>Oprichter</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profiel-div">
                    <img src="../foto's/elwin.png" alt="">
                    <h4>Elwin</h4>
                    <p>Ambassadeur</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profiel-div">
                    <img src="../foto's/elwin.png" alt="">
                    <h4>Mariam Badou</h4>
                    <p>bestuurslid</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profiel-div">
                    <img src="../foto's/elwin.png" alt="">
                    <h4>Amzah Moelah</h4>
                    <p>bestuurslid</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profiel-div">
                    <img src="/images/elwin.png" alt="">
                    <h4>Annebregt Dijkman</h4>
                    <p>bestuurslid</p>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
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