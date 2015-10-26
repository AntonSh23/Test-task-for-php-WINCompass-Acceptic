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
    '69ed48bd38825a3be969bee20b3f39c6f2396215' => 
    array (
      0 => 'C:\\wamp\\www\\testForPhp.ru\\configs\\test.conf',
      1 => 1434552958,
      2 => 'file',
    ),
    'ef225aa6b6eae363a4dd41463c6dab5e48fa265a' => 
    array (
      0 => 'C:\\wamp\\www\\testForPhp.ru\\templates\\header.tpl',
      1 => 1434552958,
      2 => 'file',
    ),
    'b3cfcdd6ad9d95985a41d1d0c836f849b51f1f84' => 
    array (
      0 => 'C:\\wamp\\www\\testForPhp.ru\\templates\\footer.tpl',
      1 => 1434552958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153405629522a5fccc6_81697907',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'Name' => 1,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.27',
  'unifunc' => 'content_5629522a7e8d92_88877953',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5629522a7e8d92_88877953')) {
function content_5629522a7e8d92_88877953 ($_smarty_tpl) {
?>
<HTML>
<HEAD>
<TITLE>foo - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</TITLE>
</HEAD>
<BODY bgcolor="#ffffff">


<HTML>
    <HEAD>
        <TITLE><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: title in C:\wamp\www\testForPhp.ru\templates_c\81790c8825a78b2099f050694fbc8ca54a0b2630_0.file.index.tpl.cache.php on line <i>38</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0009</td><td bgcolor='#eeeeec' align='right'>250152</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\testForPhp.ru\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0158</td><td bgcolor='#eeeeec' align='right'>1018512</td><td bgcolor='#eeeeec'>Smarty->display(  )</td><td title='C:\wamp\www\testForPhp.ru\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>24</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0158</td><td bgcolor='#eeeeec' align='right'>1018800</td><td bgcolor='#eeeeec'>Smarty->fetch(  )</td><td title='C:\wamp\www\testForPhp.ru\libs\Smarty.class.php' bgcolor='#eeeeec'>..\Smarty.class.php<b>:</b>834</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0185</td><td bgcolor='#eeeeec' align='right'>1133024</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\testForPhp.ru\libs\Smarty.class.php' bgcolor='#eeeeec'>..\Smarty.class.php<b>:</b>820</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0306</td><td bgcolor='#eeeeec' align='right'>1447136</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\testForPhp.ru\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>246</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.1108</td><td bgcolor='#eeeeec' align='right'>4127056</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\testForPhp.ru\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>202</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.1109</td><td bgcolor='#eeeeec' align='right'>4144096</td><td bgcolor='#eeeeec'>content_5629522a6bb574_62502339(  )</td><td title='C:\wamp\www\testForPhp.ru\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>371</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\wamp\www\testForPhp.ru\templates_c\81790c8825a78b2099f050694fbc8ca54a0b2630_0.file.index.tpl.cache.php on line <i>38</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0009</td><td bgcolor='#eeeeec' align='right'>250152</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\testForPhp.ru\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0158</td><td bgcolor='#eeeeec' align='right'>1018512</td><td bgcolor='#eeeeec'>Smarty->display(  )</td><td title='C:\wamp\www\testForPhp.ru\index.php' bgcolor='#eeeeec'>..\index.php<b>:</b>24</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0158</td><td bgcolor='#eeeeec' align='right'>1018800</td><td bgcolor='#eeeeec'>Smarty->fetch(  )</td><td title='C:\wamp\www\testForPhp.ru\libs\Smarty.class.php' bgcolor='#eeeeec'>..\Smarty.class.php<b>:</b>834</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0185</td><td bgcolor='#eeeeec' align='right'>1133024</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\testForPhp.ru\libs\Smarty.class.php' bgcolor='#eeeeec'>..\Smarty.class.php<b>:</b>820</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0306</td><td bgcolor='#eeeeec' align='right'>1447136</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\testForPhp.ru\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>246</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.1108</td><td bgcolor='#eeeeec' align='right'>4127056</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\testForPhp.ru\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>202</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.1109</td><td bgcolor='#eeeeec' align='right'>4144096</td><td bgcolor='#eeeeec'>content_5629522a6bb574_62502339(  )</td><td title='C:\wamp\www\testForPhp.ru\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>371</td></tr>
</table></font>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</TITLE>
    </HEAD>

    <BODY bgcolor="#ffffff">

        <form>


        </form>
    </BODY>
</HTML>
</BODY>
</HTML>

<?php }
}
?>