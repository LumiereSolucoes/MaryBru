<?php

include_once "DBConnection.class.php";
$DBConnection = new DBConnection();

class Users {
   private $email;
   private $senha;

   public function __construct($email = null, $senha = null) {
      $this->setEmail($email);
      $this->setSenha($senha);
   }

   public function selectUsers() {
      $sqlCommand = "SELECT * FROM usuarios;";
      return $sqlCommand;
  }
  
  public function __setLogin($email = null, $senha = null) {
   $this->setEmail($email);
   $this->setSenha($senha);
   
}

  public function checkUsersLogin() {
   $email = $this->getEmail();
   $senha = $this->getSenha();

   $sqlCommand = "SELECT *FROM usuarios WHERE email = '$email' && senha = '$senha';";
   return $sqlCommand;
}

public function updateUsers() {
  
   $email = $this->getEmail();
   $senha = $this->getSenha();

   $sqlCommand = "UPDATE usuarios SET email = '$email', senha = '$senha';";
   return $sqlCommand;
}

   public function getEmail(){
      return $this->email;
  }

  public function setEmail($email){
      $this->email = $email;
      return $this;
  }

  public function getSenha(){
      return $this->senha;
  }

  public function setSenha($senha){
      $this->senha = $senha;
      return $this;
  }

}

?>