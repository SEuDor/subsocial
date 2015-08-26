<?php
/**
 * Interface Logger
 *
 * Prototypes of methods for logging
 *
 * Used Pattern: Strategy
 */
interface Logger
{
    /**
     * @param $id
     * @param $name
     * @param $surname
     * @return mixed
     */
    function logUserCreation($id, $name, $surname);

    /**
     * @param User $sender
     * @param User $target
     * @return mixed
     */
    function logFriendshipRequest(User $sender, User $target);

    /**
     * @param User $sender
     * @param User $target
     * @return mixed
     */
    function logMessageSend(User $sender, User $target);

    /**
     * @param User $user
     * @param array $oldData
     * @param array $newData
     * @return mixed
     */
    function logDataModification(User $user/*, array $oldData, array $newData*/);
} 
