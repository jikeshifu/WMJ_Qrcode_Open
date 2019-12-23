<?php
/* Smarty version 3.1.30, created on 2019-12-24 00:46:07
  from "/www/wwwroot/demo.weimenjin.cn/templates/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e00ef4f603e51_04472912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc9dd0123d0dcafffb484b7786fc4014a8b37adb' => 
    array (
      0 => '/www/wwwroot/demo.weimenjin.cn/templates/index.html',
      1 => 1556428638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e00ef4f603e51_04472912 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="cn" class="fullscreen-bg">
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	</head>
	<body>
		<div style="margin-top: 120px; text-align: center; font-size: 24px;">
			<?php if ($_smarty_tpl->tpl_vars['data']->value['state'] == 1) {?>
			<img src="static/images/success.png" style="width: 100px;"/>
			<p><?php echo $_smarty_tpl->tpl_vars['data']->value['msg'];?>
</p>
			<?php } else { ?>
			<img src="static/images/error.png" style="width: 100px;"/>
			<p><?php echo $_smarty_tpl->tpl_vars['data']->value['msg'];?>
</p>
			<?php }?>
		</div>
	</body>
</html><?php }
}
