<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <title><?= $title ?></title>
</head>
<body>
    <?php require("view/frontend/0_header_and_footer/header.php");?>
    <?=$content?>
    <?php require("view/frontend/0_header_and_footer/footer.php");?>
    <script src="public/js/frontend/0_header_and_footer/logo.js"></script>
    <script src="public/js/frontend/0_header_and_footer/dropdown_menu.js"></script>
    <script src="public/js/template.js"></script>
</body>
</html>