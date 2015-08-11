<div class="exitButton" onclick="exitClick()"><img src="/design/view/templates/common/img/exitIcon.png"></div>
<nav>
    <ul>
        <li><a href="/user/{$pageData.curUser.id}">My Page</a></li>
        <li><a href="/user/{$pageData.curUser.id}/?act=msglist">Messages</a></li>
        <li><a href="/user/{$pageData.curUser.id}/?act=friends">Friends</a></li>
        <li><a href="/user/{$pageData.curUser.id}/?act=news">News</a></li>
        <li><a href="/user/{$pageData.curUser.id}/?act=mod">Change Data</a></li>
    </ul>
</nav>
<script>
    function exitClick()
    {
        window.location.replace("http://social.localhost/exit/");
    }
</script>