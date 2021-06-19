<?php

  require_once __DIR__ ."/classes/Guest.php";
  require_once __DIR__ ."/classes/User.php";
  require_once __DIR__ ."/classes/Premium.php";
  require_once __DIR__ ."/classes/Prodotto.php";
  require_once __DIR__ ."/classes/Alimento.php";
  require_once __DIR__ ."/classes/Abbigliamento.php";

  

  $guests = [];
  for ($i = 0; $i<10; $i++){
    $guests[] = new Guest(); 
  }

  $premiums = [];
  for ($i = 0; $i<10; $i++){
    $premiums[] = new Premium("premium $i","cognome $i","email $i", rand(90,800)); 
  }

  $users = [];
  for ($i = 0; $i<10; $i++){
    $users[] = new User("nome user $i","cognome $i","email $i"); 
    $users[$i]->setCard("master","2013-06","3234","1314");
  }

  $alimenti = [];
  for ($i = 0; $i<10; $i++){
    $alimenti[] = new Alimento("nome alimento $i","43","haccp $i","20-20-30"); 
  }

  $abbigliamenti = [];
  for ($i = 0; $i<10; $i++){
    $abbigliamenti[] = new Abbigliamento("nome abbigliamento $i",43,"categoria $i","male"); 
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      box-sizing: border-box;
      margin: 0 ;
      padding: 0;
      text-align: center;
      width: 100%;
      background-color: lightyellow;
    }
    .container{
      width: 80%;
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      margin: auto;
    }
    .card{
      background-color: lightskyblue;
      padding: 10px;
      margin: 10px;
      border: 1px solid black;
      border-radius: 5px;
    }

  </style>
</head>
<body>

<h1>Guest: <?php ?>   </h1>

  <div class="container">
    <?php foreach ($guests as $guest){ ?>
        <div class="card_guest card">
        <?php echo $guest->getId() ?>
    </div>

    <?php } ?>
  </div>

  <h1>Useres: <?php ?>   </h1>

  <div class="container">
    <?php foreach ($users as $user){ ?>
        <div class="card_guest card">
        <?php echo $user->getName() ?>
    </div>

    <?php } ?>
  </div>

  <h1>Alimento: </h1>

  <div class="container">
    <?php foreach ($alimenti as $alimento){ ?>
        <div class="card_guest card">
        <p> nome: <?php echo $alimento->getName() ?> </p>
        <p> prezzo: <?php echo $alimento->getPrice() ?> </p>
        <p> haccp: <?php echo $alimento->getHaccp() ?> </p>
    </div>
    <?php } ?>
  </div>

  <h1>Abbigliamento: </h1>

  <div class="container">
    <?php foreach ($abbigliamenti as $abbigliamento){ ?>
        <div class="card_guest card">
        <p> nome: <?php echo $abbigliamento->getName() ?> </p>
        <p> prezzo: <?php echo $abbigliamento->getPrice() ?> </p>
        <p> categoria: <?php echo $abbigliamento->getCategoria() ?> </p>
        <p> genere: <?php echo $abbigliamento->getGenere() ?> </p>
        </div>
    <?php } ?>
</div>

  
  
</body>
</html>