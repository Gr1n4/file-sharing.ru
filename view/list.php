<?php 

include_once dir . '/view/header.php';

?>

<form enctype="multipart/form-data" action="/upload" method="post">
Send this file: <input name="userfile" type="file">
                <input type="submit" value="Send File">
  </form>

<ul>
  <?php foreach ($users_files as $users_file):?>
    <li>
      <p><?php echo $users_file ?></p>
      <a href=<?php echo "/download/" . $users_file; ?>>Скачать</a>
      <a href=<?php echo "/delete/" . $users_file; ?>>Удалить</a>
    </li>
  <?php endforeach; ?>
</ul>