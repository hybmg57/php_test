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
        return $gearman_instance->start();
    }

    public static function call_funcs(Gearman &$gearman_obj, $functions, array $params){
        foreach($functions as $func_name)
            call_user_func_array(array($gearman_obj, $func_name), $params);
    }
}

$gearman_manager = new GearmanManager('Jae', 'kappa');
$gearman_sceduler = new GearmanScheduler('Awesome scheduler');
//Application::build($gearman_manager);
Application::build($gearman_sceduler);

Application::call_funcs($gearman_sceduler, ['testing1', 'testing2', 'testing3'], ['test1', $gearman_manager, 'test3']);
?>
