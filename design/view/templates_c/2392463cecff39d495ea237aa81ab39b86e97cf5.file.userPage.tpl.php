<?php /* Smarty version Smarty-3.1.17, created on 2015-06-08 01:28:10
         compiled from "F:\Apache2.2.15\htdocs\social\design\view\templates\common\tpl\userPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23796556dcf1907d1e6-45243809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2392463cecff39d495ea237aa81ab39b86e97cf5' => 
    array (
      0 => 'F:\\Apache2.2.15\\htdocs\\social\\design\\view\\templates\\common\\tpl\\userPage.tpl',
      1 => 1433716089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23796556dcf1907d1e6-45243809',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_556dcf191f03c8_38957229',
  'variables' => 
  array (
    'pageData' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556dcf191f03c8_38957229')) {function content_556dcf191f03c8_38957229($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'f:/Web/Smarty/Smarty-3.1.17/libs/plugins\\modifier.capitalize.php';
?><div class="userCont">


    <div class="userImage">
        <img src="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['user']['avatarPath'];?>
" alt="User: <?php echo $_smarty_tpl->tpl_vars['pageData']->value['user']['userName'];?>
" />
    </div>

    <div class="userName"><?php echo $_smarty_tpl->tpl_vars['pageData']->value['user']['userName'];?>
</div>

    <div class="buttons">
        <button type="button" class="friendReqBtn" role="button" onclick="window.location.replace('http://social.localhost/user/<?php echo $_smarty_tpl->tpl_vars['pageData']->value['curUser']['id'];?>
/?act=fr&t=<?php echo $_smarty_tpl->tpl_vars['pageData']->value['user']['id'];?>
')">Be Friends</button><button type="button" class="sendMsgBtn" role="button" onclick="window.location.replace('http://social.localhost/user/<?php echo $_smarty_tpl->tpl_vars['pageData']->value['curUser']['id'];?>
/?act=msg&t=<?php echo $_smarty_tpl->tpl_vars['pageData']->value['user']['id'];?>
')">Message</button>
    </div>

    <div class="content">
        <div class="info">
            <div>Info</div>
            <table>
                <tr><td>Gender</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value->getGender() ? (smarty_modifier_capitalize($_smarty_tpl->tpl_vars['user']->value->getGender())) : 'N/A';?>
</td></tr>
                <tr><td>Nationality</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value->getNationality() ? $_smarty_tpl->tpl_vars['user']->value->getNationality() : 'N/A';?>
</td></tr>
                <tr><td>Phone Number</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value->getTelnum() ? $_smarty_tpl->tpl_vars['user']->value->getTelnum() : 'N/A';?>
</td></tr>
                <tr><td>Skype</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value->getSkype() ? $_smarty_tpl->tpl_vars['user']->value->getSkype() : 'N/A';?>
</td></tr>
                <tr><td>Personal Info</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value->getSelfInfo() ? $_smarty_tpl->tpl_vars['user']->value->getSelfInfo() : 'N/A';?>
</td></tr>
            </table>
        </div>

        <div class="blog">
            <div class="singleRecord">
                <div class="message">
                    Temporary Unavailable
                </div>
                <span class="date"></span>
            </div>
        </div>
    </div>
</div>
<script>
    function exitClick()
    {
        window.location.replace("http://social.localhost/exit/");
    }
</script><?php }} ?>
