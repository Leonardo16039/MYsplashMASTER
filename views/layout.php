<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?? '';?> | Unsplash</title>
    <meta name="description" content="My Unsplash challenge from devchallenges">
    <meta name="author" content="gcdev">
    <meta rel="icon" type="image/png" sizes="32x32" href="https://unsplash.com/favicon-32x32.png">
    <meta rel="icon" type="image/png" sizes="16x16" href="https://unsplash.com/favicon-16x16.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Noto+Sans:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>

    <?php echo $content; ?>
    <?php echo $script ?? ''; ?>

</body>
</html>