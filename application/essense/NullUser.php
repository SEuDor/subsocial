<?php
/**
 * Created by PhpStorm.
 * User: Женя
 * Date: 30.05.2015
 * Time: 0:15
 */

/**
 * Class NullUser
 *
 * User that does nothing
 *
 * Used Pattern: Null Object
 */
class NullUser extends User
{

    function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getBirthdate()
    {
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
    }

    /**
     * @return mixed
     */
    public function getNationality()
    {
    }

    /**
     * @return mixed
     */
    public function getSelfInfo()
    {
    }

    /**
     * @return mixed
     */
    public function getSkype()
    {
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
    }

    /**
     * @return mixed
     */
    public function getTelnum()
    {
    }
}