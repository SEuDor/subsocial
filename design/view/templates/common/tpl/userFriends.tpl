<div class="friendList">
    <ul>
        {foreach $pageData.friends as $friendItem}
            <li>
                <a href="/user/{$friendItem.id}">{$friendItem.name} {$friendItem.surname}</a>
            </li>
        {/foreach}
    </ul>
</div>