<?php
/**
 * Class LoggerLevel3
 *
 * Logs User Creation, Friendship Requests, Sent messages(ony the fact of sending and nodes of communication), User Data Modifications
 *
 * Used Pattern: Strategy
 */
class LoggerLevel3 implements Logger
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
        $msg = date('d-m-Y') . ': User: ' . $user->getId() . 'changed his data';
        FileHandler::writeLine($_SERVER['DOCUMENT_ROOT'] . '/' . 'log.log', $msg);
        /*$count = count($oldData);
        for($i = 0; $i < $count; $i++)
        {
            if($oldData[$i] != $newData[$i])
            {
                $msg .= $oldData[$i] .' to '. $newData[$i] .'; ';
            }
        }*/
    }
}
