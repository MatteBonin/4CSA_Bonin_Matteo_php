<!DOCTYPE html>
<html>
    <head> 
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <form class="signIn" method="get">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"><h2>Password</h2></label>
            <input type="password" class="form-control" id="Password" placeholder="Password" name="Password">
        </div>
        <button type="submit" class="btn btn-warning">Invia Password</button>
    </form>
    <?php 
        if($_GET["Password"]=="info2023")
        {
    ?>
        <div class="d-flex justify-content-center">
                <div class="spinner-border text-warning" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    <?php
        }
    ?>
    </body>
</html>

<style>
    body{
        background-color: rgb(248, 249, 250);
    }
    .signIn{
        width: 400px;
        padding: 2rem;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: 5px solid #ffc107;
        border-radius: 20px;
    }
</style>