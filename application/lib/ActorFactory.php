<?php
abstract class ActorFactory
{
    abstract public function renew();
    abstract public function fetch($login, $pas);
    abstract public function create($id);
} 
