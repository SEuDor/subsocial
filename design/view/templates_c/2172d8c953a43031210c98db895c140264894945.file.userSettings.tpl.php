<?php /* Smarty version Smarty-3.1.17, created on 2015-06-08 00:22:45
         compiled from "F:\Apache2.2.15\htdocs\social\design\view\templates\common\tpl\userSettings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12716556f6c10d59e32-73278905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2172d8c953a43031210c98db895c140264894945' => 
    array (
      0 => 'F:\\Apache2.2.15\\htdocs\\social\\design\\view\\templates\\common\\tpl\\userSettings.tpl',
      1 => 1433712156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12716556f6c10d59e32-73278905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_556f6c10e30be7_34093414',
  'variables' => 
  array (
    'pageData' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556f6c10e30be7_34093414')) {function content_556f6c10e30be7_34093414($_smarty_tpl) {?><div class="formBlock">
    <form action="/user/<?php echo $_smarty_tpl->tpl_vars['pageData']->value['curUser']['id'];?>
/?act=mod&s=1" method="post" enctype="multipart/form-data">
        <label for="nameField">Name</label>
        <input id="nameField" type="text" width="20" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getName();?>
" required="required" />

        <label for="surnameField">Surname</label>
        <input id="surnameField" type="text" width="20" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getSurname();?>
" required="required" />

        <div>
            <label for="bDayField">Day</label>
            <input type="text" name="bDay" id="bDayField"/>

            <label for="bMonthField">Month</label>
            <input type="text" name="bMonth" id="bMonthField"/>

            <label for="bYearField">Year</label>
            <input type="text" name="bYear" id="bYearField"/>
        </div>

        <label for="genderList">Gender</label>
        <select id="genderList" name="gender">
            <option disabled>Gender</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
        </select>

        <label for="nationalityField">Nationality</label>
        <input id="nationalityField" type="text" width="20" name="nationality" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getNationality();?>
" />

        <label for="telField">Phone Number</label>
        <input id="telField" type="text" width="20" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getTelnum();?>
" />

        <label for="skypeField">Skype</label>
        <input id="skypeField" type="text" width="20" name="skype" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getSkype();?>
" />

        <label for="selfinfoTA">Personal Info</label>
        <textarea id="selfinfoTA" name="selfInfo"><?php echo $_smarty_tpl->tpl_vars['user']->value->getSelfInfo();?>
</textarea>

        <label for="fileUpload">Avatar Image</label>
        <input type="file" name="fileUpload" id="fileUpload" />

        <button type="submit" role="button">Change</button>
        
    </form>
</div><?php }} ?>
