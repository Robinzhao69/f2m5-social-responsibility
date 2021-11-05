<?php $this->layout('layouts::word-transformer'); ?>


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


<?php $this->start('word-transformer')?>
    <h2> Ook een transformer worden?</h2>

    <br><br>

    <h3>Als vrijwilliger voor een van de volgende dingentjes</h3>

    <br><br>

    <div class="accordion">
        <button type="button" class="accordion-btn">community moderators</button>
        <div class="accordion-content">
            <p>
                Voor ons online community platform zijn we altijd op zoek naar moderatoren die samen de veiligheid van het platform bewaken en ervoor zorgen dat iedereen zich gezien en gehoord voelt.

                Vind je het leuk om jouw kennis over mentale gezondheid te delen met andere jongeren en ben je niet bang om iemand aan te spreken wanneer dit nodig is? Dan kan jij maar zo deel gaan uitmaken van ons moderatieteam!
            </p>
        </div>
    </div>
    <div class="accordion">
        <button type="button" class="accordion-btn">crowdfunding</button>
        <div class="accordion-content">
            <p>
                Voor de ontwikkeling van een Mental Health toolkit zoeken wij vrijwilligers die willen helpen met het opzetten en uitvoeren van een crowdfunding om deze toolkit werkelijkheid te maken.

                Ben jij goed in organiseren en mensen enthousiasmeren én wil je kennis over mentale gezondheid mainstream maken? Dan zoeken wij jou!
            </p>
        </div>
    </div>
    <div class="accordion">
        <button type="button" class="accordion-btn">vormgeving en illustratie</button>
        <div class="accordion-content">
            <p>
                Voor de ontwikkeling van een Mental Health toolkit zoeken wij mensen die diverse tools willen vormgeven en/of illustreren. 

                Heb jij (enige) ervaring met vormgeving en design en zou je de skills graag willen inzetten om bij te dragen aan een betere wereld? Dan zijn wij een match!
            </p>
        </div>
    </div>
    <div class="accordion">
        <button type="button" class="accordion-btn">social media</button>
        <div class="accordion-content">
            <p>
                Om  jongeren te empoweren om mentaal gezond te zijn en impact te maken, moeten mensen natuurlijk weten dat we er zijn! En dat doen we onder andere via social media.
                
                Lijkt het jou leuk om content te creëren en ons bereik te vergroten? Dan ben jij precies wie wij zoeken!
            </p>
        </div>
    </div>
    <div class="accordion">
        <button type="button" class="accordion-btn">videomontage</button>
        <div class="accordion-content">
            <p>
                We filmen jongeren door het hele land die hun ervaring met en tips over mentale gezondheid delen.

                Om hun verhalen zo goed mogelijk naar buiten te brengen, zoeken wij altijd wat handjes die helpen bij de montage. Heb jij wel 2-4 uurtjes in de week tijd hiervoor? Meld je dan aan!
            </p>
        </div>
    </div>


    <a href = "mailto:info@transformers.community?SUBJECT=Transformer worden">
        <button>Meld je nu aan!</button>
    </a>          
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