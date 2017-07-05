<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">
   <!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css" /> -->
    <?= css('assets/css/min/style.css') ?>

</head>

<body>