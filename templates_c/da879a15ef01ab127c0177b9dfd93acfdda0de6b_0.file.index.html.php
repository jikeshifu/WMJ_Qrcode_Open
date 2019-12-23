<?php
/* Smarty version 3.1.30, created on 2017-08-06 15:17:11
  from "/a/domains/unlock1.wmj.com.cn/public_html/templates/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598732f7c8ba24_83758905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da879a15ef01ab127c0177b9dfd93acfdda0de6b' => 
    array (
      0 => '/a/domains/unlock1.wmj.com.cn/public_html/templates/index.html',
      1 => 1499968096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598732f7c8ba24_83758905 (Smarty_Internal_Template $_smarty_tpl) {
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
