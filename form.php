<?php
$name = $_POST['name'];
$comment = $_POST['comment'];
$contents = file("post.txt");
if($contents == NULL){
    $number = 0;
}else{
    $number = count($contents);
}

$number += 1;
$time = date("Y-m-d H:i");

file_put_contents("post.txt",$number."<>". $name."<>".$comment."<>".$time.PHP_EOL, FILE_APPEND);
?>
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
        <p><input type ="submit" value="投稿" ></p>
    </form>
    
    <?php //テキストファイルを読み込み、下に表示させる
    $posts = file("post.txt");
    foreach($posts as $post): //ループ
        $content = explode("<>",$post); //配列を"<>"でさらに分割
        echo $content[0]."名前：".$content[1]."　日時：".$content[3]."<br />".$content[2];
        echo "<br />";
    endforeach;
    ?>
    
</body>