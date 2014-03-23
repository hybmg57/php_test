<?php
/**
 * Created by PhpStorm.
 * User: Jae
 * Date: 3/24/14
 * Time: 3:02 AM
 */

namespace Jae;


class GearmanScheduler extends Gearman{
    private $scheduler;

    public function __construct($name){
        $this->scheduler = $name;
    }

    public function schedule(){
        return $this->scheduler;
    }

    public function start(){
        return $this->schedule();
    }

    public function testing1($param1, $param2){
        echo $param1;
        echo $param2->hello();
    }

    public function testing2($param){
        echo $param;
    }

    public function testing3($param){
        echo $param;
    }
}