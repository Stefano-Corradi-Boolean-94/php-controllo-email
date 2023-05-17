<?php

/*
1. L'utente inserisce l'email per iscriversi alla mailing-list
2. Se l'email non è corretta ho in messaggio di errore
3- Se è corretta atterro in una pagina di ringraziamento con stampata l'email

*/

require_once __DIR__ . '/partials/functions.php';

$error_msg = '';
$old_email = '';

if(isset($_POST['email'])){
 if(checkEmail($_POST['email'])){
  //var_dump('OOK, reindirizzo');

  // metto in sessione l'indirizzo email
  session_start();
  $_SESSION['mail_address'] = $_POST['email'];

  // reindirizzo alla pagina success
  header('Location: ./seccess-page.php');


 }else{
  //var_dump('ERRORE');
  // salvo l'indirizzo email inviato per stamparlo nel value in caso di errore
  $old_email = $_POST['email'];
  $error_msg = 'Inserire un indirizzo email corretto';
 }
}


?>

<?php
  require_once __DIR__ . '/partials/head.php';
?>
<body>

<?php
  require_once __DIR__ . '/partials/header.php';
?>

<div class="container my-5">
  <h3>Inserisi il tuo indirizzo email</h3>
  <div class="row">
    <form action="index.php" method="POST">
      <div class="col-3">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" value="<?php echo $old_email ?>" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
            <p class="text-danger"><?php echo $error_msg  ?></p>
          </div>

      </div>
      <div class="col">
        <button type="submit" class="btn btn-success">Invia</button>
      </div>
    </form>
  </div>

</div>



<?php
  require_once __DIR__ . '/partials/footer.php';
?>


</body>
</html>