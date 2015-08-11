<div class="msgWrapper">
    <ul>
        {if !$pageData.msgList}
            <div>No messages</div>
        {/if}
        {foreach $pageData.msgList as $msgItem}
            <li>
                <a href="/user/{$msgItem.id}">{$msgItem.name} {$msgItem.surname}</a>
                <div>
                    {$msgItem.msg_text}
                </div>
            </li>
        {/foreach}
    </ul>
</div>