<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 2015/07/10
 * Time: 10:23
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>age</title>
</head>
<body>
    <h2>本サイト</h2><br>
    <!-- tableタグでarticlesテーブルの記事(仮)を表示させています -->
    <table>
        <tr>
            <th>title</th>

            <th>date</th>

            <th>content</th>

            <th>link</th>
        </tr>

        <!-- foreach文で渡されたDBのレコードをtableタグで出力しています。 -->
        <?php foreach($articles as $item):?>
            <tr>
                <td>
                    <a href="<?php echo $item['link'] ?>"><?php echo $item['title'];?></a>
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

            </tr>
        <?php endforeach;?>
    </table><br>

    <form method="post"  action="/NewsAdmin/admin/index">
        <input type="submit" value="編集をしに行く">
    </form>

</body>
</html>