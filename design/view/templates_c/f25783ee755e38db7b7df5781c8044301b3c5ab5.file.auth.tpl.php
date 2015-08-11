<?php /* Smarty version Smarty-3.1.17, created on 2015-06-02 23:54:24
         compiled from "F:\Apache2.2.15\htdocs\social\design\view\templates\common\tpl\auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182405568b3ce0cb976-20306907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f25783ee755e38db7b7df5781c8044301b3c5ab5' => 
    array (
      0 => 'F:\\Apache2.2.15\\htdocs\\social\\design\\view\\templates\\common\\tpl\\auth.tpl',
      1 => 1433278462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182405568b3ce0cb976-20306907',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5568b3ce0e3077_52809344',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5568b3ce0e3077_52809344')) {function content_5568b3ce0e3077_52809344($_smarty_tpl) {?><div class="formBlock">
    <form action="/auth/" method="post">
        <input type="hidden" name="check" value="1" />
        <label for="loginField">Login</label>
        <input id="loginField" type="text" width="30" name="login" />



        <label for="pasField">Password</label>
        <input id="pasField" type="password" width="30" name="pas" />


        <button type="submit" role="button">Submit</button>
        
        
    </form>
    <a href="/register/">Registration</a>
</div><?php }} ?>
