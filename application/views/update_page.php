<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 2015/07/02
 * Time: 17:27
 */
/*ここは編集ページとなるviewsです*/


//開始年、終了年
function selectform_year($start_year, $last_year){
    for($i = $start_year; $i <= $last_year ; $i ++){
        echo '<option value="'.$i.'">'.$i.'</option>'."\n";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form action="/NewsAdmin/update" method="post">

    <!-- foreach文でそれぞれ取ってきたレコードの値を各エリアに入れています。 -->
    <?php foreach($articles as $item)?>

    <div>
        <h3>日付</h3>
        <input type="date" name="date" value="<?php echo $item['date']; ?>"/>
    </div>

    <h3>タイトル</h3>
    <textarea class="title" name="title" cols="35" value="title"><?php echo $item['title']; ?></textarea>

    <h3>内容</h3>
    <textarea class="content" name="content" rows="10" cols="50" value="content"><?php echo $item['content']; ?></textarea>

    <h3>リンク</h3>
    <textarea class="link_area" name="link_area" rows="2" cols="50" value="link_area"><?php echo $item['link']; ?></textarea><br>
    <br>
    <!-- 見えていない'id'を次に渡しています。渡さないとレコードが分からず更新されません。 -->
    <?php echo "<input type=hidden name=id value=".$item['id'].">" ?>
    <input type="submit"  value="更新">

</form>

</body>
</html>
