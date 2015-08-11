<?php
include '/application/models/Register_Model.php';
//include '/application/controllers/User_Controller.php';

/**
 * Class Register_Controller
 *
 * This class is responsible for user registration
 */
class Register_Controller extends Controller
{
    /**
     * @var Register_Model Model for this Class-Triad
     */
    private $model;

    /**
     *
     */
    function __construct()
    {
        parent::__construct();
        $this->model = new Register_Model();
    }

    /**
     * Insert new user to database
     */
    public function performUserRegistration()
    {
        $user = [
            'name' => null,
            'surname' => null,
            'gender' => null,
            'skype' => null,
            'login' => null,
            'pas' => null
        ];

        $user = array_merge($user, $_POST);
        $user['pas'] = hash('sha256', hash("sha256", $user['pas']));

        User_Controller::addUser($user['name'], $user['surname'], $user['gender'], $user['skype'], $user['login'], $user['pas']);
        //self::$logger->logUserCreation();
        //$genId = $this->model->addUser($user['name'], $user['surname'], $user['gender'], $user['skype'], $user['login'], $user['pas']);
        //Probably should check if the operation was performed successfully
        //$this->logger->logUserCreation($genId, $user['name'], $user['surname']);
        header("Location: /auth/");
        exit;
    }
} 