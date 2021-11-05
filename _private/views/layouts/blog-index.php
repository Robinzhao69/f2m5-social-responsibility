<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformers Community</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
	<?php if ( $this->section( 'css' ) ): ?>
		<?php echo $this->section( 'css' ) ?>
	<?php endif; ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</head>
<body>
    <header class="header">
        <?php echo $this->fetch( 'nav' ) ?>
    </header>
    
    <div class="login">
        <?php echo $this->section( 'logbutt' ) ?>
    </div>

    <div class="blog-con">
        <?php echo $this->section('create') ?>
        <div class="blogs">
            <?php echo $this->section('blogs') ?>
        </div>
    </div>

    <div class="footer">
        <?php echo $this->section( 'footer' ) ?>
    </div>

</body>
</html>