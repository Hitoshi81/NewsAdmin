<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="<?php echo base_url(); ?>application/css/style.css" rel="stylesheet" type="text/css" />
    <title>登録・編集画面</title>
</head>
<body>

<p>新規作成</p>

<!--エラーメッセージ-->
<?php echo validation_errors(); ?>

<form action="/NewsAdmin/auth/logout" method="post" accept-charset="utf-8">

    <div class="form_item">
        <div class="form_label">日付：</div><input type="date" name="entry" value="<?php echo set_value('entry'); ?>"/>
    </div>
    <br />
    <div class="form_item">
        <div class="form_label">題名：</div><input type="text" name="entry" value="<?php echo set_value('entry'); ?>"/>
    </div>
    <br />
    <div class="form_item">
        <div class="form_label">内容：</div><textarea name="entry" rows="4" cols="40" value="<?php echo set_value('entry'); ?>"></textarea>
    </div>
    <br />
    <div class="form_item">
        <div class="form_label">リンク：</div><input type="text" name="entry" value="<?php echo set_value('entry'); ?>"/>
    </div>
    <br />

    <input type="submit" value="登録" />
    <br />

</form>

</body>
</html>