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
    <a href="/logout" class="log">Log out</a>
    <a href="/list" class="log">List</a>
  <?php else: ?>
    <a href="/login" class="log">Log in</a>
    <a href="/register" class="log">Register</a>
  <?php endif; ?>
  <!-- <img src="/template/bg.jpg" class="log"> -->
  </header>