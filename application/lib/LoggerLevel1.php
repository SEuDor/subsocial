<?php
/**
 * Created by PhpStorm.
 * User: Женя
 * Date: 31.05.2015
 * Time: 18:09
 */

/**
 * Class LoggerLevel1
 *
 * Logs only User Creations
 *
 * Used Pattern: Strategy
 */
class LoggerLevel1 implements Logger
{

    function logUserCreation($id, $name, $surname)
    {
        $msg = date('d-m-Y') . ': User: ' . $id . ' - ' . $name . ' ' . $surname . ' created';
        FileHandler::writeLine($_SERVER['DOCUMENT_ROOT'] . '/' . 'log.log', $msg);
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