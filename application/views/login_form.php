<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ログイン認証</title>
<link rel="stylesheet" href="<?php echo base_url("css/style.css") ?>" type="text/css">
</head>
<body>
<h4 class = "login_form" >ログインフォーム</h4>
<?php echo form_open('auth/login'); ?>
<div class = "form_size">

<!--エラーメッセージ-->
<font color="red"><?php echo validation_errors(); ?></font>

<dl class = "aaa">
  <dt>ユーザ名</dt>
  <dd><input type="text" name="username" value="<?php echo set_value('username'); ?>"></dd>
  <dt>パスワード</dt>
  <dd><input type="password" name="password" value="<?php echo set_value('password'); ?>"></dd>
</dl>

<!--ログイン後に移動するページ-->
<input type="hidden" name="next" value="<?php echo $next; ?>">
<input type="submit" value="ログイン">
</div>
</form>
 
</body>
</html>