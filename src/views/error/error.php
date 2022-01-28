<!DOCTYPE html>
<html lang="en">

<head>
    <?php
include_once "assets/templates/header.php";
    ?>
</head>

<body class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">

    <h1 class="display-1">ERROR 404</h1>
    <h2><?= $this->message ?></h2>
    <a class="p-2" href="<?= BASE_URL ?>employee/dashboard">
        <button class="btn btn-outline-primary btn-lg">Home</button>
    </a>

</body>

</html>