<?php
/**
 * Created by IntelliJ IDEA.
 * User: h.yamazaki
 * Date: 2015/06/29
 * Time: 15:25
 */
echo "ここはlist";

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>age</title>
</head>
<body>
<h1><?php echo $page_title ?></h1>

<!-- Controllerのaudaを経由してsave_pageに飛ぶようにしています。 -->
<form method="post"  action="/NewsAdmin/auda/index">
    <input type="submit" value="新規追加">
</form>

<!-- tableタグでarticlesテーブルの記事(仮)を表示させています -->
<table>
    <tr>
        <th>title</th>
        <th>date</th>
        <th>content</th>
        <th>link</th>
        <th colspan="2">操作</th>
    </tr>

    <!-- foreach文で渡されたDBのレコードをtableタグで出力しています。 -->
    <?php foreach($articles as $item):?>
        <tr>
            <td>
                <?php echo $item['title'];?>
            </td>
            <td>
                <?php echo $item['date'];?>
            </td>
            <td>
                <?php echo $item['content'];?>
            </td>
            <td>
                <?php echo $item['link'];?>
            </td>
            <td><!-- 編集ボタンです。編集画面へジャンプします。 -->
                <form method="post" action="/NewsAdmin/edit_source/update">
                    <?php echo "<input type=hidden name=id value=".$item['id'].">" ?>
                    <input type="submit" value="編集" >
                </form>
            </td>
            <td><!-- 削除ボタンです。JSのonClickでダイアログボックスを出して最終確認をしています。 -->
                <form method="post" onClick="rsp=confirm('削除しますがよろしいですか？');if(rsp==true){action='/NewsAdmin/delete/index'}else{alert('キャンセルしました。');
                action='/NewsAdmin/admin'}">
                    <?php echo "<input type=hidden name=id value=".$item['id'].">" ?>
                    <input type="submit" value="削除" >
                </form>
            </td>
        </tr>
    <?php endforeach;?>
</table>

<!-- logoutボタンです -->
<form method="post" action="/NewsAdmin/auth/logout" accept-charset="utf-8">
    <br />
    <input type="submit" name="submit" value="ログアウト" />
    <br />
</form>

<?php /*
<form action="/NewsAdmin/article_list/editArticle" method="post" accept-charset="utf-8">
    <input type="submit" name="submit" value="新規登録" >
    <br />
</form>
*/?>

<form method="post"  action="/NewsAdmin/site/index">
    <input type="submit" value="サイト">
</form>


</body>
</html>
