<?php /* Smarty version Smarty-3.1.17, created on 2015-06-04 16:45:37
         compiled from "F:\Apache2.2.15\htdocs\social\design\view\templates\common\tpl\userFriends.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213325570540c765be4-54176135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3857d5f4bd0c1f61758bcaf37f75837adec7a190' => 
    array (
      0 => 'F:\\Apache2.2.15\\htdocs\\social\\design\\view\\templates\\common\\tpl\\userFriends.tpl',
      1 => 1433425505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213325570540c765be4-54176135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5570540c769a68_26943752',
  'variables' => 
  array (
    'pageData' => 0,
    'friendItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5570540c769a68_26943752')) {function content_5570540c769a68_26943752($_smarty_tpl) {?><div class="friendList">
    <ul>
        <?php  $_smarty_tpl->tpl_vars['friendItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friendItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pageData']->value['friends']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friendItem']->key => $_smarty_tpl->tpl_vars['friendItem']->value) {
$_smarty_tpl->tpl_vars['friendItem']->_loop = true;
?>
            <li>
                <a href="/user/<?php echo $_smarty_tpl->tpl_vars['friendItem']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['friendItem']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['friendItem']->value['surname'];?>
</a>
            </li>
        <?php } ?>
    </ul>
</div><?php }} ?>
