<?php

class UserManager extends DBManager {

  public function __construct() {
    parent::__construct();
    $this->tableName = 'user';
    $this->columns = ['id', 'email', 'password', 'is_admin'];
  }

  // Public Methods
  public function login($email, $password) {
    $result = $this->db->query("
      SELECT *
      FROM user
      WHERE email = '$email'
      AND password = MD5('$password');
    ");

    if (count($result) > 0 ) {
      $user = (object) $result[0];

      $this->_setUser($user);
      return true;
    }

    return false;
  }

  // Private Methods
  private function _setUser($user) {    
    $userToStore = (object) [
      'id' => $user->id,
      'email' => $user->email,
      'is_admin' => $user->is_admin == 0
    ];
    $_SESSION['user'] = $userToStore;
  }
}
?>
