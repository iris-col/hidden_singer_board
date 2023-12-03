<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
    <link rel="stylesheet" type="text/css" href="/hidden_board/style.css" />
</head>
<body>
<?php

include $_SERVER['DOCUMENT_ROOT']."/hidden_board/db.php";

//각 변수에 write.php에서 input name값들을 저장한다
$username = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');
if($username && $title && $content){
    $sql = mq("insert into board(name,title,content,date) values('".$username."','".$title."','".$content."','".$date."')"); 
    echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='/hidden_board/index.php';</script>";
}else{
    echo "<script>
    alert('글쓰기에 실패했습니다.');
    history.back();</script>";
}
?>
</body>
</html>