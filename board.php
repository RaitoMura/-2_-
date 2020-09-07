<!DOCTYPE html> 
<html lang = "ja">
<head>
<meta charset = "UFT-8">
<title>簡易掲示板</title>
</head>
<body>
    <h2>簡易掲示板</h2>
    <form action = "form.php" method = "post">
        <p>名前：<input type="text" name = "name"></p>
        <p>コメント：<br>
            <textarea name="comment" rows="4" cols="40"></textarea> </p>
        <p><input type ="submit" value="送信" ></p>
    </form>
    <?php //テキストファイルを読み込み、下に表示させる
    $posts = file("post.txt");
    foreach($posts as $post): //ループ
        $content = explode("<>",$post); //配列を"<>"でさらに分割
        echo $content[0]."名前：".$content[1]."　日付：".$content[3]."<br />".$content[2];
        echo "<br />";
    endforeach;
    ?>
</body>
