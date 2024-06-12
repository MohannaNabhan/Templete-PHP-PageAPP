
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars(@$meta_title == "" ? APP_NAME : $meta_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars(@$meta_desc == "" ? APP_DESC : $meta_desc) ?>">
    <link rel="stylesheet" href="./public/css/main.css">
</head>
<body>