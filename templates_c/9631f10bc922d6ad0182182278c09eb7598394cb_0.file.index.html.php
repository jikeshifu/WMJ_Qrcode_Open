<?php
/* Smarty version 3.1.30, created on 2017-07-14 08:35:30
  from "/home/wwwroot/test.0wpt.com/templates/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596811d25c9b80_73694653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9631f10bc922d6ad0182182278c09eb7598394cb' => 
    array (
      0 => '/home/wwwroot/test.0wpt.com/templates/index.html',
      1 => 1499968097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596811d25c9b80_73694653 (Smarty_Internal_Template $_smarty_tpl) {
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
