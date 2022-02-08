<?php
/**
 * Base class to manage a db
 */
class DB {
    private $db;

    public function __construct(){
        $this->db = new mysqli("localhost", "root", "", "cacplus", 3306);
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }        
    }

    public function query($query) {
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function select_all($tableName, $columns = array()){
        $strCol = "";
        foreach($columns as $colName) {
            $strCol .= " ". $colName . ",";
        }
        $strCol = substr($strCol, 0, -1);
        $query = "SELECT $strCol FROM $tableName";

        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function select_all_highlighted($tableName, $columns = array()){
        $strCol = "";
        foreach($columns as $colName) {
            $strCol .= " ". $colName . ",";
        }
        $strCol = substr($strCol, 0, -1);
        $query = "SELECT $strCol FROM $tableName WHERE highlighted = 1";

        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function select_one($tableName, $columns = array(), $id) {
        $strCol = "";
        foreach($columns as $colName) {
            $strCol .= " ". $colName . ",";
        }
        $strCol = substr($strCol, 0, -1);
        $query = "SELECT $strCol FROM $tableName WHERE id = $id";
    
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    //Bisogna adattare la logica per bene e sanitizzare inputs
    public function delete_one($tableName, $id) {
        $query = "DELETE FROM $tableName WHERE id = $id";
    
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function update_one($tableName, $columns = array(), $id) {
        $strCol = '';
        foreach($columns as $colName => $colValue) {
          $strCol .= " " . $colName . " = '$colValue' ,";
        }
        $strCol = substr($strCol, 0, -1);
    
        $query = "UPDATE $tableName SET $strCol WHERE id = $id";
    
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function insert_one ($tableName, $columns = array()) {
    
        $strCol = '';
        foreach($columns as $colName => $colValue) {
            $strCol .= ' ' . $colName . ',';
        }
        $strCol = substr($strCol, 0, -1);
    
        $strColValues = '';
        foreach($columns as $colName => $colValue) {
          $strColValues .= " '" . $colValue . "' ,";
        }
        $strColValues = substr($strColValues, 0, -1);
    
        $query = "INSERT INTO $tableName ($strCol) VALUES ($strColValues)";
        //var_dump($query); die;
        $stmt = $this->db->prepare($query);
        return $stmt->execute();
    }
}

/**
 * Manager class of a db, this have to be extended by a Table Manager
 */
class DBManager {

    protected $db;
    protected $columns;
    protected $tableName;
    
    public function __construct(){
        $this->db = new DB();
    }
    
    public function get($id) {
        $resultArr = $this->db->select_one($this->tableName, $this->columns, (int)$id);
        return (object) $resultArr[0];
    }
    
    public function getAll() {
        $results = $this->db->select_all($this->tableName, $this->columns);
        $objects = array();
        foreach($results as $result) {
        array_push($objects, (object)$result);
        }
        return $objects;
    }

    public function get_highlighted () {
        $results = $this->db->select_all_highlighted($this->tableName, $this->columns);
        $objects = array();
        foreach($results as $result) {
        array_push($objects, (object)$result);
        }
        return $objects;
    }

    public function create($obj) {
        $newId = $this->db->insert_one($this->tableName, (array) $obj);
        return $newId;
    }
    
    public function delete($id) {
        $rowsDeleted = $this->db->delete_one($this->tableName, (int)$id);
        return (int) $rowsDeleted;
    }
    
    public function update($obj, $id) {
        $rowsUpdated = $this->db->update_one($this->tableName, (array) $obj, (int)$id);
        return (int) $rowsUpdated;
    }
    }
?>