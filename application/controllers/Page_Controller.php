<?php
class Page_Controller extends Controller
{
    /**
     * @var array(mixed) Contains all data that is required for page
     */
    private $resPageData;

    /**
     * @param User $user
     */
    function __construct(User $user)
    {
        $this->resPageData = [
            'user' => [
                'id' => $user->getId(),
                'userName' => $user->getName() . ' ' . $user->getSurname(),
                'birthDate' => $user->getBirthdate(),
                'gender' => $user->getGender(),
                'nationality' => $user->getNationality(),
                'telNum' => $user->getTelnum(),
                'skype' => $user->getSkype(),
                'selfInfo' => $user->getSelfInfo(),
                'avatarPath' => $user->getImgPath()
                ]
        ];
    }

    /**
     * @return array(mixed) All Data for page
     */
    public function getData()
    {
        return $this->resPageData;
    }
}
