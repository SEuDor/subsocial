<?php /* Smarty version Smarty-3.1.17, created on 2015-06-08 02:46:52
         compiled from "F:\Apache2.2.15\htdocs\social\design\view\templates\common\tpl\userMsgPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:509555737fe07f4442-16282573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cb206ffd9368914400d0cefa443d814675253ce' => 
    array (
      0 => 'F:\\Apache2.2.15\\htdocs\\social\\design\\view\\templates\\common\\tpl\\userMsgPage.tpl',
      1 => 1433720317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '509555737fe07f4442-16282573',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55737fe09a1fb1_08572769',
  'variables' => 
  array (
    'pageData' => 0,
    'msgItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55737fe09a1fb1_08572769')) {function content_55737fe09a1fb1_08572769($_smarty_tpl) {?><div class="msgWrapper">
    <ul>
        <?php if (!$_smarty_tpl->tpl_vars['pageData']->value['msgList']) {?>
            <div>No messages</div>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['msgItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msgItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pageData']->value['msgList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msgItem']->key => $_smarty_tpl->tpl_vars['msgItem']->value) {
$_smarty_tpl->tpl_vars['msgItem']->_loop = true;
?>
            <li>
                <a href="/user/<?php echo $_smarty_tpl->tpl_vars['msgItem']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['msgItem']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['msgItem']->value['surname'];?>
</a>
                <div>
                    <?php echo $_smarty_tpl->tpl_vars['msgItem']->value['msg_text'];?>

                </div>
            </li>
        <?php } ?>
    </ul>
</div><?php }} ?>
