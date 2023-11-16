<!DOCTYPE html>
<html>
    <head>
        <title> Menù Ristorante </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="d-flex h-100 text-center text-white bg-dark">
    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">Gambero Rosso</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Contact</a>
            </nav>
        </div>
  </header>
  <main class="px-3">
    <h1>Menù</h1>
    <p class="lead">Dal "Gambero Rosso" potete trovare nu</p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
    </p>
    <?php
        $menu = ["Antipasto 1"=>"8€","Antipasto 2"=>"10€","Primo piatto 1"=>"12€","Primo piatto 2"=>"14€","Secondo 1"=>"15€","Secondo 2"=>"14€", "Contorno"=>"7€", "Menù Baby"=>"10€", "Dolce"=>"9€"];
        foreach($menu as $piatto => $prezzo)
        {
            echo "<b>Piatto:</b> ".$piatto." -------> <b>Prezzo:</b> ".$prezzo."<br>";
        }
    ?>
    </body>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Per maggiori Informazioni<a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
  </footer>
</div>
</body>
</html>