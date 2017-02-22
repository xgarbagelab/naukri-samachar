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
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        //session_start();
        $this ->connectionString = null;
        $dbPara = new DatabaseConfig();
        $this -> hostName = $dbPara -> serverName;
        $this -> userName = $dbPara -> userName;
        $this -> passCode = $dbPara -> passCode;
        $this -> databaseName = $dbPara -> dbName;     
    }
    
    function dbConnect() {
        try{
            $this -> connectionString = new PDO("mysql:host=$this->hostName; dbname=$this->databaseName", $this->userName, $this->passCode);
            $this->connectionString->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        return $this -> connectionString;
    }
}
