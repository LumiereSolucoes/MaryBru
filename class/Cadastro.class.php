<?php 

/*cadastro*/

class Usuario {
    private $idUsuario;
    private $email;
    private $senha;
    private $nome;
    private $telefone;

    function __construct($idUsuario, $email, $senha, $nome, $telefone) {
        $this->setIdUsuario          ($idUsuario);
        $this->setEmail          ($email);
        $this->setSenha          ($senha);
        $this->setNome           ($nome);
        $this->setTelefone       ($telefone);
    }

    public function insert() {
        include_once "DBConnection.class.php";
        $connection = new DBConnection();
        $sqlCommand = " INSERT INTO usuarios (idUsuario, email, senha, nome, telefone) VALUES ('".
            $this->getIdUsuario()."','".
            $this->getEmail()."','".
            $this->getSenha()."','".
            $this->getNome()."','".
            $this->getTelefone()."')";
            echo $sqlCommand;
            $connection->query($sqlCommand);
    }

     public function listAll() {
        require_once 'DBConnection.class.php';
        $connection = new DBConnection();
        $sqlCommand = "SELECT idUsuario, email, nome, telefone FROM hostdeprojetos_maryebru.usuarios;";
        $rSetUsuario = $connection->query($sqlCommand);
        
        while ($linhaUsuario = mysqli_fetch_assoc($rSetUsuario)) {
            echo "<hr>".
                "Id: ".$linhaUsuario['idUsuario']." <br> ".
                "Email: ".$linhaUsuario['email']." <br> ".
                "Nome: ".$linhaUsuario['nome']." <br> ".
                "Telefone: ".$linhaUsuario['telefone']." <br> <a href='./delete.php?idUsuario=". $linhaUsuario['idUsuario'] . "'><button type='button' class='btn btn-danger'name='deletar' style='position: relative;'>Delete</button></a>";
        }
    }

    public function delete(){
            include_once './class/DBConnection.class.php';
            $connection = new DBConnection();
            $sqlCommand = "DELETE FROM usuarios WHERE idUsuario ='".$this->getIdUsuario()."'";
            $rSetUsuario = $connection->query( $sqlCommand );  
        }

    public function update(){
        include_once "DBConnection.class.php";
        $connection = new DBConnection();
        $sqlCommand = "UPDATE db_maryebru.tbusuarios
                        SET
                        email           = '$this->getEmail(),
                        senha           = '$this->getSenha()',
                        idNivelUsuario  = '$this->getIdNivelUsuario()',
                        ativo           = '$this->getAtivo()',
                        nome            = '$this->getNome()',
                        telefone        = '$this->getTelefone()'
                      WHERE idUsuario   = '$this->getIdUsuario()' 
                  ";
                          
                     $connection->query($sqlCommand);
    }

    public function save(){
        if ($this->getIdUsuario() == 0 || $this->getIdUsuario() == "") {
            $this->insert();
        }
        else{
         $this->update();
        }
        
    }
    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
        return $this;
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

    public function getIdNivelUsuario(){
        return $this->idNivelUsuario;
    }

    public function setIdNivelUsuario($idNivelUsuario){
        $this->idNivelUsuario = $idNivelUsuario;
        return $this;
    }

    public function getAtivo(){
        return $this->ativo;
    }

    public function setAtivo($ativo){
        $this->ativo = $ativo;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }

}

