<?php
/**
 * Created by PhpStorm.
 * User: Женя
 * Date: 31.05.2015
 * Time: 18:10
 */

/**
 * Class LoggerLevel2
 *
 * Logs User Creation, Friendship Requests, Sent messages(ony the fact of sending and nodes of communication)
 *
 * Used Pattern: Strategy
 */
class LoggerLevel2 implements Logger
{

    function logUserCreation($id, $name, $surname)
    {
        $msg = date('d-m-Y') . ': User: ' . $id . ' - ' . $name . ' ' . $surname . ' created';
        FileHandler::writeLine($_SERVER['DOCUMENT_ROOT'] . '/' . 'log.log', $msg);
    }

    function logFriendshipRequest(User $sender, User $target)
    {
        $msg = date('d-m-Y') . ': User: ' . $sender->getId() . ' sent friend Request to ' . $target->getId();
        FileHandler::writeLine($_SERVER['DOCUMENT_ROOT'] . '/' . 'log.log', $msg);
    }

    function logMessageSend(User $sender, User $target)
    {
        $msg = date('d-m-Y') . ': User: ' . $sender->getId() . ' sent message to ' . $target->getId();
        FileHandler::writeLine($_SERVER['DOCUMENT_ROOT'] . '/' . 'log.log', $msg);
    }

    function logDataModification(User $user/*, array $oldData, array $newData*/)
    {
    }
}