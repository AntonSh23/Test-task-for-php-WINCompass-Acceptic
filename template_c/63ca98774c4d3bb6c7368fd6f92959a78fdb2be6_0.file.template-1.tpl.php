<?php /* Smarty version 3.1.27, created on 2015-10-22 22:48:16
         compiled from "templates\template-1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1074956294b908191f7_45080165%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63ca98774c4d3bb6c7368fd6f92959a78fdb2be6' => 
    array (
      0 => 'templates\\template-1.tpl',
      1 => 1445546586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1074956294b908191f7_45080165',
  'variables' => 
  array (
    'title' => 0,
    'authors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56294b9088e348_13670700',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56294b9088e348_13670700')) {
function content_56294b9088e348_13670700 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1074956294b908191f7_45080165';
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