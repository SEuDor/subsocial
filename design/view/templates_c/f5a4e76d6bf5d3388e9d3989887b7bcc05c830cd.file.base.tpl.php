<?php /* Smarty version Smarty-3.1.17, created on 2015-06-09 23:07:17
         compiled from "F:\Apache2.2.15\htdocs\social\design\view\templates\base.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22866554a493ce367c7-46027916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5a4e76d6bf5d3388e9d3989887b7bcc05c830cd' => 
    array (
      0 => 'F:\\Apache2.2.15\\htdocs\\social\\design\\view\\templates\\base.tpl',
      1 => 1433880433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22866554a493ce367c7-46027916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_554a493d0f0144_97096264',
  'variables' => 
  array (
    'pageData' => 0,
    'mi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a493d0f0144_97096264')) {function content_554a493d0f0144_97096264($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['pageData']->value['title'];?>
</title>
    
    <script src='http://code.jquery.com/jquery-1.9.1.min.js'></script><!--This is online copy. Change path to local if needed-->
    <script src="/design/js/bootstrap.min.js"></script>
    <link href="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['pathToCss'];?>
" rel="stylesheet">
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['mi']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ('common/tpl/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<div class="wrapper">
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['pageData']->value['contentTemplate'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

</body>
</html><?php }} ?>
