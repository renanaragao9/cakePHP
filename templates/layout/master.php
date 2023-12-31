<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <title><?php h($this->fetch('title', 'cursoDeCakePHP')) ?></title>
</head>
<body>

    <div class="container">
        <h2>Curso de cakePHP Renan</h2>
        <?= $this->fetch('content') ?> 
    </div>

</body>
</html>