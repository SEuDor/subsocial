<div class="msgForm">
    <form action="/user/{$pageData.targetUser}/?act=msg" method="post">
        <input type="hidden" name="t" value="{$pageData.targetUser}" />
        <input type="hidden" name="submit" value="1" />
        <textarea name="msgText" class="msgText"></textarea>
        <button type="submit" role="button">Send</button>
    </form>
</div>