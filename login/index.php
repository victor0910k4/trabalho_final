<?php
  session_start();
    if(!isset($_SESSION['id'])){
      header('Location: login.php');
      
      echo $_SESSION['nome'];
    }
?>
<style>
  .mensagem {
    text-align: center;
  }
</style>

<a href="verify/logout.php">sair</a>
<h1 class="mensagem">bem vindo <?php echo $_SESSION['nome']; ?></h1>