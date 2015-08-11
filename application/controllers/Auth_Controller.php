<?php
include '/application/models/Auth_Model.php';

/**
 * Class Auth_Controller
 *
 * This class is responsible for user authentification
 *
 * Used Pattern: Proxy(sort of)
 */
class Auth_Controller extends Controller
{

    /**
     *
     */
    function __construct()
    {
        parent::__construct();

        $userFactory = new UserFactory();

        if(isset($_POST['check']))
        {
            $login = $_POST['login'];
            $pas = hash('sha256', hash("sha256", $_POST['pas']));

            if(($user = $userFactory->fetch($login, $pas)) !== false)
            {
                //session_start();
                $_SESSION['id'] = $user->getId();
                $_SESSION['user'] = serialize($user);
            }
            else
            {
                return false;
            }
            //session_write_close();
            $destID = $user->getId();
            session_write_close();
            header("Location: /user/$destID");
            exit;
        }
    }
}