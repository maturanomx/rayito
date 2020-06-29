<?php

if ($_POST['keyword']) {

  if ($_POST['keyword'] == 'abrete sesamo') {
    echo 'Contenido secreto!!!';

  } else {
    header('Location: /form.php?result=error1', true, 301);
    exit(0);
  }

} else {
    header('Location: /form.php?result=error2', true, 301);
    exit(0);
}
