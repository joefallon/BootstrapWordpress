<!--header.php-->
<?php
$tu = get_template_directory_uri();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= get_title(); ?></title>

    <link href="<?= $tu ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?= $tu ?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?= $tu ?>/js/html5shiv.min.js"></script>
    <script src="<?= $tu ?>/js/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

