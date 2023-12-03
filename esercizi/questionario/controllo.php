<!DOCTYPE html>
<html>

<head>
    <title> Feedback </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    $tentativi = 3;
    if ($_GET["password"] == "info2023") {
        echo "<body style='background-color:" . $_GET["colore"] . ";'>";
    ?>
        <div class="bg-body-tertiary rounded mt-3 successAlert">
            <h1>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Password inserita corretamente!</font>
                </font>
            </h1>
            <p class="lead">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">I dati inseriti sono stati memorizzati corretamente.</font>
                </font>
            </p>
        </div>
        <h1 class="title"> Benvenuto @<?php echo $_GET["Username"] ?>!</h1>
        <div class="container">
            <table class="table">
                <tbody>
                    <tr>
                        <td><b>Nome: </b></td>
                        <td><?php echo $_GET["nome"] ?></td>
                    </tr>
                    <tr>
                        <td><b>Cognome: </b></td>
                        <td><?php echo $_GET["cognome"] ?></td>
                    </tr>
                    <tr>
                        <td><b>Età (anni): </b></td>
                        <td><?php echo $_GET["età"] ?></td>
                    </tr>
                    <tr>
                        <td><b>Sesso: </b></td>
                        <td><?php echo $_GET["sesso"] ?></td>
                    </tr>
                    <tr>
                        <td><b>Sport preferito: </b></td>
                        <td><?php echo $_GET["sport"] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php
    } else {
        $tentativi--;
    ?>
        <h1 class="title">Password errata! Tentativi rimasti: 2</h1>
        <form class="row g-3 signIn" action="./controllo.php" method="GET">
            <div class="col-md-4">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="col-md-4">
                <label for="cognome" class="form-label">Cognome</label>
                <input type="text" class="form-control" id="cognome" name="cognome" required>
            </div>
            <div class="col-md-4">
                <label for="Username" class="form-label">Username</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="Username">@</span>
                    <input type="text" class="form-control" id="Username" name="Username" placeholder="Inserisci un username" required>
                </div>
            </div>
            <div class="col-md-3">
                <label for="sport" class="form-label">Sport preferito</label>
                <input type="text" class="form-control" id="sport" name="sport" required>
            </div>
            <div class="col-md-3">
                <label for="sesso" class="form-label">Sesso</label>
                <select class="form-select" id="sesso" name="sesso" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Maschio</option>
                    <option>Femmina</option>
                    <option>Altro</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="età" class="form-label">Età</label>
                <input type="number" class="form-control" id="età" name="età" required>
            </div>
            <div class="col-md-3">
                <label for="colore" class="form-label">Colore sfondo</label>
                <input type="color" class="form-control form-control-color" id="colore" name="colore" required>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="col-md-6" style="margin-top: 55px;">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Accetto i Termini e le Condizoni per il trattamento dei dati Personali.
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-warning" type="submit">Invia dati</button>
            </div>
        </form>
    <?php
    }
    ?>
</body>

</html>

<style>
    .errorAlert {
        background-color: #f8d7da;
        border-radius: 20px;
        border: solid #f1aeb5;
        width: 60%;
        margin: auto;
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
        padding: 1rem;
    }

    .successAlert {
        background-color: #d1e7dd;
        border-radius: 20px;
        border: solid #a3cfbb;
        width: 60%;
        margin: auto;
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
        padding: 1rem;
        text-align: center;
    }

    .container {
        width: 50%;
        background-color: rgb(248, 249, 250);
        margin-top: 50px;
        padding: 1.5rem;
        border: solid;
        border-width: 1px;
        border-radius: 15px;
        border-color: rgb(222, 226, 230);
    }

    .title {
        width: 65%;
        margin: auto;
        margin-top: 1rem;
        text-align: Center;
        padding: 2rem;
        border: solid 2px;
    }

    .signIn {
        width: 60%;
        padding: 2rem;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: 5px solid #ffc107;
        border-radius: 20px;
        background-color: rgb(255, 255, 153);
    }
</style>