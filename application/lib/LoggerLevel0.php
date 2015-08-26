<?php
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
