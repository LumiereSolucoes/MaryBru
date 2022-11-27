<?php

require 'DBConnection.class.php';


class ClassBuilder{
    private $path       = "";
    private $schemaName = "";
    private $conn       = null;
    
    function __construct($pathDestFiles, $schemaName) {
        $this->setPath( getcwd()."/".$pathDestFiles );
        $this->setSchemaName( $schemaName );
        $this->setConn( new DBConnection() );
        
        if ( ! file_exists( $this->getPath() )) {
            mkdir( $this->getPath(), 0777, true);
        }
    }
    
    private function listTables() {
        $cmdListTables = "
            SELECT  DISTINCT(TABLE_NAME)
            FROM 	information_schema.columns
            WHERE 	TABLE_SCHEMA = '".$this->getSchemaName()."'
        ";
        $result = $this->getConn()->query($cmdListTables);
        return ( $result );
    }
    
    
    private function listTableColumns($tableName) {
        $cmdListTableColumns = "
	       SELECT
	           ORDINAL_POSITION,
	           COLUMN_NAME,
	           COLUMN_TYPE,
	           COLUMN_KEY,
	           COLUMN_DEFAULT,
	           IS_NULLABLE,
	           DATA_TYPE,
	           CHARACTER_MAXIMUM_LENGTH,
	           CHARACTER_OCTET_LENGTH,
	           NUMERIC_PRECISION,
	           NUMERIC_SCALE,
	           DATETIME_PRECISION,
	           CHARACTER_SET_NAME,
	           COLLATION_NAME
           FROM 	information_schema.columns
           WHERE 	TABLE_SCHEMA = '" . $this->schemaName . "'
           AND		TABLE_NAME   = '" . $tableName  . "'
           ORDER BY ORDINAL_POSITION
        ";
        $result = $this->getConn()->query($cmdListTableColumns);
        return ( $result );
    }
    
    public function make() {
        // echo "<hr>".$this->getSchemaName();
        $tables = $this->listTables($this->getSchemaName());
        $strOut = "";
        while ($linhaAtualTables = mysqli_fetch_assoc($tables)) {
            
            $tableName = $linhaAtualTables['TABLE_NAME'];
            //  echo "<hr> TABLE_NAME:" . $tableName;
            $strOut .= "<?php";
            $strOut .= "\n\t"."class ". ucfirst($tableName) ." {\n";
            $columnsData = $this->listTableColumns( $tableName );
            $columns = array();
            while ($linhaColumns = mysqli_fetch_assoc($columnsData)) {
                array_push($columns, $linhaColumns['COLUMN_NAME']);
            }
            
            for ($i=0; $i < count($columns); $i++){
                $strOut .= "\n\t\t"."private $". ($columns[$i]) .";";
            }
            
            $strOut .= "\n\n\t\t"."function __construct( $". (implode(", $", $columns)) ."){";
            for ($i=0; $i < count($columns); $i++){
                $strOut .= "\n\t\t\t ".'$this->set'.ucfirst($columns[$i])."( $".($columns[$i])." );";
            }
            $strOut .= "\n\t\t}\n";
            
            $strOut .= "\n\t\t"."public function toArray(){";
            $strOut .= "\n\t\t\t return array(";
            for ($i=0; $i < count($columns); $i++){
                $strOut .= "\n\t\t\t\t ".'$this->get'.ucfirst($columns[$i])."()";
                $strOut .= ((($i+1) == count($columns))?"":",");
            }
            $strOut .= "\n\t\t\t);";
            $strOut .= "\n\t\t}\n";
            
            
            $strOut .= "\n\t\t"."public function toString(){";
            $strOut .= "\n\t\t\t return(";
            $strOut .= '"\n\t\t\t\t". implode(", ",$this->toArray()));';
            $strOut .= "\n\t\t}\n";
            
            for ($i=0; $i < count($columns); $i++){
                $strOut .= "\n\t\t"."public function set".ucfirst($columns[$i]) ."( $".($columns[$i]) ." ){";
                $strOut .= "\n\t\t\t ".'$this->'.($columns[$i]) ." = $".($columns[$i]) .";" ;
                $strOut .= "\n\t\t}\n";
                
                $strOut .= "\n\t\t"."public function get".ucfirst($columns[$i]) ."(){";
                $strOut .= "\n\t\t\t ".' return( $this->'.($columns[$i]) ." );";
                $strOut .= "\n\t\t}\n";
                
            }
            $strOut .= "\n\t}\n";
            $strOut .= "\n\n?>";
            $filename =  $this->getPath()."/".ucfirst($tableName).".class.php";
            file_put_contents($filename, $strOut);
            
            $strOut = "";
            
        }
        $this->instrucao();
    }
    
    public function instrucao() {
        echo "\n <br>Não se esqueça de alterar os dados de conexão no arquivo 'DBConnection.class.php'";
        echo "\n <br>Para Manipular corretamenta os arquivos adicione seu usuário ao gupo do Apache:";
        echo "<pre>\n\t\t".'sudo adduser $USER www-data;</pre>';
        echo "\n Arquivos gerados em ". getcwd().$this->path;
    }
    
    public function getPath(){
        return $this->path;
    }

    public function setPath($path){
        $this->path = $path;
    }

    public function getSchemaName(){
        return $this->schemaName;
    }

    public function setSchemaName($schemaName){
        $this->schemaName = $schemaName;
    }

    public function getConn(){
        return $this->conn;
    }

    public function setConn($conn){
        $this->conn = $conn;
    }

}

// Testando ClassBuilder.class.php

$classBuilder = new ClassBuilder("classes", "");
$classBuilder->make();


?>