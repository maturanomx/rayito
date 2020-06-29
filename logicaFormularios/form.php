<?php


switch ($_GET['result']) {
  case 'error1':
    $message = 'nah nah nah. Palabra mágica incorrecta';
    break;

  case 'error2':
    $message = 'Necesitas decir la palabra mágica';
    break;

  default: 
    $message = '';
    break;
}

?>
<html>
<body>
  <?=$message ?>
  <form method="POST" action="proccess.php">
    <input name="keyword" placeholder="¿Cuál es la palabra mágica?" />
    <button>Enviar</button>
  </form>
</body>
</html>
