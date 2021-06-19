<?php

require_once __DIR__ ."/requires.php";
require_once __DIR__ . "/functions.php";

$possible_names = [
  "Paolo", "Giuseppe", "Marco", "Leopoldo", "Maria", "Federica", "Ajay", "Mattia", "Isabella", "Donata"
];
$possible_surnames = [
  "Naruka", "Grimaldi", "Rossi", "Verdi", "Casalini", "Corradi", "Scarparo", "Bigozzi", "Napoli"
];
$possible_cards = [
  "Visa", "Mastercard", "Maestro", "PagoBancomat"
];
$possible_user_images = [
  "https://image.shutterstock.com/mosaic_250/2936380/640011838/stock-photo-handsome-unshaven-young-dark-skinned-male-laughing-out-loud-at-funny-meme-he-found-on-internet-640011838.jpg",
  "https://thumbs.dreamstime.com/b/confused-african-man-scratching-head-looking-camera-standing-over-gray-background-puzzled-husband-does-not-know-how-130983167.jpg",
  "http://static.demilked.com/wp-content/uploads/2019/04/5cb6d34f775c2-stock-models-share-weirdest-stories-photo-use-102-5cb5c725bc378__700.jpg",
  "https://cdn.psychologytoday.com/sites/default/files/styles/article-inline-half-caption/public/field_blog_entry_images/2018-09/shutterstock_648907024.jpg?itok=0hb44OrI",
  "https://previews.123rf.com/images/sevalv/sevalv1809/sevalv180900049/107302860-portrait-of-charming-friendly-looking-woman-cheering-from-friend-supporting-him-on-competition-raisi.jpg"
];

$guests = [];
for ($i = 0; $i < 10; $i++) {
  $guests[] = new Guest();
}

/* var_dump($users[0]); */
$premiums = [];
for ($i = 0; $i < 10; $i++) {
  $premiums[] = new Premium(getRandom($possible_names), getRandom($possible_surnames), getRandom($possible_names) . "." . getRandom($possible_surnames) . "@gmail.com", rand(90, 600));
}
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
  <title>Document</title>
  <style>


  </style>
</head>

<body>

  <header>
    <div class="header-container">
      <img src="https://i.pinimg.com/originals/68/40/f3/6840f3293a5d4ddaa70ae6f1e32d93ca.png" alt="">
      <img class="user" src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt="">
    </div>
  </header>

  <main>
    <!-- SECTIONS -->

    <!-- GUESTS -->
    <section>
      <h2>GUESTS</h2>
      <p class="section-desc">
      </p>
      <div class="group-container guests">
        <?php foreach ($guests as $guest) { ?>
          <div class="carta card_guest">
            ID: <?php echo $guest->getId() ?>
          </div>

        <?php } ?>
      </div>
    </section>


    <!-- USERS -->
    <section class="users">


      <h2>USERS</h2>
      <div class="errori">
        <h2>Attenzione</h2>

        <!-- CREAZIONE USERS -->
        <?php
        $users = [];
        for ($i = 0; $i < 10; $i++) {
          $users[] = new User(getRandom($possible_names), getRandom($possible_surnames), getRandom($possible_names) . "." . getRandom($possible_surnames) . "@gmail.com");
          $users[$i]->setCard(getRandom($possible_cards), getRandomDate(), genCreditCardNumb(), rand(111, 999));
          $users[$i]->setAge(rand(18, 50));
        }
        ?>
      </div>
      <p class="section-desc">
      </p>
      <div class="group-container guests">
        <?php foreach ($users as $user) { ?>
          <div class="carta card_user <?php if ($user->card['circuito'] === "") {
                                        echo "cartascaduta ";
                                      } ?>">
            <div class="immagine">
              <img src="<?php echo getRandom($possible_user_images) ?>" alt="">
            </div>
            <div class="infos">
              <p>Dati User</p>
              <ul>
                <li>Name: <?php echo $user->getName() ?></li>
                <li>Surname: <?php echo $user->getSurname() ?></li>
                <li>Email: <?php echo $user->getEmail() ?></li>
                <li>Age: <?php echo $user->getAge() ?></li>
              </ul>
              <p>Dati Carta(se disponibile)</p>
              <div class="user-card" style=<?php
                                            if ($user->card['circuito'] === '') echo "display:none"
                                            ?>>
                <ul>
                  <li>Circuito: <?php echo $user->card['circuito'] ?> <img class="card-logo" src="<?php echo getCardLogo($user->card['circuito']) ?>" alt=""></li>
                  <li>Data: <?php echo $user->card['data'] ?></li>
                  <li>Numero: <?php echo $user->card['codice'] ?></li>
                  <li>CVC: <?php echo $user->card['cvc'] ?></li>
                </ul>
              </div>
            </div>


          </div>

        <?php } ?>
      </div>
    </section>


    <!-- PREMIUMS -->
    <section>
      <h2>Premium</h2>
      <p class="section-desc">
      </p>
      <div class="group-container premium">
        <?php foreach ($premiums as $premium) { ?>
          <div class="carta card_user">
            <div class="immagine">
              <img src="<?php echo getRandom($possible_user_images) ?>" alt="">
            </div>
            <div class="infos">
              <p>Dati User</p>
              <ul>
                <li>Name: <?php echo $premium->getName() ?></li>
                <li>Surname: <?php echo $premium->getSurname() ?></li>
                <li>Remainging Points: <?php echo $premium->getPoints() ?></li>
                <li>Discount: <?php echo $premium->getDiscount() ?>%</li>
              </ul>
            </div>


          </div>

        <?php } ?>
      </div>
    </section>

    <h2>
      <a href="prodotti.php">> Passa ai prodotti</a>
    </h2>
  </main>



</body>

</html>