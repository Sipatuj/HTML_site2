<!DOCTYPE html>
<? include 'inc/setting.php'; ob_start(); ?>
<html lang="ru-RU">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="icon" type="image/png" href="img/power-button-2.png" />
    <title>
        <?php $title?>
    </title>
</head>

<body>
    <div id="conteiner">
        <header>
            <?php include 'inc/header.php' ?>
        </header>
        <!--end header-->
        <main>

            <?php include 'inc/download.inc.php'; ?>

        </main>
        <!--end main-->
        <footer>
            <?php include 'inc/footer.php'; ?>
        </footer>
        <!--footer-->
    </div>
    <!--end conteiner-->
</body>

</html>