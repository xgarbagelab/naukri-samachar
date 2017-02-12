<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connection
 *
 * @author Shivam Srivastava <xshivam@xgarbagelab.com>
 * @abstract This class will contains the connection credentials
 */
require_once('DatabaseConfig.php');

class Connection extends DatabaseConfig {
    //put your code here
    public $connectionString;
    
    protected $databaseName;
    protected $hostName;
    protected $userName;
    protected $passCode;
    
    function Connection() {
        $this ->connectionString = null;
        $dbPara = new DatabaseConfig();
        $this -> hostName = $dbPara -> serverName;
        $this -> userName = $dbPara -> userName;
        $this -> passCode = $dbPara -> passCode;
        $this -> databaseName = $dbPara -> dbName;     
    }
    
    function dbConnect() {
        $this -> connectionString = mysql_connect($this -> serverName,$this -> userName,$this -> passCode);
        mysql_select_db($this -> databaseName,$this -> connectionString);
        return $this -> connectionString;
        return mysqli_connect($this -> hostName, $this ->userName, $this->passCode, $this->databaseName);
    }
}
