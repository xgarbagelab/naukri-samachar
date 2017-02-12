<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DatabaseConfig
 *
 * @author Shivam Srivastava <xshivam@xgarbagelab.com>
 */
class DatabaseConfig {
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;
    
    function DatabaseConfig() {
        $this -> serverName = "localhost";
        $this -> userName = "root";
        $this -> passCode = "";
        $this -> dbName = "nsm4";
    }
}
