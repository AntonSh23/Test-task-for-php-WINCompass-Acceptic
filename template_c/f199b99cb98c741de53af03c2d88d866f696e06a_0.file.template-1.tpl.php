<?php /* Smarty version 3.1.27, created on 2015-10-22 22:47:53
         compiled from "C:\wamp\www\testForPhp.ru\templates\template-1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3029256294b79614123_32426609%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f199b99cb98c741de53af03c2d88d866f696e06a' => 
    array (
      0 => 'C:\\wamp\\www\\testForPhp.ru\\templates\\template-1.tpl',
      1 => 1445546586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3029256294b79614123_32426609',
  'variables' => 
  array (
    'title' => 0,
    'authors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56294b797001c4_19280808',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56294b797001c4_19280808')) {
function content_56294b797001c4_19280808 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3029256294b79614123_32426609';
?>
<html>
    <head>
        <title>
            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        </title>
        <meta name="author"content="<?php echo $_smarty_tpl->tpl_vars['authors']->value;?>
"/>
    </head>
</html><?php }
}
?>