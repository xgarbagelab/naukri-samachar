<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * @author Shivam Srivastava <xshivam@xgarbagelab.com>
 */


session_start();
session_unset();
session_destroy();

header("location:../index.php");

