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
}