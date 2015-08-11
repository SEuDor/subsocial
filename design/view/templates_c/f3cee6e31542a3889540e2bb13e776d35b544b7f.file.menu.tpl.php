<?php /* Smarty version Smarty-3.1.17, created on 2015-06-09 23:09:06
         compiled from "F:\Apache2.2.15\htdocs\social\design\view\templates\common\tpl\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29726557747e2dda741-51269831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3cee6e31542a3889540e2bb13e776d35b544b7f' => 
    array (
      0 => 'F:\\Apache2.2.15\\htdocs\\social\\design\\view\\templates\\common\\tpl\\menu.tpl',
      1 => 1433880371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29726557747e2dda741-51269831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_557747e2e99df9_30433386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557747e2e99df9_30433386')) {function content_557747e2e99df9_30433386($_smarty_tpl) {?><div class="exitButton" onclick="exitClick()"><img src="/design/view/templates/common/img/exitIcon.png"></div>
<nav>
    <ul>
        <li><a href="/user/<?php echo $_smarty_tpl->tpl_vars['pageData']->value['curUser']['id'];?>
">My Page</a></li>
        <li><a href="/user/<?php echo $_smarty_tpl->tpl_vars['pageData']->value['curUser']['id'];?>
/?act=msglist">Messages</a></li>
        <li><a href="/user/<?php echo $_smarty_tpl->tpl_vars['pageData']->value['curUser']['id'];?>
/?act=friends">Friends</a></li>
        <li><a href="/user/<?php echo $_smarty_tpl->tpl_vars['pageData']->value['curUser']['id'];?>
/?act=news">News</a></li>
        <li><a href="/user/<?php echo $_smarty_tpl->tpl_vars['pageData']->value['curUser']['id'];?>
/?act=mod">Change Data</a></li>
    </ul>
</nav>
<script>
    function exitClick()
    {
        window.location.replace("http://social.localhost/exit/");
    }
</script><?php }} ?>
