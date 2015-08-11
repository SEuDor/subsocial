<?php /* Smarty version Smarty-3.1.17, created on 2015-06-02 23:59:34
         compiled from "F:\Apache2.2.15\htdocs\social\design\view\templates\common\tpl\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142645569c3c3bb08b7-36455794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e07ca2dd2d9fffa644c4111b5cb0fbd6e189f86a' => 
    array (
      0 => 'F:\\Apache2.2.15\\htdocs\\social\\design\\view\\templates\\common\\tpl\\register.tpl',
      1 => 1433278769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142645569c3c3bb08b7-36455794',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5569c3c3c0a647_95048690',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5569c3c3c0a647_95048690')) {function content_5569c3c3c0a647_95048690($_smarty_tpl) {?><div class="formBlock">
    <form action="/register/" method="post">
        <input type="hidden" name="perform" value="1" />

        <label for="nameField">Name</label>
        <input id="nameField" type="text" width="20" name="name" required="required" />

        <label for="surnameField">Surname</label>
        <input id="surnameField" type="text" width="20" name="surname" required="required" />

        <label for="genderList">Gender</label>
        <select id="genderList" name="gender" required="required">
            <option disabled>Gender</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
        </select>

        <label for="skypeField">Skype</label>
        <input id="skypeField" type="text" name="skype" width="20" />

        <label for="loginField">Login</label>
        <input id="loginField" type="text" width="20" name="login" required="required" />

        <label for="pasField">Password</label>
        <input id="pasField" type="password" width="20" name="pas" required="required" />

        <button type="submit" role="button">Register</button>
        
    </form>
</div><?php }} ?>
