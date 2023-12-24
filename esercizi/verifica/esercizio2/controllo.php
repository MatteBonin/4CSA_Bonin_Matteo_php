<!DOCTYPE html>
<html>

<head>
    <title> Log-in Succed</title>
    <link href="/esercizi/stileGenerale.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    if ($_GET['password'] == "passwordSegreta" && $_GET["username"] == "utente") {
    ?>
        <div class="title centroPagina" style="background-color: rgb(255, 255, 153);">
            <h1> Benvenuto @<?php echo $_GET["username"] ?>!</h1>
            <h1> Nome Utente e Password inseriti correttamente!</h1>
        </div>
    <?php
    } elseif ($_GET['contatore'] != 0) {
        $_GET["contatore"]--;
    ?>
        <h1 class="title">Password errata! Tentativi rimasti: <?= $_GET["contatore"] ?></h1>
        <form class="row g-3 form" action="./controllo.php" method="GET">
            <div class="col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div>
                <input type="hidden" name="contatore" value="3">
            </div>
            <div class="col-12">
                <button class="btn btn-warning" type="submit">Log in</button>
            </div>
        </form>
    <?php
    } else {
    ?>
        <h1 class="title">Password errata! Tentativi rimasti: <?= $_GET["contatore"] ?></h1>
    <?php
    }
    ?>
</body>

</html>