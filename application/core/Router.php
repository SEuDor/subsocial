<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 08.05.2015
 * Time: 15:54
 */
include '/application/lib/FileHandler.php';
include '/application/essense/User.php';

/**
 * Class Router
 */
class Router
{
    /**
     * @var string Contains the name of controller that needs to be created
     */
    private $controller;
    /**
     * @var string Contains the info about target of current controller (ID of user to be loaded, etc.)
     */
    private $destination;
    /**
     * @var string Language of pages (not used here)
     */
    private $lang;

    public function __construct()
    {
        $url = $_SERVER['REQUEST_URI'];
        $urlParts = explode('/', $url);

        $this->controller = $urlParts[1];//user, group, ...
        $this->destination = isset($urlParts[2]) ? $urlParts[2] : null;//id primarily


        session_start();
        if($this->controller != 'register')
        {
            if (!isset($_SESSION['user']))
            {
                //session_destroy();
                $main = new Main_Controller('auth', null);
                exit;
            }
        }

        if($this->controller == 'exit')
        {
            session_destroy();
            header("Location: /");
            App::getInstance()->terminate();
        }
        /*if(in_array($urlParts[1], Config::$settings['AvailableLangs']))
        {
            $this->lang = $urlParts[1];
            unset($urlParts[1]);
        }
        else
        {
            $this->lang = 'en';
        }*/

        $main = new Main_Controller($this->controller, $this->destination);

/*        if(empty($_GET))
        {
            $this->alias = implode('/', $urlParts);
        }
        else
        {
            array_pop($urlParts);
            $this->alias = implode('/', $urlParts);
        }*/


    }
} 