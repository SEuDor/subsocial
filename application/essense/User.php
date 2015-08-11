<?php
/**
 * Created by PhpStorm.
 * User: Женя
 * Date: 30.05.2015
 * Time: 0:22
 */

/**
 * Class User
 *
 * Represents the user as a person
 */
class User
{
    /**
     * @var int ID of User
     */
    private $id;
    /**
     * @var string Name of User
     */
    private $name;
    /**
     * @var string Surname of User
     */
    private $surname;
    /**
     * @var date|string Date of birth
     */
    private $birthdate;
    /**
     * @var string Gender of User
     */
    private $gender;
    /**
     * @var string Nationality of user
     */
    private $nationality;
    /**
     * @var string Telephone number of User
     */
    private $telnum;
    /**
     * @var string Skype login of User
     */
    private $skype;
    /**
     * @var string Info about user (written by himself)
     */
    private $selfInfo;
    /**
     * @var string Path to the avatar image
     */
    private $imgPath;

    function __construct($id, $name, $surname, $birthdate, $gender, $nationality, $skype, $telnum, $selfInfo, $imgPath)
    {
        $this->birthdate = $birthdate;
        $this->gender = $gender;
        $this->id = $id;
        $this->name = $name;
        $this->nationality = $nationality;
        $this->selfInfo = $selfInfo;
        $this->skype = $skype;
        $this->surname = $surname;
        $this->telnum = $telnum;
        $this->imgPath = $imgPath;

        if(empty($this->imgPath) || is_null($this->imgPath))
        {
            $this->imgPath = '/design/view/templates/common/img/avatars/default.jpeg';
        }
    }

    /**
     * @return mixed
     */
    public function getImgPath()
    {
        return $this->imgPath;
    }

    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @return mixed
     */
    public function getSelfInfo()
    {
        return $this->selfInfo;
    }

    /**
     * @return mixed
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return mixed
     */
    public function getTelnum()
    {
        return $this->telnum;
    }
} 