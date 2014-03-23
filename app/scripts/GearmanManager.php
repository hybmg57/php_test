<?php
/**
 * Created by PhpStorm.
 * User: Jae
 * Date: 3/20/14
 * Time: 11:51 PM
 */

namespace Jae;

interface GearmanInterface{
    function hello();
}

class GearmanManager extends Gearman implements GearmanInterface{
    private $username;
    private $password;

    public function __construct($name, $password){
        $this->username = $name;
        $this->password = $password;
    }

    public function hello(){
        echo "Hello, \n your username is: " . $this->username . " \n your password is: ". $this->password;
    }
} 