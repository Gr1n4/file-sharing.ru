<?php

class Load_controller {
  
  public function action_download($par) {
    $file = (dir . "/data/" . $_SESSION['user'] . "/" . $par[0]);
    header ("Content-Type: application/octet-stream");
    header ("Accept-Ranges: bytes");
    header ("Content-Length: ".filesize($file));
    header ("Content-Disposition: attachment; filename=$par[0]");
    readfile($file);

    return true;
  }

  public function action_delete_file($par) {
    unlink(dir . "/data/" . $_SESSION['user'] . "/" . $par[0]);

    header('Location: /list');

    return true;
  }

  public function action_upload() {
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], dir . '/data/' . $_SESSION['user'] . '/' . $_FILES['userfile']['name'])) {
        header('Location: /list');
    } else {
        print $_FILES['userfile']['error'];
    }

    return true;
  }
}