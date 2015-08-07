<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 2015/07/06
 * Time: 17:52
 */
/*このページは新規追加で追加されたかどうかの確認用です*/
?>

<html>
<head>
    <meta http-equiv="refresh" content="5; URL=/NewsAdmin">
    <title>age</title>
</head>
<body>

<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th class="date">date</th>
        <th>content</th>
        <th>link</th>
    </tr>


    <?php foreach($articles as $item):?>
        <tr>
            <td class="id">
                <?php echo $item['id'];?>
            </td>
            <td class="title">
                <?php echo $item['title'];?>
            </td>
            <td class="date">
                <?php echo $item['date'];?>
            </td>
            <td class="content">
                <?php echo $item['content'];?>
            </td>
            <td class="link">
                <?php echo $item['link'];?>
            </td>
        </tr>
    <?php endforeach;?>
</table>

<h4>5秒後に自動的に一覧に戻ります。</h4>

</body>
</html>

