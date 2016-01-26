<?php

require_once dir . '/models/list.php';

class List_controller {
  
  public function action_index() {
    $users_files = Listing::get_list();
    $users_files = array_diff($users_files, array('.', '..'));

    if (isset($_SESSION['user'])) {
    include_once dir . '/view/list.php';
    } else header('Location: /');
    
    return true;
  }
}