<!DOCTYPE html>
<html>
    <head>
        <title>Tabella A x B </title>
        <link rel="stylesheet" href="/esercizi/stileGenerale.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <h1 class="title" style="margin-top: 90px;">Tabella di <?= $_GET["righe"]?> righe e <?= $_GET["colonne"]?> colonne. Contenuto celle: <?= $_GET["testo"]?></h1>
        <table class="miaTable">
        <?php
            for($i = 0; $i < $_GET["righe"]; $i++)
            {
                echo "<tr>";
                for($k = 0; $k < $_GET["colonne"]; $k++)
                {
                    echo "<td>";
                    echo $_GET["testo"];
                    echo "</td>";
                }
                echo "</tr>";
            }
        ?>
        </table>
    </body>
</html>