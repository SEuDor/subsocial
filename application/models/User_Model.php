<?php
/**
 * Created by PhpStorm.
 * User: Женя
 * Date: 08.05.2015
 * Time: 16:33
 */

class User_Model
{
    public static function addUser($name, $surname, $gender, $skype, $login, $pas)
    {
        $query = DB::Handler()->prepare("INSERT INTO user(name, surname, gender, skype, login, password) VALUES (:name, :surname, :gender, :skype, :login, :pas)");
        $query->bindParam(':name', $name);
        $query->bindParam(':surname', $surname);
        $query->bindParam(':gender', $gender);
        $query->bindParam(':skype', $skype);
        $query->bindParam(':login', $login);
        $query->bindParam(':pas', $pas);
        $query->execute();
        return DB::Handler()->getLastInsertId();
    }

    public static function addFriend($sourceId, $targetId)
    {
        $query = DB::Handler()->prepare("INSERT INTO friends(current_id, friend_id) VALUES (:source, :target)");
        $query->bindParam(':source', $sourceId);
        $query->bindParam(':target', $targetId);
        $query->execute();
    }

    public static function getFriends($sourceId)
    {
        $query = DB::Handler()->prepare("SELECT user.id, user.name, user.surname FROM user INNER JOIN `friends` on user.id = friends.friend_id WHERE friends.current_id = :curId");
        $query->bindParam(':curId', $sourceId);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function getMessages($id, $page)
    {
        $msgCount = Config::$settings['msgPageCount'];//Should check for validity
        $offset = ($page-1) * $msgCount;
        $query = DB::Handler()->prepare("SELECT user.id, user.name, user.surname, message.msg_text FROM user INNER JOIN message ON user.id=message.id_sender WHERE message.id_target=:userId LIMIT $offset, $msgCount");
        $query->bindParam(':userId', $id);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function updateRecord($id, $name, $surname, $birthdate, $gender, $nationality, $tel, $skype, $selfinfo, $avatar)
    {
        $query = DB::Handler()->prepare("UPDATE user SET name=:name, surname=:surname, birthdate=:bd, gender=:gender, nationality=:nationality, telnum=:tel, skype=:skype, selfinfo=:selfinfo, avatar=:avatar WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->bindParam(':name', $name);
        $query->bindParam(':surname', $surname);
        $query->bindParam(':bd', $birthdate);
        $query->bindParam(':gender', $gender);
        $query->bindParam(':nationality', $nationality);
        $query->bindParam(':tel', $tel);
        $query->bindParam(':skype', $skype);
        $query->bindParam(':selfinfo', $selfinfo);
        $query->bindParam(':avatar', $avatar);
        $query->execute();
    }
    /*public static function getUser($id)
    {
        $query = DB::Handler()->prepare("SELECT ");
    }*/
    //getUser is in Factory. For now
} 