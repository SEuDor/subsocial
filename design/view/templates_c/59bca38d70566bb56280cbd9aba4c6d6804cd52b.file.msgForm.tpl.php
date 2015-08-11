<?php /* Smarty version Smarty-3.1.17, created on 2015-06-06 20:45:43
         compiled from "F:\Apache2.2.15\htdocs\social\design\view\templates\common\tpl\msgForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1866455732fe9a128f2-20199760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59bca38d70566bb56280cbd9aba4c6d6804cd52b' => 
    array (
      0 => 'F:\\Apache2.2.15\\htdocs\\social\\design\\view\\templates\\common\\tpl\\msgForm.tpl',
      1 => 1433612727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1866455732fe9a128f2-20199760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55732fe9b666b2_86275765',
  'variables' => 
  array (
    'pageData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55732fe9b666b2_86275765')) {function content_55732fe9b666b2_86275765($_smarty_tpl) {?><div class="msgForm">
    <form action="/user/<?php echo $_smarty_tpl->tpl_vars['pageData']->value['targetUser'];?>
/?act=msg" method="post">
        <input type="hidden" name="t" value="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['targetUser'];?>
" />
        <input type="hidden" name="submit" value="1" />
        <textarea name="msgText" class="msgText"></textarea>
        <button type="submit" role="button">Send</button>
    </form>
</div><?php }} ?>
