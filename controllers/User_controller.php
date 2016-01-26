<?php

require_once dir . '/models/user.php';

class User_controller {
  
  public function action_login() {
    
    $login = '';
    $password = '';

    if (isset($_POST['log'])) {
      $login = $_POST['login'];
      $password = $_POST['password'];

      $errors = false;

      $user_login = User::check_user($login, $password);

      if ($user_login == false) {
        $errors[] = "Данные введены неверно";
      } else {
        User::authentication($user_login);

        header("Location: /");
      }
      

    }

    require_once dir . '/view/login.php';
    return true;
  }

  public function action_register() {

    if (isset($_POST['check'])) {
      $login = $_POST['login'];
      $password = $_POST['password'];

      $push = User::register($login, $password);
      if ($push) {
        echo "Вы успешно зарегестрировались";
        header('Location: /login');
      } else {
        echo "Регистрация не удалась";
      }
    }
    
    include_once dir . '/view/register.php';
    return true;
  }

  public function action_logout() {
    unset($_SESSION['user']);
    header('Location: /');

    return true;
  }
}