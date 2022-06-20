<?php
if (isset($_COOKIE['noticia'])) {
  setcookie('noticia', '', time() - 3600);
  unset($_COOKIE['noticia']);
}

header('Location: index.php');