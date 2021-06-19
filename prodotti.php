<?php
require_once __DIR__ ."/requires.php";
require_once __DIR__ . "/functions.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style/style.css">
  <title>Prodotti</title>
</head>

<body>


  <?php
  /* ABBIGLIAMENTO */
  $abbigliamenti = [];
  $possible_cloth_names = ["Nike", "Armani", "DG", "HM"];
  for ($i = 0; $i < 10; $i++) {
    $abbigliamenti[] = new Abbigliamento(getRandom($possible_cloth_names), rand(10, 150), "categoria $i", "male");
  }
  $possible_clothing_images = [
    "https://img.kytary.com/eshop_it/velky_v2/na/637329305569630000/661f4fbd/64771944/ant-tshirt-ant-blu-l.jpg",
    "https://www.terranovastyle.com/pub/media/catalog/product/p/l/plain-balloon-trousers-16-sab0048696001s105-kw-pantalone-lungo-kw-nero_1_1.jpg",
    "https://images-na.ssl-images-amazon.com/images/I/61IBkRnZ6IL._AC_UX569_.jpg",
    "https://images-na.ssl-images-amazon.com/images/I/61SrYuYUBYL._AC_UY500_.jpg",
    "https://images.eprice.it/nobrand/0/hres/188/207977188/8718475517917_a_en_hd_1.jpg"
  ];

  $alimenti = [];
  $possible_food_names = ["Banana", "Uova", "Carne", "Mela"];
  for ($i = 0; $i < 10; $i++) {
    $alimenti[] = new Alimento(getRandom($possible_food_names), rand(1, 10), "haccp $i", getRandomDate());
  }

  $possible_food_images = [
    "https://upload.wikimedia.org/wikipedia/commons/8/8a/Banana-Single.jpg",
    "https://images.fidhouse.com/fidelitynews/wp-content/uploads/sites/6/2019/11/Come-pastorizzare-le-uova-7.jpg?w=580",
    "https://www.foodweb.it/wp-content/uploads/2020/04/carne-usa.jpg",
    "https://www.antoniopaolillo.com/wp-content/uploads/2020/03/mela-rossa-1-scaled.jpg"
  ]
  ?>
  <header>
    <div class="header-container">
      <img src="https://i.pinimg.com/originals/68/40/f3/6840f3293a5d4ddaa70ae6f1e32d93ca.png" alt="">
      <img class="user" src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt="">
    </div>
  </header>
  <main>
    <!-- ABBIGLIAMENTO -->
    <section>
      <h2>Abbigliamento </h2>
      <p class="section-desc">
      </p>
      <div class="group-container clothing">
        <?php foreach ($abbigliamenti as $abbigliamento) { ?>
          <div class="carta card_user">
            <div class="immagine prod">
              <img src="<?php echo getRandom($possible_clothing_images) ?>" alt="">
            </div>
            <div class="infos">
              <p>Dati User</p>
              <ul>
                <li>Name: <?php echo $abbigliamento->getName() ?></li>
                <li>Price: <?php echo $abbigliamento->getPrice() ?> $</li>
                <li>Categoria: <?php echo $abbigliamento->getCategoria() ?></li>
                <li>Genere: <?php echo $abbigliamento->getGenere() ?></li>
              </ul>
            </div>
          </div>
        <?php } ?>
      </div>
    </section>
    <!-- ALIMENTI -->
    <section>
      <h2>Alimenti </h2>
      <p class="section-desc">
      </p>
      <div class="group-container food">
        <?php foreach ($alimenti as $alimento) { ?>
          <div class="carta card_user">
            <div class="immagine prod">
              <img src="<?php echo getRandom($possible_food_images) ?>" alt="">
            </div>
            <div class="infos">
              <p>Dati User</p>
              <ul>
                <li>Name: <?php echo $alimento->getName() ?></li>
                <li>Price: <?php echo $alimento->getPrice() ?> $</li>
                <li>Haccp: <?php echo $alimento->getHaccp() ?></li>
                <li>Expiring: <?php echo $alimento->getData_di_scadenza() ?></li>
              </ul>
            </div>
          </div>
        <?php } ?>
      </div>
    </section>

  </main>
</body>

</html>