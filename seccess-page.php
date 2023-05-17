<?php

  session_start();

  // se la variabile è presente in sessione la salvo e la mostro in pagina
  if(isset($_SESSION['mail_address'])){
    $email = $_SESSION['mail_address'];
  }else{
    // se non è presente rendirizzo alla index
    header('Location: ./index.php');
  }





  require_once __DIR__ . '/partials/head.php';
?>

<body>

<?php
  require_once __DIR__ . '/partials/header.php';
?>

<div class="container my-5">
  <h3>Iscrizione avvenuta con successo</h3>
  <p>L'idirizzo email <strong><?php echo $email ?></strong> è stato registrato</p>

</div>



<?php
  require_once __DIR__ . '/partials/footer.php';
?>


</body>
</html>