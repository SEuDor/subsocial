<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$pageData.title}</title>
    {*<link href="/design/css/bootstrap.min.css" rel="stylesheet">*}
    <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script><!--This is online copy. Change path to local if needed-->
    <script src="/design/js/bootstrap.min.js"></script>
    <link href="{$pageData.pathToCss}" rel="stylesheet">
</head>
<body>
{if $mi}
    {include file='common/tpl/menu.tpl'}
{/if}
<div class="wrapper">
    {include file=$pageData.contentTemplate}
</div>

</body>
</html>