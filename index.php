<?php
/**
 * Example Application
 *
 * @package Example-application
 */


//根目录
//define('ROOT',__DIR__);
define('ROOT','./');
//应用目录
define('APP',ROOT.'/app');
define('PUBLIC_DIR',ROOT.'/public');
define('PROTECTED_DIR',ROOT.'/protected');
defined('BASE_PATH') or define('BASE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
defined('CP_PATH') or define('CP_PATH', BASE_PATH. 'protected\include'.DIRECTORY_SEPARATOR);
defined('DEFAULT_APP') or define('DEFAULT_APP', 'default');
defined('DEFAULT_CONTROLLER') or define('DEFAULT_CONTROLLER', 'index');
defined('DEFAULT_ACTION') or define('DEFAULT_ACTION', 'index');


require ROOT.'/config.php';
require(ROOT . '/protected/cpConfig.class.php');//加载默认配置
defined('DEBUG') or define('DEBUG', cpConfig::get('DEBUG'));

require APP.'/app.php';
