<?php
/**
 * Created by PhpStorm.
 * User: Женя
 * Date: 31.05.2015
 * Time: 20:39
 */

/**
 * Class LoggerLevel0
 *
 * Logs NOTHING
 *
 * Used Pattern: Strategy
 */
class LoggerLevel0 implements Logger
{

    function logUserCreation($id, $name, $surname)
    {
    }

    function logFriendshipRequest(User $sender, User $target)
    {
    }

    function logMessageSend(User $sender, User $target)
    {
    }

    function logDataModification(User $user/*, array $oldData, array $newData*/)
    {
    }
}