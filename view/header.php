<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="/template/style.css">
</head>
<body>
  <header>
  <?php if (isset($_SESSION['user'])): ?>
    <a href="/user/logout" class="log">Log out</a>
  <?php else: ?>
    <a href="/user/login" class="log">Log in</a>
    <a href="/user/register" class="log">Register</a>
  <?php endif; ?>
  </header>