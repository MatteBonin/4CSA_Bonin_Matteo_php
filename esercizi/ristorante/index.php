<!DOCTYPE html>
<html>
    <head>
        <title> Menù Ristorante </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body data-new-gr-c-s-check-loaded="14.1138.0" data-gr-ext-installed="">
    <main>
      <div class="container py-4">
        <header class="border-bottom">
          <h1 style="color: red; text-align:center; font-family: 'Georgia', sans-serif; font-size: 45px; margin: 40px; border: 2px solid red" > <b><i>GUSTO DIVINO</i></b></h1>
        </header>

        <div class="p-5 mb-4 bg-body-tertiary border rounded-3" style="background-color: rgb(248 249 250); margin-top: 20px">
          <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Il Regno della Ristorazione</h1>
            <p class="col-md-8 fs-4">Gusto Divino è un accogliente ristorante che celebra la cucina italiana con un tocco di creatività contemporanea. Il nostro ambiente è elegante e rilassante, perfetto per cene romantiche, riunioni familiari o semplicemente per chi ama gustare piatti deliziosi in un'atmosfera accogliente.</p>
            <button class="btn btn-danger btn-lg" type="button">Scopri di più</button>
          </div>
      </div>

      <div class="row align-items-md-stretch">
        <div class="col-md-6">
          <div class="h-100 p-5 text-bg-dark rounded-3" style="background-color: #212529;">
            <h2 style="color: white; margin-bottom: 20px;">Menù</h2>
            <div style="color: white; margin-bottom: 40px;">
            <?php
              $menu = ["Carpaccio di Manzo all'Arancia"=>"€12,50","Bruschette Mediterranee"=>"€9,00","Risotto con Zafferano, Gamberi e Zucchine"=>"€16,50","Pappardelle al Ragu di Cinghiale"=>"€14,00","Filetto di Branzino al Limone e Rosmarino"=>"€18,00","Osso Buco con Risotto alla Milanese"=>"€20,50", "Insalata Mista di Stagione"=>"€7,50", "Menù Bimbi"=>"€8,00", "Tiramisù al Cioccolato Fondente"=>"€8,50"];
              foreach($menu as $piatto => $prezzo)
              {
                echo "<b>Piatto:</b> ".$piatto." -------> <b>Prezzo:</b> ".$prezzo."<br>";
              }
            ?>
            </div>
            <button class="btn btn-danger" type="button">Prenota ora!</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-5 bg-body-tertiary border rounded-3" style="background-color: rgb(248 249 250);">
            <h2>Info</h2>
            <p>Gusto Divino è il luogo ideale per chi desidera assaporare autentiche delizie italiane preparate con ingredienti freschi e di alta qualità. Il nostro chef crea piatti che soddisfano i palati più esigenti, offrendo un'esperienza gastronomica indimenticabile.</p>
            <table>
              <ul>
                <li>Dove: Cittadella</li>
                <li>E-mail: gusto.divino@github.com</li>
                <li>Telefono: +39 3847592948</li>
              </ul>
            </table>
            <button class="btn btn-outline-danger" type="button">Chiama per maggiori informazioni</button>
          </div>
        </div>
      </div>

      <footer class="pt-3 mt-4 text-body-secondary border-top">
        © 2023
      </footer>
    </div>
  </main>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    

</body>
</html>