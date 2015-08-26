<?php
/**
 * Class Config
 *
 * Contains the settings for the application
 */
class Config
{
    /**
     * @var array(mixed) Contains the settings for the application
     */
    public static $settings = array	(
        'ProjectName'=>'social',
        'DBHost'=>'localhost',
        'DBName'=>'social',
        'DBUser'=>'',//for at least some safety
        'DBPassword'=>'',//this either
        'AvailableLangs'=>array('en', 'ua', 'ru'),
        'LogLevel'=>2,//0 - nothing; 1 - log user creations; 2 - log creations, friend requests, messages sending; 3 - log creations, friend requests, messages sending, Info Changing
        'msgPageCount' => 15
    );
} 
