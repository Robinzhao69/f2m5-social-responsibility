<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformers Community</title>
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
	<?php if ( $this->section( 'css' ) ): ?>
		<?php echo $this->section( 'css' ) ?>
	<?php endif; ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
    <!-- test voor brach push -->
<body>
    <header class="header">
        <?php echo $this->fetch('nav'); ?>
    </header>
    <div class="login">
        <?php echo $this->section('logbutt'); ?>
    </div>

    <div class="transformer-worden">
        <?php echo $this->section('word-transformer'); ?>
    </div>

    <div class="footer">
        <?php echo $this->section('footer'); ?>
    </div>
</body>
<script>
    AOS.init();
</script>
<script src="../js/word-transformer.js"></script>
</html>