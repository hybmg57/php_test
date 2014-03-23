<?php
/**
 * Created by PhpStorm.
 * User: Jae
 * Date: 3/21/14
 * Time: 12:04 AM
 */

namespace Jae;

use Jae\GearmanManager;
use Jae\Gearman;

spl_autoload_register(function ($class) {
    include 'scripts/' . str_replace("Jae\\", "", $class) . '.php';
});

interface ApplicationInterface{
    static function build(Gearman $gearman_instance);
}

class Application implements ApplicationInterface{

    public function __construct(){
    }

    public static function build(Gearman $gearman_instance){
        echo $gearman_instance->start();
    }
}

$gearman_manager = new GearmanManager('Jae', 'kappa');
$gearman_sceduler = new GearmanScheduler('Awesome scheduler');
//Application::build($gearman_manager);
Application::build($gearman_sceduler);
?>
