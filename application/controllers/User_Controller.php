<?php
include '/application/models/User_Model.php';

/**
 * Class User_Controller
 *
 * This class provides means for User processing
 */
class User_Controller extends Controller
{
    //private $user;
    /**
     * @var User_Model Model for this Class-Triad
     */
    private $model;

    /**
     *
     */
    function __construct()
    {
        $this->model = new User_Model();
    }

    /**
     * @param $name
     * @param $surname
     * @param $gender
     * @param $skype
     * @param $login
     * @param $pas
     */
    public static function addUser($name, $surname, $gender, $skype, $login, $pas)
    {
        $genId = User_Model::addUser($name, $surname, $gender, $skype, $login, $pas);//Check the id
        self::$logger->logUserCreation($genId, $name, $surname);
    }

    /**
     * @param $sourceId
     * @param $targetId
     */
    public static function addFriend($sourceId, $targetId)
    {
        User_Model::addFriend($sourceId, $targetId);
    }

    /**
     * @param $sourceId
     * @return array
     */
    public static function getFriends($sourceId)
    {
        return User_Model::getFriends($sourceId);
    }

    /**
     * @param $id
     */
    public static function getUser($id)
    {

    }

    public static function getMessages($id, $page)
    {
        return User_Model::getMessages($id, $page);
    }

    public static function updateRecord($id, $name, $surname, $birthdate, $gender, $nationality, $tel, $skype, $selfinfo, $avatar)
    {
        User_Model::updateRecord($id, $name, $surname, $birthdate, $gender, $nationality, $tel, $skype, $selfinfo, $avatar);
    }
} 