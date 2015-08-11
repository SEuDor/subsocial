<?php
include '/application/controllers/Main_Controller.php';
include '/application/core/Router.php';
include '/application/core/Config.php';

/**
 * Class App
 *
 * Main Class that starts everything via Deploy() method and terminates Application via terminate() method
 *
 * Used Patterns: Singleton, Poison Pill
 */
class App
{
    /**
     * @var App instance of this class
     */
    private static $instance;

    /**
     *
     */
    protected function __construct()
    {
    }

    /**
     * Gives the instance of current object
     *
     * @return static App Instance of tis object
     */
    public static function getInstance()
    {
        if ( empty(self::$instance) ) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    /**
     * Starts execution by calling Router
     */
    public function Deploy()
    {
        $router = new Router();
    }

    /**
     * Terminates the Application execution
     */
    public function terminate()//Poison Pill
    {
        session_destroy();
        exit;
    }
} 