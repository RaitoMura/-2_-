<?php
$name = $_POST['name'];
$comment = $_POST['comment'];
echo "送信完了";
$contents = file("post.txt");
if($contents == NULL){
    $number = 0;
}else{
    $number = count($contents);
}

$number += 1;
$time = date("Y-m-d");

file_put_contents("post.txt",$number."<>". $name."<>".$comment."<>".$time.PHP_EOL, FILE_APPEND);
?>