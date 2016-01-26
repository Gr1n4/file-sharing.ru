<?php

class User {

  private static function sql_inner($login, $password, $sql) {
    $db = Db::connect();

    $result = $db->prepare($sql);
    $result->bindParam(':login', $login, PDO::PARAM_INT);
    $result->bindParam(':password', $password, PDO::PARAM_INT);
    $result->execute();

    return $result;
  }

  private static function create_dir($login) {
    if (!file_exists(dir . '/data')) {
        mkdir(dir . '/data', 0777);
      }
    if (!file_exists(dir . '/data/' . $login)) {
      $dir = mkdir(dir . '/data/' . $login, 0777);
    }
  }

  public static function check_user($login, $password) {
    
    $sql = 'SELECT * FROM main WHERE login = :login AND password = :password';

    $result = User::sql_inner($login, $password, $sql);

    $user = $result->fetch();
    if ($user) {
      return $user['login'];
    }
    return false;
  }

  public static function authentication($user_login) {
    $_SESSION['user'] = $user_login;

    User::create_dir($user_login);
  }

  public static function register($login, $password) {

    $sql = 'SELECT * FROM main WHERE login = :login AND password = :password';

    $result = User::sql_inner($login, $password, $sql);

    $user = $result->fetch();
    if ($user) {
      echo "Данный Login уже используется";
      return false;
    } else {
      $sql = 'INSERT INTO main (login, password)
              VALUES (:login, :password)';
      $result = User::sql_inner($login, $password, $sql);

      User::create_dir($login);

      return $result;
    }
    


  }
}