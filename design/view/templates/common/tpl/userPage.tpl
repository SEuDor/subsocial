<div class="userCont">


    <div class="userImage">
        <img src="{$pageData.user.avatarPath}" alt="User: {$pageData.user.userName}" />{*Fixed Width*}
    </div>

    <div class="userName">{$pageData.user.userName}</div>

    <div class="buttons">
        <button type="button" class="friendReqBtn" role="button" onclick="window.location.replace('http://social.localhost/user/{$pageData.curUser.id}/?act=fr&t={$pageData.user.id}')">Be Friends</button><button type="button" class="sendMsgBtn" role="button" onclick="window.location.replace('http://social.localhost/user/{$pageData.curUser.id}/?act=msg&t={$pageData.user.id}')">Message</button>{*Add Role and make it to send link*}
    </div>

    <div class="content">
        <div class="info">
            <div>Info</div>
            <table>{*Formed from data provide*}
                {*I know this function calls are horrible but the in-place assigning didn't want to work for me. Sorry*}
                <tr><td>Gender</td><td>{($user->getGender())?($user->getGender()|capitalize):'N/A'}</td></tr>
                <tr><td>Nationality</td><td>{($user->getNationality())?$user->getNationality():'N/A'}</td></tr>
                <tr><td>Phone Number</td><td>{($user->getTelnum())?$user->getTelnum():'N/A'}</td></tr>
                <tr><td>Skype</td><td>{($user->getSkype())?$user->getSkype():'N/A'}</td></tr>
                <tr><td>Personal Info</td><td>{($user->getSelfInfo())?$user->getSelfInfo():'N/A'}</td></tr>
            </table>
        </div>

        <div class="blog">{*Formed From data provide*}
            <div class="singleRecord">
                <div class="message">
                    Temporary Unavailable
                </div>
                <span class="date"></span>
            </div>
        </div>
    </div>
</div>
<script>
    function exitClick()
    {
        window.location.replace("http://social.localhost/exit/");
    }
</script>