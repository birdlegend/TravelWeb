<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>密码修改</title>
</head>
<body>
	<form action="<?php echo U('Home/Login/userinfupdate');?>" method="post">
		旧密码：<input name="oldpass" type="password" size="30">
		<br/>
		新密码：<input name="newpass" type="password" size="30">
		<br/>
		新密码：<input name="newpass2" type="password" size="30">
		<input type="submit" value="提交" />
	</form>
</body>
</html>