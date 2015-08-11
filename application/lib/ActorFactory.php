<?php
/**
 * Created by PhpStorm.
 * User: Женя
 * Date: 14.05.2015
 * Time: 23:54
 */

abstract class ActorFactory
{
    abstract public function renew();
    abstract public function fetch($login, $pas);
    abstract public function create($id);
} 