<?php

class connectDb {

  private $host = "localhost";
  private $root = "root";
  private $pass = "";
  private $nameDb = "social";
  private $conn;

//connettersi  al DB  
public function __construct()
  {
    $this->conn = new mysqli ($this->host, $this->root, $this->pass,$this->nameDb);

     if ($this->conn->connect_error) {
          die("connection Error". $this->conn->connect_error);
     } 
  }
 //inserire i dati
  public function CreateData ($table,$columns,$values) {
    $sql = "INSERT INTO ".$table." ".$columns." VALUES ".$values;
    $this->conn->query($sql);
    if ($sql==true){
      return $sql;
    }
    else {
      return false;
    }
  }

  public function SaveData($sql){
    
    $this->conn->query($sql);
    if ($sql==true)
     return $sql;

  }

  public function makeQueryarray($query) {
    $sql = $this->conn->query($query);
    $query = $sql->fetch_array();
       return $query;
  }
  
  public function makeQueryrow($query) {
    $sql = $this->conn->query($query);
    $query = $sql->fetch_row();
       return $query;
  }

  public function makeQueryall($query) {
    $sql = $this->conn->query($query);
    $query = $sql->fetch_all();
    return $query;
  } 

  public function makeQueryassoc($query) {
    $sql = $this->conn->query($query);
    $query = $sql->fetch_assoc();
    return $query;
  } 

  //leggere i dati
  public function read ($table,$where) {
     $sql = " SELECT * FROM ".$table." WHERE ".$where;
     $sql  = $this->conn->query($sql);
      return $sql;
  }
  
//modifica dati
  public function updatedate($table,$update_value,$where) {
    $sql = "UPDATE ".$table." SET ".$update_value."WHERE".$where;
    $sql = $this->conn->query($sql);
    if ($sql==true){
      return $sql;
    } else {
      return false;
    }
  }
  
//cancellare dati
   public function DeleteData ($table,$filter) 
   {
     $sql = "DELETE FROM ".$table." ".$filter;
     $sql = $this->conn->query($sql);
     if($sql == true)
     {
        return true;
     }else {
        return false;
     }
   }

}

