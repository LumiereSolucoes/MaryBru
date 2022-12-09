<?php

class Feedback {
    
    private $idFeedback;
    private $email;
    private $nome;
    private $telefone;
    private $mensagem;
    
    function __construct($idFeedback,$email, $nome, $telefone, $mensagem) {   
        $this->setIdFeedback ($idFeedback);
        $this->setEmail      ($email);
        $this->setNome       ($nome);
        $this->setTelefone   ($telefone);
        $this->setMensagem   ($mensagem);
    }
    
    public function insert() {
        include_once "DBConnection.class.php";
        $connection = new DBConnection();
        $sqlCommand = " INSERT INTO feedback (idFeedback, email, nome, telefone, mensagem) VALUES ('".
            $this->getIdFeedback()."','".
            $this->getEmail()."','".
            $this->getNome()."','".
            $this->getTelefone()."','".
            $this->getMensagem()."')";
            $connection->query($sqlCommand);
    }
    
    public function listAll() {
        require_once 'DBConnection.class.php';
        $connection = new DBConnection();
        $sqlCommand = "SELECT idFeedback ,email, nome, telefone, mensagem FROM hostdeprojetos_maryebru.feedback;";
        $rSetFeedback = $connection->query($sqlCommand);
        
        while ($linhaFeedback = mysqli_fetch_assoc($rSetFeedback)) {
            echo "<hr>".
                "Id: ".$linhaFeedback['idFeedback']." <br> ".
                "Email: ".$linhaFeedback['email']." <br> ".
                "Nome: ".$linhaFeedback['nome']." <br> ".
                "Telefone: ".$linhaFeedback['telefone']." <br> ".
                "Mensagem: ".$linhaFeedback['mensagem']. " <br> <a href='./delete.php?idFeedback=". $linhaFeedback['idFeedback'] . "'><button type='button' class='btn btn-danger'name='deletar' style='position: relative;'>Delete</button></a>";
        }
    }

    public function delete(){
            include_once './class/DBConnection.class.php';
            $connection = new DBConnection();
            $sqlCommand = "DELETE FROM feedback WHERE idFeedback ='".$this->getIdFeedback()."'";
            $rSetFeedback = $connection->query( $sqlCommand );  
        }

    public function update(){
        include_once "DBConnection.class.php";
        $connection = new DBConnection();
        $sqlCommand = "UPDATE dbhostdeprojetos_maryebru.tbfeedback
                        SET
                        email          = '$this->getEmail(),
                        nome           = '$this->getNome()',
                        telefone       = '$this->getTelefone()',
                        mensagem       = '$this->getMensagem()'
                      WHERE idFeedback = '$this->getIdFeedback()' 
                  ";    
                     $connection->query($sqlCommand);
     }
    
    public function save(){
        if ($this->getIdFeedback() == 0 || $this->getIdFeedback() == "") {
            $this->insert();
        }
        else{
         $this->update();
        }    
    }

    public function getIdFeedback(){
        return $this->idFeedback;
    }

    public function setIdFeedback($idFeedback){
        $this->idFeedback = $idFeedback;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
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

    public function getMensagem(){
        return $this->mensagem;
    }

    public function setMensagem($mensagem){
        $this->mensagem = $mensagem;
        return $this;
    }

}

?>