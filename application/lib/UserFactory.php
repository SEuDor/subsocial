<?php
include '/application/lib/ActorFactory.php';
include '/application/core/DB.php';

/**
 * Class UserFactory
 *
 * This class is responsible for User Creation by the following means:
 * - Unserialize from SESSION
 * - Get data from database by login and password and create user based on this data
 * - Get data from database by id and create user based on this data
 *
 * Used Pattern: Abstract Factory/Factory/Factory Method
 */
class UserFactory extends ActorFactory
{
    /**
     * @return bool|User
     */
    public function renew()
    {
        if(isset($_SESSION))
        {
            $user = unserialize($_SESSION['user']);
            return $user;
        }
        return false;
    }

    /**
     * Creates the user or returns false if it is impossible due to unexistence in database
     *
     * @param string $login Login entered in the login-in form
     * @param string $pas Password entered in the login-in form (Encrypted)
     * @return bool|User
     */
    public function fetch($login, $pas)
    {
        $query = DB::Handler()->prepare("SELECT id, name, surname, birthdate, gender, nationality, telnum, skype, selfInfo, avatar FROM `user` WHERE login=:login AND password=:pas");
        $query->bindParam(':login', $login);
        $query->bindParam(':pas', $pas);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if ($result !== false)
        {
            $user = new User($result['id'], $result['name'], $result['surname'], $result['birthdate'], $result['gender'], $result['nationality'], $result['skype'], $result['telnum'], $result['selfInfo'], $result['avatar']);
            return $user;
        }
        return false;
    }

    /**
     * Creates the user or returns false if it is impossible due to unexistence in database
     *
     * @param int $id Specific id of user
     * @return bool|User
     */
    public function create($id)
    {
        $query = DB::Handler()->prepare("SELECT name, surname, birthdate, gender, nationality, telnum, skype, selfInfo, avatar FROM `user` WHERE id=:id");
        $query->bindParam(':id', $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if ($result !== false)
        {
            $result['id'] = $id;
            $user = new User($result['id'], $result['name'], $result['surname'], $result['birthdate'], $result['gender'], $result['nationality'], $result['skype'], $result['telnum'], $result['selfInfo'], $result['avatar']);
            return $user;
        }
        return false;
    }
}