<?php
/**
 *
 */
define('SMARTY_DIR', 'f:/Web/Smarty/Smarty-3.1.17/libs/');
require_once(SMARTY_DIR. 'Smarty.class.php');
include '/application/lib/Logger.php';
include '/application/lib/LoggerLevel0.php';
include '/application/lib/LoggerLevel1.php';
include '/application/lib/LoggerLevel2.php';
include '/application/lib/LoggerLevel3.php';

/**
 * Class Controller
 *
 * Base for all controllers. Contains common fields and methods(not yet)
 */
class Controller
{
    /**
     * @var Smarty Contains the instance of Smarty object
     */
    protected $smarty;

    /**
     * @var string Path to the views
     */
    protected $smartyDir;

    /**
     * @var Logger Contains the instance of Logger. The type of logger is specified in Config
     */
    protected static $logger;

    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smartyDir = $_SERVER['DOCUMENT_ROOT'] . '/design/view/';
        $this->smarty->template_dir = $this->smartyDir . 'templates';
        $this->smarty->compile_dir = $this->smartyDir . 'templates_c';
        $this->smarty->config_dir = $this->smartyDir . 'configs';
        $this->smarty->cache_dir = $this->smartyDir . 'cache';

        $loggerClass = 'LoggerLevel'. Config::$settings['LogLevel'];
        self::$logger = new $loggerClass();
    }
} 