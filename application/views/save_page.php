<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 2015/06/30
 * Time: 18:10
 */

/*ここが新規追加ページです*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<script type="text/javascript">
    function switch_submit(){
        document.getElementById('save').action = '/NewsAdmin/';
    }
</script>
<form id='save' action="/NewsAdmin/edit_source/index" method="post" onClick="">

    <h3>日付</h3>
    <input type="date" class="date" name="date" value="<?php echo set_value('entry'); ?>"/>

    <h3>タイトル</h3>
    <textarea class="title" name="title" cols="35" value="title"></textarea>

    <h3>内容</h3>
    <textarea class="content" name="content" rows="10" cols="50" value="content">tekitou</textarea>

    <h3>リンク</h3>
    <textarea class="link_area" name="link_area" rows="2" cols="50" value="link_area"></textarea><br>
    <br>
    <input type="submit"  value="登録" onClick="pageRefresh()">
    <input type="submit"  value="キャンセル" onClick="switch_submit();">
</form>

</body>
</html>
