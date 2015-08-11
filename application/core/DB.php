<?php
/**
 * Created by PhpStorm.
 * User: Женя
 * Date: 08.05.2015
 * Time: 15:58
 */

/**
 * Class DB
 *
 * Provides means for work with database
 *
 * Used Patterns: Data Access Object, Service Layer
 */
class DB
{
    /**
     * @var PDO Object for handling work with database
     */
    protected $DBHandle;
    /**
     * @var DB Contains instance of this Class
     */
    protected static $instance;

    /**
     *
     */
    protected function __construct()
    {
        $this->DBHandle = new PDO('mysql:host ='. Config::$settings['DBHost'].';dbname='.Config::$settings['DBName'], Config::$settings['DBUser'], Config::$settings['DBPassword']);
    }

    /**
     * @return static DB Returns instance of this object
     */
    public static function Handler()
    {
        if(!isset(self::$instance))
        {
            self::$instance = new static();
        }
        return self::$instance;
    }

    /**
     * @param string $query Query to the database
     * @return PDOStatement Returns object for further processing
     */
    public function prepare($query)
    {
        $query = $this->DBHandle->prepare($query);
        return $query;
    }

    /**
     * @return string Returns the last generated ID in database
     */
    public function getLastInsertId()
    {
        return $this->DBHandle->lastInsertId();
    }
} 