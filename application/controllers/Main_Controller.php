<?php
include '/application/core/Controller.php';
include '/application/lib/UserFactory.php';
include '/application/controllers/Page_Controller.php';
include '/application/controllers/User_Controller.php';
include '/application/lib/Uploader.php';

//I'm really, really sorry for the code I wrote
//Not after some time is passed I have better solutions

/**
 * Class Main_Controller
 *
 * This class is central Point for all actions of Application. It calls required classed that are perform specific action. It is responsible for page generation
 *
 * Used Pattern: Facade, Composite
 */
class Main_Controller extends Controller
{
    /**
     * @var Controller Controller that is required for current request
     */
    private $activeController;//Controller that was requested and created
    //private $controllerName;//Name of the controller which is required to be requested
    /**
     * @var bool|User
     */
    private $currentUser;
    /**
     * @var UserFactory
     */
    private $userFactory;
    /**
     * @var array
     */
    private $pageData = [];

    public function __construct($controller, $destination)
    {
        parent::__construct();
        $this->userFactory = new UserFactory();
        $this->pageData['pathToCss'] = '/design/view/templates/common/css/style.css';
        $menuInclude = true;

        switch($controller)
        {
            case 'user':
                $this->currentUser = $this->userFactory->renew();
                $this->pageData['curUser'] = ['id' => $this->currentUser->getId(), 'user' => $this->currentUser];
                $this->smarty->assign('user', $this->currentUser);
                if(($destUser = $this->userFactory->create($destination)) !== false)
                {
                    $page = new Page_Controller($destUser);//TODO set it as active controller. And all actve controllers will return data by getData method
                    $this->pageData = array_merge($this->pageData, $page->getData());
                    $this->pageData['title'] = $this->currentUser->getName() . ' ' . $this->currentUser->getSurname();
                    $this->pageData['contentTemplate'] = 'common/tpl/userPage.tpl';
                    $this->pageData['pathToCss'] = '/design/view/templates/common/css/style.css';

                    if(isset($_GET['act']))
                    {
                        if ($_GET['act'] == 'friends')
                        {
                            $this->pageData['title'] = 'Friends';
                            $friendList = User_Controller::getFriends($this->currentUser->getId());
                            $this->pageData['friends'] = $friendList;
                            $this->pageData['contentTemplate'] = 'common/tpl/userFriends.tpl';
                            break;
                        }

                        if ($_GET['act'] == 'mod')
                        {
                            if ($_GET['s'] == 1)//TODO Finish it
                            {
                                $upload = new Uploader();
                                if($_FILES['fileUpload']['name'] != '')
                                {
                                    $name = $upload->load('/design/view/templates/common/img/avatars/', $_FILES['fileUpload']);
                                }
                                else
                                {
                                    $name = $this->currentUser->getImgPath();
                                }
                                User_Controller::updateRecord($this->currentUser->getId(), $_POST['name'], $_POST['surname'], null, $_POST['gender'], $_POST['nationality'], $_POST['tel'], $_POST['skype'], $_POST['selfInfo'], $name);
                                $_SESSION['user'] = serialize($this->userFactory->create($this->currentUser->getId()));
                                session_write_close();
                                self::$logger->logDataModification($this->currentUser);

                                header("Location: /user/".$this->currentUser->getId());
                                exit;
                            }
                            $this->pageData['title'] = 'Data Modification';
                            $this->pageData['contentTemplate'] = 'common/tpl/userSettings.tpl';
                            break;
                        }

                        if ($_GET['act'] == 'fr')
                        {
                            User_Controller::addFriend($this->currentUser->getId(), $_GET['t']);
                            self::$logger->logFriendshipRequest($this->currentUser, $destUser);
                            header("Location: /user/" . $_GET['t']);
                            exit;
                        }

                        if($_GET['act'] == 'msg')
                        {
                            if($_POST['submit'])
                            {
                                $q = DB::Handler()->prepare("INSERT INTO message(id_sender, id_target, msg_text) VALUES (:sender, :target, :msg)");
                                $q->bindParam(':sender', $this->currentUser->getId());
                                $q->bindParam(':target', $_POST['t']);
                                $q->bindParam(':msg', $_POST['msgText']);
                                $q->execute();
                                self::$logger->logMessageSend($this->currentUser, $destUser);
                                break;
                            }
                            $this->pageData['contentTemplate'] = 'common/tpl/msgForm.tpl';
                            $this->pageData['targetUser'] = $_GET['t'];
                            break;
                        }

                        if ($_GET['act'] == 'msglist')
                        {
                            $this->pageData['title'] = 'Messages';
                            $page = isset($_GET['p']) ? $_GET['p'] : 1;
                            $this->pageData['msgList'] = User_Controller::getMessages($this->currentUser->getId(), $page);
                            $this->pageData['contentTemplate'] = 'common/tpl/userMsgPage.tpl';
                            break;
                        }
                    }
                }
                else
                {
                    include '/application/controllers/Page404_Controller.php';
                    $this->activeController = new Page404_Controller();
                    $this->pageData['contentTemplate'] = 'common/tpl/page404.tpl';
                }
                break;
            case 'auth':
                include '/application/controllers/Auth_Controller.php';
                $menuInclude = false;
                if(isset($_POST['check']))
                {
                    $auth = new Auth_Controller();
                }
                else
                {
                    $this->pageData['title'] = 'Authorization';
                    $this->pageData['contentTemplate'] = 'common/tpl/auth.tpl';
                }
                break;
            case 'register':
                $menuInclude = false;
                include '/application/controllers/Register_Controller.php';
                $reg = new Register_Controller();
                if(isset($_POST['perform']))
                {
                    $reg->performUserRegistration();
                }
                $this->pageData['title'] = 'Registration';
                $this->pageData['contentTemplate'] = 'common/tpl/register.tpl';
                break;
            default:
                $this->currentUser = $this->userFactory->renew();
                $page = new Page_Controller($this->currentUser);
                $this->pageData = array_merge($this->pageData, $page->getData());
                $this->pageData['curUser'] = ['id' => $this->currentUser->getId()];
                $this->pageData['contentTemplate'] = 'common/tpl/userPage.tpl';
                /*include '/application/controllers/Page404_Controller.php';
                $this->activeController = new Page404_Controller();*/

        }

        /*$this->controllerName = $controller.'_Controller';
        include '/application/controllers/' . $this->controllerName;
        if(!class_exists($this->controllerName))
        {
            include '/application/controllers/Page404_Controller.php';
            //$this->activeController = new $this->controllerName();
            $this->activeController = new Page404_Controller();
        }*/
        $this->smarty->assign('mi', $menuInclude);
        $this->smarty->assign('pageData', $this->pageData);
        $this->smarty->display('base.tpl');
    }

    function __destruct()
    {
        if(isset($_SESSION['user']))
        {
            $_SESSION['user'] = serialize($this->currentUser);
        }
    }
} 