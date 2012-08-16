<?php
require_once(APPPATH."models/Entities/DxUsers.php");

use \DxUsers;

/**
 * manipulates data and contains data access logics for Enity 'User'
 *
 * @final Usermodel
 * @category models 
 * @author Md. Ali Ahsan Rana
 * @link http://codesamplez.com
 */
class Usermodel extends My_DModel {
    
    function __construct() {
        parent::__construct();
        $this->init("DxUsers",$this->doctrine->em);
    }
}