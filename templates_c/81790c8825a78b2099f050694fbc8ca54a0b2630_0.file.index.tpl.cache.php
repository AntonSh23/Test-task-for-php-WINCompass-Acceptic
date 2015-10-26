<?php /* Smarty version 3.1.27, created on 2015-10-22 23:16:26
         compiled from "C:\wamp\www\testForPhp.ru\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:153405629522a5fccc6_81697907%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81790c8825a78b2099f050694fbc8ca54a0b2630' => 
    array (
      0 => 'C:\\wamp\\www\\testForPhp.ru\\templates\\index.tpl',
      1 => 1445548584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153405629522a5fccc6_81697907',
  'variables' => 
  array (
    'title' => 0,
    'Name' => 1,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.27',
  'unifunc' => 'content_5629522a6bb574_62502339',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5629522a6bb574_62502339')) {
function content_5629522a6bb574_62502339 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '153405629522a5fccc6_81697907';
Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, "test.conf", "setup", 'local');?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);
?>


<HTML>
    <HEAD>
        <TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo '/*%%SmartyNocache:153405629522a5fccc6_81697907%%*/<?php echo $_smarty_tpl->tpl_vars[\'Name\']->value;?>
/*/%%SmartyNocache:153405629522a5fccc6_81697907%%*/';?>
</TITLE>
    </HEAD>

    <BODY bgcolor="#ffffff">

        <form>


        </form>
    </BODY>
</HTML>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>