<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $meta['title'] ?? ''; ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
            SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous" defer></script>
    <?php foreach ($scripts ?? [] as $src): ?>
        <script src="<?= $src ?>" defer></script>
    <?php endforeach; ?>
    <?php foreach ($styles ?? [] as $href): ?>
        <link href="<?= $href; ?>" rel="stylesheet">
    <?php endforeach; ?>
</head>


<body>
    <?php require 'Layout/_header.php'; ?>
    <main>
        <?php require 'Layout/_flash.php'; ?>
        <?= $content ?>
    </main>
</body>

</html>